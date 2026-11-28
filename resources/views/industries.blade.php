<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-head', [
        'pageKey' => 'industries',
        'title' => __('industries.meta.title'),
        'description' => __('industries.meta.description'),
        'breadcrumbTitle' => __('messages.nav.industries'),
    ])
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Page Styles -->
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body class="selection:bg-schmitz-carbon selection:text-white overflow-x-hidden bg-white text-schmitz-appleText">

    <!-- APPLE-STYLE FROSTED STICKY NAVIGATION -->
    @include('partials.header')

    <!-- ========================================================================= -->
    <!-- SECTION 1: ASYMMETRIC EDITORIAL HERO (hero-ambient)                       -->
    <!-- ========================================================================= -->
    <section class="hero-ambient pt-10 pb-20 sm:pt-14 lg:pt-16 sm:pb-28 border-b border-black/[0.04]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 xl:gap-16 items-center">
                
                <!-- Left Editorial Column (7 Cols) -->
                <div class="lg:col-span-7 text-left">
                    
                    <!-- Breadcrumb Pill -->
                    <div class="hero-animate-1 inline-flex items-center space-x-2.5 px-4 py-1.5 rounded-full bg-[#F5F5F7]/95 border border-black/[0.06] mb-6">
                        <a href="{{ route('home') }}" class="text-[11px] font-medium tracking-[0.16em] text-[#6E6E73] hover:text-[#18181B] transition-colors uppercase">{{ __('messages.nav.home') }}</a>
                        <span class="text-[10px] text-[#B89758] font-bold">/</span>
                        <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#18181B]">{{ __('messages.nav.industries') }}</span>
                    </div>

                    <!-- Apple Display Headline -->
                    <div class="hero-animate-2 mb-6">
                        <span class="text-xs font-mono font-bold tracking-[0.2em] text-[#B89758] block mb-2">{{ __('industries.hero.badge') }}</span>
                        <h1 class="apple-display text-4xl sm:text-5xl lg:text-[58px] xl:text-[64px] font-bold text-[#18181B] leading-[1.06]">
                            {{ __('industries.hero.title_line1') }}<br>
                            <span class="text-[#18181B]/80">{{ __('industries.hero.title_line2') }}</span>
                        </h1>
                    </div>

                    <!-- Sourcing Scope Intro -->
                    <div class="hero-animate-3 space-y-4 max-w-2xl mb-9 text-[#6E6E73] text-base sm:text-lg leading-relaxed font-normal">
                        <p>
                            {!! __('industries.hero.intro_p1', ['company' => '<strong class="font-semibold text-[#18181B]">' . __('industries.hero.company_name') . '</strong>']) !!}
                        </p>
                        <p class="text-sm sm:text-base text-[#6E6E73]/90">
                            {!! __('industries.hero.intro_p2', ['incoterms' => '<strong class="text-[#18181B]">' . __('industries.hero.incoterms') . '</strong>']) !!}
                        </p>
                    </div>

                    <!-- Sleek Apple-Style Pill CTAs -->
                    <div class="hero-animate-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 sm:gap-4 mb-11">
                        <button onclick="openQuoteModal('General Business Inquiry')" class="group inline-flex items-center justify-center px-8 py-4 bg-schmitz-red hover:bg-schmitz-redHover text-white text-sm font-medium rounded-full transition-all duration-300 shadow-sm hover:shadow-xl active:scale-[0.98] cursor-pointer">
                            <span>{{ __('industries.hero.cta_spec') }}</span>
                            <span class="ml-2 text-white/90 transition-transform duration-300 group-hover:translate-x-1">→</span>
                        </button>
                        <a href="#product-catalog" class="group inline-flex items-center justify-center px-8 py-4 bg-[#F5F5F7] hover:bg-[#E8E8ED] text-[#18181B] text-sm font-medium rounded-full transition-all duration-300 active:scale-[0.98]">
                            <span>{{ __('industries.hero.cta_portfolio') }}</span>
                            <span class="ml-2 text-[#B89758] transition-transform duration-300 group-hover:translate-y-0.5">↓</span>
                        </a>
                    </div>

                    <!-- Horizontal 4-Point Benchmark Strip -->
                    <div class="hero-animate-5 pt-7 border-t border-black/[0.07] grid grid-cols-2 sm:grid-cols-4 gap-5 text-xs">
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('industries.hero.bench1_label') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('industries.hero.bench1_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('industries.hero.bench1_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('industries.hero.bench2_label') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('industries.hero.bench2_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('industries.hero.bench2_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('industries.hero.bench3_label') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('industries.hero.bench3_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('industries.hero.bench3_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('industries.hero.bench4_label') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('industries.hero.bench4_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('industries.hero.bench4_sub') }}</span>
                        </div>
                    </div>

                </div>

                <!-- Right Bento Summary Card: 3 Core Groups Overview (5 Cols) -->
                <div class="lg:col-span-5 hero-animate-3">
                    <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#18181B] to-[#09090B] text-white rounded-[30px] p-7 sm:p-9 shadow-[0_32px_64px_-16px_rgba(24,24,27,0.28)] relative">
                        <!-- Subtle Gold Glow Orbs -->
                        <div class="absolute -top-24 -right-24 w-60 h-60 rounded-full bg-[#B89758]/20 blur-3xl pointer-events-none"></div>
                        <div class="absolute -bottom-20 -left-20 w-52 h-52 rounded-full bg-white/[0.04] blur-2xl pointer-events-none"></div>

                        <div class="relative z-10">
                            <!-- Header with Status Pill -->
                            <div class="flex items-center justify-between pb-5 mb-6 border-b border-white/10">
                                <div>
                                    <span class="text-[10px] uppercase tracking-[0.22em] text-[#D8BF8A] font-semibold block">{{ __('industries.hero.coverage_tag') }}</span>
                                    <span class="text-base font-semibold text-white mt-0.5 block">{{ __('industries.hero.coverage_title') }}</span>
                                </div>
                                <span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-white/10 border border-white/10 text-[11px] font-medium text-white shadow-2xs">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span>{{ __('industries.hero.coverage_status') }}</span>
                                </span>
                            </div>

                            <!-- 3 Core Groups Quick Cards -->
                            <div class="space-y-3.5 mb-2">
                                <a href="#group-textile" class="block p-4 rounded-2xl bg-white/[0.05] hover:bg-white/[0.1] border border-white/10 transition-colors">
                                    <span class="text-[10px] font-mono text-[#D8BF8A] uppercase font-bold block mb-1">{{ __('industries.textiles.group_tag') }}</span>
                                    <h4 class="text-sm font-semibold text-white">{{ __('industries.hero.group1_pill') }}</h4>
                                    <p class="text-xs text-white/70 mt-1">{{ __('industries.hero.group1_desc') }}</p>
                                </a>

                                <a href="#group-machinery" class="block p-4 rounded-2xl bg-white/[0.05] hover:bg-white/[0.1] border border-white/10 transition-colors">
                                    <span class="text-[10px] font-mono text-[#D8BF8A] uppercase font-bold block mb-1">{{ __('industries.machinery.group_tag') }}</span>
                                    <h4 class="text-sm font-semibold text-white">{{ __('industries.hero.group2_pill') }}</h4>
                                    <p class="text-xs text-white/70 mt-1">{{ __('industries.hero.group2_desc') }}</p>
                                </a>

                                <a href="#group-materials" class="block p-4 rounded-2xl bg-white/[0.05] hover:bg-white/[0.1] border border-white/10 transition-colors">
                                    <span class="text-[10px] font-mono text-[#D8BF8A] uppercase font-bold block mb-1">{{ __('industries.materials.group_tag') }}</span>
                                    <h4 class="text-sm font-semibold text-white">{{ __('industries.hero.group3_pill') }}</h4>
                                    <p class="text-xs text-white/70 mt-1">{{ __('industries.hero.group3_desc') }}</p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 2: INTERACTIVE PRODUCT EXPLORER (#product-catalog)                -->
    <!-- ========================================================================= -->
    <section id="product-catalog" class="py-20 sm:py-28 bg-white scroll-mt-24">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <!-- Section Header & Filter Bar -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 sm:mb-16">
                <div>
                    <!-- Eyebrow Pill -->
                    <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-[#F5F5F7] border border-black/[0.06] mb-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                        <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#18181B]">
                            {{ __('industries.catalog.eyebrow') }}
                        </span>
                    </div>
                    <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-[#18181B] leading-tight">
                        {{ __('industries.catalog.title') }}
                    </h2>
                    <p class="text-[#6E6E73] text-sm sm:text-base mt-2 max-w-xl">
                        {{ __('industries.catalog.desc') }}
                    </p>
                </div>

                <!-- Apple-Style Segmented Filter Pill Bar -->
                <div class="flex-shrink-0">
                    <div id="catalog-filter-bar" class="inline-flex p-1.5 rounded-full bg-[#F5F5F7] border border-black/[0.06] shadow-inner overflow-x-auto max-w-full">
                        <button type="button" 
                                onclick="filterProducts('all')" 
                                data-filter="all" 
                                class="catalog-filter-btn px-4 sm:px-5 py-2 text-xs font-semibold rounded-full transition-all duration-300 bg-[#18181B] text-white shadow-sm cursor-pointer">
                            {{ __('industries.catalog.filter_all') }}
                        </button>
                        <button type="button" 
                                onclick="filterProducts('textile')" 
                                data-filter="textile" 
                                class="catalog-filter-btn px-4 sm:px-5 py-2 text-xs font-medium rounded-full transition-all duration-300 text-[#6E6E73] hover:text-[#18181B] cursor-pointer">
                            {{ __('industries.catalog.filter_textile') }}
                        </button>
                        <button type="button" 
                                onclick="filterProducts('machinery')" 
                                data-filter="machinery" 
                                class="catalog-filter-btn px-4 sm:px-5 py-2 text-xs font-medium rounded-full transition-all duration-300 text-[#6E6E73] hover:text-[#18181B] cursor-pointer">
                            {{ __('industries.catalog.filter_machinery') }}
                        </button>
                        <button type="button" 
                                onclick="filterProducts('project')" 
                                data-filter="project" 
                                class="catalog-filter-btn px-4 sm:px-5 py-2 text-xs font-medium rounded-full transition-all duration-300 text-[#6E6E73] hover:text-[#18181B] cursor-pointer">
                            {{ __('industries.catalog.filter_project') }}
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Groups Container -->
            <div id="product-grid" class="space-y-12">
                
                <!-- ============================================================= -->
                <!-- GROUP 01: TEXTILE RAW MATERIALS                               -->
                <!-- ============================================================= -->
                <div id="group-textile" class="product-item transition-all duration-500" data-category="textile">
                    <div class="border-t border-black/[0.08] pt-8 mb-6 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <span class="px-3 py-1 rounded-full bg-[#18181B] text-white font-mono text-[10px] font-bold uppercase tracking-wider">
                                {{ __('industries.textiles.group_tag') }}
                            </span>
                            <h3 class="apple-display text-xl sm:text-2xl font-bold text-[#18181B]">
                                {{ __('industries.textiles.group_title') }}
                            </h3>
                        </div>
                        <span class="text-xs text-[#6E6E73] hidden sm:inline">{{ __('industries.textiles.group_desc') }}</span>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-7">
                        
                        <!-- Card 1: Combed Wool Tops (Span 7) -->
                        <div class="lg:col-span-7">
                            <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#121215] to-[#09090B] text-white rounded-[30px] p-7 sm:p-9 h-full flex flex-col justify-between shadow-lg">
                                <div>
                                    <div class="flex items-center justify-between pb-3 mb-4 border-b border-white/10">
                                        <h4 class="apple-display text-2xl font-bold text-white">{{ __('industries.textiles.wool_title') }}</h4>
                                        <span class="text-xs font-mono text-[#D8BF8A]">{{ __('industries.textiles.wool_subtitle') }}</span>
                                    </div>
                                    <div class="rounded-2xl overflow-hidden aspect-[4/3] mb-5 border border-white/10 bg-[#09090B] group">
                                        <img 
                                            src="{{ asset('images/Combed Merino Wool Tops.jpg') }}" 
                                            alt="{{ __('industries.textiles.wool_title') }}" 
                                            loading="lazy"
                                            class="w-full h-full object-cover opacity-90 transition-transform duration-700 ease-out group-hover:scale-105"
                                        >
                                    </div>
                                    <p class="text-xs sm:text-sm text-white/80 leading-relaxed mb-6 font-light">
                                        {{ __('industries.textiles.wool_desc') }}
                                    </p>

                                    <!-- 7 Purchasing Parameters -->
                                    <div class="mb-6 bg-white/[0.05] p-5 rounded-2xl border border-white/10">
                                        <span class="text-[11px] font-mono text-[#D8BF8A] uppercase font-bold block mb-3">
                                            {{ __('industries.textiles.wool_params_title') }}
                                        </span>
                                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-white/90">
                                            <li class="flex items-start space-x-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.wool_p1') }}</span></li>
                                            <li class="flex items-start space-x-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.wool_p2') }}</span></li>
                                            <li class="flex items-start space-x-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.wool_p3') }}</span></li>
                                            <li class="flex items-start space-x-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.wool_p4') }}</span></li>
                                            <li class="flex items-start space-x-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.wool_p5') }}</span></li>
                                            <li class="flex items-start space-x-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.wool_p6') }}</span></li>
                                            <li class="flex items-start space-x-2 sm:col-span-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.wool_p7') }}</span></li>
                                        </ul>
                                    </div>

                                    <!-- 3 Applications -->
                                    <div class="mb-6">
                                        <span class="text-[11px] font-mono text-white/60 uppercase tracking-wider block mb-2">{{ __('industries.textiles.wool_apps_title') }}</span>
                                        <div class="flex flex-wrap gap-2 text-xs">
                                            <span class="px-3 py-1 rounded-full bg-white/10 border border-white/10 text-white">{{ __('industries.textiles.wool_app1') }}</span>
                                            <span class="px-3 py-1 rounded-full bg-white/10 border border-white/10 text-white">{{ __('industries.textiles.wool_app2') }}</span>
                                            <span class="px-3 py-1 rounded-full bg-white/10 border border-white/10 text-white">{{ __('industries.textiles.wool_app3') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-white/10 flex items-center justify-end">
                                    <button onclick="openQuoteModal('Textile Raw Materials')" class="inline-flex items-center space-x-2 px-5 py-2.5 rounded-full bg-[#B89758] hover:bg-[#c9a764] text-[#09090B] text-xs font-semibold transition-all cursor-pointer shadow-sm active:scale-[0.98]">
                                        <span>{{ __('industries.textiles.wool_cta') }}</span>
                                        <span>→</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 & 3: Polyester Fibers & Additional Inputs (Span 5) -->
                        <div class="lg:col-span-5 space-y-7">
                            
                            <!-- Polyester Fibers & Tow -->
                            <div class="bento-card bg-[#F5F5F7] rounded-[30px] p-7 sm:p-8 border border-black/[0.06] shadow-xs group">
                                <div class="rounded-2xl overflow-hidden aspect-video mb-5 bg-[#18181B]">
                                    <img 
                                        src="{{ asset('images/Polyester Staple Fiber Bales.jpg') }}" 
                                        alt="{{ __('industries.textiles.poly_title') }}" 
                                        loading="lazy"
                                        class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                                    >
                                </div>
                                <div class="pb-3 mb-4 border-b border-black/[0.06]">
                                    <h4 class="apple-display text-xl font-bold text-[#18181B]">{{ __('industries.textiles.poly_title') }}</h4>
                                    <span class="text-xs font-mono text-[#B89758]">{{ __('industries.textiles.poly_subtitle') }}</span>
                                </div>
                                <p class="text-xs sm:text-sm text-[#6E6E73] leading-relaxed mb-4">
                                    {{ __('industries.textiles.poly_desc') }}
                                </p>

                                <!-- 5 Parameters -->
                                <div class="mb-5 bg-white p-4 rounded-xl border border-black/[0.04]">
                                    <span class="text-[10px] font-mono text-[#B89758] uppercase font-bold block mb-2">
                                        {{ __('industries.textiles.poly_params_title') }}
                                    </span>
                                    <ul class="space-y-1.5 text-xs text-[#18181B]">
                                        <li class="flex items-start space-x-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.poly_p1') }}</span></li>
                                        <li class="flex items-start space-x-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.poly_p2') }}</span></li>
                                        <li class="flex items-start space-x-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.poly_p3') }}</span></li>
                                        <li class="flex items-start space-x-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.poly_p4') }}</span></li>
                                        <li class="flex items-start space-x-2"><span class="text-[#B89758]">▪</span><span>{{ __('industries.textiles.poly_p5') }}</span></li>
                                    </ul>
                                </div>

                                <button onclick="openQuoteModal('Textile Raw Materials')" class="w-full inline-flex items-center justify-center space-x-2 px-5 py-2.5 rounded-full bg-[#18181B] hover:bg-[#27272A] text-white text-xs font-semibold transition-all cursor-pointer shadow-sm active:scale-[0.98]">
                                    <span>{{ __('industries.textiles.poly_cta') }}</span>
                                    <span>→</span>
                                </button>
                            </div>

                            <!-- Additional Textile Materials -->
                            <div class="bento-card bg-[#F5F5F7] rounded-[24px] p-6 border border-black/[0.06]">
                                <h4 class="text-sm font-bold text-[#18181B] mb-2">{{ __('industries.textiles.additional_title') }}</h4>
                                <p class="text-xs text-[#6E6E73] leading-relaxed mb-3">
                                    {{ __('industries.textiles.additional_desc') }}
                                </p>
                                <p class="text-[11px] text-[#18181B] font-medium mb-4">
                                    {{ __('industries.textiles.additional_items') }}
                                </p>
                                <button onclick="openQuoteModal('Textile Raw Materials')" class="text-xs font-semibold text-[#18181B] hover:text-[#B89758] flex items-center space-x-1 cursor-pointer">
                                    <span>{{ __('industries.textiles.additional_cta') }}</span>
                                    <span>→</span>
                                </button>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- ============================================================= -->
                <!-- GROUP 02: INDUSTRIAL MACHINERY & EQUIPMENT                    -->
                <!-- ============================================================= -->
                <div id="group-machinery" class="product-item transition-all duration-500 pt-8" data-category="machinery">
                    <div class="border-t border-black/[0.08] pt-8 mb-6 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <span class="px-3 py-1 rounded-full bg-[#18181B] text-white font-mono text-[10px] font-bold uppercase tracking-wider">
                                {{ __('industries.machinery.group_tag') }}
                            </span>
                            <h3 class="apple-display text-xl sm:text-2xl font-bold text-[#18181B]">
                                {{ __('industries.machinery.group_title') }}
                            </h3>
                        </div>
                        <span class="text-xs text-[#6E6E73] hidden sm:inline">{{ __('industries.machinery.group_desc') }}</span>
                    </div>

                    <div class="bento-card bg-[#F5F5F7] rounded-[32px] p-7 sm:p-10 border border-black/[0.06]">
                        <!-- Machinery Visual Banner -->
                        <div class="rounded-2xl overflow-hidden aspect-video max-w-3xl mx-auto mb-8 bg-[#18181B] group">
                            <img 
                                src="{{ asset('images/Automated Manufacturing Floor.jpg') }}" 
                                alt="{{ __('industries.machinery.group_title') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>

                        <!-- 4 Sub-Cards Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
                            <div class="p-5 rounded-2xl bg-white border border-black/[0.04] shadow-xs">
                                <span class="text-[10px] font-mono text-[#B89758] uppercase font-bold block mb-1">{{ __('industries.machinery.card1_tag') }}</span>
                                <h4 class="text-sm font-bold text-[#18181B] mb-2">{{ __('industries.machinery.card1_title') }}</h4>
                                <p class="text-xs text-[#6E6E73] leading-relaxed">{{ __('industries.machinery.card1_desc') }}</p>
                            </div>

                            <div class="p-5 rounded-2xl bg-white border border-black/[0.04] shadow-xs">
                                <span class="text-[10px] font-mono text-[#B89758] uppercase font-bold block mb-1">{{ __('industries.machinery.card2_tag') }}</span>
                                <h4 class="text-sm font-bold text-[#18181B] mb-2">{{ __('industries.machinery.card2_title') }}</h4>
                                <p class="text-xs text-[#6E6E73] leading-relaxed">{{ __('industries.machinery.card2_desc') }}</p>
                            </div>

                            <div class="p-5 rounded-2xl bg-white border border-black/[0.04] shadow-xs">
                                <span class="text-[10px] font-mono text-[#B89758] uppercase font-bold block mb-1">{{ __('industries.machinery.card3_tag') }}</span>
                                <h4 class="text-sm font-bold text-[#18181B] mb-2">{{ __('industries.machinery.card3_title') }}</h4>
                                <p class="text-xs text-[#6E6E73] leading-relaxed">{{ __('industries.machinery.card3_desc') }}</p>
                            </div>

                            <div class="p-5 rounded-2xl bg-white border border-black/[0.04] shadow-xs">
                                <span class="text-[10px] font-mono text-[#B89758] uppercase font-bold block mb-1">{{ __('industries.machinery.card4_tag') }}</span>
                                <h4 class="text-sm font-bold text-[#18181B] mb-2">{{ __('industries.machinery.card4_title') }}</h4>
                                <p class="text-xs text-[#6E6E73] leading-relaxed">{{ __('industries.machinery.card4_desc') }}</p>
                            </div>
                        </div>

                        <!-- Technical Notice Box & Action Button -->
                        <div class="p-5 sm:p-6 rounded-2xl bg-amber-50/70 border border-amber-200/60 flex flex-col md:flex-row md:items-center justify-between gap-5">
                            <div class="max-w-3xl">
                                <span class="font-bold text-[#18181B] text-xs block mb-1">§ {{ __('industries.machinery.disclaimer_title') }}:</span>
                                <p class="text-xs text-[#6E6E73] leading-relaxed">{{ __('industries.machinery.disclaimer') }}</p>
                            </div>
                            <button onclick="openQuoteModal('Industrial Machinery & Equipment')" class="shrink-0 inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-[#18181B] hover:bg-[#27272A] text-white text-xs font-semibold transition-all cursor-pointer shadow-sm active:scale-[0.98]">
                                <span>{{ __('industries.machinery.cta') }}</span>
                                <span>→</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- ============================================================= -->
                <!-- GROUP 03: INDUSTRIAL MATERIALS & GENERAL TRADING              -->
                <!-- ============================================================= -->
                <div id="group-materials" class="product-item transition-all duration-500 pt-8" data-category="project">
                    <div class="border-t border-black/[0.08] pt-8 mb-6 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <span class="px-3 py-1 rounded-full bg-[#18181B] text-white font-mono text-[10px] font-bold uppercase tracking-wider">
                                {{ __('industries.materials.group_tag') }}
                            </span>
                            <h3 class="apple-display text-xl sm:text-2xl font-bold text-[#18181B]">
                                {{ __('industries.materials.group_title') }}
                            </h3>
                        </div>
                        <span class="text-xs text-[#6E6E73] hidden sm:inline">{{ __('industries.materials.group_desc') }}</span>
                    </div>

                    <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#121215] to-[#09090B] text-white rounded-[32px] p-8 sm:p-10 lg:p-12 shadow-xl relative overflow-hidden">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                            <div class="lg:col-span-6">
                                <h4 class="apple-display text-2xl sm:text-3xl font-bold text-white mb-3">
                                    {{ __('industries.materials.group_title') }}
                                </h4>
                                <p class="text-sm text-white/80 leading-relaxed font-light mb-6">
                                    {{ __('industries.materials.group_desc') }}
                                </p>
                                <button onclick="openQuoteModal('International Sourcing')" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-[#B89758] hover:bg-[#c9a764] text-[#09090B] text-xs font-semibold transition-all cursor-pointer shadow-sm active:scale-[0.98]">
                                    <span>{{ __('industries.materials.cta') }}</span>
                                    <span>→</span>
                                </button>
                            </div>

                            <div class="lg:col-span-6 space-y-5">
                                <div class="rounded-2xl overflow-hidden aspect-video border border-white/10 bg-[#09090B] group">
                                    <img 
                                        src="{{ asset('images/Bulk Industrial Raw Materials.jpg') }}" 
                                        alt="{{ __('industries.materials.group_title') }}" 
                                        loading="lazy"
                                        class="w-full h-full object-cover opacity-90 transition-transform duration-700 ease-out group-hover:scale-105"
                                    >
                                </div>
                                <div class="bg-white/[0.05] p-6 rounded-2xl border border-white/10">
                                <ul class="space-y-3 text-xs sm:text-sm text-white/90">
                                    <li class="flex items-center space-x-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                                        <span>{{ __('industries.materials.b1') }}</span>
                                    </li>
                                    <li class="flex items-center space-x-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                                        <span>{{ __('industries.materials.b2') }}</span>
                                    </li>
                                    <li class="flex items-center space-x-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                                        <span>{{ __('industries.materials.b3') }}</span>
                                    </li>
                                    <li class="flex items-center space-x-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                                        <span>{{ __('industries.materials.b4') }}</span>
                                    </li>
                                    <li class="flex items-center space-x-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                                        <span>{{ __('industries.materials.b5') }}</span>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 3: PRODUCT SPECIFICATIONS & COMMERCIAL INQUIRIES CHECKLIST BOX    -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 bg-[#FAFAFC] border-y border-black/[0.05]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="bento-card bg-white rounded-[32px] p-8 sm:p-12 lg:p-14 border border-black/[0.06] shadow-sm">
                <div class="max-w-3xl mb-10">
                    <span class="text-xs font-mono font-bold tracking-[0.2em] text-[#B89758] block mb-3 uppercase">
                        {{ __('industries.checklist.badge') }}
                    </span>
                    <h2 class="apple-display text-2xl sm:text-3xl lg:text-4xl font-bold text-[#18181B] mb-4 leading-tight">
                        {{ __('industries.checklist.title') }}
                    </h2>
                    <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed">
                        {{ __('industries.checklist.intro') }}
                    </p>
                </div>

                <!-- 7 Recommended Details Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-10">
                    <div class="p-4 rounded-xl bg-[#F5F5F7] border border-black/[0.04]">
                        <span class="w-6 h-6 rounded-full bg-[#18181B] text-white font-bold text-xs flex items-center justify-center mb-2">1</span>
                        <p class="text-xs text-[#18181B] font-medium leading-relaxed">{{ __('industries.checklist.i1') }}</p>
                    </div>

                    <div class="p-4 rounded-xl bg-[#F5F5F7] border border-black/[0.04]">
                        <span class="w-6 h-6 rounded-full bg-[#18181B] text-white font-bold text-xs flex items-center justify-center mb-2">2</span>
                        <p class="text-xs text-[#18181B] font-medium leading-relaxed">{{ __('industries.checklist.i2') }}</p>
                    </div>

                    <div class="p-4 rounded-xl bg-[#F5F5F7] border border-black/[0.04]">
                        <span class="w-6 h-6 rounded-full bg-[#18181B] text-white font-bold text-xs flex items-center justify-center mb-2">3</span>
                        <p class="text-xs text-[#18181B] font-medium leading-relaxed">{{ __('industries.checklist.i3') }}</p>
                    </div>

                    <div class="p-4 rounded-xl bg-[#F5F5F7] border border-black/[0.04]">
                        <span class="w-6 h-6 rounded-full bg-[#18181B] text-white font-bold text-xs flex items-center justify-center mb-2">4</span>
                        <p class="text-xs text-[#18181B] font-medium leading-relaxed">{{ __('industries.checklist.i4') }}</p>
                    </div>

                    <div class="p-4 rounded-xl bg-[#F5F5F7] border border-black/[0.04]">
                        <span class="w-6 h-6 rounded-full bg-[#18181B] text-white font-bold text-xs flex items-center justify-center mb-2">5</span>
                        <p class="text-xs text-[#18181B] font-medium leading-relaxed">{{ __('industries.checklist.i5') }}</p>
                    </div>

                    <div class="p-4 rounded-xl bg-[#F5F5F7] border border-black/[0.04]">
                        <span class="w-6 h-6 rounded-full bg-[#18181B] text-white font-bold text-xs flex items-center justify-center mb-2">6</span>
                        <p class="text-xs text-[#18181B] font-medium leading-relaxed">{{ __('industries.checklist.i6') }}</p>
                    </div>

                    <div class="p-4 rounded-xl bg-[#F5F5F7] border border-black/[0.04] md:col-span-2 lg:col-span-3">
                        <span class="w-6 h-6 rounded-full bg-[#18181B] text-white font-bold text-xs flex items-center justify-center mb-2">7</span>
                        <p class="text-xs text-[#18181B] font-medium leading-relaxed">{{ __('industries.checklist.i7') }}</p>
                    </div>
                </div>

                <div class="pt-6 border-t border-black/[0.06] flex flex-col sm:flex-row items-center justify-between gap-4">
                    <span class="text-xs text-[#6E6E73]">{{ __('industries.checklist.note') }}</span>
                    <button onclick="openQuoteModal('General Business Inquiry')" class="inline-flex items-center space-x-2 px-8 py-3.5 bg-[#18181B] hover:bg-[#27272A] text-white text-xs font-semibold rounded-full transition-all shadow-sm active:scale-[0.98] cursor-pointer">
                        <span>{{ __('industries.checklist.cta') }}</span>
                        <span class="ml-1">→</span>
                    </button>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- ULTRA-CLEAN MINIMAL APPLE-STYLE FOOTER                                   -->
    <!-- ========================================================================= -->
    @include('partials.footer')

    @include('partials.rfq-modal')

    <!-- Segmented Filter JavaScript Controller -->
    <script>
        function filterProducts(category) {
            const buttons = document.querySelectorAll('.catalog-filter-btn');
            const items = document.querySelectorAll('.product-item');

            // Update button styles
            buttons.forEach(btn => {
                if (btn.getAttribute('data-filter') === category) {
                    btn.classList.remove('text-[#6E6E73]', 'font-medium');
                    btn.classList.add('bg-[#18181B]', 'text-white', 'shadow-sm', 'font-semibold');
                } else {
                    btn.classList.remove('bg-[#18181B]', 'text-white', 'shadow-sm', 'font-semibold');
                    btn.classList.add('text-[#6E6E73]', 'font-medium');
                }
            });

            // Filter items with smooth transition
            items.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                if (category === 'all' || itemCategory === category) {
                    item.style.display = '';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 20);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.97)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        }
    </script>

    <!-- Interactive Motion & UI Controller -->
    <script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>
