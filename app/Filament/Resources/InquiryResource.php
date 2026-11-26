<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InquiryResource\Pages;
use App\Models\Inquiry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class InquiryResource extends Resource
{
    protected static ?string $model = Inquiry::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'استعلام‌های تجاری (RFQ)';

    protected static ?string $modelLabel = 'استعلام تجاری';

    protected static ?string $pluralModelLabel = 'استعلام‌های تجاری';

    protected static ?int $navigationSort = 1;

    public static function getNavigationBadge(): ?string
    {
        $count = Inquiry::query()->where('status', 'new')->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'warning';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('مدیریت وضعیت و یادداشت‌های داخلی')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('reference_code')
                            ->label('کد پیگیری')
                            ->disabled(),

                        Forms\Components\Select::make('status')
                            ->label('وضعیت استعلام')
                            ->options(Inquiry::STATUSES)
                            ->required()
                            ->native(false),

                        Forms\Components\Textarea::make('admin_notes')
                            ->label('یادداشت‌های داخلی مدیر')
                            ->placeholder('توضیحات بررسی فنی، تأمین‌کننده پیشنهادی، قیمت تمام‌شده یا تاریخ پیگیری...')
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('اطلاعات متقاضی و شرکت')
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('full_name')
                            ->label('نام و نام خانوادگی')
                            ->disabled(),

                        Forms\Components\TextInput::make('company_name')
                            ->label('نام شرکت')
                            ->disabled(),

                        Forms\Components\TextInput::make('country')
                            ->label('کشور')
                            ->disabled(),

                        Forms\Components\TextInput::make('email')
                            ->label('ایمیل تجاری')
                            ->disabled(),

                        Forms\Components\TextInput::make('phone')
                            ->label('تلفن / واتساپ')
                            ->disabled(),

                        Forms\Components\TextInput::make('locale')
                            ->label('زبان فرم')
                            ->formatStateUsing(fn (?string $state): string => Inquiry::LOCALES[$state] ?? strtoupper((string) $state))
                            ->disabled(),
                    ]),

                Forms\Components\Section::make('جزئیات فنی و لجستیکی درخواست')
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('category')
                            ->label('دسته‌بندی')
                            ->formatStateUsing(fn (?string $state): string => Inquiry::CATEGORIES[$state] ?? (string) $state)
                            ->disabled(),

                        Forms\Components\TextInput::make('quantity')
                            ->label('مقدار / حجم')
                            ->disabled(),

                        Forms\Components\TextInput::make('destination')
                            ->label('مقصد / اینکوترمز')
                            ->disabled(),

                        Forms\Components\Textarea::make('specifications')
                            ->label('مشخصات فنی درخواستی')
                            ->rows(4)
                            ->disabled()
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('message')
                            ->label('پیام و توضیحات تکمیلی')
                            ->rows(3)
                            ->disabled()
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('خلاصه استعلام تجاری')
                    ->columns(4)
                    ->schema([
                        Infolists\Components\TextEntry::make('reference_code')
                            ->label('کد پیگیری')
                            ->badge()
                            ->color('primary')
                            ->copyable(),

                        Infolists\Components\TextEntry::make('status')
                            ->label('وضعیت')
                            ->badge()
                            ->formatStateUsing(fn (string $state): string => Inquiry::STATUSES[$state] ?? $state)
                            ->color(fn (string $state): string => match ($state) {
                                'new' => 'warning',
                                'in_review' => 'info',
                                'quoted' => 'success',
                                'closed' => 'gray',
                                default => 'gray',
                            }),

                        Infolists\Components\TextEntry::make('locale')
                            ->label('زبان فرم')
                            ->badge()
                            ->formatStateUsing(fn (?string $state): string => strtoupper((string) $state)),

                        Infolists\Components\TextEntry::make('created_at')
                            ->label('تاریخ ثبت')
                            ->dateTime('Y/m/d H:i'),
                    ]),

                Infolists\Components\Section::make('اطلاعات تماس و شرکت')
                    ->columns(3)
                    ->schema([
                        Infolists\Components\TextEntry::make('full_name')
                            ->label('نام متقاضی'),
                        Infolists\Components\TextEntry::make('company_name')
                            ->label('نام شرکت'),
                        Infolists\Components\TextEntry::make('country')
                            ->label('کشور'),
                        Infolists\Components\TextEntry::make('email')
                            ->label('ایمیل')
                            ->copyable(),
                        Infolists\Components\TextEntry::make('phone')
                            ->label('تلفن / واتساپ')
                            ->placeholder('ثبت نشده'),
                    ]),

                Infolists\Components\Section::make('مشخصات فنی و بازرگانی')
                    ->columns(3)
                    ->schema([
                        Infolists\Components\TextEntry::make('category')
                            ->label('دسته‌بندی')
                            ->formatStateUsing(fn (string $state): string => Inquiry::CATEGORIES[$state] ?? $state),
                        Infolists\Components\TextEntry::make('quantity')
                            ->label('مقدار'),
                        Infolists\Components\TextEntry::make('destination')
                            ->label('مقصد'),
                        Infolists\Components\TextEntry::make('specifications')
                            ->label('مشخصات فنی کامل')
                            ->columnSpanFull()
                            ->prose(),
                        Infolists\Components\TextEntry::make('message')
                            ->label('توضیحات تکمیلی مشتری')
                            ->placeholder('ندارد')
                            ->columnSpanFull(),
                        Infolists\Components\TextEntry::make('admin_notes')
                            ->label('یادداشت‌های داخلی مدیر')
                            ->placeholder('یادداشتی ثبت نشده است')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('reference_code')
                    ->label('کد پیگیری')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->badge()
                    ->color('primary'),

                Tables\Columns\TextColumn::make('full_name')
                    ->label('نام و شرکت')
                    ->description(fn (Inquiry $record): string => $record->company_name)
                    ->searchable(['full_name', 'company_name', 'email'])
                    ->sortable(),

                Tables\Columns\TextColumn::make('country')
                    ->label('کشور')
                    ->sortable(),

                Tables\Columns\TextColumn::make('category')
                    ->label('دسته‌بندی')
                    ->formatStateUsing(fn (string $state): string => Inquiry::CATEGORIES[$state] ?? $state)
                    ->wrap(),

                Tables\Columns\TextColumn::make('quantity')
                    ->label('مقدار'),

                Tables\Columns\TextColumn::make('destination')
                    ->label('مقصد'),

                Tables\Columns\TextColumn::make('locale')
                    ->label('زبان فرم')
                    ->badge()
                    ->formatStateUsing(fn (?string $state): string => strtoupper((string) $state))
                    ->color('gray'),

                Tables\Columns\TextColumn::make('status')
                    ->label('وضعیت')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => Inquiry::STATUSES[$state] ?? $state)
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'warning',
                        'in_review' => 'info',
                        'quoted' => 'success',
                        'closed' => 'gray',
                        default => 'gray',
                    }),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('تاریخ ثبت')
                    ->dateTime('Y/m/d H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('وضعیت')
                    ->options(Inquiry::STATUSES),

                Tables\Filters\SelectFilter::make('category')
                    ->label('دسته‌بندی')
                    ->options(Inquiry::CATEGORIES),
            ])
            ->actions([
                Tables\Actions\Action::make('download_attachment')
                    ->label('دانلود فایل')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('warning')
                    ->visible(fn (Inquiry $record): bool => filled($record->attachment_path) && Storage::disk('public')->exists($record->attachment_path))
                    ->action(fn (Inquiry $record) => Storage::disk('public')->download($record->attachment_path)),
                Tables\Actions\ViewAction::make()->label('مشاهده'),
                Tables\Actions\EditAction::make()->label('بررسی و ویرایش'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('حذف موارد انتخاب‌شده'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInquiries::route('/'),
            'view' => Pages\ViewInquiry::route('/{record}'),
            'edit' => Pages\EditInquiry::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
