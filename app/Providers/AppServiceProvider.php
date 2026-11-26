<?php

namespace App\Providers;

use App\Models\CompanySetting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (file_exists(app_path('helpers.php'))) {
            require_once app_path('helpers.php');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share corporate settings with all public/email views
        View::composer('*', function ($view): void {
            $view->with('companySettings', CompanySetting::current());
        });

        // Allow named routes ('home', 'about', 'services', 'industries', 'contact')
        // to automatically resolve based on the active locale.
        app('url')->resolveMissingNamedRoutesUsing(function ($name, $parameters, $absolute) {
            if (Route::has('en.' . $name)) {
                $locale = app()->getLocale();
                if ($locale === 'en' || !in_array($locale, ['tr', 'de'], true)) {
                    return route('en.' . $name, $parameters, $absolute);
                }
                return route('locale.' . $name, array_merge(['locale' => $locale], $parameters), $absolute);
            }
            return null;
        });
    }
}
