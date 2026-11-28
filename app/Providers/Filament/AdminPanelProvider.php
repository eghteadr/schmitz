<?php

namespace App\Providers\Filament;

use App\Filament\Widgets\StatsOverview;
use App\Http\Middleware\SetFilamentPersianLocale;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\HtmlString;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('SCHMITZ | پنل مدیریت')
            ->favicon(asset('images/favicon-32x32.png'))
            ->colors([
                'primary' => [
                    50 => '#f2f5f8',
                    100 => '#e2e9f0',
                    200 => '#c7d5e2',
                    300 => '#9db6cd',
                    400 => '#6e91b1',
                    500 => '#4b7194',
                    600 => '#13293F',
                    700 => '#102235',
                    800 => '#0d1c2b',
                    900 => '#0B1826',
                    950 => '#071019',
                ],
                'warning' => [
                    50 => '#fbf8f1',
                    100 => '#f5eedc',
                    200 => '#eadbb7',
                    300 => '#ddc188',
                    400 => '#cca45c',
                    500 => '#B89758',
                    600 => '#9e7d43',
                    700 => '#7f6235',
                    800 => '#68502f',
                    900 => '#57432a',
                    950 => '#322415',
                ],
                'gray' => Color::Zinc,
            ])
            ->font('Vazirmatn')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                StatsOverview::class,
                Widgets\AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                SetFilamentPersianLocale::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

    public function boot(): void
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_END,
            fn (): HtmlString => new HtmlString(<<<'HTML'
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
                <style>
                    :root {
                        --font-family: 'Vazirmatn', -apple-system, BlinkMacSystemFont, sans-serif;
                    }
                    html, body {
                        font-family: 'Vazirmatn', -apple-system, BlinkMacSystemFont, sans-serif !important;
                    }
                    body.fi-body {
                        background-color: #F5F5F7 !important;
                    }
                    .fi-sidebar {
                        background-color: #0B1826 !important;
                        border-inline-end: 1px solid rgba(255, 255, 255, 0.06) !important;
                    }
                    .fi-sidebar-header {
                        background-color: #0B1826 !important;
                        border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
                    }
                    .fi-sidebar-header .fi-logo {
                        color: #FFFFFF !important;
                        letter-spacing: 0.02em;
                    }
                    .fi-sidebar-item-label,
                    .fi-sidebar-group-label {
                        color: rgba(255, 255, 255, 0.82) !important;
                    }
                    .fi-sidebar-item-active > a {
                        background-color: rgba(184, 151, 88, 0.16) !important;
                        border-radius: 0.85rem !important;
                    }
                    .fi-sidebar-item-active .fi-sidebar-item-label,
                    .fi-sidebar-item-active .fi-sidebar-item-icon {
                        color: #D8BF8A !important;
                    }
                    .fi-section, .fi-wi-stats-overview-stat, .fi-ta-ctn {
                        border-radius: 1.25rem !important;
                        border-color: rgba(0, 0, 0, 0.06) !important;
                        box-shadow: 0 4px 20px rgba(11, 24, 38, 0.04) !important;
                    }
                    .fi-topbar nav {
                        background-color: rgba(255, 255, 255, 0.88) !important;
                        backdrop-filter: blur(14px);
                    }
                </style>
            HTML),
        );
    }
}
