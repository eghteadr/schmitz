<?php

namespace App\Filament\Resources\InquiryResource\Pages;

use App\Filament\Resources\InquiryResource;
use App\Models\Inquiry;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Storage;

class ViewInquiry extends ViewRecord
{
    protected static string $resource = InquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('download_attachment')
                ->label('دانلود فایل پیوست فنی')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('warning')
                ->visible(fn (Inquiry $record): bool => filled($record->attachment_path) && Storage::disk('public')->exists($record->attachment_path))
                ->action(fn (Inquiry $record) => Storage::disk('public')->download($record->attachment_path)),
            Actions\EditAction::make()->label('ویرایش وضعیت و یادداشت'),
        ];
    }
}
