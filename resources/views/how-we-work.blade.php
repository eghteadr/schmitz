<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-head', [
        'pageKey' => 'how-we-work',
        'title' => __('how_we_work.meta.title'),
        'description' => __('how_we_work.meta.description'),
        'breadcrumbTitle' => __('messages.nav.process'),
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
<body class="selection:bg-schmitz-navy selection:text-white overflow-x-hidden bg-white text-schmitz-appleText">

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
                        <a href="{{ route('home') }}" class="text-[11px] font-medium tracking-[0.16em] text-[#6E6E73] hover:text-[#13293F] transition-colors uppercase">{{ __('messages.nav.home') }}</a>
                        <span class="text-[10px] text-[#B89758] font-bold">/</span>
                        <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#13293F]">{{ __('messages.nav.process') }}</span>
                    </div>

                    <!-- Apple Display Headline -->
                    <div class="hero-animate-2 mb-6">
                        <div class="flex items-center space-x-3 mb-2.5">
                            <span class="text-xs font-mono font-bold tracking-[0.2em] text-[#B89758] block uppercase">{{ __('how_we_work.hero.badge') }}</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]/50"></span>
                            <span class="text-[11px] font-semibold tracking-[0.18em] text-[#6E6E73] uppercase">{{ __('how_we_work.hero.sub_badge') }}</span>
                        </div>
                        <h1 class="apple-display text-4xl sm:text-5xl lg:text-[58px] xl:text-[64px] font-bold text-[#13293F] leading-[1.06]">
                            {{ __('how_we_work.hero.title_line1') }}<br>
                            <span class="text-[#13293F]/80">{{ __('how_we_work.hero.title_line2') }}</span>
                        </h1>
                    </div>

                    <!-- Process Intro Paragraph -->
                    <div class="hero-animate-3 space-y-4 max-w-2xl mb-9 text-[#6E6E73] text-base sm:text-lg leading-relaxed font-normal">
                        <p>
                            {{ __('how_we_work.hero.intro') }}
                        </p>
                    </div>

                    <!-- Sleek Apple-Style Pill CTAs -->
                    <div class="hero-animate-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 sm:gap-4 mb-11">
                        <button onclick="openQuoteModal('General Business Inquiry')" class="group inline-flex items-center justify-center px-8 py-4 bg-[#13293F] hover:bg-[#1D3B58] text-white text-sm font-medium rounded-full transition-all duration-300 shadow-sm hover:shadow-xl active:scale-[0.98] cursor-pointer">
                            <span>{{ __('how_we_work.hero.cta_inquiry') }}</span>
                            <span class="ml-2 text-[#D8BF8A] transition-transform duration-300 group-hover:translate-x-1">→</span>
                        </button>
                        <a href="#steps" class="group inline-flex items-center justify-center px-8 py-4 bg-[#F5F5F7] hover:bg-[#E8E8ED] text-[#13293F] text-sm font-medium rounded-full transition-all duration-300 active:scale-[0.98]">
                            <span>{{ __('how_we_work.hero.cta_steps') }}</span>
                            <span class="ml-2 text-[#B89758] transition-transform duration-300 group-hover:translate-y-0.5">↓</span>
                        </a>
                    </div>

                    <!-- 4-Point Institutional Benchmark Strip -->
                    <div class="hero-animate-5 pt-7 border-t border-black/[0.07] grid grid-cols-2 sm:grid-cols-4 gap-5 text-xs">
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('how_we_work.hero.benchmarks.item1_label') }}</span>
                            <span class="font-semibold text-[#13293F] block">{{ __('how_we_work.hero.benchmarks.item1_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('how_we_work.hero.benchmarks.item1_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('how_we_work.hero.benchmarks.item2_label') }}</span>
                            <span class="font-semibold text-[#13293F] block">{{ __('how_we_work.hero.benchmarks.item2_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('how_we_work.hero.benchmarks.item2_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('how_we_work.hero.benchmarks.item3_label') }}</span>
                            <span class="font-semibold text-[#13293F] block">{{ __('how_we_work.hero.benchmarks.item3_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('how_we_work.hero.benchmarks.item3_sub') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block font-semibold mb-0.5">{{ __('how_we_work.hero.benchmarks.item4_label') }}</span>
                            <span class="font-semibold text-[#13293F] block">{{ __('how_we_work.hero.benchmarks.item4_val') }}</span>
                            <span class="text-[11px] text-[#6E6E73]">{{ __('how_we_work.hero.benchmarks.item4_sub') }}</span>
                        </div>
                    </div>

                </div>

                <!-- Right Bento Hub Card (5 Cols) -->
                <div class="lg:col-span-5 hero-animate-3">
                    <div class="bento-card dark-bento bg-gradient-to-br from-[#13293F] via-[#13293F] to-[#0B1826] text-white rounded-[32px] p-7 sm:p-9 shadow-[0_32px_64px_-16px_rgba(19,41,63,0.28)] relative">
                        <!-- Subtle Gold Glow Orbs -->
                        <div class="absolute -top-24 -right-24 w-60 h-60 rounded-full bg-[#B89758]/20 blur-3xl pointer-events-none"></div>
                        <div class="absolute -bottom-20 -left-20 w-52 h-52 rounded-full bg-white/[0.04] blur-2xl pointer-events-none"></div>

                        <div class="relative z-10">
                            <!-- Card Header with Active Status -->
                            <div class="flex items-center justify-between pb-5 mb-5 border-b border-white/10">
                                <div>
                                    <span class="text-[10px] uppercase tracking-[0.22em] text-[#D8BF8A] font-semibold block">{{ __('how_we_work.steps.sticky_badge') }}</span>
                                    <span class="text-base font-semibold text-white mt-0.5 block">{{ __('how_we_work.overview_track.title') }}</span>
                                </div>
                                <span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-white/10 border border-white/10 text-[11px] font-medium text-white shadow-2xs">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span>Incoterms® 2020</span>
                                </span>
                            </div>

                            <!-- 6 Steps Interactive Launchers -->
                            <div class="space-y-2 mb-5 text-xs">
                                <a href="#step-01" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] font-bold mr-2.5">01</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('how_we_work.steps.step1.title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                                <a href="#step-02" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] font-bold mr-2.5">02</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('how_we_work.steps.step2.title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                                <a href="#step-03" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] font-bold mr-2.5">03</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('how_we_work.steps.step3.title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                                <a href="#step-04" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] font-bold mr-2.5">04</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('how_we_work.steps.step4.title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                                <a href="#step-05" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] font-bold mr-2.5">05</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('how_we_work.steps.step5.title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                                <a href="#step-06" class="flex items-center justify-between p-2.5 rounded-xl bg-white/[0.05] hover:bg-white/[0.12] transition-colors group">
                                    <span class="font-mono text-[#D8BF8A] font-bold mr-2.5">06</span>
                                    <span class="text-white/90 group-hover:text-white flex-1 truncate">{{ __('how_we_work.steps.step6.title') }}</span>
                                    <span class="text-white/40 group-hover:text-white ml-2">↓</span>
                                </a>
                            </div>

                            <!-- Bottom Mini Callout -->
                            <div class="pt-4 border-t border-white/10 flex items-center justify-between text-[11px] text-white/70">
                                <span>SCHMITZ Global Commercial Desk</span>
                                <span class="text-[#D8BF8A] font-semibold">Istanbul, TR</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 2: HORIZONTAL 6-STEP OVERVIEW TRACK (Clean Linear Milestone Bar)  -->
    <!-- ========================================================================= -->
    <section id="steps" class="py-16 sm:py-20 bg-[#F5F5F7]/70 border-b border-black/[0.05]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="mb-10 text-center max-w-3xl mx-auto reveal-up">
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-[#B89758] block mb-2">
                    {{ __('how_we_work.overview_track.badge') }}
                </span>
                <h2 class="apple-display text-2xl sm:text-3xl lg:text-4xl font-bold text-[#13293F] leading-tight mb-3">
                    {{ __('how_we_work.overview_track.title') }}
                </h2>
                <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed">
                    {{ __('how_we_work.overview_track.subtitle') }}
                </p>
            </div>

            <!-- Horizontal Overview Track (Scrollable on Mobile, 6-Col Grid on Desktop) -->
            <div class="overflow-x-auto pb-4 pt-1 -mx-5 px-5 sm:mx-0 sm:px-0 scrollbar-none reveal-up">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4 min-w-[720px] lg:min-w-0">
                    
                    <!-- Track 01 -->
                    <a href="#step-01" class="group bento-card bg-white p-5 rounded-2xl border border-black/[0.06] hover:border-[#13293F]/30 transition-all flex flex-col justify-between h-full shadow-2xs hover:shadow-md">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="w-8 h-8 rounded-xl bg-[#13293F] text-white text-xs font-bold flex items-center justify-center font-mono">01</span>
                                <span class="text-[10px] text-[#B89758] font-bold opacity-0 group-hover:opacity-100 transition-opacity">↓</span>
                            </div>
                            <span class="text-[10px] font-mono uppercase tracking-wider text-[#B89758] block mb-1">STAGE 01</span>
                            <h3 class="text-xs sm:text-[13px] font-bold text-[#13293F] group-hover:text-[#B89758] transition-colors leading-snug">
                                {{ __('how_we_work.overview_track.step1_nav') }}
                            </h3>
                        </div>
                        <div class="mt-4 pt-3 border-t border-black/[0.04] text-[10px] text-[#6E6E73]">
                            {{ __('how_we_work.steps.step1.tagline') }}
                        </div>
                    </a>

                    <!-- Track 02 -->
                    <a href="#step-02" class="group bento-card bg-white p-5 rounded-2xl border border-black/[0.06] hover:border-[#13293F]/30 transition-all flex flex-col justify-between h-full shadow-2xs hover:shadow-md">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="w-8 h-8 rounded-xl bg-[#F5F5F7] group-hover:bg-[#13293F] text-[#13293F] group-hover:text-white text-xs font-bold flex items-center justify-center font-mono transition-colors">02</span>
                                <span class="text-[10px] text-[#B89758] font-bold opacity-0 group-hover:opacity-100 transition-opacity">↓</span>
                            </div>
                            <span class="text-[10px] font-mono uppercase tracking-wider text-[#B89758] block mb-1">STAGE 02</span>
                            <h3 class="text-xs sm:text-[13px] font-bold text-[#13293F] group-hover:text-[#B89758] transition-colors leading-snug">
                                {{ __('how_we_work.overview_track.step2_nav') }}
                            </h3>
                        </div>
                        <div class="mt-4 pt-3 border-t border-black/[0.04] text-[10px] text-[#6E6E73]">
                            {{ __('how_we_work.steps.step2.tagline') }}
                        </div>
                    </a>

                    <!-- Track 03 -->
                    <a href="#step-03" class="group bento-card bg-white p-5 rounded-2xl border border-black/[0.06] hover:border-[#13293F]/30 transition-all flex flex-col justify-between h-full shadow-2xs hover:shadow-md">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="w-8 h-8 rounded-xl bg-[#F5F5F7] group-hover:bg-[#13293F] text-[#13293F] group-hover:text-white text-xs font-bold flex items-center justify-center font-mono transition-colors">03</span>
                                <span class="text-[10px] text-[#B89758] font-bold opacity-0 group-hover:opacity-100 transition-opacity">↓</span>
                            </div>
                            <span class="text-[10px] font-mono uppercase tracking-wider text-[#B89758] block mb-1">STAGE 03</span>
                            <h3 class="text-xs sm:text-[13px] font-bold text-[#13293F] group-hover:text-[#B89758] transition-colors leading-snug">
                                {{ __('how_we_work.overview_track.step3_nav') }}
                            </h3>
                        </div>
                        <div class="mt-4 pt-3 border-t border-black/[0.04] text-[10px] text-[#6E6E73]">
                            {{ __('how_we_work.steps.step3.tagline') }}
                        </div>
                    </a>

                    <!-- Track 04 -->
                    <a href="#step-04" class="group bento-card bg-white p-5 rounded-2xl border border-black/[0.06] hover:border-[#13293F]/30 transition-all flex flex-col justify-between h-full shadow-2xs hover:shadow-md">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="w-8 h-8 rounded-xl bg-[#F5F5F7] group-hover:bg-[#13293F] text-[#13293F] group-hover:text-white text-xs font-bold flex items-center justify-center font-mono transition-colors">04</span>
                                <span class="text-[10px] text-[#B89758] font-bold opacity-0 group-hover:opacity-100 transition-opacity">↓</span>
                            </div>
                            <span class="text-[10px] font-mono uppercase tracking-wider text-[#B89758] block mb-1">STAGE 04</span>
                            <h3 class="text-xs sm:text-[13px] font-bold text-[#13293F] group-hover:text-[#B89758] transition-colors leading-snug">
                                {{ __('how_we_work.overview_track.step4_nav') }}
                            </h3>
                        </div>
                        <div class="mt-4 pt-3 border-t border-black/[0.04] text-[10px] text-[#6E6E73]">
                            {{ __('how_we_work.steps.step4.tagline') }}
                        </div>
                    </a>

                    <!-- Track 05 -->
                    <a href="#step-05" class="group bento-card bg-white p-5 rounded-2xl border border-black/[0.06] hover:border-[#13293F]/30 transition-all flex flex-col justify-between h-full shadow-2xs hover:shadow-md">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="w-8 h-8 rounded-xl bg-[#F5F5F7] group-hover:bg-[#13293F] text-[#13293F] group-hover:text-white text-xs font-bold flex items-center justify-center font-mono transition-colors">05</span>
                                <span class="text-[10px] text-[#B89758] font-bold opacity-0 group-hover:opacity-100 transition-opacity">↓</span>
                            </div>
                            <span class="text-[10px] font-mono uppercase tracking-wider text-[#B89758] block mb-1">STAGE 05</span>
                            <h3 class="text-xs sm:text-[13px] font-bold text-[#13293F] group-hover:text-[#B89758] transition-colors leading-snug">
                                {{ __('how_we_work.overview_track.step5_nav') }}
                            </h3>
                        </div>
                        <div class="mt-4 pt-3 border-t border-black/[0.04] text-[10px] text-[#6E6E73]">
                            {{ __('how_we_work.steps.step5.tagline') }}
                        </div>
                    </a>

                    <!-- Track 06 -->
                    <a href="#step-06" class="group bento-card bg-white p-5 rounded-2xl border border-black/[0.06] hover:border-[#13293F]/30 transition-all flex flex-col justify-between h-full shadow-2xs hover:shadow-md">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="w-8 h-8 rounded-xl bg-[#F5F5F7] group-hover:bg-[#13293F] text-[#13293F] group-hover:text-white text-xs font-bold flex items-center justify-center font-mono transition-colors">06</span>
                                <span class="text-[10px] text-[#B89758] font-bold opacity-0 group-hover:opacity-100 transition-opacity">↓</span>
                            </div>
                            <span class="text-[10px] font-mono uppercase tracking-wider text-[#B89758] block mb-1">STAGE 06</span>
                            <h3 class="text-xs sm:text-[13px] font-bold text-[#13293F] group-hover:text-[#B89758] transition-colors leading-snug">
                                {{ __('how_we_work.overview_track.step6_nav') }}
                            </h3>
                        </div>
                        <div class="mt-4 pt-3 border-t border-black/[0.04] text-[10px] text-[#6E6E73]">
                            {{ __('how_we_work.steps.step6.tagline') }}
                        </div>
                    </a>

                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 3: 12-COLUMN STICKY SPLIT / ASYMMETRIC BENTO GRID (6 STEPS)       -->
    <!-- ========================================================================= -->
    <section class="py-24 sm:py-32 bg-white">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Sticky Narrative Column (4 Cols) -->
                <div class="lg:col-span-4 lg:sticky lg:top-28 reveal-up space-y-6">
                    
                    <div class="p-8 sm:p-9 rounded-[30px] bg-[#F5F5F7] border border-black/[0.06] shadow-xs">
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-[#B89758] block mb-3">
                            {{ __('how_we_work.steps.sticky_badge') }}
                        </span>
                        <h2 class="apple-display text-2xl sm:text-3xl font-bold text-[#13293F] leading-tight mb-4">
                            {{ __('how_we_work.steps.sticky_title') }}
                        </h2>
                        <p class="text-sm sm:text-[15px] text-[#6E6E73] leading-relaxed mb-6 font-normal">
                            {{ __('how_we_work.steps.sticky_desc') }}
                        </p>

                        <!-- Quick Jump Anchor List -->
                        <div class="space-y-2 pt-5 border-t border-black/[0.06] text-xs">
                            <span class="text-[10px] uppercase font-bold tracking-wider text-[#6E6E73] block mb-1">Workflow Milestones</span>
                            <div class="grid grid-cols-2 gap-2 font-medium">
                                <a href="#step-01" class="px-2.5 py-1.5 rounded-lg bg-white hover:bg-[#13293F] hover:text-white transition-colors text-[#13293F] border border-black/[0.04] flex items-center space-x-1.5">
                                    <span class="font-mono text-[#B89758] font-bold">01</span>
                                    <span class="truncate">Inquiry</span>
                                </a>
                                <a href="#step-02" class="px-2.5 py-1.5 rounded-lg bg-white hover:bg-[#13293F] hover:text-white transition-colors text-[#13293F] border border-black/[0.04] flex items-center space-x-1.5">
                                    <span class="font-mono text-[#B89758] font-bold">02</span>
                                    <span class="truncate">Sourcing</span>
                                </a>
                                <a href="#step-03" class="px-2.5 py-1.5 rounded-lg bg-white hover:bg-[#13293F] hover:text-white transition-colors text-[#13293F] border border-black/[0.04] flex items-center space-x-1.5">
                                    <span class="font-mono text-[#B89758] font-bold">03</span>
                                    <span class="truncate">Quotation</span>
                                </a>
                                <a href="#step-04" class="px-2.5 py-1.5 rounded-lg bg-white hover:bg-[#13293F] hover:text-white transition-colors text-[#13293F] border border-black/[0.04] flex items-center space-x-1.5">
                                    <span class="font-mono text-[#B89758] font-bold">04</span>
                                    <span class="truncate">Orders</span>
                                </a>
                                <a href="#step-05" class="px-2.5 py-1.5 rounded-lg bg-white hover:bg-[#13293F] hover:text-white transition-colors text-[#13293F] border border-black/[0.04] flex items-center space-x-1.5">
                                    <span class="font-mono text-[#B89758] font-bold">05</span>
                                    <span class="truncate">Logistics</span>
                                </a>
                                <a href="#step-06" class="px-2.5 py-1.5 rounded-lg bg-white hover:bg-[#13293F] hover:text-white transition-colors text-[#13293F] border border-black/[0.04] flex items-center space-x-1.5">
                                    <span class="font-mono text-[#B89758] font-bold">06</span>
                                    <span class="truncate">Delivery</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Mini CTA Card -->
                    <div class="bento-card dark-bento bg-gradient-to-br from-[#13293F] to-[#0B1826] text-white p-7 rounded-[26px] shadow-md">
                        <span class="text-[10px] font-mono uppercase tracking-[0.2em] text-[#D8BF8A] block mb-2">{{ __('how_we_work.steps.step1.label') }} — {{ __('how_we_work.steps.step6.label') }}</span>
                        <h3 class="text-base font-bold text-white mb-2">{{ __('how_we_work.steps.sticky_card_title') }}</h3>
                        <p class="text-xs text-white/70 leading-relaxed mb-5">
                            {{ __('how_we_work.steps.sticky_card_desc') }}
                        </p>
                        <button onclick="openQuoteModal('General Business Inquiry')" class="w-full py-3 bg-[#B89758] hover:bg-[#A38346] text-[#13293F] font-semibold text-xs tracking-wider uppercase rounded-full transition-all duration-300 shadow-sm cursor-pointer active:scale-[0.98]">
                            {{ __('how_we_work.steps.sticky_card_btn') }}
                        </button>
                    </div>

                </div>

                <!-- Right 8-Column Bento Workflow Cards (Steps 01 - 06) -->
                <div class="lg:col-span-8 space-y-8">
                    
                    <!-- ========================================== -->
                    <!-- STEP 01: Inquiry & Requirement Assessment  -->
                    <!-- ========================================== -->
                    <div id="step-01" class="bento-card bg-white rounded-[32px] p-8 sm:p-10 border border-black/[0.07] shadow-xs scroll-mt-28 reveal-up">
                        <div class="flex flex-wrap items-center justify-between gap-3 mb-6 pb-6 border-b border-black/[0.06]">
                            <div class="flex items-center space-x-3.5">
                                <span class="w-11 h-11 rounded-2xl bg-[#13293F] text-white text-sm font-bold flex items-center justify-center font-mono shadow-2xs">01</span>
                                <div>
                                    <span class="text-[11px] font-mono font-bold uppercase tracking-[0.18em] text-[#B89758] block">{{ __('how_we_work.steps.step1.label') }}</span>
                                    <span class="text-xs font-semibold text-[#6E6E73]">{{ __('how_we_work.steps.step1.tagline') }}</span>
                                </div>
                            </div>
                            <span class="text-xs px-3 py-1 rounded-full bg-[#F5F5F7] text-[#13293F] font-medium border border-black/[0.05]">Initial Milestone</span>
                        </div>

                        <h3 class="apple-display text-2xl sm:text-3xl font-bold text-[#13293F] mb-4">
                            {{ __('how_we_work.steps.step1.title') }}
                        </h3>

                        <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6 font-normal">
                            {{ __('how_we_work.steps.step1.intro') }}
                        </p>

                        <!-- Bullets Block -->
                        <div class="p-6 rounded-2xl bg-[#F5F5F7] border border-black/[0.04] mb-5">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#13293F] block mb-3.5">
                                {{ __('how_we_work.steps.step1.bullets_title') }}
                            </span>
                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-[13px]">
                                @foreach(__('how_we_work.steps.step1.bullets') as $bullet)
                                    <li class="flex items-start space-x-2.5">
                                        <span class="w-4 h-4 rounded-full bg-[#13293F]/10 text-[#13293F] text-[10px] font-bold flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                        <span class="text-[#1D1D1F] font-medium leading-relaxed">{{ $bullet }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Note / Clarification Box -->
                        <div class="flex items-start space-x-3 p-4 rounded-xl bg-amber-50/60 border border-amber-200/50 text-xs text-amber-900/90 leading-relaxed">
                            <svg class="w-4 h-4 text-[#B89758] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p>
                                <strong class="font-semibold text-amber-950">Clarification Protocol:</strong> {{ __('how_we_work.steps.step1.note') }}
                            </p>
                        </div>
                    </div>


                    <!-- ========================================== -->
                    <!-- STEP 02: Supplier & Product Sourcing       -->
                    <!-- ========================================== -->
                    <div id="step-02" class="bento-card bg-white rounded-[32px] p-8 sm:p-10 border border-black/[0.07] shadow-xs scroll-mt-28 reveal-up">
                        <div class="flex flex-wrap items-center justify-between gap-3 mb-6 pb-6 border-b border-black/[0.06]">
                            <div class="flex items-center space-x-3.5">
                                <span class="w-11 h-11 rounded-2xl bg-[#13293F] text-white text-sm font-bold flex items-center justify-center font-mono shadow-2xs">02</span>
                                <div>
                                    <span class="text-[11px] font-mono font-bold uppercase tracking-[0.18em] text-[#B89758] block">{{ __('how_we_work.steps.step2.label') }}</span>
                                    <span class="text-xs font-semibold text-[#6E6E73]">{{ __('how_we_work.steps.step2.tagline') }}</span>
                                </div>
                            </div>
                            <span class="text-xs px-3 py-1 rounded-full bg-[#F5F5F7] text-[#13293F] font-medium border border-black/[0.05]">Market Discovery</span>
                        </div>

                        <h3 class="apple-display text-2xl sm:text-3xl font-bold text-[#13293F] mb-4">
                            {{ __('how_we_work.steps.step2.title') }}
                        </h3>

                        <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6 font-normal">
                            {{ __('how_we_work.steps.step2.intro') }}
                        </p>

                        <!-- Bullets Block -->
                        <div class="p-6 rounded-2xl bg-[#F5F5F7] border border-black/[0.04] mb-5">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#13293F] block mb-3.5">
                                {{ __('how_we_work.steps.step2.bullets_title') }}
                            </span>
                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-[13px]">
                                @foreach(__('how_we_work.steps.step2.bullets') as $bullet)
                                    <li class="flex items-start space-x-2.5">
                                        <span class="w-4 h-4 rounded-full bg-[#13293F]/10 text-[#13293F] text-[10px] font-bold flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                        <span class="text-[#1D1D1F] font-medium leading-relaxed">{{ $bullet }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Sourcing Note -->
                        <div class="flex items-start space-x-3 p-4 rounded-xl bg-slate-50 border border-slate-200/70 text-xs text-slate-700 leading-relaxed">
                            <svg class="w-4 h-4 text-[#13293F] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <p>
                                <strong class="font-semibold text-slate-900">Compliance Benchmark:</strong> {{ __('how_we_work.steps.step2.note') }}
                            </p>
                        </div>
                    </div>


                    <!-- ========================================== -->
                    <!-- STEP 03: Quotation & Commercial Agreement  -->
                    <!-- ========================================== -->
                    <div id="step-03" class="bento-card bg-gradient-to-br from-white via-white to-[#F5F5F7] rounded-[32px] p-8 sm:p-10 border-2 border-[#B89758]/30 shadow-md scroll-mt-28 reveal-up relative">
                        <!-- Top Accent Banner -->
                        <div class="absolute -top-3 right-8 px-3.5 py-1 rounded-full bg-[#13293F] text-white text-[10px] font-bold tracking-widest uppercase shadow-xs">
                            Core Transaction Anchor
                        </div>

                        <div class="flex flex-wrap items-center justify-between gap-3 mb-6 pb-6 border-b border-black/[0.06]">
                            <div class="flex items-center space-x-3.5">
                                <span class="w-11 h-11 rounded-2xl bg-[#B89758] text-[#13293F] text-sm font-bold flex items-center justify-center font-mono shadow-2xs">03</span>
                                <div>
                                    <span class="text-[11px] font-mono font-bold uppercase tracking-[0.18em] text-[#B89758] block">{{ __('how_we_work.steps.step3.label') }}</span>
                                    <span class="text-xs font-semibold text-[#6E6E73]">{{ __('how_we_work.steps.step3.tagline') }}</span>
                                </div>
                            </div>
                            <span class="text-xs px-3 py-1 rounded-full bg-[#13293F] text-white font-medium">Incoterms® 2020</span>
                        </div>

                        <h3 class="apple-display text-2xl sm:text-3xl font-bold text-[#13293F] mb-4">
                            {{ __('how_we_work.steps.step3.title') }}
                        </h3>

                        <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6 font-normal">
                            {{ __('how_we_work.steps.step3.intro') }}
                        </p>

                        <!-- Bullets Block (8 Commercial Bullets) -->
                        <div class="p-6 rounded-2xl bg-white border border-black/[0.06] mb-5 shadow-2xs">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#13293F] block mb-3.5">
                                {{ __('how_we_work.steps.step3.bullets_title') }}
                            </span>
                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-[13px]">
                                @foreach(__('how_we_work.steps.step3.bullets') as $bullet)
                                    <li class="flex items-start space-x-2.5">
                                        <span class="w-4 h-4 rounded-full bg-[#B89758]/20 text-[#13293F] text-[10px] font-bold flex items-center justify-center shrink-0 mt-0.5">●</span>
                                        <span class="text-[#1D1D1F] font-medium leading-relaxed">{{ $bullet }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Incoterms® Note -->
                        <div class="flex items-start space-x-3 p-4 rounded-xl bg-[#13293F]/[0.03] border border-[#13293F]/10 text-xs text-[#13293F] leading-relaxed">
                            <span class="px-2 py-0.5 rounded bg-[#13293F] text-white text-[10px] font-bold font-mono shrink-0 mt-0.5">ICC</span>
                            <p>
                                <strong class="font-semibold text-[#13293F]">Trade Terms Reference:</strong> {{ __('how_we_work.steps.step3.note') }}
                            </p>
                        </div>
                    </div>


                    <!-- ========================================== -->
                    <!-- STEP 04: Order Administration              -->
                    <!-- ========================================== -->
                    <div id="step-04" class="bento-card bg-white rounded-[32px] p-8 sm:p-10 border border-black/[0.07] shadow-xs scroll-mt-28 reveal-up">
                        <div class="flex flex-wrap items-center justify-between gap-3 mb-6 pb-6 border-b border-black/[0.06]">
                            <div class="flex items-center space-x-3.5">
                                <span class="w-11 h-11 rounded-2xl bg-[#13293F] text-white text-sm font-bold flex items-center justify-center font-mono shadow-2xs">04</span>
                                <div>
                                    <span class="text-[11px] font-mono font-bold uppercase tracking-[0.18em] text-[#B89758] block">{{ __('how_we_work.steps.step4.label') }}</span>
                                    <span class="text-xs font-semibold text-[#6E6E73]">{{ __('how_we_work.steps.step4.tagline') }}</span>
                                </div>
                            </div>
                            <span class="text-xs px-3 py-1 rounded-full bg-[#F5F5F7] text-[#13293F] font-medium border border-black/[0.05]">Execution & Tracking</span>
                        </div>

                        <h3 class="apple-display text-2xl sm:text-3xl font-bold text-[#13293F] mb-4">
                            {{ __('how_we_work.steps.step4.title') }}
                        </h3>

                        <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6 font-normal">
                            {{ __('how_we_work.steps.step4.intro') }}
                        </p>

                        <!-- Bullets Block -->
                        <div class="p-6 rounded-2xl bg-[#F5F5F7] border border-black/[0.04] mb-5">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#13293F] block mb-3.5">
                                {{ __('how_we_work.steps.step4.bullets_title') }}
                            </span>
                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-[13px]">
                                @foreach(__('how_we_work.steps.step4.bullets') as $bullet)
                                    <li class="flex items-start space-x-2.5">
                                        <span class="w-4 h-4 rounded-full bg-[#13293F]/10 text-[#13293F] text-[10px] font-bold flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                        <span class="text-[#1D1D1F] font-medium leading-relaxed">{{ $bullet }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Note -->
                        <div class="flex items-start space-x-3 p-4 rounded-xl bg-slate-50 border border-slate-200/70 text-xs text-slate-700 leading-relaxed">
                            <svg class="w-4 h-4 text-[#B89758] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p>
                                <strong class="font-semibold text-slate-900">Milestone Control:</strong> {{ __('how_we_work.steps.step4.note') }}
                            </p>
                        </div>
                    </div>


                    <!-- ======================================================== -->
                    <!-- STEP 05: Shipment & Documentation Coordination           -->
                    <!-- ======================================================== -->
                    <div id="step-05" class="bento-card bg-white rounded-[32px] p-8 sm:p-10 border border-black/[0.07] shadow-xs scroll-mt-28 reveal-up">
                        <div class="flex flex-wrap items-center justify-between gap-3 mb-6 pb-6 border-b border-black/[0.06]">
                            <div class="flex items-center space-x-3.5">
                                <span class="w-11 h-11 rounded-2xl bg-[#13293F] text-white text-sm font-bold flex items-center justify-center font-mono shadow-2xs">05</span>
                                <div>
                                    <span class="text-[11px] font-mono font-bold uppercase tracking-[0.18em] text-[#B89758] block">{{ __('how_we_work.steps.step5.label') }}</span>
                                    <span class="text-xs font-semibold text-[#6E6E73]">{{ __('how_we_work.steps.step5.tagline') }}</span>
                                </div>
                            </div>
                            <span class="text-xs px-3 py-1 rounded-full bg-[#F5F5F7] text-[#13293F] font-medium border border-black/[0.05]">Global Freight</span>
                        </div>

                        <h3 class="apple-display text-2xl sm:text-3xl font-bold text-[#13293F] mb-4">
                            {{ __('how_we_work.steps.step5.title') }}
                        </h3>

                        <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6 font-normal">
                            {{ __('how_we_work.steps.step5.intro') }}
                        </p>

                        <!-- Bullets Block (7 Shipment & Docs Bullets) -->
                        <div class="p-6 rounded-2xl bg-[#F5F5F7] border border-black/[0.04] mb-5">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#13293F] block mb-3.5">
                                {{ __('how_we_work.steps.step5.bullets_title') }}
                            </span>
                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-[13px]">
                                @foreach(__('how_we_work.steps.step5.bullets') as $bullet)
                                    <li class="flex items-start space-x-2.5">
                                        <span class="w-4 h-4 rounded-full bg-[#13293F]/10 text-[#13293F] text-[10px] font-bold flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                        <span class="text-[#1D1D1F] font-medium leading-relaxed">{{ $bullet }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Legal Disclaimer -->
                        <div class="flex items-start space-x-3 p-4 rounded-xl bg-slate-50 border border-slate-200/80 text-xs text-[#6E6E73] leading-relaxed">
                            <svg class="w-4 h-4 text-[#6E6E73] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <p>
                                <strong class="font-semibold text-slate-800">Transport & Document Notice:</strong> {{ __('how_we_work.steps.step5.note') }}
                            </p>
                        </div>
                    </div>


                    <!-- ======================================================== -->
                    <!-- STEP 06: Delivery Follow-Up & Transaction Closure         -->
                    <!-- ======================================================== -->
                    <div id="step-06" class="bento-card bg-white rounded-[32px] p-8 sm:p-10 border border-black/[0.07] shadow-xs scroll-mt-28 reveal-up">
                        <div class="flex flex-wrap items-center justify-between gap-3 mb-6 pb-6 border-b border-black/[0.06]">
                            <div class="flex items-center space-x-3.5">
                                <span class="w-11 h-11 rounded-2xl bg-[#13293F] text-white text-sm font-bold flex items-center justify-center font-mono shadow-2xs">06</span>
                                <div>
                                    <span class="text-[11px] font-mono font-bold uppercase tracking-[0.18em] text-[#B89758] block">{{ __('how_we_work.steps.step6.label') }}</span>
                                    <span class="text-xs font-semibold text-[#6E6E73]">{{ __('how_we_work.steps.step6.tagline') }}</span>
                                </div>
                            </div>
                            <span class="text-xs px-3 py-1 rounded-full bg-emerald-50 text-emerald-800 font-medium border border-emerald-200/60">Final Closure</span>
                        </div>

                        <h3 class="apple-display text-2xl sm:text-3xl font-bold text-[#13293F] mb-4">
                            {{ __('how_we_work.steps.step6.title') }}
                        </h3>

                        <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed mb-6 font-normal">
                            {{ __('how_we_work.steps.step6.intro') }}
                        </p>

                        <!-- Bullets Block (5 Closure Bullets) -->
                        <div class="p-6 rounded-2xl bg-[#F5F5F7] border border-black/[0.04] mb-5">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#13293F] block mb-3.5">
                                {{ __('how_we_work.steps.step6.bullets_title') }}
                            </span>
                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-[13px]">
                                @foreach(__('how_we_work.steps.step6.bullets') as $bullet)
                                    <li class="flex items-start space-x-2.5">
                                        <span class="w-4 h-4 rounded-full bg-[#13293F]/10 text-[#13293F] text-[10px] font-bold flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                        <span class="text-[#1D1D1F] font-medium leading-relaxed">{{ $bullet }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Legal Disclaimer -->
                        <div class="flex items-start space-x-3 p-4 rounded-xl bg-slate-50 border border-slate-200/80 text-xs text-[#6E6E73] leading-relaxed">
                            <svg class="w-4 h-4 text-[#6E6E73] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p>
                                <strong class="font-semibold text-slate-800">Commercial Disclaimer:</strong> {{ __('how_we_work.steps.step6.note') }}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 4: CROSS-INDUSTRY EDITORIAL BANNER                                -->
    <!-- ========================================================================= -->
    <section class="py-24 sm:py-32 bg-[#F5F5F7]/80 border-y border-black/[0.05]">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="max-w-3xl mb-14 reveal-up">
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-[#B89758] block mb-3">
                    {{ __('how_we_work.industries_banner.badge') }}
                </span>
                <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-[#13293F] leading-tight">
                    {{ __('how_we_work.industries_banner.title') }}
                </h2>
            </div>

            <!-- 3 Editorial Paragraphs (Wool Tops, Industrial Machinery, Commercial Products) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 sm:gap-10 mb-12 reveal-up">
                
                <!-- Wool Tops / Textile Raw Materials -->
                <div class="bento-card bg-white rounded-[28px] p-8 sm:p-9 border border-black/[0.06] shadow-2xs flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#13293F]/5 text-[#13293F] flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-[#13293F]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <circle cx="12" cy="12" r="8" stroke-dasharray="2 2" />
                                <path d="M12 4v16M4 12h16" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#13293F] mb-3.5">
                            {{ __('how_we_work.industries_banner.feature1_title') }}
                        </h3>
                        <p class="text-sm text-[#6E6E73] leading-relaxed font-normal">
                            {{ __('how_we_work.industries_banner.p1') }}
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-black/[0.05] text-xs font-semibold text-[#B89758]">
                        {{ __('how_we_work.industries_banner.feature1_desc') }}
                    </div>
                </div>

                <!-- Industrial Machinery & Equipment -->
                <div class="bento-card bg-white rounded-[28px] p-8 sm:p-9 border border-black/[0.06] shadow-2xs flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#13293F]/5 text-[#13293F] flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-[#13293F]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                                <path d="M8 12h8M12 8v8" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#13293F] mb-3.5">
                            {{ __('how_we_work.industries_banner.feature2_title') }}
                        </h3>
                        <p class="text-sm text-[#6E6E73] leading-relaxed font-normal">
                            {{ __('how_we_work.industries_banner.p2') }}
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-black/[0.05] text-xs font-semibold text-[#B89758]">
                        {{ __('how_we_work.industries_banner.feature2_desc') }}
                    </div>
                </div>

                <!-- Other Commercial Products -->
                <div class="bento-card bg-white rounded-[28px] p-8 sm:p-9 border border-black/[0.06] shadow-2xs flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#13293F]/5 text-[#13293F] flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-[#13293F]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96" />
                                <line x1="12" y1="22.08" x2="12" y2="12" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#13293F] mb-3.5">
                            {{ __('how_we_work.industries_banner.feature3_title') }}
                        </h3>
                        <p class="text-sm text-[#6E6E73] leading-relaxed font-normal">
                            {{ __('how_we_work.industries_banner.p3') }}
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-black/[0.05] text-xs font-semibold text-[#B89758]">
                        {{ __('how_we_work.industries_banner.feature3_desc') }}
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 5: ARCHITECTURAL CLOSING CALLOUT BANNER                           -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 bg-white">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 reveal-up">
            <div class="bento-card dark-bento bg-gradient-to-br from-[#13293F] via-[#13293F] to-[#0B1826] rounded-[34px] p-10 sm:p-14 lg:p-16 relative overflow-hidden shadow-2xl text-white">
                <!-- Ambient Glow Orbs -->
                <div class="absolute -top-28 -right-28 w-[400px] h-[400px] rounded-full bg-[#B89758]/15 blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-28 -left-28 w-[340px] h-[340px] rounded-full bg-white/[0.04] blur-3xl pointer-events-none"></div>

                <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                    <div class="max-w-2xl">
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-[#D8BF8A] block mb-3">
                            {{ __('how_we_work.cta.badge') }}
                        </span>
                        <h2 class="apple-display text-3xl sm:text-4xl font-bold leading-tight mb-4">
                            {{ __('how_we_work.cta.title') }}
                        </h2>
                        <p class="text-sm sm:text-base text-white/80 font-light leading-relaxed">
                            {{ __('how_we_work.cta.desc') }}
                        </p>
                    </div>
                    <div class="shrink-0 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <button onclick="openQuoteModal('General Business Inquiry')" class="group inline-flex items-center justify-center px-8 py-4 bg-white hover:bg-[#F5F5F7] text-[#13293F] text-sm font-semibold rounded-full transition-all duration-300 shadow-md hover:shadow-xl active:scale-[0.98] cursor-pointer">
                            <span>{{ __('how_we_work.cta.btn_inquiry') }}</span>
                            <span class="ml-2 text-[#B89758] transition-transform duration-300 group-hover:translate-x-1">→</span>
                        </button>
                        <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-white/10 hover:bg-white/15 text-white text-sm font-semibold rounded-full border border-white/15 transition-all duration-300 active:scale-[0.98]">
                            <span>{{ __('how_we_work.cta.btn_contact') }}</span>
                            <span class="ml-2 text-white/70 transition-transform duration-300 group-hover:translate-x-1">→</span>
                        </a>
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
