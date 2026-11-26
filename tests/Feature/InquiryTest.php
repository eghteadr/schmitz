<?php

use App\Filament\Widgets\StatsOverview;
use App\Mail\InquirySubmittedMail;
use App\Models\CompanySetting;
use App\Models\Inquiry;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

uses(RefreshDatabase::class);

test('rfq inquiry can be submitted with attachment and dispatches email', function () {
    Storage::fake('public');
    Mail::fake();

    CompanySetting::create(CompanySetting::defaults());

    $file = UploadedFile::fake()->create('specs.pdf', 200, 'application/pdf');

    $response = $this->postJson(route('inquiries.store'), [
        'full_name' => 'Ahmet Yilmaz',
        'company_name' => 'Anatolia Textile AS',
        'country' => 'Türkiye',
        'email' => 'ahmet@anatoliatextile.com',
        'phone' => '+90 532 000 0000',
        'category' => 'Textile Raw Materials',
        'quantity' => '25 Metric Tons',
        'destination' => 'CIF Hamburg',
        'specifications' => 'Combed cotton yarn Ne 30/1, 100% ring spun.',
        'message' => 'Please share lead time.',
        'locale' => 'tr',
        'attachment' => $file,
    ]);

    $response->assertCreated()
        ->assertJsonPath('ok', true);

    $referenceCode = $response->json('reference_code');
    expect($referenceCode)->toMatch('/^SCH-\d{4}-\d{4}$/');

    $inquiry = Inquiry::where('reference_code', $referenceCode)->first();
    expect($inquiry)->not->toBeNull()
        ->and($inquiry->status)->toBe('new')
        ->and($inquiry->locale)->toBe('tr')
        ->and($inquiry->attachment_path)->not->toBeNull();

    Storage::disk('public')->assertExists($inquiry->attachment_path);

    Mail::assertSent(InquirySubmittedMail::class, function (InquirySubmittedMail $mail) use ($inquiry) {
        return $mail->inquiry->is($inquiry);
    });
});

test('filament admin panel renders in persian rtl and allows authenticated access', function () {
    $this->get('/admin/login')
        ->assertOk()
        ->assertSee('dir="rtl"', false)
        ->assertSee('SCHMITZ | پنل مدیریت');

    $admin = User::factory()->create([
        'email' => 'admin@schmitzglobal.com',
    ]);

    $this->actingAs($admin)
        ->get('/admin')
        ->assertOk()
        ->assertSee('داشبورد');

    Livewire::actingAs($admin)
        ->test(StatsOverview::class)
        ->assertSee('کل استعلام‌های دریافتی')
        ->assertSee('استعلام‌های جدید (منتظر بررسی)')
        ->assertSee('استعلام‌های قیمت‌دهی شده');

    $this->actingAs($admin)
        ->get('/admin/inquiries')
        ->assertOk()
        ->assertSee('استعلام‌های تجاری (RFQ)');

    $this->actingAs($admin)
        ->get('/admin/manage-company-settings')
        ->assertOk()
        ->assertSee('تنظیمات اطلاعات شرکت و تماس');
});
