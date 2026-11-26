<?php

namespace App\Filament\Pages;

use App\Models\CompanySetting;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class ManageCompanySettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationLabel = 'تنظیمات شرکت و تماس';

    protected static ?string $title = 'تنظیمات اطلاعات شرکت و تماس';

    protected static ?string $navigationGroup = 'پیکربندی سیستم';

    protected static ?int $navigationSort = 20;

    protected static string $view = 'filament.pages.manage-company-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = CompanySetting::query()->first();

        $this->form->fill(
            $settings ? $settings->toArray() : CompanySetting::defaults()
        );
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('هویت حقوقی و ثبتی شرکت')
                    ->description('این اطلاعات به‌صورت خودکار در صفحه تماس و فوتر وب‌سایت نمایش داده می‌شوند.')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('legal_name')
                            ->label('نام قانونی شرکت')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('country')
                            ->label('کشور محل ثبت')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('mersis_number')
                            ->label('شماره ثبت تجاری / MERSİS')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Textarea::make('registered_address')
                            ->label('نشانی ثبت‌شده دفتر مرکزی')
                            ->rows(2)
                            ->required()
                            ->maxLength(500)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('نشانی‌های ایمیل دپارتمان‌ها و اعلان‌های RFQ')
                    ->description('ایمیل‌های سازمانی جهت نمایش در میز ارتباطی و دریافت اعلان استعلام‌های جدید.')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('rfq_notification_email')
                            ->label('ایمیل دریافت اعلان استعلام‌های جدید (RFQ)')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('email_info')
                            ->label('ایمیل عمومی و رسمی (Info)')
                            ->email()
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('email_trade')
                            ->label('ایمیل تجارت بین‌الملل (Trade)')
                            ->email()
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('email_sourcing')
                            ->label('ایمیل تأمین و تدارکات (Sourcing)')
                            ->email()
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('email_logistics')
                            ->label('ایمیل لجستیک و حمل‌ونقل (Logistics)')
                            ->email()
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('email_accounts')
                            ->label('ایمیل اسناد تجاری و مالی (Accounts)')
                            ->email()
                            ->required()
                            ->maxLength(255),
                    ]),

                Forms\Components\Section::make('شماره تماس و شبکه‌های اجتماعی')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('phone_number')
                            ->label('شماره تماس مستقیم / واتساپ')
                            ->tel()
                            ->maxLength(100)
                            ->placeholder('+90 ...'),

                        Forms\Components\TextInput::make('linkedin_url')
                            ->label('نشانی صفحه رسمی LinkedIn')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://www.linkedin.com/company/...'),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $state = $this->form->getState();

        $settings = CompanySetting::query()->first();

        if ($settings) {
            $settings->update($state);
        } else {
            CompanySetting::create($state);
        }

        Notification::make()
            ->title('تنظیمات شرکت با موفقیت ذخیره شد.')
            ->body('تغییرات بلافاصله در وب‌سایت اعمال گردید.')
            ->success()
            ->send();
    }
}
