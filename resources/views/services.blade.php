<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-head', [
        'pageKey' => 'services',
        'title' => __('services.meta.title'),
        'description' => __('services.meta.description'),
        'breadcrumbTitle' => __('messages.nav.services'),
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
                        <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#18181B]">{{ __('messages.nav.services') }}</span>
                    </div>

                    <!-- Apple Display Headline -->
                    <h1 class="hero-animate-2 apple-display text-4xl sm:text-5xl lg:text-[62px] xl:text-[68px] font-bold text-[#18181B] leading-[1.04] mb-6">
                        {{ __('services.hero.title_line1') }}<br>
                        <span class="text-[#18181B]/80">{{ __('services.hero.title_line2') }}</span>
                    </h1>

                    <!-- Concise Overview of SCHMITZ's End-to-End Capabilities -->
                    <div class="hero-animate-3 space-y-4 max-w-2xl mb-9 text-[#6E6E73] text-base sm:text-lg leading-relaxed font-normal">
                        <p>
                            {!! __('services.hero.intro_p1', ['company' => '<strong class="font-semibold text-[#18181B]">' . __('services.hero.company_name') . '</strong>']) !!}
                        </p>
                        <p class="text-sm sm:text-base text-[#6E6E73]/90">
                            {!! __('services.hero.intro_p2', ['incoterms' => '<strong class="text-[#18181B]">' . __('services.hero.incoterms') . '</strong>']) !!}
                        </p>
                    </div>

                    <!-- Sleek Apple-Style Pill CTAs -->
                    <div class="hero-animate-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 sm:gap-4 mb-11">
                        <button onclick="openQuoteModal('General Business Inquiry')" class="group inline-flex items-center justify-center px-8 py-4 bg-schmitz-red hover:bg-schmitz-redHover text-white text-sm font-medium rounded-full transition-all duration-300 shadow-sm hover:shadow-xl active:scale-[0.98] cursor-pointer">
                            <span>{{ __('services.hero.cta_quote') }}</span>
                            <span class="ml-2 text-white/90 transition-transform duration-300 group-hover:translate-x-1">→</span>
                        </button>
                        <a href="#divisions" class="group inline-flex items-center justify-center px-8 py-4 bg-[#F5F5F7] hover:bg-[#E8E8ED] text-[#18181B] text-sm font-medium rounded-full transition-all duration-300 active:scale-[0.98]">
                            <span>{{ __('services.hero.cta_divisions') }}</span>
                            <span class="ml-2 text-[#B89758] transition-transform duration-300 group-hover:translate-y-0.5">↓</span>
                        </a>
                    </div>

                    <!-- Horizontal 4-Pillar Architectural Indicator Strip -->
                    <div class="hero-animate-5 pt-7 border-t border-black/[0.07] grid grid-cols-2 sm:grid-cols-4 gap-5 text-xs">
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('services.hero.indicator_1_num') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('services.hero.indicator_1_title') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('services.hero.indicator_1_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('services.hero.indicator_2_num') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('services.hero.indicator_2_title') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('services.hero.indicator_2_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('services.hero.indicator_3_num') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('services.hero.indicator_3_title') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('services.hero.indicator_3_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('services.hero.indicator_4_num') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('services.hero.indicator_4_title') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('services.hero.indicator_4_sub') }}</span>
                        </div>
                    </div>

                </div>

                <!-- Right Bento Navigation Hub Card (5 Cols) -->
                <div class="lg:col-span-5 hero-animate-3">
                    <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#18181B] to-[#09090B] text-white rounded-[30px] p-7 sm:p-9 shadow-[0_32px_64px_-16px_rgba(24,24,27,0.28)] relative">
                        <!-- Subtle Gold Glow Orbs -->
                        <div class="absolute -top-24 -right-24 w-60 h-60 rounded-full bg-[#B89758]/20 blur-3xl pointer-events-none"></div>
                        <div class="absolute -bottom-20 -left-20 w-52 h-52 rounded-full bg-white/[0.04] blur-2xl pointer-events-none"></div>

                        <div class="relative z-10">
                            <!-- Card Header with Active Status -->
                            <div class="flex items-center justify-between pb-5 mb-6 border-b border-white/10">
                                <div>
                                    <span class="text-[10px] uppercase tracking-[0.22em] text-[#D8BF8A] font-semibold block">{{ __('services.hero.hub.index_tag') }}</span>
                                    <span class="text-base font-semibold text-white mt-0.5 block">{{ __('services.hero.hub.index_title') }}</span>
                                </div>
                                <span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-white/10 border border-white/10 text-[11px] font-medium text-white shadow-2xs">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span>{{ __('services.hero.hub.status') }}</span>
                                </span>
                            </div>

                            <!-- 7 Divisions Interactive Launchers -->
                            <div class="space-y-2 mb-2 text-xs">
                                <a href="#division-01" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] mr-2">01</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('services.hero.hub.div1_title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                                <a href="#division-02" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] mr-2">02</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('services.hero.hub.div2_title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                                <a href="#division-03" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] mr-2">03</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('services.hero.hub.div3_title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                                <a href="#division-04" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] mr-2">04</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('services.hero.hub.div4_title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                                <a href="#division-05" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] mr-2">05</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('services.hero.hub.div5_title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                                <a href="#division-06" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] mr-2">06</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('services.hero.hub.div6_title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                                <a href="#division-07" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] mr-2">07</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('services.hero.hub.div7_title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 2: 7 CORE COMMERCIAL DIVISIONS (#divisions)                       -->
    <!-- ========================================================================= -->
    <div id="divisions" class="space-y-16 py-16 sm:py-24 bg-[#FAFAFC]">

        <!-- ===================================================================== -->
        <!-- DIVISION 01: GLOBAL SOURCING & SUPPLIER COORDINATION                  -->
        <!-- ===================================================================== -->
        <section id="division-01" class="scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
                <div class="bento-card bg-white rounded-[32px] p-8 sm:p-10 lg:p-12 border border-black/[0.06] shadow-xs">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <div class="lg:col-span-5">
                            <div class="flex items-center space-x-2.5 mb-4">
                                <span class="px-3 py-1 rounded-full bg-[#18181B] text-white font-mono text-[10px] font-bold uppercase tracking-wider">
                                    {{ __('services.div1.tag') }}
                                </span>
                                <span class="text-xs font-mono text-[#B89758]">{{ __('services.div1.subtag') }}</span>
                            </div>
                            <h2 class="apple-display text-2xl sm:text-3xl lg:text-4xl font-bold text-[#18181B] mb-4 leading-tight">
                                {{ __('services.div1.title') }}
                            </h2>
                            <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6">
                                {{ __('services.div1.desc') }}
                            </p>
                            <button onclick="openQuoteModal('International Sourcing')" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-[#18181B] hover:bg-[#27272A] text-white text-xs font-semibold transition-all cursor-pointer shadow-sm active:scale-[0.98]">
                                <span>{{ __('services.div1.cta') }}</span>
                                <span>→</span>
                            </button>
                        </div>

                        <div class="lg:col-span-7 space-y-5">
                            <div class="rounded-2xl overflow-hidden aspect-video bg-[#18181B] group">
                                <img 
                                    src="{{ asset('images/Factory Quality Inspection.jpg') }}" 
                                    alt="{{ __('services.div1.title') }}" 
                                    loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                                >
                            </div>
                            <div class="bg-[#F5F5F7] p-6 sm:p-8 rounded-2xl border border-black/[0.04]">
                            <ul class="space-y-3.5 text-xs sm:text-sm text-[#18181B]">
                                <li class="flex items-start space-x-3">
                                    <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                    <span>{{ __('services.div1.b1') }}</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                    <span>{{ __('services.div1.b2') }}</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                    <span>{{ __('services.div1.b3') }}</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                    <span>{{ __('services.div1.b4') }}</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                    <span>{{ __('services.div1.b5') }}</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                    <span>{{ __('services.div1.b6') }}</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                    <span>{{ __('services.div1.b7') }}</span>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- DIVISION 02: INTERNATIONAL TRADING & PROCUREMENT                      -->
        <!-- ===================================================================== -->
        <section id="division-02" class="scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
                <div class="bento-card bg-white rounded-[32px] p-8 sm:p-10 lg:p-12 border border-black/[0.06] shadow-xs">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <div class="lg:col-span-5">
                            <div class="flex items-center space-x-2.5 mb-4">
                                <span class="px-3 py-1 rounded-full bg-[#18181B] text-white font-mono text-[10px] font-bold uppercase tracking-wider">
                                    {{ __('services.div2.tag') }}
                                </span>
                                <span class="text-xs font-mono text-[#B89758]">{{ __('services.div2.subtag') }}</span>
                            </div>
                            <h2 class="apple-display text-2xl sm:text-3xl lg:text-4xl font-bold text-[#18181B] mb-4 leading-tight">
                                {{ __('services.div2.title') }}
                            </h2>
                            <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6">
                                {{ __('services.div2.desc') }}
                            </p>
                            <button onclick="openQuoteModal('General Business Inquiry')" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-[#18181B] hover:bg-[#27272A] text-white text-xs font-semibold transition-all cursor-pointer shadow-sm active:scale-[0.98]">
                                <span>{{ __('services.div2.cta') }}</span>
                                <span>→</span>
                            </button>
                        </div>

                        <div class="lg:col-span-7 space-y-5">
                            <div class="rounded-2xl overflow-hidden aspect-video bg-[#18181B] group">
                                <img 
                                    src="{{ asset('images/Sunset Container Ship at Harbor.png') }}" 
                                    alt="{{ __('services.div2.title') }}" 
                                    loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                                >
                            </div>
                            <div class="bg-[#F5F5F7] p-6 sm:p-8 rounded-2xl border border-black/[0.04]">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 text-xs sm:text-sm text-[#18181B]">
                                <div class="flex items-start space-x-2.5">
                                    <span class="text-[#B89758] font-bold">▪</span>
                                    <span>{{ __('services.div2.b1') }}</span>
                                </div>
                                <div class="flex items-start space-x-2.5">
                                    <span class="text-[#B89758] font-bold">▪</span>
                                    <span>{{ __('services.div2.b2') }}</span>
                                </div>
                                <div class="flex items-start space-x-2.5">
                                    <span class="text-[#B89758] font-bold">▪</span>
                                    <span>{{ __('services.div2.b3') }}</span>
                                </div>
                                <div class="flex items-start space-x-2.5">
                                    <span class="text-[#B89758] font-bold">▪</span>
                                    <span>{{ __('services.div2.b4') }}</span>
                                </div>
                                <div class="flex items-start space-x-2.5">
                                    <span class="text-[#B89758] font-bold">▪</span>
                                    <span>{{ __('services.div2.b5') }}</span>
                                </div>
                                <div class="flex items-start space-x-2.5">
                                    <span class="text-[#B89758] font-bold">▪</span>
                                    <span>{{ __('services.div2.b6') }}</span>
                                </div>
                                <div class="flex items-start space-x-2.5">
                                    <span class="text-[#B89758] font-bold">▪</span>
                                    <span>{{ __('services.div2.b7') }}</span>
                                </div>
                                <div class="flex items-start space-x-2.5">
                                    <span class="text-[#B89758] font-bold">▪</span>
                                    <span>{{ __('services.div2.b8') }}</span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- DIVISION 03: TEXTILE RAW MATERIAL SOURCING                            -->
        <!-- ===================================================================== -->
        <section id="division-03" class="scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
                <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#121215] to-[#09090B] text-white rounded-[32px] p-8 sm:p-10 lg:p-12 shadow-xl relative overflow-hidden">
                    <div class="absolute -top-32 -right-32 w-80 h-80 rounded-full bg-[#B89758]/20 blur-3xl pointer-events-none"></div>

                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center mb-8">
                        <div class="lg:col-span-6">
                            <div class="flex items-center space-x-2.5 mb-3">
                                <span class="px-3 py-1 rounded-full bg-[#B89758] text-[#09090B] font-mono text-[10px] font-bold uppercase tracking-wider">
                                    {{ __('services.div3.tag') }}
                                </span>
                                <span class="text-xs font-mono text-[#D8BF8A]">{{ __('services.div3.subtag') }}</span>
                            </div>
                            <h2 class="apple-display text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-3">
                                {{ __('services.div3.title') }}
                            </h2>
                            <p class="text-sm sm:text-base text-white/80 max-w-3xl leading-relaxed">
                                {{ __('services.div3.desc') }}
                            </p>
                        </div>
                        <div class="lg:col-span-6 rounded-2xl overflow-hidden aspect-video border border-white/10 bg-[#09090B] group">
                            <img 
                                src="{{ asset('images/Modern Yarn Mill Production Line.png') }}" 
                                alt="{{ __('services.div3.title') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover opacity-90 transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>
                    </div>

                    <!-- 3 Sub-Cards Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="p-6 rounded-2xl bg-white/[0.05] border border-white/10 flex flex-col justify-between">
                            <div>
                                <h3 class="text-base font-bold text-white mb-2">{{ __('services.div3.item1_title') }}</h3>
                                <p class="text-xs text-white/75 leading-relaxed">{{ __('services.div3.item1_desc') }}</p>
                            </div>
                        </div>

                        <div class="p-6 rounded-2xl bg-white/[0.05] border border-white/10 flex flex-col justify-between">
                            <div>
                                <h3 class="text-base font-bold text-white mb-2">{{ __('services.div3.item2_title') }}</h3>
                                <p class="text-xs text-white/75 leading-relaxed">{{ __('services.div3.item2_desc') }}</p>
                            </div>
                        </div>

                        <div class="p-6 rounded-2xl bg-white/[0.05] border border-white/10 flex flex-col justify-between">
                            <div>
                                <h3 class="text-base font-bold text-white mb-2">{{ __('services.div3.item3_title') }}</h3>
                                <p class="text-xs text-white/75 leading-relaxed">{{ __('services.div3.item3_desc') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-white/10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <span class="text-xs text-white/70">{{ __('services.div3.packaging_label') }} <strong class="text-white">{{ __('services.div3.packaging_val') }}</strong></span>
                        <button onclick="openQuoteModal('Textile Raw Materials')" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-[#B89758] hover:bg-[#c9a764] text-[#09090B] text-xs font-semibold transition-all cursor-pointer shadow-sm active:scale-[0.98]">
                            <span>{{ __('services.div3.cta') }}</span>
                            <span>→</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- DIVISION 04: INDUSTRIAL MACHINERY & EQUIPMENT                         -->
        <!-- ===================================================================== -->
        <section id="division-04" class="scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
                <div class="bento-card bg-white rounded-[32px] p-8 sm:p-10 lg:p-12 border border-black/[0.06] shadow-xs">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <div class="lg:col-span-5">
                            <div class="flex items-center space-x-2.5 mb-4">
                                <span class="px-3 py-1 rounded-full bg-[#18181B] text-white font-mono text-[10px] font-bold uppercase tracking-wider">
                                    {{ __('services.div4.tag') }}
                                </span>
                                <span class="text-xs font-mono text-[#B89758]">{{ __('services.div4.subtag') }}</span>
                            </div>
                            <h2 class="apple-display text-2xl sm:text-3xl lg:text-4xl font-bold text-[#18181B] mb-4 leading-tight">
                                {{ __('services.div4.title') }}
                            </h2>
                            <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6">
                                {{ __('services.div4.desc') }}
                            </p>
                            <button onclick="openQuoteModal('Industrial Machinery & Equipment')" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-[#18181B] hover:bg-[#27272A] text-white text-xs font-semibold transition-all cursor-pointer shadow-sm active:scale-[0.98]">
                                <span>{{ __('services.div4.cta') }}</span>
                                <span>→</span>
                            </button>
                        </div>

                        <div class="lg:col-span-7 space-y-5">
                            <div class="rounded-2xl overflow-hidden aspect-video bg-[#18181B] group">
                                <img 
                                    src="{{ asset('images/Precision Machined Parts Workshop.png') }}" 
                                    alt="{{ __('services.div4.title') }}" 
                                    loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                                >
                            </div>
                            <div class="bg-[#F5F5F7] p-6 sm:p-8 rounded-2xl border border-black/[0.04]">
                                <ul class="space-y-3 text-xs sm:text-sm text-[#18181B]">
                                    <li class="flex items-start space-x-3">
                                        <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                        <span>{{ __('services.div4.b1') }}</span>
                                    </li>
                                    <li class="flex items-start space-x-3">
                                        <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                        <span>{{ __('services.div4.b2') }}</span>
                                    </li>
                                    <li class="flex items-start space-x-3">
                                        <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                        <span>{{ __('services.div4.b3') }}</span>
                                    </li>
                                    <li class="flex items-start space-x-3">
                                        <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                        <span>{{ __('services.div4.b4') }}</span>
                                    </li>
                                    <li class="flex items-start space-x-3">
                                        <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                        <span>{{ __('services.div4.b5') }}</span>
                                    </li>
                                    <li class="flex items-start space-x-3">
                                        <span class="w-5 h-5 rounded-full bg-white text-[#B89758] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">✓</span>
                                        <span>{{ __('services.div4.b6') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Technical Notice Disclaimer Box -->
                            <div class="p-4 sm:p-5 rounded-xl bg-amber-50/70 border border-amber-200/60 text-xs text-[#6E6E73]">
                                <span class="font-bold text-[#18181B] block mb-1">§ {{ __('services.div4.disclaimer_title') }}:</span>
                                <p class="leading-relaxed">{{ __('services.div4.disclaimer') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- DIVISION 05: LOGISTICS & SHIPMENT COORDINATION                        -->
        <!-- ===================================================================== -->
        <section id="division-05" class="scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
                <div class="bento-card bg-white rounded-[32px] p-8 sm:p-10 lg:p-12 border border-black/[0.06] shadow-xs">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <div class="lg:col-span-5">
                            <div class="flex items-center space-x-2.5 mb-4">
                                <span class="px-3 py-1 rounded-full bg-[#18181B] text-white font-mono text-[10px] font-bold uppercase tracking-wider">
                                    {{ __('services.div5.tag') }}
                                </span>
                                <span class="text-xs font-mono text-[#B89758]">{{ __('services.div5.subtag') }}</span>
                            </div>
                            <h2 class="apple-display text-2xl sm:text-3xl lg:text-4xl font-bold text-[#18181B] mb-4 leading-tight">
                                {{ __('services.div5.title') }}
                            </h2>
                            <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6">
                                {{ __('services.div5.desc') }}
                            </p>
                            <button onclick="openQuoteModal('Logistics Coordination')" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-[#18181B] hover:bg-[#27272A] text-white text-xs font-semibold transition-all cursor-pointer shadow-sm active:scale-[0.98]">
                                <span>{{ __('services.div5.cta') }}</span>
                                <span>→</span>
                            </button>
                        </div>

                        <div class="lg:col-span-7 space-y-5">
                            <div class="rounded-2xl overflow-hidden aspect-video bg-[#18181B] group">
                                <img 
                                    src="{{ asset('images/Container Port Twilight Cranes.jpg') }}" 
                                    alt="{{ __('services.div5.title') }}" 
                                    loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                                >
                            </div>
                            <div class="bg-[#F5F5F7] p-6 sm:p-8 rounded-2xl border border-black/[0.04]">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 text-xs sm:text-sm text-[#18181B]">
                                    <div class="flex items-start space-x-2.5">
                                        <span class="text-[#B89758] font-bold">▪</span>
                                        <span>{{ __('services.div5.b1') }}</span>
                                    </div>
                                    <div class="flex items-start space-x-2.5">
                                        <span class="text-[#B89758] font-bold">▪</span>
                                        <span>{{ __('services.div5.b2') }}</span>
                                    </div>
                                    <div class="flex items-start space-x-2.5">
                                        <span class="text-[#B89758] font-bold">▪</span>
                                        <span>{{ __('services.div5.b3') }}</span>
                                    </div>
                                    <div class="flex items-start space-x-2.5">
                                        <span class="text-[#B89758] font-bold">▪</span>
                                        <span>{{ __('services.div5.b4') }}</span>
                                    </div>
                                    <div class="flex items-start space-x-2.5">
                                        <span class="text-[#B89758] font-bold">▪</span>
                                        <span>{{ __('services.div5.b5') }}</span>
                                    </div>
                                    <div class="flex items-start space-x-2.5">
                                        <span class="text-[#B89758] font-bold">▪</span>
                                        <span>{{ __('services.div5.b6') }}</span>
                                    </div>
                                    <div class="flex items-start space-x-2.5">
                                        <span class="text-[#B89758] font-bold">▪</span>
                                        <span>{{ __('services.div5.b7') }}</span>
                                    </div>
                                    <div class="flex items-start space-x-2.5">
                                        <span class="text-[#B89758] font-bold">▪</span>
                                        <span>{{ __('services.div5.b8') }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Logistics Disclaimer Box -->
                            <div class="p-4 sm:p-5 rounded-xl bg-slate-100 border border-slate-200/70 text-xs text-[#6E6E73]">
                                <span class="font-bold text-[#18181B] block mb-1">§ {{ __('services.div5.disclaimer_title') }}:</span>
                                <p class="leading-relaxed">{{ __('services.div5.disclaimer') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- DIVISION 06: TRADE DOCUMENTATION & ORDER ADMINISTRATION               -->
        <!-- ===================================================================== -->
        <section id="division-06" class="scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
                <div class="bento-card bg-white rounded-[32px] p-8 sm:p-10 lg:p-12 border border-black/[0.06] shadow-xs">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <div class="lg:col-span-5">
                            <div class="flex items-center space-x-2.5 mb-4">
                                <span class="px-3 py-1 rounded-full bg-[#18181B] text-white font-mono text-[10px] font-bold uppercase tracking-wider">
                                    {{ __('services.div6.tag') }}
                                </span>
                                <span class="text-xs font-mono text-[#B89758]">{{ __('services.div6.subtag') }}</span>
                            </div>
                            <h2 class="apple-display text-2xl sm:text-3xl lg:text-4xl font-bold text-[#18181B] mb-4 leading-tight">
                                {{ __('services.div6.title') }}
                            </h2>
                            <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6">
                                {{ __('services.div6.desc') }}
                            </p>
                            <button onclick="openQuoteModal('General Business Inquiry')" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-[#18181B] hover:bg-[#27272A] text-white text-xs font-semibold transition-all cursor-pointer shadow-sm active:scale-[0.98]">
                                <span>{{ __('services.div6.cta') }}</span>
                                <span>→</span>
                            </button>
                        </div>

                        <div class="lg:col-span-7 space-y-5">
                            <div class="rounded-2xl overflow-hidden aspect-video bg-[#18181B] group">
                                <img 
                                    src="{{ asset('images/Engineering Design Review in Modern Office.png') }}" 
                                    alt="{{ __('services.div6.title') }}" 
                                    loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                                >
                            </div>
                            <div class="bg-[#F5F5F7] p-6 sm:p-8 rounded-2xl border border-black/[0.04]">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 text-xs sm:text-sm text-[#18181B]">
                                    <div class="p-3 bg-white rounded-xl border border-black/[0.04]">
                                        <span class="font-bold text-[#18181B] block">01. {{ __('services.div6.b1') }}</span>
                                    </div>
                                    <div class="p-3 bg-white rounded-xl border border-black/[0.04]">
                                        <span class="font-bold text-[#18181B] block">02. {{ __('services.div6.b2') }}</span>
                                    </div>
                                    <div class="p-3 bg-white rounded-xl border border-black/[0.04]">
                                        <span class="font-bold text-[#18181B] block">03. {{ __('services.div6.b3') }}</span>
                                    </div>
                                    <div class="p-3 bg-white rounded-xl border border-black/[0.04]">
                                        <span class="font-bold text-[#18181B] block">04. {{ __('services.div6.b4') }}</span>
                                    </div>
                                    <div class="p-3 bg-white rounded-xl border border-black/[0.04]">
                                        <span class="font-bold text-[#18181B] block">05. {{ __('services.div6.b5') }}</span>
                                    </div>
                                    <div class="p-3 bg-white rounded-xl border border-black/[0.04]">
                                        <span class="font-bold text-[#18181B] block">06. {{ __('services.div6.b6') }}</span>
                                    </div>
                                    <div class="p-3 bg-white rounded-xl border border-black/[0.04]">
                                        <span class="font-bold text-[#18181B] block">07. {{ __('services.div6.b7') }}</span>
                                    </div>
                                    <div class="p-3 bg-white rounded-xl border border-black/[0.04]">
                                        <span class="font-bold text-[#18181B] block">08. {{ __('services.div6.b8') }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Documentation Disclaimer Box -->
                            <div class="p-4 sm:p-5 rounded-xl bg-slate-100 border border-slate-200/70 text-xs text-[#6E6E73]">
                                <span class="font-bold text-[#18181B] block mb-1">§ {{ __('services.div6.disclaimer_title') }}:</span>
                                <p class="leading-relaxed">{{ __('services.div6.disclaimer') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- DIVISION 07: PROJECT-BASED COMMERCIAL SOURCING                        -->
        <!-- ===================================================================== -->
        <section id="division-07" class="scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
                <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#121215] to-[#09090B] text-white rounded-[32px] p-8 sm:p-10 lg:p-12 shadow-xl relative overflow-hidden">
                    <div class="absolute -top-32 -right-32 w-80 h-80 rounded-full bg-[#B89758]/20 blur-3xl pointer-events-none"></div>

                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-6">
                            <div class="flex items-center space-x-2.5 mb-4">
                                <span class="px-3 py-1 rounded-full bg-[#B89758] text-[#09090B] font-mono text-[10px] font-bold uppercase tracking-wider">
                                    {{ __('services.div7.tag') }}
                                </span>
                                <span class="text-xs font-mono text-[#D8BF8A]">{{ __('services.div7.subtag') }}</span>
                            </div>
                            <h2 class="apple-display text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-2 leading-tight">
                                {{ __('services.div7.title') }}
                            </h2>
                            <span class="text-xs uppercase tracking-widest text-[#D8BF8A] block font-semibold mb-4">
                                {{ __('services.div7.subtitle') }}
                            </span>
                            <p class="text-sm sm:text-base text-white/80 leading-relaxed mb-6 font-light">
                                {{ __('services.div7.desc') }}
                            </p>
                            <button onclick="openQuoteModal('International Sourcing')" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full bg-[#B89758] hover:bg-[#c9a764] text-[#09090B] text-xs font-semibold transition-all cursor-pointer shadow-sm active:scale-[0.98]">
                                <span>{{ __('services.div7.cta') }}</span>
                                <span>→</span>
                            </button>
                        </div>

                        <div class="lg:col-span-6 space-y-3.5">
                            <div class="p-4 rounded-xl bg-white/[0.06] border border-white/10">
                                <span class="font-bold text-white text-sm block mb-1">01. {{ __('services.div7.b1') }}</span>
                            </div>
                            <div class="p-4 rounded-xl bg-white/[0.06] border border-white/10">
                                <span class="font-bold text-white text-sm block mb-1">02. {{ __('services.div7.b2') }}</span>
                            </div>
                            <div class="p-4 rounded-xl bg-white/[0.06] border border-white/10">
                                <span class="font-bold text-white text-sm block mb-1">03. {{ __('services.div7.b3') }}</span>
                            </div>
                            <div class="p-4 rounded-xl bg-white/[0.06] border border-white/10">
                                <span class="font-bold text-white text-sm block mb-1">04. {{ __('services.div7.b4') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <!-- ========================================================================= -->
    <!-- SECTION 3: ARCHITECTURAL CLOSING CALLOUT BANNER                           -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 bg-white">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 reveal-up">
            <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#18181B] to-[#09090B] rounded-[34px] p-10 sm:p-14 lg:p-16 relative overflow-hidden shadow-2xl text-white">
                <!-- Ambient Glow -->
                <div class="absolute -top-28 -right-28 w-[400px] h-[400px] rounded-full bg-[#B89758]/15 blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-28 -left-28 w-[340px] h-[340px] rounded-full bg-white/[0.04] blur-3xl pointer-events-none"></div>

                <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                    <div class="max-w-2xl">
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-[#D8BF8A] block mb-3">
                            {{ __('services.cta.badge') }}
                        </span>
                        <h2 class="apple-display text-3xl sm:text-4xl font-bold leading-tight mb-4">
                            {{ __('services.cta.title') }}
                        </h2>
                        <p class="text-sm sm:text-base text-white/80 font-light leading-relaxed">
                            {{ __('services.cta.desc') }}
                        </p>
                    </div>
                    <div class="shrink-0 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <button onclick="openQuoteModal('General Business Inquiry')" class="group inline-flex items-center justify-center px-8 py-4 bg-white hover:bg-[#F5F5F7] text-[#18181B] text-sm font-semibold rounded-full transition-all duration-300 shadow-md hover:shadow-xl active:scale-[0.98] cursor-pointer">
                            <span>{{ __('services.cta.btn') }}</span>
                            <span class="ml-2 text-[#B89758] transition-transform duration-300 group-hover:translate-x-1">→</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ULTRA-CLEAN MINIMAL APPLE-STYLE FOOTER -->
    @include('partials.footer')

    @include('partials.rfq-modal')

    <!-- Interactive Motion & UI Controller -->
    <script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>
