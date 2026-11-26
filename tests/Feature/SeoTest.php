<?php

test('public pages include canonical, hreflang, open graph, and json-ld schemas', function () {
    $this->get('/?utm_source=test')
        ->assertOk()
        ->assertSee('<meta name="robots" content="index, follow">', false)
        ->assertSee('<link rel="canonical" href="http://localhost">', false)
        ->assertSee('<link rel="alternate" hreflang="x-default" href="http://localhost">', false)
        ->assertSee('property="og:site_name" content="SCHMITZ"', false)
        ->assertSee('"@type":"Organization"', false)
        ->assertDontSee('"@type":"BreadcrumbList"', false);

    $this->get('/tr/contact?ref=campaign')
        ->assertOk()
        ->assertSee('<link rel="canonical" href="http://localhost/tr/contact">', false)
        ->assertSee('<link rel="alternate" hreflang="en" href="http://localhost/contact">', false)
        ->assertSee('<link rel="alternate" hreflang="tr" href="http://localhost/tr/contact">', false)
        ->assertSee('<link rel="alternate" hreflang="de" href="http://localhost/de/contact">', false)
        ->assertSee('property="og:locale" content="tr_TR"', false)
        ->assertSee('"@type":"Organization"', false)
        ->assertSee('"@type":"BreadcrumbList"', false);
});

test('sitemap.xml returns valid xml with all 18 localized urls', function () {
    $response = $this->get('/sitemap.xml')
        ->assertOk();

    expect($response->headers->get('Content-Type'))->toContain('application/xml');

    $content = $response->getContent();
    expect(substr_count($content, '<url>'))->toBe(18)
        ->and($content)->toContain('<loc>http://localhost</loc>')
        ->and($content)->toContain('<loc>http://localhost/tr/about</loc>')
        ->and($content)->toContain('<loc>http://localhost/de/contact</loc>')
        ->and($content)->toContain('hreflang="x-default"');
});

test('robots.txt disallows admin and private inquiries and declares sitemap', function () {
    $response = $this->get('/robots.txt')
        ->assertOk();

    expect($response->headers->get('Content-Type'))->toContain('text/plain');

    $content = $response->getContent();
    expect($content)
        ->toContain('User-agent: *')
        ->toContain('Disallow: /admin')
        ->toContain('Disallow: /storage/inquiries')
        ->toContain('Sitemap: http://localhost/sitemap.xml');
});
