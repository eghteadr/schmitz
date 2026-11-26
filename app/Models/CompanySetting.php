<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Throwable;

class CompanySetting extends Model
{
    public const CACHE_KEY = 'schmitz.company_settings.current';

    protected $fillable = [
        'legal_name',
        'country',
        'registered_address',
        'mersis_number',
        'email_info',
        'email_trade',
        'email_sourcing',
        'email_logistics',
        'email_accounts',
        'phone_number',
        'linkedin_url',
        'rfq_notification_email',
    ];

    public static function defaults(): array
    {
        return [
            'legal_name' => 'SCHMITZ MAKİNA SAN. İÇ VE DIŞ TİC. LTD. ŞTİ.',
            'country' => 'Republic of Türkiye',
            'registered_address' => '[Insert verified registered address]',
            'mersis_number' => '[Insert verified information]',
            'email_info' => 'info@schmitzglobal.com',
            'email_trade' => 'trade@schmitzglobal.com',
            'email_sourcing' => 'sourcing@schmitzglobal.com',
            'email_logistics' => 'logistics@schmitzglobal.com',
            'email_accounts' => 'accounts@schmitzglobal.com',
            'phone_number' => null,
            'linkedin_url' => null,
            'rfq_notification_email' => 'trade@schmitzglobal.com',
        ];
    }

    protected static function booted(): void
    {
        static::saved(fn () => Cache::forget(self::CACHE_KEY));
        static::deleted(fn () => Cache::forget(self::CACHE_KEY));
    }

    public static function current(): self
    {
        try {
            if (! Schema::hasTable('company_settings')) {
                return new self(self::defaults());
            }

            return Cache::rememberForever(self::CACHE_KEY, function (): self {
                return static::query()->first() ?? new static(self::defaults());
            });
        } catch (Throwable) {
            return new self(self::defaults());
        }
    }
}
