<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    public const CATEGORIES = [
        'Textile Raw Materials' => 'مواد اولیه نساجی',
        'Industrial Machinery & Equipment' => 'ماشین‌آلات و تجهیزات صنعتی',
        'International Sourcing' => 'تأمین بین‌المللی کالا',
        'Logistics Coordination' => 'هماهنگی لجستیک و حمل‌ونقل',
        'General Business Inquiry' => 'استعلام بازرگانی عمومی',
    ];

    public const STATUSES = [
        'new' => 'جدید',
        'in_review' => 'در حال بررسی',
        'quoted' => 'ارسال پیش‌فاکتور',
        'closed' => 'بسته‌شده',
    ];

    public const LOCALES = [
        'en' => 'انگلیسی (EN)',
        'tr' => 'ترکی (TR)',
        'de' => 'آلمانی (DE)',
    ];

    protected $fillable = [
        'reference_code',
        'full_name',
        'company_name',
        'country',
        'email',
        'phone',
        'category',
        'quantity',
        'destination',
        'specifications',
        'message',
        'attachment_path',
        'locale',
        'status',
        'admin_notes',
    ];

    protected static function booted(): void
    {
        static::creating(function (Inquiry $inquiry): void {
            if (empty($inquiry->reference_code)) {
                $inquiry->reference_code = static::generateReferenceCode();
            }
            if (empty($inquiry->status)) {
                $inquiry->status = 'new';
            }
            if (empty($inquiry->locale)) {
                $inquiry->locale = 'en';
            }
        });
    }

    public static function generateReferenceCode(): string
    {
        $year = now()->format('Y');

        do {
            $suffix = str_pad((string) random_int(1000, 9999), 4, '0', STR_PAD_LEFT);
            $code = "SCH-{$year}-{$suffix}";
        } while (static::where('reference_code', $code)->exists());

        return $code;
    }
}
