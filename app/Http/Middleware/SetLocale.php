<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * The supported locales.
     *
     * @var array<string>
     */
    protected array $supportedLocales = ['en', 'tr', 'de'];

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale');

        if ($locale) {
            // If someone accesses /tr or /tr/..., redirect to clean non-prefixed Turkish route (301)
            if ($locale === 'tr') {
                $segments = $request->segments();
                array_shift($segments); // Remove 'tr'
                $cleanUrl = '/' . implode('/', $segments);
                $query = $request->getQueryString();
                if ($query) {
                    $cleanUrl .= '?' . $query;
                }
                return redirect($cleanUrl, 301);
            }

            // Validate against supported locales
            if (!in_array($locale, $this->supportedLocales, true)) {
                abort(404);
            }

            App::setLocale($locale);
            URL::defaults(['locale' => $locale]);
        } else {
            // Default Turkish locale
            App::setLocale('tr');
            URL::defaults(['locale' => 'tr']);
        }

        return $next($request);
    }
}
