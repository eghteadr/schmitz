<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-head', [
        'pageKey' => 'about',
        'title' => __('about.meta.title'),
        'description' => __('about.meta.description'),
        'breadcrumbTitle' => __('messages.nav.about'),
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
                        <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#18181B]">{{ __('messages.nav.about') }}</span>
                    </div>

                    <!-- Apple Display Headline -->
                    <div class="hero-animate-2 mb-6">
                        <span class="text-xs font-mono font-bold tracking-[0.2em] text-[#B89758] block mb-2">{{ __('about.hero.badge') }}</span>
                        <h1 class="apple-display text-4xl sm:text-5xl lg:text-[58px] xl:text-[64px] font-bold text-[#18181B] leading-[1.06]">
                            {{ __('about.hero.title_line1') }}<br>
                            <span class="text-[#18181B]/80">{{ __('about.hero.title_line2') }}</span>
                        </h1>
                    </div>

                    <!-- Company Overview Paragraphs -->
                    <div class="hero-animate-3 space-y-4 max-w-2xl mb-9 text-[#6E6E73] text-base sm:text-lg leading-relaxed font-normal">
                        <p>
                            {{ __('about.hero.overview_p1') }}
                        </p>
                        <p class="text-sm sm:text-base text-[#6E6E73]/90">
                            {{ __('about.hero.overview_p2') }}
                        </p>
                    </div>

                    <!-- Sleek Apple-Style Pill CTAs -->
                    <div class="hero-animate-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 sm:gap-4 mb-11">
                        <a href="{{ route('services') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-schmitz-red hover:bg-schmitz-redHover text-white text-sm font-medium rounded-full transition-all duration-300 shadow-sm hover:shadow-xl active:scale-[0.98]">
                            <span>{{ __('about.hero.cta_explore') }}</span>
                            <span class="ml-2 text-white/90 transition-transform duration-300 group-hover:translate-x-1">→</span>
                        </a>
                        <button onclick="openQuoteModal('General Business Inquiry')" class="group inline-flex items-center justify-center px-8 py-4 bg-[#F5F5F7] hover:bg-[#E8E8ED] text-[#18181B] text-sm font-medium rounded-full transition-all duration-300 active:scale-[0.98] cursor-pointer">
                            <span>{{ __('about.hero.cta_quote') }}</span>
                            <span class="ml-2 text-[#B89758] transition-transform duration-300 group-hover:translate-x-1">→</span>
                        </button>
                    </div>

                    <!-- 4-Point Institutional Benchmark Strip -->
                    <div class="hero-animate-5 pt-7 border-t border-black/[0.07] grid grid-cols-2 sm:grid-cols-4 gap-5 text-xs">
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('about.hero.bench1_label') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('about.hero.bench1_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('about.hero.bench1_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('about.hero.bench2_label') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('about.hero.bench2_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('about.hero.bench2_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('about.hero.bench3_label') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('about.hero.bench3_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('about.hero.bench3_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('about.hero.bench4_label') }}</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('about.hero.bench4_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('about.hero.bench4_sub') }}</span>
                        </div>
                    </div>

                </div>

                <!-- Right Bento Summary Card: Corporate Identity (5 Cols) -->
                <div class="lg:col-span-5 hero-animate-3">
                    <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#18181B] to-[#09090B] text-white rounded-[30px] p-7 sm:p-9 shadow-[0_32px_64px_-16px_rgba(24,24,27,0.28)] relative">
                        <!-- Subtle Gold Glow Orbs -->
                        <div class="absolute -top-24 -right-24 w-60 h-60 rounded-full bg-[#B89758]/20 blur-3xl pointer-events-none"></div>
                        <div class="absolute -bottom-20 -left-20 w-52 h-52 rounded-full bg-white/[0.04] blur-2xl pointer-events-none"></div>

                        <div class="relative z-10">
                            <!-- Header with Status Pill -->
                            <div class="flex items-center justify-between pb-5 mb-6 border-b border-white/10">
                                <div>
                                    <span class="text-[10px] uppercase tracking-[0.22em] text-[#D8BF8A] font-semibold block">{{ __('about.hero.card.tag') }}</span>
                                    <span class="text-base font-semibold text-white mt-0.5 block">{{ __('about.hero.card.title') }}</span>
                                </div>
                                <span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-white/10 border border-white/10 text-[11px] font-medium text-white shadow-2xs">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span>{{ __('about.hero.card.status') }}</span>
                                </span>
                            </div>

                            <!-- Identity Field 1: Registered Entity -->
                            <div class="mb-5 bg-white/[0.04] p-4 rounded-2xl border border-white/[0.06]">
                                <div class="flex items-center justify-between mb-1.5">
                                    <span class="text-[11px] uppercase tracking-wider text-[#D8BF8A] font-semibold">{{ __('about.hero.card.field1_label') }}</span>
                                    <span class="text-[10px] font-mono text-white/50">{{ __('about.hero.card.field1_jurisdiction') }}</span>
                                </div>
                                <p class="text-sm font-semibold text-white tracking-wide">
                                    {{ __('about.hero.card.field1_name') }}
                                </p>
                                <p class="text-xs text-white/65 mt-1 leading-relaxed">
                                    {{ __('about.hero.card.field1_desc') }}
                                </p>
                            </div>

                            <!-- Identity Field 2: Core Sectors -->
                            <div class="mb-5 bg-white/[0.04] p-4 rounded-2xl border border-white/[0.06]">
                                <div class="flex items-center justify-between mb-1.5">
                                    <span class="text-[11px] uppercase tracking-wider text-[#D8BF8A] font-semibold">{{ __('about.hero.card.field2_label') }}</span>
                                    <span class="text-[10px] font-mono text-white/50">{{ __('about.hero.card.field2_specialization') }}</span>
                                </div>
                                <ul class="text-xs text-white/85 space-y-2 mt-2">
                                    <li class="flex items-start space-x-2">
                                        <span class="text-[#B89758] mt-0.5">▪</span>
                                        <span><strong class="text-white">{{ __('about.hero.card.field2_item1_title') }}</strong> {{ __('about.hero.card.field2_item1_desc') }}</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <span class="text-[#B89758] mt-0.5">▪</span>
                                        <span><strong class="text-white">{{ __('about.hero.card.field2_item2_title') }}</strong> {{ __('about.hero.card.field2_item2_desc') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Identity Field 3: Commercial Framework -->
                            <div class="mb-6 bg-white/[0.04] p-4 rounded-2xl border border-white/[0.06]">
                                <div class="flex items-center justify-between mb-1.5">
                                    <span class="text-[11px] uppercase tracking-wider text-[#D8BF8A] font-semibold">{{ __('about.hero.card.field3_label') }}</span>
                                    <span class="text-[10px] font-mono text-white/50">{{ __('about.hero.card.field3_standards') }}</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2 text-xs text-white/80 mt-2">
                                    <div class="bg-black/20 p-2 rounded-lg">
                                        <span class="text-[10px] text-white/50 block">{{ __('about.hero.card.field3_delivery_label') }}</span>
                                        <span class="font-semibold text-white">{{ __('about.hero.card.field3_delivery_val') }}</span>
                                        <span class="text-[10px] text-white/60 block">{{ __('about.hero.card.field3_delivery_sub') }}</span>
                                    </div>
                                    <div class="bg-black/20 p-2 rounded-lg">
                                        <span class="text-[10px] text-white/50 block">{{ __('about.hero.card.field3_protocol_label') }}</span>
                                        <span class="font-semibold text-white">{{ __('about.hero.card.field3_protocol_val') }}</span>
                                        <span class="text-[10px] text-white/60 block">{{ __('about.hero.card.field3_protocol_sub') }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Bottom Action -->
                            <div class="pt-4 border-t border-white/10 flex items-center justify-between">
                                <span class="text-xs text-white/60">{{ __('about.hero.card.registry_label') }}</span>
                                <button onclick="openLegalModal('{{ __('about.hero.card.legal_modal_title') }}')" class="text-xs font-semibold text-[#D8BF8A] hover:text-white transition-colors cursor-pointer flex items-center space-x-1">
                                    <span>{{ __('about.hero.card.btn_legal') }}</span>
                                    <span>→</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 2: PHILOSOPHY & POSITION IN TRADE (Dual Structured Editorial)     -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 lg:py-32 bg-[#FAFAFC] border-b border-black/[0.05]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Sticky Column: Business Philosophy (5 Cols) -->
                <div class="lg:col-span-5 lg:sticky lg:top-28">
                    <!-- Eyebrow -->
                    <div class="inline-flex items-center space-x-2 px-3.5 py-1 rounded-full bg-[#18181B]/[0.05] border border-[#18181B]/10 mb-5">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                        <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#18181B]">
                            {{ __('about.philosophy.badge') }}
                        </span>
                    </div>

                    <!-- Headline -->
                    <h2 class="apple-display text-3xl sm:text-4xl lg:text-[40px] font-bold text-[#18181B] leading-[1.1] mb-6">
                        {{ __('about.philosophy.title') }}
                    </h2>

                    <!-- Narrative Paragraphs -->
                    <div class="space-y-4 text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-8">
                        <p>
                            {{ __('about.philosophy.p1') }}
                        </p>
                        <p>
                            {{ __('about.philosophy.p2') }}
                        </p>
                        <p class="font-medium text-[#18181B]">
                            {{ __('about.philosophy.p3') }}
                        </p>
                    </div>

                    <!-- Mandate Card -->
                    <div class="bento-card bg-white p-6 rounded-2xl border border-black/[0.06] shadow-xs">
                        <div class="flex items-center space-x-3 mb-2.5">
                            <div class="w-7 h-7 rounded-lg bg-[#18181B] text-[#B89758] flex items-center justify-center font-bold text-xs">
                                §
                            </div>
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#18181B]">{{ __('about.philosophy.mandate_title') }}</span>
                        </div>
                        <p class="text-xs text-[#6E6E73] leading-relaxed italic">
                            {{ __('about.philosophy.mandate_quote') }}
                        </p>
                    </div>
                </div>

                <!-- Right Column: Our Position in International Trade (7 Cols) -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="bento-card bg-white rounded-[32px] p-8 sm:p-10 lg:p-12 border border-black/[0.06] shadow-xs group">
                        
                        <div class="rounded-2xl overflow-hidden aspect-video mb-7 bg-[#18181B]">
                            <img 
                                src="{{ asset('images/Bosphorus Trade Bridge Aerial.jpg') }}" 
                                alt="{{ __('about.position.title') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>

                        <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-[#B89758]/10 text-[#B89758] text-[11px] font-semibold uppercase tracking-wider mb-5">
                            <span>{{ __('about.position.badge') }}</span>
                        </div>

                        <h3 class="apple-display text-2xl sm:text-3xl font-bold text-[#18181B] mb-5 leading-snug">
                            {{ __('about.position.title') }}
                        </h3>

                        <div class="space-y-4 text-[#6E6E73] text-sm sm:text-base leading-relaxed mb-8">
                            <p>
                                {{ __('about.position.p1') }}
                            </p>
                            <p>
                                {{ __('about.position.p2') }}
                            </p>
                        </div>

                        <!-- 3-Pillar Capability Strip -->
                        <div class="pt-6 border-t border-black/[0.06] grid grid-cols-1 sm:grid-cols-3 gap-5">
                            <div class="p-4 rounded-2xl bg-[#F5F5F7] border border-black/[0.04]">
                                <span class="text-xs font-mono font-bold text-[#B89758] uppercase block mb-1">01 / {{ __('about.position.stat1_label') }}</span>
                                <span class="font-bold text-[#18181B] text-sm block">{{ __('about.position.stat1_val') }}</span>
                                <span class="text-[11px] text-[#6E6E73] mt-1 block">{{ __('about.position.stat1_desc') }}</span>
                            </div>
                            <div class="p-4 rounded-2xl bg-[#F5F5F7] border border-black/[0.04]">
                                <span class="text-xs font-mono font-bold text-[#B89758] uppercase block mb-1">02 / {{ __('about.position.stat2_label') }}</span>
                                <span class="font-bold text-[#18181B] text-sm block">{{ __('about.position.stat2_val') }}</span>
                                <span class="text-[11px] text-[#6E6E73] mt-1 block">{{ __('about.position.stat2_desc') }}</span>
                            </div>
                            <div class="p-4 rounded-2xl bg-[#F5F5F7] border border-black/[0.04]">
                                <span class="text-xs font-mono font-bold text-[#B89758] uppercase block mb-1">03 / {{ __('about.position.stat3_label') }}</span>
                                <span class="font-bold text-[#18181B] text-sm block">{{ __('about.position.stat3_val') }}</span>
                                <span class="text-[11px] text-[#6E6E73] mt-1 block">{{ __('about.position.stat3_desc') }}</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 3: OUR APPROACH (4-Card Apple Bento Grid)                         -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 bg-white border-b border-black/[0.05]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="max-w-3xl mb-12 sm:mb-16 reveal-up">
                <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-[#F5F5F7] border border-black/[0.06] mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                    <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#18181B]">
                        {{ __('about.approach.badge') }}
                    </span>
                </div>
                <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-[#18181B] leading-tight mb-4">
                    {{ __('about.approach.title') }}
                </h2>
                <p class="text-[#6E6E73] text-base sm:text-lg">
                    {{ __('about.approach.subtitle') }}
                </p>
            </div>

            <!-- 4-Card Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-7 items-stretch">
                
                <!-- Card 1 -->
                <div class="bento-card bg-[#FAFAFC] hover:bg-white rounded-[28px] p-7 sm:p-8 border border-black/[0.06] flex flex-col justify-between transition-all reveal-up shadow-xs">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="w-10 h-10 rounded-2xl bg-[#18181B] text-white font-mono text-xs font-bold flex items-center justify-center">
                                {{ __('about.approach.card1_num') }}
                            </span>
                            <span class="text-[11px] font-mono text-[#B89758] uppercase font-bold">{{ __('about.approach.card1_tag') }}</span>
                        </div>
                        <h3 class="apple-subdisplay text-lg font-bold text-[#18181B] mb-3 leading-snug">
                            {{ __('about.approach.card1_title') }}
                        </h3>
                        <p class="text-xs sm:text-sm text-[#6E6E73] leading-relaxed">
                            {{ __('about.approach.card1_desc') }}
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bento-card bg-[#FAFAFC] hover:bg-white rounded-[28px] p-7 sm:p-8 border border-black/[0.06] flex flex-col justify-between transition-all reveal-up shadow-xs">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="w-10 h-10 rounded-2xl bg-[#18181B] text-white font-mono text-xs font-bold flex items-center justify-center">
                                {{ __('about.approach.card2_num') }}
                            </span>
                            <span class="text-[11px] font-mono text-[#B89758] uppercase font-bold">{{ __('about.approach.card2_tag') }}</span>
                        </div>
                        <h3 class="apple-subdisplay text-lg font-bold text-[#18181B] mb-3 leading-snug">
                            {{ __('about.approach.card2_title') }}
                        </h3>
                        <p class="text-xs sm:text-sm text-[#6E6E73] leading-relaxed">
                            {{ __('about.approach.card2_desc') }}
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bento-card bg-[#FAFAFC] hover:bg-white rounded-[28px] p-7 sm:p-8 border border-black/[0.06] flex flex-col justify-between transition-all reveal-up shadow-xs">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="w-10 h-10 rounded-2xl bg-[#18181B] text-white font-mono text-xs font-bold flex items-center justify-center">
                                {{ __('about.approach.card3_num') }}
                            </span>
                            <span class="text-[11px] font-mono text-[#B89758] uppercase font-bold">{{ __('about.approach.card3_tag') }}</span>
                        </div>
                        <h3 class="apple-subdisplay text-lg font-bold text-[#18181B] mb-3 leading-snug">
                            {{ __('about.approach.card3_title') }}
                        </h3>
                        <p class="text-xs sm:text-sm text-[#6E6E73] leading-relaxed">
                            {{ __('about.approach.card3_desc') }}
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bento-card bg-[#FAFAFC] hover:bg-white rounded-[28px] p-7 sm:p-8 border border-black/[0.06] flex flex-col justify-between transition-all reveal-up shadow-xs">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="w-10 h-10 rounded-2xl bg-[#18181B] text-white font-mono text-xs font-bold flex items-center justify-center">
                                {{ __('about.approach.card4_num') }}
                            </span>
                            <span class="text-[11px] font-mono text-[#B89758] uppercase font-bold">{{ __('about.approach.card4_tag') }}</span>
                        </div>
                        <h3 class="apple-subdisplay text-lg font-bold text-[#18181B] mb-3 leading-snug">
                            {{ __('about.approach.card4_title') }}
                        </h3>
                        <p class="text-xs sm:text-sm text-[#6E6E73] leading-relaxed">
                            {{ __('about.approach.card4_desc') }}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 4: MISSION, VISION & COMMITMENT BENTO SECTION                      -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 bg-[#FAFAFC] border-b border-black/[0.05]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="max-w-3xl mb-12 sm:mb-16 reveal-up">
                <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-white border border-black/[0.06] mb-4 shadow-2xs">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                    <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#18181B]">
                        {{ __('about.mission_vision.badge') }}
                    </span>
                </div>
                <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-[#18181B] leading-tight">
                    {{ __('about.mission_vision.title') }}
                </h2>
            </div>

            <!-- Top Row: Mission (Dark) & Vision (Light) Bento Pair -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-7 mb-10 items-stretch">
                
                <!-- Mission Bento (Span 6, Dark Navy) -->
                <div class="lg:col-span-6">
                    <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#121215] to-[#09090B] text-white rounded-[32px] p-8 sm:p-10 lg:p-12 h-full flex flex-col justify-between shadow-xl relative overflow-hidden">
                        <div class="absolute -top-24 -right-24 w-60 h-60 rounded-full bg-[#B89758]/20 blur-3xl pointer-events-none"></div>
                        <div class="relative z-10">
                            <span class="text-[10px] font-mono uppercase tracking-[0.22em] text-[#D8BF8A] font-bold block mb-4">
                                {{ __('about.mission_vision.mission_tag') }}
                            </span>
                            <h3 class="apple-display text-2xl sm:text-3xl font-bold text-white mb-5 leading-tight">
                                {{ __('about.mission_vision.mission_title') }}
                            </h3>
                            <p class="text-sm sm:text-base text-white/80 leading-relaxed font-light">
                                {{ __('about.mission_vision.mission_desc') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Vision Bento (Span 6, Apple Gray) -->
                <div class="lg:col-span-6">
                    <div class="bento-card bg-white rounded-[32px] p-8 sm:p-10 lg:p-12 h-full flex flex-col justify-between border border-black/[0.06] shadow-xs relative overflow-hidden group">
                        <div class="relative z-10">
                            <span class="text-[10px] font-mono uppercase tracking-[0.22em] text-[#B89758] font-bold block mb-4">
                                {{ __('about.mission_vision.vision_tag') }}
                            </span>
                            <h3 class="apple-display text-2xl sm:text-3xl font-bold text-[#18181B] mb-5 leading-tight">
                                {{ __('about.mission_vision.vision_title') }}
                            </h3>
                            <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6">
                                {{ __('about.mission_vision.vision_desc') }}
                            </p>
                        </div>
                        <div class="rounded-2xl overflow-hidden aspect-video bg-[#18181B] relative z-10">
                            <img 
                                src="{{ asset('images/Commercial Trade Office Istanbul.jpg') }}" 
                                alt="{{ __('about.mission_vision.vision_title') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Row: 4-Card Commitment Strip -->
            <div>
                <h4 class="text-xs font-mono font-bold uppercase tracking-[0.2em] text-[#B89758] mb-6">
                    {{ __('about.mission_vision.commitment_title') }}
                </h4>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bento-card bg-white p-6 rounded-2xl border border-black/[0.06] shadow-xs">
                        <span class="w-8 h-8 rounded-xl bg-[#18181B] text-[#B89758] font-bold text-xs flex items-center justify-center mb-4">01</span>
                        <h5 class="text-sm font-bold text-[#18181B] mb-2">{{ __('about.mission_vision.comm1_title') }}</h5>
                        <p class="text-xs text-[#6E6E73] leading-relaxed">{{ __('about.mission_vision.comm1_desc') }}</p>
                    </div>

                    <div class="bento-card bg-white p-6 rounded-2xl border border-black/[0.06] shadow-xs">
                        <span class="w-8 h-8 rounded-xl bg-[#18181B] text-[#B89758] font-bold text-xs flex items-center justify-center mb-4">02</span>
                        <h5 class="text-sm font-bold text-[#18181B] mb-2">{{ __('about.mission_vision.comm2_title') }}</h5>
                        <p class="text-xs text-[#6E6E73] leading-relaxed">{{ __('about.mission_vision.comm2_desc') }}</p>
                    </div>

                    <div class="bento-card bg-white p-6 rounded-2xl border border-black/[0.06] shadow-xs">
                        <span class="w-8 h-8 rounded-xl bg-[#18181B] text-[#B89758] font-bold text-xs flex items-center justify-center mb-4">03</span>
                        <h5 class="text-sm font-bold text-[#18181B] mb-2">{{ __('about.mission_vision.comm3_title') }}</h5>
                        <p class="text-xs text-[#6E6E73] leading-relaxed">{{ __('about.mission_vision.comm3_desc') }}</p>
                    </div>

                    <div class="bento-card bg-white p-6 rounded-2xl border border-black/[0.06] shadow-xs">
                        <span class="w-8 h-8 rounded-xl bg-[#18181B] text-[#B89758] font-bold text-xs flex items-center justify-center mb-4">04</span>
                        <h5 class="text-sm font-bold text-[#18181B] mb-2">{{ __('about.mission_vision.comm4_title') }}</h5>
                        <p class="text-xs text-[#6E6E73] leading-relaxed">{{ __('about.mission_vision.comm4_desc') }}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 5: A TÜRKIYE-BASED PLATFORM FOR INTERNATIONAL TRADE               -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 bg-white border-b border-black/[0.05]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                
                <!-- Left 7 Cols: Narrative -->
                <div class="lg:col-span-7">
                    <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-[#F5F5F7] border border-black/[0.06] mb-5">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                        <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#18181B]">
                            {{ __('about.platform.badge') }}
                        </span>
                    </div>

                    <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-[#18181B] leading-tight mb-6">
                        {{ __('about.platform.title') }}
                    </h2>

                    <div class="space-y-4 text-[#6E6E73] text-base sm:text-lg leading-relaxed mb-8">
                        <p>
                            {{ __('about.platform.p1') }}
                        </p>
                        <p>
                            {{ __('about.platform.p2') }}
                        </p>
                    </div>

                    <!-- Closing Motto Callout -->
                    <div class="p-5 sm:p-6 rounded-2xl bg-[#18181B] text-white flex items-center space-x-4 shadow-sm">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#B89758] shrink-0"></span>
                        <p class="text-sm sm:text-base font-semibold tracking-wide text-[#D8BF8A]">
                            {{ __('about.platform.closing_line') }}
                        </p>
                    </div>
                </div>

                <!-- Right 5 Cols: Logistics Corridors Card -->
                <div class="lg:col-span-5">
                    <div class="bento-card bg-[#F5F5F7] rounded-[30px] p-7 sm:p-9 border border-black/[0.06] shadow-xs group">
                        <div class="rounded-2xl overflow-hidden aspect-video mb-6 bg-[#18181B]">
                            <img 
                                src="{{ asset('images/Maritime Logistics Corridor.jpg') }}" 
                                alt="{{ __('about.platform.hub_card_title') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>
                        <div class="flex items-center justify-between pb-4 mb-6 border-b border-black/[0.06]">
                            <span class="text-[10px] font-mono uppercase tracking-wider text-[#B89758] font-bold">
                                {{ __('about.platform.hub_card_tag') }}
                            </span>
                            <span class="text-xs font-semibold text-[#18181B]">
                                {{ __('about.platform.hub_card_title') }}
                            </span>
                        </div>

                        <ul class="space-y-4 text-xs text-[#6E6E73]">
                            <li class="p-3.5 rounded-xl bg-white border border-black/[0.04]">
                                <strong class="text-sm font-bold text-[#18181B] block mb-1">
                                    {{ __('about.platform.hub_point1_title') }}
                                </strong>
                                <span>{{ __('about.platform.hub_point1_desc') }}</span>
                            </li>
                            <li class="p-3.5 rounded-xl bg-white border border-black/[0.04]">
                                <strong class="text-sm font-bold text-[#18181B] block mb-1">
                                    {{ __('about.platform.hub_point2_title') }}
                                </strong>
                                <span>{{ __('about.platform.hub_point2_desc') }}</span>
                            </li>
                            <li class="p-3.5 rounded-xl bg-white border border-black/[0.04]">
                                <strong class="text-sm font-bold text-[#18181B] block mb-1">
                                    {{ __('about.platform.hub_point3_title') }}
                                </strong>
                                <span>{{ __('about.platform.hub_point3_desc') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 6: ARCHITECTURAL CLOSING CALLOUT BANNER                           -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 bg-[#FAFAFC]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 reveal-up">
            <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#18181B] to-[#09090B] rounded-[34px] p-10 sm:p-14 lg:p-16 relative overflow-hidden shadow-2xl text-white">
                <!-- Ambient Glow -->
                <div class="absolute -top-28 -right-28 w-[400px] h-[400px] rounded-full bg-[#B89758]/15 blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-28 -left-28 w-[340px] h-[340px] rounded-full bg-white/[0.04] blur-3xl pointer-events-none"></div>

                <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                    <div class="max-w-2xl">
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-[#D8BF8A] block mb-3">
                            {{ __('about.cta.badge') }}
                        </span>
                        <h2 class="apple-display text-3xl sm:text-4xl font-bold leading-tight mb-4">
                            {{ __('about.cta.title') }}
                        </h2>
                        <p class="text-sm sm:text-base text-white/80 font-light leading-relaxed">
                            {{ __('about.cta.desc') }}
                        </p>
                    </div>
                    <div class="shrink-0 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <button onclick="openQuoteModal('General Business Inquiry')" class="group inline-flex items-center justify-center px-8 py-4 bg-white hover:bg-[#F5F5F7] text-[#18181B] text-sm font-semibold rounded-full transition-all duration-300 shadow-md hover:shadow-xl active:scale-[0.98] cursor-pointer">
                            <span>{{ __('about.cta.btn') }}</span>
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
