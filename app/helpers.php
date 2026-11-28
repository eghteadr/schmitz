<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('current_locale_url')) {
    /**
     * Generate the URL for the current route/page in the specified target locale.
     *
     * @param string $targetLocale 'en' | 'tr' | 'de'
     * @return string
     */
    function current_locale_url(string $targetLocale): string
    {
        $supported = ['en', 'tr', 'de'];
        if (!in_array($targetLocale, $supported, true)) {
            $targetLocale = 'tr';
        }

        $route = request()->route();
        if ($route && $route->getName()) {
            $name = $route->getName();
            $baseName = preg_replace('/^(tr|en|locale)\./', '', $name);

            $params = request()->route()->parameters();
            unset($params['locale']);

            if ($targetLocale === 'tr') {
                if (Route::has('tr.' . $baseName)) {
                    $url = route('tr.' . $baseName, $params);
                } elseif (Route::has($baseName)) {
                    $url = route($baseName, $params);
                } else {
                    $url = url('/');
                }
            } else {
                if (Route::has('locale.' . $baseName)) {
                    $url = route('locale.' . $baseName, array_merge(['locale' => $targetLocale], $params));
                } else {
                    $url = url('/' . $targetLocale);
                }
            }

            $queryString = request()->getQueryString();
            return $queryString ? $url . '?' . $queryString : $url;
        }

        // Fallback using request path
        $path = request()->path();
        $segments = explode('/', trim($path, '/'));

        if (!empty($segments) && in_array($segments[0], ['tr', 'de', 'en'], true)) {
            array_shift($segments);
        }

        $remainingPath = implode('/', $segments);

        if ($targetLocale === 'tr') {
            $url = url('/' . $remainingPath);
        } else {
            $url = url('/' . $targetLocale . ($remainingPath !== '' ? '/' . $remainingPath : ''));
        }

        $queryString = request()->getQueryString();
        return $queryString ? $url . '?' . $queryString : $url;
    }
}

if (!function_exists('localized_route')) {
    /**
     * Generate a localized URL for a given named route.
     *
     * @param string $name
     * @param array $parameters
     * @param string|null $locale
     * @param bool $absolute
     * @return string
     */
    function localized_route(string $name, array $parameters = [], ?string $locale = null, bool $absolute = true): string
    {
        $locale = $locale ?? app()->getLocale();
        $baseName = preg_replace('/^(tr|en|locale)\./', '', $name);

        if ($locale === 'tr' || !in_array($locale, ['en', 'de'], true)) {
            if (Route::has('tr.' . $baseName)) {
                return route('tr.' . $baseName, $parameters, $absolute);
            }
            return route($baseName, $parameters, $absolute);
        }

        return route('locale.' . $baseName, array_merge(['locale' => $locale], $parameters), $absolute);
    }
}
