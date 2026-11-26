<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $pages = [
            ['name' => 'home', 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['name' => 'about', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['name' => 'services', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['name' => 'industries', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['name' => 'how-we-work', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['name' => 'contact', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ];

        $locales = ['en', 'tr', 'de'];
        $lastmod = now()->toAtomString();

        $xml = ['<?xml version="1.0" encoding="UTF-8"?>'];
        $xml[] = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">';

        foreach ($pages as $page) {
            $alternates = [];
            foreach ($locales as $loc) {
                $alternates[$loc] = localized_route($page['name'], [], $loc);
            }

            foreach ($locales as $loc) {
                $xml[] = '  <url>';
                $xml[] = '    <loc>' . e($alternates[$loc]) . '</loc>';
                foreach ($locales as $altLoc) {
                    $xml[] = '    <xhtml:link rel="alternate" hreflang="' . $altLoc . '" href="' . e($alternates[$altLoc]) . '" />';
                }
                $xml[] = '    <xhtml:link rel="alternate" hreflang="x-default" href="' . e($alternates['en']) . '" />';
                $xml[] = '    <lastmod>' . $lastmod . '</lastmod>';
                $xml[] = '    <changefreq>' . $page['changefreq'] . '</changefreq>';
                $xml[] = '    <priority>' . $page['priority'] . '</priority>';
                $xml[] = '  </url>';
            }
        }

        $xml[] = '</urlset>';

        return response(implode("\n", $xml), 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
        ]);
    }

    public function robots(): Response
    {
        $lines = [
            'User-agent: *',
            'Allow: /',
            'Disallow: /admin',
            'Disallow: /storage/inquiries',
            '',
            'Sitemap: ' . url('/sitemap.xml'),
        ];

        return response(implode("\n", $lines) . "\n", 200, [
            'Content-Type' => 'text/plain; charset=utf-8',
        ]);
    }
}
