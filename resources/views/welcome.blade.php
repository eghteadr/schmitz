<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-head', [
        'pageKey' => 'home',
        'title' => __('home.meta.title'),
        'description' => __('home.meta.description'),
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
<body class="selection:bg-schmitz-carbon selection:text-white overflow-x-hidden">

    <!-- APPLE-STYLE FROSTED STICKY NAVIGATION (WIDE CONTAINER) -->
    @include('partials.header')

    <!-- 1. ASYMMETRIC SPLIT HERO + EDGE-TO-EDGE SHOWCASE -->
    <section id="home" class="hero-ambient pt-12 pb-24 sm:pt-16 lg:pt-20 sm:pb-32">
        
        <!-- Top Asymmetric 12-Column Split Grid -->
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 xl:gap-16 items-center mb-14 lg:mb-20">
                
                <!-- Left Editorial Column (7 Cols) -->
                <div class="lg:col-span-7 text-left">
                    <!-- Eyebrow Pill -->
                    <div class="hero-animate-1 inline-flex items-center space-x-2.5 px-4 py-1.5 rounded-full bg-[#F5F5F7]/90 border border-black/[0.06] mb-7">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#B89758] animate-pulse"></span>
                        <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#18181B]">
                            {{ __('home.hero.badge') }}
                        </span>
                    </div>

                    <!-- Display Headline -->
                    <h1 class="hero-animate-2 apple-display text-4xl sm:text-6xl xl:text-[68px] font-bold text-[#18181B] leading-[1.03] mb-6">
                        {{ __('home.hero.title_line1') }}<br>
                        <span class="text-[#18181B]/85">{{ __('home.hero.title_line2') }}</span>
                    </h1>

                    <!-- Refined Subtitle -->
                    <p class="hero-animate-3 text-base sm:text-lg xl:text-[20px] text-[#6E6E73] font-normal leading-relaxed max-w-2xl mb-8">
                        {{ __('home.hero.subtitle') }}
                    </p>

                    <!-- Sleek Apple-Style Pill CTAs -->
                    <div class="hero-animate-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 sm:gap-4 mb-10">
                        <a href="#services" class="group inline-flex items-center justify-center px-8 py-4 bg-schmitz-red hover:bg-schmitz-redHover text-white text-sm font-medium rounded-full transition-all duration-300 shadow-sm hover:shadow-xl active:scale-[0.98]">
                            <span>{{ __('home.hero.cta_explore') }}</span>
                        </a>
                        <button onclick="openQuoteModal('General Business Inquiry')" class="group inline-flex items-center justify-center px-8 py-4 bg-[#F5F5F7] hover:bg-[#E8E8ED] text-[#18181B] text-sm font-medium rounded-full transition-all duration-300 active:scale-[0.98] cursor-pointer">
                            <span>{{ __('home.hero.cta_contact') }}</span>
                            <span class="ml-2 text-[#B89758] transition-transform duration-300 group-hover:translate-x-1">→</span>
                        </button>
                    </div>

                    <!-- Horizontal 4-Pillar Architectural Strip -->
                    <div class="hero-animate-4 pt-6 border-t border-black/[0.07] grid grid-cols-2 sm:grid-cols-4 gap-4 text-xs">
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block mb-0.5">01</span>
                            <span class="font-semibold text-[#18181B]">{{ __('home.hero.pillar_1') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block mb-0.5">02</span>
                            <span class="font-semibold text-[#18181B]">{{ __('home.hero.pillar_2') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block mb-0.5">03</span>
                            <span class="font-semibold text-[#18181B]">{{ __('home.hero.pillar_3') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block mb-0.5">04</span>
                            <span class="font-semibold text-[#18181B]">{{ __('home.hero.pillar_4') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Right Interactive Commercial Hub Card (5 Cols) -->
                <div class="lg:col-span-5 hero-animate-3">
                    <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#18181B] to-[#09090B] text-white rounded-[30px] p-7 sm:p-9 shadow-[0_32px_64px_-16px_rgba(24,24,27,0.28)] relative">
                        <!-- Subtle Top Glow -->
                        <div class="absolute -top-20 -right-20 w-56 h-56 rounded-full bg-[#B89758]/20 blur-3xl pointer-events-none"></div>
                        
                        <div class="relative z-10">
                            <!-- Card Header -->
                            <div class="flex items-center justify-between pb-5 mb-6 border-b border-white/10">
                                <div>
                                    <span class="text-[10px] uppercase tracking-[0.22em] text-[#D8BF8A] font-semibold block">{{ __('home.hero.hub.desk_tag') }}</span>
                                    <span class="text-base font-semibold text-white mt-0.5 block">{{ __('home.hero.hub.desk_title') }}</span>
                                </div>
                                <span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-white/10 text-[11px] font-medium text-white">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                    <span>{{ __('home.hero.hub.active_rfq') }}</span>
                                </span>
                            </div>

                            <!-- Quick Category Launchers -->
                            <div class="space-y-3 mb-7">
                                <button onclick="openQuoteModal('Textile Raw Materials')" class="w-full text-left p-4 rounded-2xl bg-white/[0.06] hover:bg-white/[0.12] border border-white/10 transition-all duration-300 flex items-center justify-between group cursor-pointer">
                                    <div>
                                        <span class="text-[10px] uppercase tracking-wider text-[#D8BF8A] block">{{ __('home.hero.hub.div1_tag') }}</span>
                                        <span class="text-sm font-semibold text-white">{{ __('home.hero.hub.div1_title') }}</span>
                                    </div>
                                    <span class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-xs text-white group-hover:bg-[#B89758] group-hover:text-[#09090B] transition-colors">→</span>
                                </button>

                                <button onclick="openQuoteModal('Industrial Machinery & Equipment')" class="w-full text-left p-4 rounded-2xl bg-white/[0.06] hover:bg-white/[0.12] border border-white/10 transition-all duration-300 flex items-center justify-between group cursor-pointer">
                                    <div>
                                        <span class="text-[10px] uppercase tracking-wider text-[#D8BF8A] block">{{ __('home.hero.hub.div2_tag') }}</span>
                                        <span class="text-sm font-semibold text-white">{{ __('home.hero.hub.div2_title') }}</span>
                                    </div>
                                    <span class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-xs text-white group-hover:bg-[#B89758] group-hover:text-[#09090B] transition-colors">→</span>
                                </button>

                                <button onclick="openQuoteModal('Logistics Coordination')" class="w-full text-left p-4 rounded-2xl bg-white/[0.06] hover:bg-white/[0.12] border border-white/10 transition-all duration-300 flex items-center justify-between group cursor-pointer">
                                    <div>
                                        <span class="text-[10px] uppercase tracking-wider text-[#D8BF8A] block">{{ __('home.hero.hub.div3_tag') }}</span>
                                        <span class="text-sm font-semibold text-white">{{ __('home.hero.hub.div3_title') }}</span>
                                    </div>
                                    <span class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-xs text-white group-hover:bg-[#B89758] group-hover:text-[#09090B] transition-colors">→</span>
                                </button>
                            </div>

                            <!-- Bottom Metrics Strip -->
                            <div class="grid grid-cols-3 gap-4 pt-5 border-t border-white/10 text-xs">
                                <div>
                                    <span class="block text-white/50 text-[10px] uppercase tracking-wider mb-0.5">{{ __('home.hero.hub.metric_hq_label') }}</span>
                                    <span class="font-semibold text-white">{{ __('home.hero.hub.metric_hq_val') }}</span>
                                </div>
                                <div>
                                    <span class="block text-white/50 text-[10px] uppercase tracking-wider mb-0.5">{{ __('home.hero.hub.metric_terms_label') }}</span>
                                    <span class="font-semibold text-white">{{ __('home.hero.hub.metric_terms_val') }}</span>
                                </div>
                                <div>
                                    <span class="block text-white/50 text-[10px] uppercase tracking-wider mb-0.5">{{ __('home.hero.hub.metric_model_label') }}</span>
                                    <span class="font-semibold text-white">{{ __('home.hero.hub.metric_model_val') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Full-Width Edge-to-Edge Widescreen Showcase Frame -->
        <div class="max-w-[1540px] mx-auto px-3 sm:px-6 lg:px-8">
            <div id="hero-showcase" class="hero-animate-5 relative rounded-[28px] lg:rounded-[34px] overflow-hidden bg-[#18181B] shadow-[0_32px_70px_-15px_rgba(24,24,27,0.22)] border border-black/[0.06]">
                <div class="aspect-[16/10] sm:aspect-[21/8] w-full relative overflow-hidden">
                    <img 
                        id="hero-parallax-img"
                        src="{{ asset('images/Sunset Container Ship at Harbor.png') }}" 
                        onerror="this.src='https://placehold.co/2200x900/18181B/FFFFFF?text=SCHMITZ+GLOBAL+TRADE'"
                        alt="{{ __('home.hero.showcase.img_alt') }}" 
                        class="w-full h-full object-cover object-[center_35%] will-change-transform transition-transform duration-300 ease-out"
                    >
                    <!-- Deep Navy Gradient Vignette -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#09090B]/95 via-[#09090B]/35 to-[#18181B]/10"></div>
                    
                    <!-- Floating Frosted Glass Operational Bar -->
                    <div class="absolute bottom-4 inset-x-4 sm:bottom-8 sm:inset-x-8 p-5 sm:p-8 rounded-2xl bg-[#09090B]/65 backdrop-blur-xl border border-white/15 flex flex-col lg:flex-row lg:items-center justify-between gap-6 text-white">
                        <div class="max-w-3xl">
                            <span class="text-[10px] uppercase tracking-[0.22em] text-[#D8BF8A] font-semibold block mb-1.5">
                                {{ __('home.hero.showcase.tag') }}
                            </span>
                            <p class="text-xs sm:text-[15px] text-white/90 font-light leading-relaxed">
                                {{ __('home.hero.showcase.desc') }}
                            </p>
                        </div>
                        <div class="shrink-0 grid grid-cols-3 gap-5 sm:gap-8 text-xs border-t lg:border-t-0 lg:border-l pt-4 lg:pt-0 lg:pl-8 border-white/15">
                            <div>
                                <span class="block text-white/55 uppercase tracking-wider text-[10px] mb-0.5">{{ __('home.hero.showcase.metric_hq_label') }}</span>
                                <span class="font-semibold text-white">{{ __('home.hero.showcase.metric_hq_val') }}</span>
                            </div>
                            <div>
                                <span class="block text-white/55 uppercase tracking-wider text-[10px] mb-0.5">{{ __('home.hero.showcase.metric_focus_label') }}</span>
                                <span class="font-semibold text-white">{{ __('home.hero.showcase.metric_focus_val') }}</span>
                            </div>
                            <div>
                                <span class="block text-white/55 uppercase tracking-wider text-[10px] mb-0.5">{{ __('home.hero.showcase.metric_exec_label') }}</span>
                                <span class="font-semibold text-white">{{ __('home.hero.showcase.metric_exec_val') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wide Editorial Narrative Strip -->
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 mt-16 sm:mt-24">
            <div class="relative bg-gradient-to-b from-[#FBFBFC] to-white rounded-[28px] sm:rounded-[36px] p-6 sm:p-10 lg:p-12 border border-black/[0.06] shadow-[0_20px_50px_-20px_rgba(24,24,27,0.06)] reveal-up">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 xl:gap-12 items-start">
                    
                    <!-- Left Column: Section Header & Highlights (4 cols) -->
                    <div class="lg:col-span-4 flex flex-col justify-between h-full">
                        <div>
                            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-[0.18em] text-[#B89758] bg-[#B89758]/10 border border-[#B89758]/20 mb-4">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#B89758] animate-pulse"></span>
                                {{ __('home.hero.narrative.scope_badge') }}
                            </span>
                            <h2 class="apple-subdisplay text-2xl sm:text-3xl lg:text-[32px] font-bold text-[#18181B] leading-[1.15] mb-4">
                                {{ __('home.hero.narrative.title') }}
                            </h2>
                            <p class="text-[#48484A] text-[15px] sm:text-base leading-relaxed">
                                {{ __('home.hero.narrative.desc') }}
                            </p>
                        </div>

                        <!-- Value Highlights Pills -->
                        <div class="mt-8 pt-6 border-t border-black/[0.06] flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-white border border-black/[0.08] text-xs font-medium text-[#18181B] shadow-xs">
                                <svg class="w-3.5 h-3.5 text-[#B89758]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                {{ __('home.hero.narrative.pill_manufacturer') }}
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-white border border-black/[0.08] text-xs font-medium text-[#18181B] shadow-xs">
                                <svg class="w-3.5 h-3.5 text-[#B89758]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                {{ __('home.hero.narrative.pill_compliance') }}
                            </span>
                        </div>
                    </div>

                    <!-- Right Column: 2 Dedicated Narrative Cards (8 cols) -->
                    <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <!-- Card 1: Sourcing & Supply Continuity -->
                        <div class="bg-white rounded-2xl sm:rounded-3xl p-6 sm:p-7 border border-black/[0.07] shadow-xs hover:shadow-md hover:border-[#B89758]/35 transition-all duration-300 flex flex-col justify-between">
                            <div>
                                <div class="w-10 h-10 rounded-xl bg-[#18181B]/5 flex items-center justify-center text-[#18181B] mb-5 border border-[#18181B]/10">
                                    <svg class="w-5 h-5 text-[#B89758]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <span class="text-[11px] font-semibold uppercase tracking-wider text-[#B89758] block mb-1.5">{{ __('home.hero.narrative.card1_tag') }}</span>
                                <h3 class="text-base sm:text-[17px] font-bold text-[#18181B] mb-3 leading-snug">
                                    {{ __('home.hero.narrative.card1_title') }}
                                </h3>
                                <p class="text-[#3A3A3C] text-[14.5px] sm:text-[15px] leading-[1.7] font-normal">
                                    {!! __('home.hero.narrative.card1_p1', ['textiles' => '<strong class="font-semibold text-[#18181B]">' . __('home.hero.narrative.card1_textiles') . '</strong>', 'machinery' => '<strong class="font-semibold text-[#18181B]">' . __('home.hero.narrative.card1_machinery') . '</strong>']) !!} {!! __('home.hero.narrative.card1_p2', ['highlight' => '<strong class="font-semibold text-[#18181B]">' . __('home.hero.narrative.card1_highlight') . '</strong>']) !!}
                                </p>
                            </div>
                            
                            <div class="mt-6 pt-4 border-t border-black/[0.05] flex items-center gap-2 text-[12px] font-medium text-[#6E6E73]">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                {{ __('home.hero.narrative.card1_status') }}
                            </div>
                        </div>

                        <!-- Card 2: End-to-End Commercial Execution -->
                        <div class="bg-white rounded-2xl sm:rounded-3xl p-6 sm:p-7 border border-black/[0.07] shadow-xs hover:shadow-md hover:border-[#B89758]/35 transition-all duration-300 flex flex-col justify-between">
                            <div>
                                <div class="w-10 h-10 rounded-xl bg-[#18181B]/5 flex items-center justify-center text-[#18181B] mb-5 border border-[#18181B]/10">
                                    <svg class="w-5 h-5 text-[#B89758]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <span class="text-[11px] font-semibold uppercase tracking-wider text-[#B89758] block mb-1.5">{{ __('home.hero.narrative.card2_tag') }}</span>
                                <h3 class="text-base sm:text-[17px] font-bold text-[#18181B] mb-3 leading-snug">
                                    {{ __('home.hero.narrative.card2_title') }}
                                </h3>
                                <p class="text-[#3A3A3C] text-[14.5px] sm:text-[15px] leading-[1.7] font-normal">
                                    {!! __('home.hero.narrative.card2_p1', ['stages' => '<strong class="font-semibold text-[#18181B]">' . __('home.hero.narrative.card2_stages') . '</strong>', 'highlight' => '<strong class="font-semibold text-[#18181B]">' . __('home.hero.narrative.card2_highlight') . '</strong>']) !!}
                                </p>
                            </div>
                            
                            <div class="mt-6 pt-4 border-t border-black/[0.05] flex items-center gap-2 text-[12px] font-medium text-[#6E6E73]">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                                {{ __('home.hero.narrative.card2_status') }}
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 2. CORPORATE POSITIONING ("International Trade, Managed with Purpose") -->
    <section id="about" class="py-24 sm:py-32 bg-schmitz-appleElevated border-y border-black/[0.05]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Editorial Copy (6 cols) -->
                <div class="lg:col-span-6 reveal-up">
                    <span class="text-xs font-semibold uppercase tracking-[0.18em] text-schmitz-gold block mb-4">
                        {{ __('home.about.badge') }}
                    </span>
                    <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-schmitz-carbon leading-[1.08] mb-8">
                        {{ __('home.about.title') }}
                    </h2>
                    
                    <div class="space-y-5 text-schmitz-appleMuted text-base sm:text-[17px] leading-relaxed">
                        <p>
                            {{ __('home.about.p1') }}
                        </p>
                        <p class="text-schmitz-carbon font-semibold text-lg sm:text-xl apple-subdisplay py-1">
                            {{ __('home.about.quote') }}
                        </p>
                        <p>
                            {{ __('home.about.p2') }}
                        </p>
                        <p>
                            {{ __('home.about.p3') }}
                        </p>
                    </div>
                </div>

                <!-- Right Apple-style Elevated Visual Tile (6 cols) -->
                <div class="lg:col-span-6 reveal-up reveal-delay-1">
                    <div class="bento-card bg-white rounded-[30px] p-5 sm:p-6 shadow-xs">
                        <div class="rounded-2xl overflow-hidden aspect-[16/10] bg-schmitz-carbon mb-6 group">
                            <img 
                                src="{{ asset('images/Golden Hour Over the Bosphorus.png') }}" 
                                onerror="this.src='https://placehold.co/900x560/18181B/FFFFFF?text=INDUSTRIAL+OPERATIONS'"
                                alt="{{ __('home.about.img_alt') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>
                        <div class="px-2 pb-2 grid grid-cols-1 sm:grid-cols-3 gap-5 relative z-10">
                            <div class="p-4 rounded-2xl bg-schmitz-appleGray/70">
                                <span class="text-[10px] uppercase tracking-wider text-schmitz-appleMuted block">{{ __('home.about.tile_base_label') }}</span>
                                <span class="text-sm font-semibold text-schmitz-carbon mt-1 block">{{ __('home.about.tile_base_val') }}</span>
                            </div>
                            <div class="p-4 rounded-2xl bg-schmitz-appleGray/70">
                                <span class="text-[10px] uppercase tracking-wider text-schmitz-appleMuted block">{{ __('home.about.tile_focus_label') }}</span>
                                <span class="text-sm font-semibold text-schmitz-carbon mt-1 block">{{ __('home.about.tile_focus_val') }}</span>
                            </div>
                            <div class="p-4 rounded-2xl bg-schmitz-appleGray/70">
                                <span class="text-[10px] uppercase tracking-wider text-schmitz-appleMuted block">{{ __('home.about.tile_terms_label') }}</span>
                                <span class="text-sm font-semibold text-schmitz-carbon mt-1 block">{{ __('home.about.tile_terms_val') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. OUR CORE BUSINESS AREAS (Wide Asymmetric Apple Spotlight Bento Grid) -->
    <section id="services" class="py-24 sm:py-32 bg-white">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <!-- Split Section Header -->
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-14 sm:mb-16 reveal-up">
                <div>
                    <span class="text-xs font-semibold uppercase tracking-[0.18em] text-schmitz-gold block mb-3">
                        {{ __('home.services.badge') }}
                    </span>
                    <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-schmitz-carbon leading-[1.08]">
                        {{ __('home.services.title') }}
                    </h2>
                </div>
                <p class="text-sm sm:text-base text-schmitz-appleMuted max-w-md leading-relaxed">
                    {{ __('home.services.subtitle') }}
                </p>
            </div>

            <!-- Asymmetric Bento Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8">
                
                <!-- Bento Card 01: Textile Raw Materials (Featured Deep Navy 7 Cols) -->
                <article class="lg:col-span-7 bento-card dark-bento bg-gradient-to-br from-schmitz-carbon via-schmitz-carbon to-schmitz-dark text-white rounded-[30px] overflow-hidden flex flex-col justify-between reveal-up group">
                    <div class="p-8 sm:p-10 pb-6 relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <span class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-white/10 text-schmitz-goldSoft text-[11px] font-semibold uppercase tracking-[0.16em]">
                                <span>{{ __('home.services.card1_badge') }}</span>
                            </span>
                            <button onclick="openQuoteModal('Textile Raw Materials')" class="inline-flex items-center text-xs font-semibold text-white/90 hover:text-schmitz-goldSoft transition-colors cursor-pointer">
                                <span>{{ __('home.services.card1_cta') }}</span>
                                <span class="ml-1.5 transition-transform duration-300 group-hover:translate-x-1.5">→</span>
                            </button>
                        </div>
                        <h3 class="apple-subdisplay text-2xl sm:text-3xl font-bold text-white mb-4">
                            {{ __('home.services.card1_title') }}
                        </h3>
                        <p class="text-sm sm:text-[15px] text-white/80 leading-relaxed mb-3 font-light">
                            {{ __('home.services.card1_p1') }}
                        </p>
                        <p class="text-sm sm:text-[15px] text-white/75 leading-relaxed font-light">
                            {{ __('home.services.card1_p2') }}
                        </p>
                    </div>
                    <div class="px-8 sm:px-10 pt-2 relative z-10">
                        <div class="h-52 sm:h-64 rounded-t-2xl overflow-hidden bg-schmitz-dark border-t border-x border-white/10">
                            <img 
                                src="{{ asset('images/Modern Yarn Mill Production Line.png') }}" 
                                onerror="this.src='https://placehold.co/1100x520/09090B/FFFFFF?text=COMBED+WOOL+TOPS+%26+FIBERS'"
                                alt="{{ __('home.services.card1_img_alt') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover opacity-90 transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>
                    </div>
                </article>

                <!-- Bento Card 02: Industrial Machinery & Equipment (5 Cols) -->
                <article class="lg:col-span-5 bento-card bg-schmitz-appleGray rounded-[30px] overflow-hidden flex flex-col justify-between reveal-up reveal-delay-1 group">
                    <div class="p-8 sm:p-10 relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-xs font-semibold uppercase tracking-[0.16em] text-schmitz-gold">{{ __('home.services.card2_badge') }}</span>
                            <span class="w-9 h-9 rounded-full bg-white flex items-center justify-center text-schmitz-carbon shadow-2xs transition-transform duration-500 group-hover:rotate-45">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <circle cx="12" cy="12" r="3" stroke-width="1.6"/>
                                </svg>
                            </span>
                        </div>
                        <h3 class="apple-subdisplay text-2xl sm:text-3xl font-bold text-schmitz-carbon mb-4">
                            {{ __('home.services.card2_title') }}
                        </h3>
                        <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed mb-3">
                            {{ __('home.services.card2_p1') }}
                        </p>
                        <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed">
                            {{ __('home.services.card2_p2') }}
                        </p>
                    </div>
                    <div class="px-8 sm:px-10 pb-8 sm:pb-10 relative z-10">
                        <div class="rounded-2xl overflow-hidden h-48 mb-6 bg-schmitz-carbon">
                            <img 
                                src="{{ asset('images/Precision CNC Machining in Action.png') }}" 
                                onerror="this.src='https://placehold.co/800x450/18181B/FFFFFF?text=INDUSTRIAL+MACHINERY'"
                                alt="{{ __('home.services.card2_img_alt') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>
                        <button onclick="openQuoteModal('Industrial Machinery & Equipment')" class="inline-flex items-center text-xs font-semibold uppercase tracking-wider text-schmitz-carbon hover:text-schmitz-gold transition-colors cursor-pointer">
                            <span>{{ __('home.services.card2_cta') }}</span>
                            <span class="ml-2 transition-transform duration-300 group-hover:translate-x-1.5">→</span>
                        </button>
                    </div>
                </article>

                <!-- Bento Card 03: International Procurement & Trading (5 Cols) -->
                <article class="lg:col-span-5 bento-card bg-schmitz-appleGray rounded-[30px] p-8 sm:p-10 flex flex-col justify-between reveal-up group">
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-xs font-semibold uppercase tracking-[0.16em] text-schmitz-gold">{{ __('home.services.card3_badge') }}</span>
                            <span class="w-9 h-9 rounded-full bg-white flex items-center justify-center text-schmitz-carbon shadow-2xs transition-transform duration-500 group-hover:scale-110">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="9" stroke-width="1.6"/>
                                    <path stroke-width="1.6" d="M3.6 9h16.8M3.6 15h16.8M12 3a14.5 14.5 0 010 18M12 3a14.5 14.5 0 000 18"/>
                                </svg>
                            </span>
                        </div>
                        <h3 class="apple-subdisplay text-2xl sm:text-3xl font-bold text-schmitz-carbon mb-4">
                            {{ __('home.services.card3_title') }}
                        </h3>
                        <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed mb-3">
                            {{ __('home.services.card3_p1') }}
                        </p>
                        <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed mb-8">
                            {{ __('home.services.card3_p2') }}
                        </p>
                    </div>
                    <div class="pt-5 border-t border-black/[0.06] relative z-10">
                        <button onclick="openQuoteModal('International Sourcing')" class="inline-flex items-center text-xs font-semibold uppercase tracking-wider text-schmitz-carbon group-hover:text-schmitz-gold transition-colors cursor-pointer">
                            <span>{{ __('home.services.card3_cta') }}</span>
                            <span class="ml-2 transition-transform duration-300 group-hover:translate-x-1.5">→</span>
                        </button>
                    </div>
                </article>

                <!-- Bento Card 04: Supply Chain & Logistics Coordination (7 Cols) -->
                <article class="lg:col-span-7 bento-card bg-schmitz-appleGray rounded-[30px] overflow-hidden flex flex-col justify-between reveal-up reveal-delay-1 group">
                    <div class="p-8 sm:p-10 pb-6 relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-xs font-semibold uppercase tracking-[0.16em] text-schmitz-gold">{{ __('home.services.card4_badge') }}</span>
                            <button onclick="openQuoteModal('Logistics Coordination')" class="inline-flex items-center text-xs font-semibold text-schmitz-carbon hover:text-schmitz-gold transition-colors cursor-pointer">
                                <span>{{ __('home.services.card4_cta') }}</span>
                                <span class="ml-1.5 transition-transform duration-300 group-hover:translate-x-1.5">→</span>
                            </button>
                        </div>
                        <h3 class="apple-subdisplay text-2xl sm:text-3xl font-bold text-schmitz-carbon mb-4">
                            {{ __('home.services.card4_title') }}
                        </h3>
                        <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed mb-3">
                            {{ __('home.services.card4_p1') }}
                        </p>
                        <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed">
                            {{ __('home.services.card4_p2') }}
                        </p>
                    </div>
                    <div class="px-8 sm:px-10 pt-2 relative z-10">
                        <div class="h-52 sm:h-60 rounded-t-2xl overflow-hidden bg-schmitz-carbon">
                            <img 
                                src="{{ asset('images/Twilight at the Container Port.png') }}" 
                                onerror="this.src='https://placehold.co/1100x520/18181B/FFFFFF?text=SUPPLY+CHAIN+%26+LOGISTICS'"
                                alt="{{ __('home.services.card4_img_alt') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- 4. A PRACTICAL APPROACH TO GLOBAL SOURCING (Sticky Left Header + 2x2 Interactive Grid) -->
    <section id="process" class="py-24 sm:py-32 bg-schmitz-appleElevated border-y border-black/[0.05]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Sticky Narrative Column (4 Cols) -->
                <div class="lg:col-span-4 lg:sticky lg:top-28 reveal-up">
                    <span class="text-xs font-semibold uppercase tracking-[0.18em] text-schmitz-gold block mb-4">
                        {{ __('home.process.badge') }}
                    </span>
                    <h2 class="apple-display text-3xl sm:text-4xl lg:text-[42px] font-bold text-schmitz-carbon leading-[1.08] mb-6">
                        {{ __('home.process.title') }}
                    </h2>
                    <p class="text-base text-schmitz-appleMuted leading-relaxed mb-8">
                        {{ __('home.process.desc') }}
                    </p>

                    <!-- Interactive Progress Indicator -->
                    <div class="p-5 rounded-2xl bg-white border border-black/[0.05] shadow-2xs">
                        <div class="flex items-center justify-between text-xs font-semibold text-schmitz-carbon mb-2.5">
                            <span>{{ __('home.process.progress_label') }}</span>
                            <span id="process-step-label" data-pattern="{{ __('home.process.stage_pattern') }}" class="text-schmitz-gold">{{ __('home.process.stage_default') }}</span>
                        </div>
                        <div class="h-1.5 w-full bg-schmitz-appleGray rounded-full overflow-hidden">
                            <div id="process-progress-bar" class="h-full bg-gradient-to-r from-schmitz-carbon to-schmitz-gold rounded-full transition-all duration-500 ease-out" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>

                <!-- Right 2x2 Interactive Cards Grid (8 Cols) -->
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-6 reveal-up reveal-delay-1">
                    
                    <!-- Step 01 -->
                    <div onclick="selectProcessStep(1)" onmouseenter="selectProcessStep(1)" id="proc-card-1" class="bento-card bg-white rounded-[28px] p-8 sm:p-9 cursor-pointer ring-2 ring-schmitz-carbon shadow-md transition-all duration-300">
                        <div class="flex items-center justify-between mb-8 relative z-10">
                            <span class="w-10 h-10 rounded-full bg-schmitz-carbon text-white text-xs font-bold flex items-center justify-center transition-colors duration-300">01</span>
                            <span class="text-xs font-semibold text-schmitz-gold transition-colors duration-300">●</span>
                        </div>
                        <h3 class="text-xl font-bold text-schmitz-carbon mb-3 tracking-tight relative z-10">
                            {{ __('home.process.step1_title') }}
                        </h3>
                        <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed relative z-10">
                            {{ __('home.process.step1_desc') }}
                        </p>
                    </div>

                    <!-- Step 02 -->
                    <div onclick="selectProcessStep(2)" onmouseenter="selectProcessStep(2)" id="proc-card-2" class="bento-card bg-white rounded-[28px] p-8 sm:p-9 cursor-pointer transition-all duration-300">
                        <div class="flex items-center justify-between mb-8 relative z-10">
                            <span class="w-10 h-10 rounded-full bg-schmitz-appleGray text-schmitz-carbon text-xs font-bold flex items-center justify-center transition-colors duration-300">02</span>
                            <span class="text-xs font-semibold text-slate-300 transition-colors duration-300">●</span>
                        </div>
                        <h3 class="text-xl font-bold text-schmitz-carbon mb-3 tracking-tight relative z-10">
                            {{ __('home.process.step2_title') }}
                        </h3>
                        <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed relative z-10">
                            {{ __('home.process.step2_desc') }}
                        </p>
                    </div>

                    <!-- Step 03 -->
                    <div onclick="selectProcessStep(3)" onmouseenter="selectProcessStep(3)" id="proc-card-3" class="bento-card bg-white rounded-[28px] p-8 sm:p-9 cursor-pointer transition-all duration-300">
                        <div class="flex items-center justify-between mb-8 relative z-10">
                            <span class="w-10 h-10 rounded-full bg-schmitz-appleGray text-schmitz-carbon text-xs font-bold flex items-center justify-center transition-colors duration-300">03</span>
                            <span class="text-xs font-semibold text-slate-300 transition-colors duration-300">●</span>
                        </div>
                        <h3 class="text-xl font-bold text-schmitz-carbon mb-3 tracking-tight relative z-10">
                            {{ __('home.process.step3_title') }}
                        </h3>
                        <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed relative z-10">
                            {{ __('home.process.step3_desc') }}
                        </p>
                    </div>

                    <!-- Step 04 -->
                    <div onclick="selectProcessStep(4)" onmouseenter="selectProcessStep(4)" id="proc-card-4" class="bento-card bg-white rounded-[28px] p-8 sm:p-9 cursor-pointer transition-all duration-300">
                        <div class="flex items-center justify-between mb-8 relative z-10">
                            <span class="w-10 h-10 rounded-full bg-schmitz-appleGray text-schmitz-carbon text-xs font-bold flex items-center justify-center transition-colors duration-300">04</span>
                            <span class="text-xs font-semibold text-slate-300 transition-colors duration-300">●</span>
                        </div>
                        <h3 class="text-xl font-bold text-schmitz-carbon mb-3 tracking-tight relative z-10">
                            {{ __('home.process.step4_title') }}
                        </h3>
                        <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed relative z-10">
                            {{ __('home.process.step4_desc') }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 5. INDUSTRIES WE SERVE (Wide 3-Column Feature Tiles) -->
    <section id="industries" class="py-24 sm:py-32 bg-white">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-14 sm:mb-16 reveal-up">
                <div>
                    <span class="text-xs font-semibold uppercase tracking-[0.18em] text-schmitz-gold block mb-3">
                        {{ __('home.industries.badge') }}
                    </span>
                    <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-schmitz-carbon leading-[1.08]">
                        {{ __('home.industries.title') }}
                    </h2>
                </div>
                <p class="text-sm sm:text-base text-schmitz-appleMuted max-w-xl leading-relaxed">
                    {{ __('home.industries.desc') }}
                </p>
            </div>

            <!-- 3 Sector Feature Tiles -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-7 lg:gap-8">
                
                <!-- Sector 1 -->
                <div class="bento-card bg-schmitz-appleGray rounded-[30px] overflow-hidden flex flex-col justify-between reveal-up group">
                    <div class="relative z-10">
                        <div class="h-60 bg-schmitz-carbon overflow-hidden">
                            <img 
                                src="{{ asset('images/Modern Cotton Processing Mill.png') }}" 
                                onerror="this.src='https://placehold.co/800x500/18181B/FFFFFF?text=TEXTILE+PROCESSING'"
                                alt="{{ __('home.industries.sector1_img_alt') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>
                        <div class="p-8 sm:p-9">
                            <span class="text-[11px] font-semibold uppercase tracking-[0.16em] text-schmitz-gold block mb-2">{{ __('home.industries.sector1_tag') }}</span>
                            <h3 class="text-xl sm:text-2xl font-bold text-schmitz-carbon mb-3 tracking-tight">
                                {{ __('home.industries.sector1_title') }}
                            </h3>
                            <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed">
                                {{ __('home.industries.sector1_desc') }}
                            </p>
                        </div>
                    </div>
                    <div class="px-8 sm:px-9 pb-8 pt-4 border-t border-black/[0.06] flex items-center justify-between text-xs font-medium text-schmitz-carbon relative z-10">
                        <span>{{ __('home.industries.sector1_pills') }}</span>
                        <button onclick="openQuoteModal('Textile Raw Materials')" class="w-9 h-9 rounded-full bg-white flex items-center justify-center shadow-2xs group-hover:bg-schmitz-carbon group-hover:text-white transition-all duration-300 cursor-pointer">→</button>
                    </div>
                </div>

                <!-- Sector 2 -->
                <div class="bento-card bg-schmitz-appleGray rounded-[30px] overflow-hidden flex flex-col justify-between reveal-up reveal-delay-1 group">
                    <div class="relative z-10">
                        <div class="h-60 bg-schmitz-carbon overflow-hidden">
                            <img 
                                src="{{ asset('images/Precision Machined Parts Workshop.png') }}" 
                                onerror="this.src='https://placehold.co/800x500/18181B/FFFFFF?text=INDUSTRIAL+MANUFACTURING'"
                                alt="{{ __('home.industries.sector2_img_alt') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>
                        <div class="p-8 sm:p-9">
                            <span class="text-[11px] font-semibold uppercase tracking-[0.16em] text-schmitz-gold block mb-2">{{ __('home.industries.sector2_tag') }}</span>
                            <h3 class="text-xl sm:text-2xl font-bold text-schmitz-carbon mb-3 tracking-tight">
                                {{ __('home.industries.sector2_title') }}
                            </h3>
                            <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed">
                                {{ __('home.industries.sector2_desc') }}
                            </p>
                        </div>
                    </div>
                    <div class="px-8 sm:px-9 pb-8 pt-4 border-t border-black/[0.06] flex items-center justify-between text-xs font-medium text-schmitz-carbon relative z-10">
                        <span>{{ __('home.industries.sector2_pills') }}</span>
                        <button onclick="openQuoteModal('Industrial Machinery & Equipment')" class="w-9 h-9 rounded-full bg-white flex items-center justify-center shadow-2xs group-hover:bg-schmitz-carbon group-hover:text-white transition-all duration-300 cursor-pointer">→</button>
                    </div>
                </div>

                <!-- Sector 3 -->
                <div class="bento-card bg-schmitz-appleGray rounded-[30px] overflow-hidden flex flex-col justify-between reveal-up reveal-delay-2 group">
                    <div class="relative z-10">
                        <div class="h-60 bg-schmitz-carbon overflow-hidden">
                            <img 
                                src="{{ asset('images/Engineering Design Review in Modern Office.png') }}" 
                                onerror="this.src='https://placehold.co/800x500/18181B/FFFFFF?text=COMMERCIAL+PROCUREMENT'"
                                alt="{{ __('home.industries.sector3_img_alt') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>
                        <div class="p-8 sm:p-9">
                            <span class="text-[11px] font-semibold uppercase tracking-[0.16em] text-schmitz-gold block mb-2">{{ __('home.industries.sector3_tag') }}</span>
                            <h3 class="text-xl sm:text-2xl font-bold text-schmitz-carbon mb-3 tracking-tight">
                                {{ __('home.industries.sector3_title') }}
                            </h3>
                            <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed">
                                {{ __('home.industries.sector3_desc') }}
                            </p>
                        </div>
                    </div>
                    <div class="px-8 sm:px-9 pb-8 pt-4 border-t border-black/[0.06] flex items-center justify-between text-xs font-medium text-schmitz-carbon relative z-10">
                        <span>{{ __('home.industries.sector3_pills') }}</span>
                        <button onclick="openQuoteModal('International Sourcing')" class="w-9 h-9 rounded-full bg-white flex items-center justify-center shadow-2xs group-hover:bg-schmitz-carbon group-hover:text-white transition-all duration-300 cursor-pointer">→</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. WHY WORK WITH SCHMITZ? (5-Tile Apple Spotlight Bento Grid) -->
    <section class="py-24 sm:py-32 bg-schmitz-appleElevated border-t border-black/[0.05]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-14 sm:mb-16 reveal-up">
                <div>
                    <span class="text-xs font-semibold uppercase tracking-[0.18em] text-schmitz-gold block mb-3">
                        {{ __('home.why.badge') }}
                    </span>
                    <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-schmitz-carbon leading-[1.08]">
                        {{ __('home.why.title') }}
                    </h2>
                </div>
                <p class="text-sm sm:text-base text-schmitz-appleMuted max-w-md leading-relaxed">
                    {{ __('home.why.desc') }}
                </p>
            </div>

            <!-- 5-Tile Bento Composition -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-6 sm:gap-7">
                
                <!-- Signature Deep Navy Hero Tile (Span 3) -->
                <div class="lg:col-span-3 bento-card dark-bento bg-gradient-to-br from-schmitz-carbon to-schmitz-dark text-white rounded-[30px] p-8 sm:p-10 flex flex-col justify-between reveal-up">
                    <div class="relative z-10">
                        <span class="inline-block px-3 py-1 rounded-full bg-white/10 text-schmitz-goldSoft text-xs font-semibold mb-6">01</span>
                        <h3 class="apple-subdisplay text-2xl font-bold text-white mb-4">
                            {{ __('home.why.tile1_title') }}
                        </h3>
                        <p class="text-sm sm:text-[15px] text-white/80 leading-relaxed font-light">
                            {{ __('home.why.tile1_desc') }}
                        </p>
                    </div>
                    <div class="mt-8 pt-5 border-t border-white/10 flex items-center space-x-2 text-xs text-schmitz-goldSoft font-medium relative z-10">
                        <span>{{ __('home.why.tile1_tag') }}</span>
                    </div>
                </div>

                <!-- Tile 02 (Span 3) -->
                <div class="lg:col-span-3 bento-card bg-white rounded-[30px] p-8 sm:p-10 flex flex-col justify-between reveal-up reveal-delay-1">
                    <div class="relative z-10">
                        <span class="inline-block px-3 py-1 rounded-full bg-schmitz-appleGray text-schmitz-carbon text-xs font-semibold mb-6">02</span>
                        <h3 class="apple-subdisplay text-2xl font-bold text-schmitz-carbon mb-4">
                            {{ __('home.why.tile2_title') }}
                        </h3>
                        <p class="text-sm sm:text-[15px] text-schmitz-appleMuted leading-relaxed">
                            {{ __('home.why.tile2_desc') }}
                        </p>
                    </div>
                    <div class="mt-8 pt-5 border-t border-black/[0.05] text-xs text-schmitz-appleMuted font-medium relative z-10">
                        {{ __('home.why.tile2_tag') }}
                    </div>
                </div>

                <!-- Tile 03 (Span 2) -->
                <div class="lg:col-span-2 bento-card bg-white rounded-[30px] p-8 sm:p-9 flex flex-col justify-between reveal-up">
                    <div class="relative z-10">
                        <span class="inline-block px-3 py-1 rounded-full bg-schmitz-appleGray text-schmitz-carbon text-xs font-semibold mb-6">03</span>
                        <h3 class="text-xl font-bold text-schmitz-carbon mb-3 tracking-tight">
                            {{ __('home.why.tile3_title') }}
                        </h3>
                        <p class="text-sm text-schmitz-appleMuted leading-relaxed">
                            {{ __('home.why.tile3_desc') }}
                        </p>
                    </div>
                </div>

                <!-- Tile 04 (Span 2) -->
                <div class="lg:col-span-2 bento-card bg-white rounded-[30px] p-8 sm:p-9 flex flex-col justify-between reveal-up reveal-delay-1">
                    <div class="relative z-10">
                        <span class="inline-block px-3 py-1 rounded-full bg-schmitz-appleGray text-schmitz-carbon text-xs font-semibold mb-6">04</span>
                        <h3 class="text-xl font-bold text-schmitz-carbon mb-3 tracking-tight">
                            {{ __('home.why.tile4_title') }}
                        </h3>
                        <p class="text-sm text-schmitz-appleMuted leading-relaxed">
                            {{ __('home.why.tile4_desc') }}
                        </p>
                    </div>
                </div>

                <!-- Tile 05 (Span 2) -->
                <div class="lg:col-span-2 bento-card bg-white rounded-[30px] p-8 sm:p-9 flex flex-col justify-between reveal-up reveal-delay-2">
                    <div class="relative z-10">
                        <span class="inline-block px-3 py-1 rounded-full bg-schmitz-appleGray text-schmitz-carbon text-xs font-semibold mb-6">05</span>
                        <h3 class="text-xl font-bold text-schmitz-carbon mb-3 tracking-tight">
                            {{ __('home.why.tile5_title') }}
                        </h3>
                        <p class="text-sm text-schmitz-appleMuted leading-relaxed">
                            {{ __('home.why.tile5_desc') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. APPLE-STYLE CLOSING CTA BANNER (Wide Architectural Banner) -->
    <section id="contact" class="py-20 sm:py-28 bg-white">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 reveal-up">
            <div class="bento-card dark-bento bg-gradient-to-br from-schmitz-carbon via-schmitz-carbon to-schmitz-dark rounded-[34px] p-10 sm:p-16 lg:p-20 relative overflow-hidden shadow-2xl">
                <!-- Ambient Gold Glow -->
                <div class="absolute -top-28 -right-28 w-[460px] h-[460px] rounded-full bg-schmitz-gold/15 blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-28 -left-28 w-[380px] h-[380px] rounded-full bg-white/[0.04] blur-3xl pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-10">
                    <div class="max-w-2xl">
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-schmitz-goldSoft block mb-4">
                            {{ __('home.cta.badge') }}
                        </span>
                        <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-[1.08] mb-5">
                            {{ __('home.cta.title') }}
                        </h2>
                        <p class="text-base sm:text-lg text-white/80 font-light leading-relaxed">
                            {{ __('home.cta.desc') }}
                        </p>
                    </div>
                    <div class="shrink-0">
                        <button onclick="openQuoteModal('General Business Inquiry')" class="group inline-flex items-center justify-center px-9 py-4.5 bg-white hover:bg-schmitz-appleGray text-schmitz-carbon text-sm font-semibold rounded-full transition-all duration-300 shadow-md hover:shadow-xl active:scale-[0.98] cursor-pointer">
                            <span>{{ __('home.cta.button') }}</span>
                            <span class="ml-2.5 text-schmitz-gold transition-transform duration-300 group-hover:translate-x-1.5">→</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. ULTRA-CLEAN MINIMAL APPLE-STYLE FOOTER -->
    @include('partials.footer')

    @include('partials.rfq-modal')

    <!-- Interactive Motion & UI Controller -->
    <script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>
