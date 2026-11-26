<?php

namespace App\Filament\Widgets;

use App\Models\Inquiry;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $total = Inquiry::query()->count();
        $newCount = Inquiry::query()->where('status', 'new')->count();
        $quotedCount = Inquiry::query()->where('status', 'quoted')->count();

        return [
            Stat::make('کل استعلام‌های دریافتی', number_format($total))
                ->description('مجموع درخواست‌های ثبت‌شده در سیستم')
                ->descriptionIcon('heroicon-m-inbox-stack')
                ->color('primary'),

            Stat::make('استعلام‌های جدید (منتظر بررسی)', number_format($newCount))
                ->description('نیازمند بررسی اولیه و ارجاع بازرگانی')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),

            Stat::make('استعلام‌های قیمت‌دهی شده', number_format($quotedCount))
                ->description('پیش‌فاکتور یا پاسخ فنی ارسال شده')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),
        ];
    }
}
