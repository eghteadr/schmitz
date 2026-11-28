@php
    $currentLocale = app()->getLocale();
    $seoPageKey = $pageKey ?? 'home';
    $seoTitle = $title ?? __('home.meta.title');
    $seoDescription = $description ?? __('home.meta.description');
    $canonicalUrl = strtok(url()->current(), '?');
    $seoOgImage = $ogImage ?? asset('images/Sunset Container Ship at Harbor.png');

    $ogLocaleMap = [
        'en' => 'en_US',
        'tr' => 'tr_TR',
        'de' => 'de_DE',
    ];
    $ogLocale = $ogLocaleMap[$currentLocale] ?? 'en_US';

    $hreflangEn = strtok(current_locale_url('en'), '?');
    $hreflangTr = strtok(current_locale_url('tr'), '?');
    $hreflangDe = strtok(current_locale_url('de'), '?');

    $settings = $companySettings ?? \App\Models\CompanySetting::current();

    $contactPoints = [
        [
            '@type' => 'ContactPoint',
            'contactType' => 'customer service',
            'email' => $settings->email_info ?: 'info@schmitzglobal.com',
            'availableLanguage' => ['English', 'Turkish', 'German'],
        ],
        [
            '@type' => 'ContactPoint',
            'contactType' => 'sales',
            'email' => $settings->email_trade ?: 'trade@schmitzglobal.com',
            'availableLanguage' => ['English', 'Turkish', 'German'],
        ],
    ];

    if (! empty($settings->phone_number)) {
        $contactPoints[0]['telephone'] = $settings->phone_number;
        $contactPoints[1]['telephone'] = $settings->phone_number;
    }

    $organizationSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'SCHMITZ',
        'legalName' => $settings->legal_name ?: 'SCHMITZ MAKİNA SAN. İÇ VE DIŞ TİC. LTD. ŞTİ.',
        'url' => url('/'),
        'logo' => asset('images/logo.png'),
        'email' => $settings->email_info ?: 'info@schmitzglobal.com',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $settings->registered_address ?: 'Cennetoğlu Mah. Yeşillik Cad. No:228-230/514 Karabağlar, 35110 Gaziemir / IZMIR',
            'addressLocality' => 'Gaziemir, Izmir',
            'postalCode' => '35110',
            'addressCountry' => 'TR',
        ],
        'contactPoint' => $contactPoints,
    ];

    if (! empty($settings->linkedin_url)) {
        $organizationSchema['sameAs'] = [$settings->linkedin_url];
    }

    $breadcrumbSchema = null;
    if ($seoPageKey !== 'home') {
        $breadcrumbSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => __('messages.nav.home'),
                    'item' => localized_route('home'),
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => $breadcrumbTitle ?? $seoTitle,
                    'item' => $canonicalUrl,
                ],
            ],
        ];
    }
@endphp
<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ $canonicalUrl }}">

<!-- International SEO & Localization Alternate Tags -->
<link rel="alternate" hreflang="en" href="{{ $hreflangEn }}">
<link rel="alternate" hreflang="tr" href="{{ $hreflangTr }}">
<link rel="alternate" hreflang="de" href="{{ $hreflangDe }}">
<link rel="alternate" hreflang="x-default" href="{{ $hreflangTr }}">

<!-- Open Graph -->
<meta property="og:site_name" content="SCHMITZ">
<meta property="og:type" content="website">
<meta property="og:locale" content="{{ $ogLocale }}">
@foreach ($ogLocaleMap as $locCode => $ogLoc)
    @if ($locCode !== $currentLocale)
        <meta property="og:locale:alternate" content="{{ $ogLoc }}">
    @endif
@endforeach
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:image" content="{{ $seoOgImage }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $seoOgImage }}">

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">{!! json_encode($organizationSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
@if ($breadcrumbSchema)
<script type="application/ld+json">{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
@endif
