<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-head', [
        'pageKey' => 'contact',
        'title' => __('contact.meta.title'),
        'description' => __('contact.meta.description'),
        'breadcrumbTitle' => __('messages.nav.contact'),
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
                        <span class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#18181B]">{{ __('messages.nav.contact') }}</span>
                    </div>

                    <!-- Apple Display Headline -->
                    <h1 class="hero-animate-2 apple-display text-4xl sm:text-5xl lg:text-[62px] xl:text-[68px] font-bold text-[#18181B] leading-[1.04] mb-6">
                        {{ __('contact.hero.title_line1') }}<br>
                        <span class="text-[#18181B]/80">{{ __('contact.hero.title_line2') }}</span>
                    </h1>

                    <!-- Concise Editorial Intro -->
                    <div class="hero-animate-3 space-y-4 max-w-2xl mb-8 text-[#6E6E73] text-base sm:text-lg leading-relaxed font-normal">
                        <p>
                            {!! __('contact.hero.intro_p1', ['company' => '<strong class="font-semibold text-[#18181B]">' . __('contact.hero.company_name') . '</strong>']) !!}
                        </p>
                        <p class="text-sm sm:text-base text-[#6E6E73]/90">
                            {!! __('contact.hero.intro_p2', ['incoterms' => '<strong class="text-[#18181B]">' . __('contact.hero.incoterms') . '</strong>']) !!}
                        </p>
                    </div>

                    <!-- Clear Communication Channel Notice (Form or Email) -->
                    <div class="hero-animate-3 mb-7 p-4 sm:p-5 rounded-2xl bg-[#F5F5F7] border border-[#B89758]/40 max-w-2xl">
                        <div class="flex items-start space-x-3.5">
                            <div class="w-9 h-9 rounded-xl bg-[#18181B] text-[#D8BF8A] flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xs sm:text-sm font-bold text-[#18181B] tracking-tight mb-1">
                                    {{ __('contact.hero.channel_notice_title') }}
                                </h2>
                                <p class="text-xs sm:text-[13px] text-[#6E6E73] leading-relaxed">
                                    {{ __('contact.hero.channel_notice_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Sleek Apple-Style Quick Action Pills -->
                    <div class="hero-animate-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 sm:gap-4 mb-10">
                        <a href="#inquiry-desk" class="group inline-flex items-center justify-center px-8 py-4 bg-schmitz-red hover:bg-schmitz-redHover text-white text-sm font-medium rounded-full transition-all duration-300 shadow-sm hover:shadow-xl active:scale-[0.98]">
                            <span>{{ __('contact.hero.cta_form') }}</span>
                            <span class="ml-2 text-[#D8BF8A] transition-transform duration-300 group-hover:translate-y-0.5">↓</span>
                        </a>
                        <a href="mailto:{{ $companySettings->email_info }}" class="group inline-flex items-center justify-center px-8 py-4 bg-[#F5F5F7] hover:bg-[#E8E8ED] text-[#18181B] text-sm font-medium rounded-full transition-all duration-300 active:scale-[0.98]">
                            <svg class="w-4 h-4 mr-2 text-[#B89758]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>{{ __('contact.hero.cta_email') }}</span>
                        </a>
                    </div>

                    <!-- 4-Pillar Operational Strip -->
                    <div class="hero-animate-4 pt-6 border-t border-black/[0.07] grid grid-cols-2 sm:grid-cols-4 gap-4 text-xs">
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block mb-0.5">01</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('contact.hero.pill1_label') }}</span>
                            <span class="text-[#6E6E73] text-[11px]">{{ __('contact.hero.pill1_val') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block mb-0.5">02</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('contact.hero.pill2_label') }}</span>
                            <span class="text-[#6E6E73] text-[11px]">{{ __('contact.hero.pill2_val') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block mb-0.5">03</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('contact.hero.pill3_label') }}</span>
                            <span class="text-[#6E6E73] text-[11px]">{{ __('contact.hero.pill3_val') }}</span>
                        </div>
                        <div>
                            <span class="text-[#B89758] font-mono text-[11px] block mb-0.5">04</span>
                            <span class="font-semibold text-[#18181B] block">{{ __('contact.hero.pill4_label') }}</span>
                            <span class="text-[#6E6E73] text-[11px]">{{ __('contact.hero.pill4_val') }}</span>
                        </div>
                    </div>

                </div>

                <!-- Right Interactive Department Routing Card (5 Cols) -->
                <div class="lg:col-span-5 hero-animate-3">
                    <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#18181B] to-[#09090B] text-white rounded-[30px] p-7 sm:p-9 shadow-[0_32px_64px_-16px_rgba(24,24,27,0.28)] relative">
                        <!-- Subtle Gold Glow -->
                        <div class="absolute -top-24 -right-24 w-60 h-60 rounded-full bg-[#B89758]/20 blur-3xl pointer-events-none"></div>
                        <div class="absolute -bottom-24 -left-24 w-52 h-52 rounded-full bg-white/[0.03] blur-2xl pointer-events-none"></div>

                        <div class="relative z-10">
                            <!-- Header -->
                            <div class="flex items-center justify-between pb-5 mb-6 border-b border-white/10">
                                <div>
                                    <span class="text-[10px] uppercase tracking-[0.22em] text-[#D8BF8A] font-semibold block">{{ __('contact.routing.eyebrow') }}</span>
                                    <h2 class="text-base font-semibold text-white mt-0.5">{{ __('contact.routing.title') }}</h2>
                                </div>
                                <span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-white/10 text-[11px] font-medium text-white border border-white/10">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span>{{ __('contact.routing.badge') }}</span>
                                </span>
                            </div>

                            <!-- Department List -->
                            <div class="space-y-3">
                                
                                <!-- Department 1: General & Corporate Inquiries -->
                                <div class="p-3.5 rounded-2xl bg-white/[0.05] border border-white/10 hover:border-[#B89758]/50 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-xs font-semibold text-white">{{ __('contact.routing.dept1_title') }}</span>
                                        <button type="button" onclick="copyEmailToClipboard('{{ $companySettings->email_info }}', this)" class="inline-flex items-center space-x-1 px-2.5 py-0.5 rounded-full bg-white/10 hover:bg-[#B89758] text-[10px] text-white/90 hover:text-[#09090B] font-medium transition-colors cursor-pointer" title="{{ __('contact.routing.copy_title') }}">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                            </svg>
                                            <span class="copy-label" data-default-text="{{ __('contact.hero.copy') }}" data-copied-text="{{ __('contact.hero.copied') }}">{{ __('contact.hero.copy') }}</span>
                                        </button>
                                    </div>
                                    <a href="mailto:{{ $companySettings->email_info }}" class="text-sm font-mono text-[#D8BF8A] hover:underline block mb-0.5">
                                        {{ $companySettings->email_info }}
                                    </a>
                                    <p class="text-[11px] text-white/70 leading-relaxed font-light">
                                        {{ __('contact.routing.dept1_desc') }}
                                    </p>
                                </div>

                                <!-- Department 2: International Trading -->
                                <div class="p-3.5 rounded-2xl bg-white/[0.05] border border-white/10 hover:border-[#B89758]/50 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-xs font-semibold text-white">{{ __('contact.routing.dept2_title') }}</span>
                                        <button type="button" onclick="copyEmailToClipboard('{{ $companySettings->email_trade }}', this)" class="inline-flex items-center space-x-1 px-2.5 py-0.5 rounded-full bg-white/10 hover:bg-[#B89758] text-[10px] text-white/90 hover:text-[#09090B] font-medium transition-colors cursor-pointer" title="{{ __('contact.routing.copy_title') }}">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                            </svg>
                                            <span class="copy-label" data-default-text="{{ __('contact.hero.copy') }}" data-copied-text="{{ __('contact.hero.copied') }}">{{ __('contact.hero.copy') }}</span>
                                        </button>
                                    </div>
                                    <a href="mailto:{{ $companySettings->email_trade }}" class="text-sm font-mono text-[#D8BF8A] hover:underline block mb-0.5">
                                        {{ $companySettings->email_trade }}
                                    </a>
                                    <p class="text-[11px] text-white/70 leading-relaxed font-light">
                                        {{ __('contact.routing.dept2_desc') }}
                                    </p>
                                </div>

                            </div>

                            <!-- Desk Meta Notes -->
                            <div class="mt-6 pt-5 border-t border-white/10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 text-[11px] text-white/60">
                                <span>{{ __('contact.routing.hours') }}</span>
                                <span class="flex items-center text-[#D8BF8A]">
                                    <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                    {{ __('contact.routing.security') }}
                                </span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 2: MAIN EMBEDDED RFQ & COMMERCIAL DESK (#inquiry-desk)            -->
    <!-- ========================================================================= -->
    <section id="inquiry-desk" class="py-20 sm:py-28 bg-[#FAFAFC] border-b border-black/[0.05] scroll-mt-20">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <!-- Section Header -->
            <div class="max-w-3xl mb-12 sm:mb-16 reveal-up">
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-[#B89758] block mb-3">
                    {{ __('contact.inquiry.eyebrow') }}
                </span>
                <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-[#18181B] leading-[1.08] mb-4">
                    {{ __('contact.inquiry.title') }}
                </h2>
                <p class="text-base sm:text-lg text-[#6E6E73] font-normal leading-relaxed">
                    {{ __('contact.inquiry.desc') }}
                </p>
            </div>

            <!-- Sticky 12-Column Split Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- Left 4 Cols: Sticky Corporate Entity & RFQ Checklist -->
                <div class="lg:col-span-4 lg:sticky lg:top-28 space-y-6">
                    
                    <!-- Registered Corporate Entity Card -->
                    <div class="bento-card bg-white rounded-[28px] overflow-hidden border border-black/[0.06] shadow-xs">
                        <div class="relative aspect-video overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?auto=format&fit=crop&w=1000&q=85" 
                                 onerror="this.src='{{ asset('images/Golden Hour Over the Bosphorus.png') }}'"
                                 alt="{{ __('contact.entity.img_alt') }}" 
                                 loading="lazy"
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#18181B]/90 via-[#18181B]/40 to-transparent"></div>
                            <div class="absolute bottom-4 left-5 right-5 text-white">
                                <span class="text-[10px] font-mono uppercase tracking-widest text-[#D8BF8A] block mb-0.5">{{ __('contact.entity.tag') }}</span>
                                <span class="text-sm font-semibold block leading-tight">{{ __('contact.entity.subtag') }}</span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4 text-xs">
                            <div>
                                <span class="text-[11px] uppercase tracking-wider text-[#6E6E73] block mb-1">{{ __('contact.entity.reg_label') }}</span>
                                <h3 class="text-sm font-bold text-[#18181B] leading-snug">
                                    {{ $companySettings->legal_name ?: __('contact.entity.company_name') }}
                                </h3>
                            </div>

                            <div class="pt-3 border-t border-black/[0.05]">
                                <span class="text-[10px] text-[#6E6E73] uppercase tracking-wider block mb-0.5">{{ __('contact.entity.jurisdiction_label') }}</span>
                                <span class="font-medium text-[#18181B]">{{ $companySettings->country ?: __('contact.entity.jurisdiction_val') }}</span>
                            </div>

                            <div class="pt-3 border-t border-black/[0.05]">
                                <span class="text-[10px] text-[#6E6E73] uppercase tracking-wider block mb-1">{{ __('contact.entity.office_label') }}</span>
                                <span class="inline-block w-full px-3 py-2 rounded-xl bg-[#F5F5F7] border border-black/[0.06] text-xs font-medium text-[#18181B] leading-relaxed">
                                    {{ $companySettings->registered_address ?: __('contact.entity.office_ph') }}
                                </span>
                            </div>

                            <div class="pt-3 border-t border-black/[0.05]">
                                <span class="text-[10px] text-[#6E6E73] uppercase tracking-wider block mb-1">{{ __('contact.entity.tradereg_label') }}</span>
                                <span class="inline-block w-full px-3 py-2 rounded-xl bg-[#F5F5F7] border border-dashed border-[#B89758]/50 font-mono text-[11px] text-[#6E6E73]">
                                    {{ $companySettings->mersis_number ?: __('contact.entity.tradereg_val') }}
                                </span>
                            </div>

                            <div class="pt-3 border-t border-black/[0.05]">
                                <span class="text-[10px] text-[#6E6E73] uppercase tracking-wider block mb-1">{{ __('contact.entity.corridors_label') }}</span>
                                <p class="text-[#18181B] text-xs leading-relaxed">
                                    {{ __('contact.entity.corridors_val') }}
                                </p>
                            </div>

                            <div class="pt-3 border-t border-black/[0.05] flex items-center justify-between text-[11px]">
                                <span class="inline-flex items-center space-x-1.5 text-[#6E6E73]">
                                    <svg class="w-3.5 h-3.5 text-[#18181B]" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                                    </svg>
                                    <span>{{ __('contact.entity.linkedin_label') }}</span>
                                </span>
                                @if($companySettings->linkedin_url)
                                    <a href="{{ $companySettings->linkedin_url }}" target="_blank" rel="noopener noreferrer" class="px-2.5 py-1 rounded-full bg-[#F5F5F7] border border-black/10 text-[10px] font-semibold text-[#18181B] hover:text-[#B89758] transition-colors">
                                        LinkedIn ↗
                                    </a>
                                @else
                                    <a href="#linkedin-placeholder" onclick="return false;" class="px-2.5 py-1 rounded-full bg-[#F5F5F7] border border-dashed border-black/15 text-[10px] font-medium text-[#6E6E73] hover:text-[#18181B] transition-colors">
                                        {{ __('contact.entity.linkedin_ph') }}
                                    </a>
                                @endif
                            </div>

                            <div class="pt-3 border-t border-black/[0.05] flex items-center justify-between text-[11px]">
                                <span class="text-[#6E6E73]">{{ __('contact.entity.phone_label') }}</span>
                                @if($companySettings->phone_number)
                                    <a href="tel:{{ preg_replace('/\s+/', '', $companySettings->phone_number) }}" class="font-semibold text-[#18181B] hover:text-[#B89758] transition-colors">
                                        {{ $companySettings->phone_number }}
                                    </a>
                                @else
                                    <a href="mailto:{{ $companySettings->email_info }}" class="font-semibold text-[#18181B] hover:text-[#B89758] transition-colors">
                                        {{ $companySettings->email_info }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- What to Include in Your RFQ Checklist Card -->
                    <div class="bento-card bg-white rounded-[28px] p-6 sm:p-7 border border-black/[0.06] shadow-xs">
                        <div class="flex items-center space-x-2.5 mb-5 pb-4 border-b border-black/[0.06]">
                            <div class="w-7 h-7 rounded-lg bg-[#18181B] flex items-center justify-center text-[#B89758]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                </svg>
                            </div>
                            <h3 class="text-sm font-bold text-[#18181B]">
                                {{ __('contact.checklist.title') }}
                            </h3>
                        </div>

                        <ul class="space-y-3.5 text-xs text-[#6E6E73]">
                            <li class="flex items-start space-x-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#F5F5F7] text-[#18181B] font-semibold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-black/[0.06]">1</span>
                                <div>
                                    <strong class="font-semibold text-[#18181B] block">{{ __('contact.checklist.item1_title') }}</strong>
                                    <span>{{ __('contact.checklist.item1_desc') }}</span>
                                </div>
                            </li>

                            <li class="flex items-start space-x-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#F5F5F7] text-[#18181B] font-semibold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-black/[0.06]">2</span>
                                <div>
                                    <strong class="font-semibold text-[#18181B] block">{{ __('contact.checklist.item2_title') }}</strong>
                                    <span>{{ __('contact.checklist.item2_desc') }}</span>
                                </div>
                            </li>

                            <li class="flex items-start space-x-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#F5F5F7] text-[#18181B] font-semibold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-black/[0.06]">3</span>
                                <div>
                                    <strong class="font-semibold text-[#18181B] block">{{ __('contact.checklist.item3_title') }}</strong>
                                    <span>{{ __('contact.checklist.item3_desc') }}</span>
                                </div>
                            </li>

                            <li class="flex items-start space-x-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#F5F5F7] text-[#18181B] font-semibold text-[10px] flex items-center justify-center shrink-0 mt-0.5 border border-black/[0.06]">4</span>
                                <div>
                                    <strong class="font-semibold text-[#18181B] block">{{ __('contact.checklist.item4_title') }}</strong>
                                    <span>{{ __('contact.checklist.item4_desc') }}</span>
                                </div>
                            </li>
                        </ul>

                        <div class="mt-5 pt-4 border-t border-black/[0.06] bg-[#F5F5F7] -mx-6 -mb-6 p-4 rounded-b-[28px]">
                            <p class="text-[11px] text-[#6E6E73] leading-relaxed">
                                {!! __('contact.checklist.tip', ['strong' => '<strong class="text-[#18181B] font-semibold">' . __('contact.checklist.tip_prefix') . '</strong>']) !!}
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Right 8 Cols: Full Apple-Grade Embedded Commercial Inquiry Card -->
                <div class="lg:col-span-8">
                    <div class="bento-card bg-white rounded-[32px] p-7 sm:p-10 lg:p-12 border border-black/[0.06] shadow-[0_20px_50px_rgba(0,0,0,0.04)] relative">
                        
                        <!-- Top Header Pill -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-6 mb-8 border-b border-black/[0.06] gap-3">
                            <div>
                                <span class="text-[11px] uppercase tracking-[0.18em] text-[#B89758] font-semibold block mb-1">
                                    {{ __('contact.form.header_tag') }}
                                </span>
                                <h3 class="apple-subdisplay text-xl sm:text-2xl font-bold text-[#18181B]">
                                    {{ __('contact.form.header_title') }}
                                </h3>
                            </div>
                            <span class="self-start sm:self-auto inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-[#F5F5F7] text-[11px] font-medium text-[#6E6E73] border border-black/[0.06]">
                                <svg class="w-3.5 h-3.5 text-[#B89758]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                                <span>{{ __('contact.form.ssl_badge') }}</span>
                            </span>
                        </div>

                        <!-- Form Container -->
                        <div id="contact-form-container">
                            <form id="contact-inquiry-form" action="{{ route('inquiries.store') }}" method="POST" enctype="multipart/form-data" onsubmit="handleContactPageSubmit(event)" class="space-y-6">
                                @csrf
                                <input type="hidden" name="locale" value="{{ app()->getLocale() }}">
                                <div id="contact-error-box" class="hidden p-4 rounded-xl bg-rose-50 border border-rose-200 text-xs text-rose-700"></div>
                                
                                <!-- Row 1: Full Name & Company Name -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                            {{ __('contact.form.name_label') }} <span class="text-rose-500">*</span>
                                        </label>
                                        <input type="text" 
                                               id="contact-full-name"
                                               name="full_name"
                                               required 
                                               class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all placeholder:text-[#6E6E73]/60" 
                                               placeholder="{{ __('contact.form.name_ph') }}">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                            {{ __('contact.form.company_label') }} <span class="text-rose-500">*</span>
                                        </label>
                                        <input type="text" 
                                               id="contact-company-name"
                                               name="company_name"
                                               required 
                                               class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all placeholder:text-[#6E6E73]/60" 
                                               placeholder="{{ __('contact.form.company_ph') }}">
                                    </div>
                                </div>

                                <!-- Row 2: Business Email & Phone / WhatsApp -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                            {{ __('contact.form.email_label') }} <span class="text-rose-500">*</span>
                                        </label>
                                        <input type="email" 
                                               id="contact-email"
                                               name="email"
                                               required 
                                               class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all placeholder:text-[#6E6E73]/60" 
                                               placeholder="{{ __('contact.form.email_ph') }}">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                            {{ __('contact.form.phone_label') }}
                                        </label>
                                        <input type="tel" 
                                               id="contact-phone"
                                               name="phone"
                                               class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all placeholder:text-[#6E6E73]/60" 
                                               placeholder="{{ __('contact.form.phone_ph') }}">
                                    </div>
                                </div>

                                <!-- Row 3: Country / Region & Inquiry Category -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                            {{ __('contact.form.country_label') }} <span class="text-rose-500">*</span>
                                        </label>
                                        <input type="text" 
                                               id="contact-country"
                                               name="country"
                                               required 
                                               class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all placeholder:text-[#6E6E73]/60" 
                                               placeholder="{{ __('contact.form.country_ph') }}">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                            {{ __('contact.form.category_label') }} <span class="text-rose-500">*</span>
                                        </label>
                                        <select id="contact-category" 
                                                name="category"
                                                required
                                                class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all text-[#18181B]">
                                            <option value="Textile Raw Materials">{{ __('contact.form.cat_textile') }}</option>
                                            <option value="Industrial Machinery & Equipment">{{ __('contact.form.cat_machinery') }}</option>
                                            <option value="International Sourcing">{{ __('contact.form.cat_sourcing') }}</option>
                                            <option value="Logistics Coordination">{{ __('contact.form.cat_logistics') }}</option>
                                            <option value="General Business Inquiry">{{ __('contact.form.cat_general') }}</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Row 4: Required Quantity & Delivery Destination / Incoterms -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                            {{ __('contact.form.quantity_label') }} <span class="text-rose-500">*</span>
                                        </label>
                                        <input type="text" 
                                               id="contact-quantity"
                                               name="quantity"
                                               required 
                                               class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all placeholder:text-[#6E6E73]/60" 
                                               placeholder="{{ __('contact.form.quantity_ph') }}">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                            {{ __('contact.form.destination_label') }} <span class="text-rose-500">*</span>
                                        </label>
                                        <input type="text" 
                                               id="contact-destination"
                                               name="destination"
                                               required 
                                               class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all placeholder:text-[#6E6E73]/60" 
                                               placeholder="{{ __('contact.form.destination_ph') }}">
                                    </div>
                                </div>

                                <!-- Row 5: Delivery Timeline & Payment Milestone -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                            {{ __('contact.form.timeline_label') }}
                                        </label>
                                        <input type="text" 
                                               id="contact-timeline"
                                               class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all placeholder:text-[#6E6E73]/60" 
                                               placeholder="{{ __('contact.form.timeline_ph') }}">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                            {{ __('contact.form.payment_label') }}
                                        </label>
                                        <select id="contact-payment" 
                                                class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all text-[#18181B]">
                                            <option value="Irrevocable Letter of Credit (L/C)">{{ __('contact.form.pay_lc') }}</option>
                                            <option value="Telegraphic Transfer (T/T)">{{ __('contact.form.pay_tt') }}</option>
                                            <option value="Cash Against Documents (CAD)">{{ __('contact.form.pay_cad') }}</option>
                                            <option value="To Be Discussed">{{ __('contact.form.pay_discuss') }}</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Row 6: Detailed Technical Specifications Textarea -->
                                <div>
                                    <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                        {{ __('contact.form.specs_label') }} <span class="text-rose-500">*</span>
                                    </label>
                                    <textarea rows="4" 
                                              id="contact-specs"
                                              name="specifications"
                                              required 
                                              class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all placeholder:text-[#6E6E73]/60 leading-relaxed" 
                                              placeholder="{{ __('contact.form.specs_ph') }}"></textarea>
                                </div>

                                <!-- Row 6b: Additional Commercial Message Textarea -->
                                <div>
                                    <label class="block text-xs font-semibold text-[#18181B] mb-2">
                                        {{ __('contact.form.message_label') }}
                                    </label>
                                    <textarea rows="3" 
                                              id="contact-message"
                                              name="message"
                                              class="w-full px-4 py-3.5 text-sm bg-[#F5F5F7] border border-transparent focus:border-[#18181B] focus:bg-white rounded-xl focus:outline-none transition-all placeholder:text-[#6E6E73]/60 leading-relaxed" 
                                              placeholder="{{ __('contact.form.message_ph') }}"></textarea>
                                </div>

                                <!-- Row 7: Drag-and-Drop Style Technical Drawing / Spec Upload -->
                                <div class="bg-[#F5F5F7] border-2 border-dashed border-black/10 hover:border-[#18181B]/40 p-5 sm:p-6 rounded-2xl transition-all">
                                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                                        <div class="flex items-center space-x-3.5 text-left">
                                            <div class="w-10 h-10 rounded-xl bg-white border border-black/5 flex items-center justify-center text-[#18181B] shrink-0 shadow-2xs">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="text-xs font-semibold text-[#18181B] block" id="contact-file-label" data-default-text="{{ __('contact.form.file_label') }}" data-selected-tpl="{{ __('contact.form.file_selected_tpl') }}">
                                                    {{ __('contact.form.file_label') }}
                                                </span>
                                                <span class="text-[11px] text-[#6E6E73]">
                                                    {{ __('contact.form.file_hint') }}
                                                </span>
                                            </div>
                                        </div>

                                        <label class="px-5 py-2.5 bg-white hover:bg-white/80 border border-black/10 text-xs font-semibold text-[#18181B] rounded-full shadow-2xs cursor-pointer transition-all active:scale-95 shrink-0">
                                            <span>{{ __('contact.form.file_btn') }}</span>
                                            <input type="file" id="contact-file-input" name="attachment" accept=".pdf,.xlsx,.xls,.dwg,.jpg,.jpeg,.png,.doc,.docx" class="hidden" onchange="handleContactFileSelect(this)">
                                        </label>
                                    </div>
                                </div>

                                <!-- Row 8: KVKK / GDPR Commercial Disclaimer & Checkbox -->
                                <div class="p-4 rounded-xl bg-[#F5F5F7]/70 border border-black/[0.04] space-y-3">
                                    <div class="flex items-start space-x-3">
                                        <input type="checkbox" 
                                               id="contact-consent" 
                                               required 
                                               class="mt-1 w-4 h-4 rounded border-gray-300 text-[#18181B] focus:ring-[#18181B] cursor-pointer">
                                        <label for="contact-consent" class="text-xs text-[#6E6E73] leading-relaxed cursor-pointer select-none">
                                            {!! __('contact.form.consent_text', ['legal_btn' => '<button type="button" onclick="openLegalModal(\'' . addslashes(__('contact.form.legal_modal_title')) . '\')" class="text-[#18181B] font-semibold underline hover:text-[#B89758]">' . __('contact.form.legal_link') . '</button>']) !!}
                                        </label>
                                    </div>
                                    <p class="text-[11px] text-[#6E6E73]/80 leading-relaxed pl-7">
                                        {{ __('contact.form.disclaimer') }}
                                    </p>
                                </div>

                                <!-- Action Buttons -->
                                <div class="pt-3 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4 border-t border-black/[0.06]">
                                    <div class="text-[11px] text-[#6E6E73] flex items-center space-x-2">
                                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                        <span>{{ __('contact.form.routing_note') }}</span>
                                    </div>

                                    <div class="flex items-center space-x-3">
                                        <button type="reset" class="px-5 py-3 text-xs font-semibold text-[#6E6E73] hover:text-[#18181B] transition-colors cursor-pointer">
                                            {{ __('contact.form.btn_clear') }}
                                        </button>
                                        <button id="contact-submit-btn" type="submit" class="group inline-flex items-center justify-center px-8 py-3.5 bg-schmitz-red hover:bg-schmitz-redHover disabled:opacity-60 text-white text-xs font-semibold rounded-full transition-all shadow-sm hover:shadow-lg active:scale-[0.98] cursor-pointer">
                                            <span>{{ __('contact.form.btn_submit') }}</span>
                                            <span class="ml-2 text-[#D8BF8A] transition-transform duration-300 group-hover:translate-x-1">→</span>
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <!-- Inline Interactive Confirmation State (Revealed Upon Submit) -->
                        <div id="contact-success-container" class="hidden py-12 px-6 sm:px-10 text-center">
                            <div class="w-16 h-16 bg-[#18181B] text-[#B89758] mx-auto flex items-center justify-center rounded-2xl mb-6 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            
                            <span id="confirmation-ref-code" class="text-xs font-mono text-[#B89758] uppercase tracking-widest block mb-2">
                                REF: SCH-2026-RFQ-CONFIRMED
                            </span>
                            
                            <h3 class="apple-subdisplay text-2xl sm:text-3xl font-bold text-[#18181B] mb-3">
                                {{ __('contact.form.success_title') }}
                            </h3>
                            
                            <p class="text-sm text-[#6E6E73] max-w-lg mx-auto leading-relaxed mb-6">
                                {!! __('contact.form.success_desc', ['company' => '<strong class="text-[#18181B]">' . __('contact.hero.company_name') . '</strong>']) !!}
                            </p>

                            <div class="max-w-md mx-auto p-4 rounded-2xl bg-[#F5F5F7] border border-black/[0.05] text-left text-xs text-[#6E6E73] space-y-2 mb-8">
                                <div class="flex justify-between">
                                    <span>{{ __('contact.form.success_window_label') }}</span>
                                    <strong class="text-[#18181B]">{{ __('contact.form.success_window_val') }}</strong>
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('contact.form.success_mailbox_label') }}</span>
                                    <strong class="text-[#18181B]">{{ $companySettings->email_trade }}</strong>
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('contact.form.success_mode_label') }}</span>
                                    <strong class="text-[#18181B]">{{ __('contact.form.success_mode_val') }}</strong>
                                </div>
                            </div>

                            <button type="button" onclick="resetContactPageForm()" class="px-8 py-3.5 bg-[#18181B] hover:bg-[#27272A] text-white text-xs font-semibold rounded-full shadow-sm transition-all cursor-pointer">
                                {{ __('contact.form.btn_another') }}
                            </button>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Dedicated Supplier Cooperation Bento Card -->
            <div class="mt-10 lg:mt-14 reveal-up">
                <div class="bento-card bg-white rounded-[30px] p-7 sm:p-10 border border-black/[0.06] shadow-[0_16px_40px_rgba(0,0,0,0.03)] group">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 lg:gap-10">
                        <div class="w-full lg:w-72 aspect-[3/2] rounded-2xl overflow-hidden shrink-0 bg-[#18181B]">
                            <img 
                                src="{{ asset('images/Supplier Procurement Desk.jpg') }}" 
                                alt="{{ __('contact.supplier.title') }}" 
                                loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            >
                        </div>
                        <div class="max-w-2xl">
                            <div class="flex items-center space-x-2.5 mb-3">
                                <span class="w-2 h-2 rounded-full bg-[#B89758]"></span>
                                <span class="text-[11px] font-semibold uppercase tracking-[0.2em] text-[#B89758]">
                                    {{ __('contact.supplier.eyebrow') }}
                                </span>
                            </div>
                            <h3 class="apple-subdisplay text-2xl sm:text-3xl font-bold text-[#18181B] mb-3">
                                {{ __('contact.supplier.title') }}
                            </h3>
                            <p class="text-sm sm:text-base text-[#6E6E73] leading-relaxed font-normal">
                                {{ __('contact.supplier.desc') }}
                            </p>
                        </div>

                        <div class="shrink-0 flex flex-col items-start lg:items-end gap-3">
                            <div class="inline-flex items-center space-x-3 px-5 py-3.5 rounded-2xl bg-[#F5F5F7] border border-black/[0.06]">
                                <div class="w-9 h-9 rounded-xl bg-[#18181B] text-[#D8BF8A] flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="text-left">
                                    <span class="text-[10px] uppercase tracking-wider text-[#6E6E73] font-semibold block">
                                        {{ __('contact.supplier.contact_label') }}
                                    </span>
                                    <a href="mailto:{{ $companySettings->email_trade }}" class="text-sm font-mono font-semibold text-[#18181B] hover:text-[#B89758] transition-colors">
                                        {{ $companySettings->email_trade }}
                                    </a>
                                </div>
                                <button type="button" onclick="copyEmailToClipboard('{{ $companySettings->email_trade }}', this)" class="ml-2 inline-flex items-center space-x-1 px-3 py-1.5 rounded-full bg-white hover:bg-[#18181B] text-[11px] text-[#18181B] hover:text-white font-medium border border-black/10 transition-colors cursor-pointer" title="{{ __('contact.routing.copy_title') }}">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="copy-label" data-default-text="{{ __('contact.hero.copy') }}" data-copied-text="{{ __('contact.hero.copied') }}">{{ __('contact.hero.copy') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Location Map Bento Card -->
            @php
                $mapAddress = $companySettings->registered_address ?: 'Cennetoğlu Mah. Yeşillik Cad. No:228-230/514 Karabağlar, 35110 Gaziemir / IZMIR';
                $encodedMapAddress = urlencode($mapAddress);
            @endphp
            <div class="mt-10 lg:mt-14 reveal-up">
                <div class="bento-card bg-white rounded-[30px] border border-black/[0.06] shadow-[0_16px_40px_rgba(0,0,0,0.03)] overflow-hidden group">
                    <!-- Map Header Bar -->
                    <div class="px-7 py-6 sm:px-10 sm:py-7 border-b border-black/[0.06] flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white">
                        <div>
                            <div class="flex items-center space-x-2.5 mb-2">
                                <span class="w-2 h-2 rounded-full bg-[#B89758] animate-pulse"></span>
                                <span class="text-[11px] font-semibold uppercase tracking-[0.2em] text-[#B89758]">
                                    {{ __('contact.map.eyebrow') }}
                                </span>
                            </div>
                            <h3 class="apple-subdisplay text-xl sm:text-2xl font-bold text-[#18181B]">
                                {{ __('contact.map.title') }}
                            </h3>
                            <p class="text-xs sm:text-sm text-[#6E6E73] mt-1">
                                {{ $mapAddress }}
                            </p>
                        </div>

                        <a href="https://www.google.com/maps/search/?api=1&query={{ $encodedMapAddress }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="inline-flex items-center justify-center space-x-2 px-5 py-2.5 rounded-full bg-[#18181B] hover:bg-[#27272A] text-white text-xs font-medium tracking-wide transition-all duration-300 shadow-xs hover:shadow-md active:scale-[0.98] shrink-0">
                            <svg class="w-3.5 h-3.5 text-[#D8BF8A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>{{ __('contact.map.open_maps') }}</span>
                            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Embedded Map Container with Gentle Hover & Entrance Transition -->
                    <div class="relative h-[340px] sm:h-[420px] lg:h-[450px] w-full bg-[#F5F5F7] overflow-hidden">
                        <iframe
                            src="https://maps.google.com/maps?q={{ $encodedMapAddress }}&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            title="{{ __('contact.map.title') }}"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full border-0 grayscale-[20%] contrast-[1.03] transition-all duration-700 ease-out group-hover:grayscale-0 group-hover:scale-[1.01]"
                            allowfullscreen>
                        </iframe>

                        <!-- Floating Glassmorphic Location Pill -->
                        <div class="pointer-events-none absolute bottom-4 left-4 sm:bottom-6 sm:left-6 hidden sm:inline-flex items-center space-x-3 px-4 py-3 rounded-2xl bg-white/90 backdrop-blur-md border border-black/[0.08] shadow-[0_12px_30px_rgba(0,0,0,0.08)] transition-all duration-500 ease-out group-hover:-translate-y-1">
                            <span class="relative flex h-2.5 w-2.5 shrink-0">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#C81E1E] opacity-60"></span>
                                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#C81E1E]"></span>
                            </span>
                            <div class="text-left">
                                <span class="block text-[11px] font-bold text-[#18181B] leading-tight">SCHMITZ MAKİNA</span>
                                <span class="block text-[10px] text-[#6E6E73] font-medium mt-0.5">{{ __('contact.map.badge_city') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 3: COMMERCIAL INQUIRY STANDARDS (3-Column Bento Row)               -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 bg-white">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
            
            <div class="max-w-3xl mb-12 sm:mb-16 reveal-up">
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-[#B89758] block mb-3">
                    {{ __('contact.standards.eyebrow') }}
                </span>
                <h2 class="apple-display text-3xl sm:text-4xl lg:text-5xl font-bold text-[#18181B] leading-[1.08] mb-4">
                    {{ __('contact.standards.title') }}
                </h2>
                <p class="text-base sm:text-lg text-[#6E6E73] font-normal leading-relaxed">
                    {{ __('contact.standards.desc') }}
                </p>
            </div>

            <!-- 3-Column Bento Row -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Card 01: Structured Specification Review -->
                <div class="bento-card bg-[#FAFAFC] hover:bg-white rounded-[30px] p-8 sm:p-9 border border-black/[0.06] transition-all reveal-up">
                    <div class="flex items-center justify-between mb-8">
                        <span class="font-mono text-xs font-bold text-[#B89758] px-3 py-1 rounded-full bg-white border border-black/[0.06]">
                            {{ __('contact.standards.card1_tag') }}
                        </span>
                        <div class="w-8 h-8 rounded-full bg-[#18181B]/5 flex items-center justify-center text-[#18181B]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="apple-subdisplay text-xl font-bold text-[#18181B] mb-3">
                        {{ __('contact.standards.card1_title') }}
                    </h3>
                    <p class="text-xs sm:text-sm text-[#6E6E73] leading-relaxed font-normal mb-6">
                        {{ __('contact.standards.card1_desc') }}
                    </p>

                    <div class="pt-5 border-t border-black/[0.06] space-y-2 text-xs font-medium text-[#18181B]">
                        <div class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                            <span>{{ __('contact.standards.card1_b1') }}</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                            <span>{{ __('contact.standards.card1_b2') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Card 02: Non-Binding Commercial Quotation Process -->
                <div class="bento-card bg-[#FAFAFC] hover:bg-white rounded-[30px] p-8 sm:p-9 border border-black/[0.06] transition-all reveal-up">
                    <div class="flex items-center justify-between mb-8">
                        <span class="font-mono text-xs font-bold text-[#B89758] px-3 py-1 rounded-full bg-white border border-black/[0.06]">
                            {{ __('contact.standards.card2_tag') }}
                        </span>
                        <div class="w-8 h-8 rounded-full bg-[#18181B]/5 flex items-center justify-center text-[#18181B]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="apple-subdisplay text-xl font-bold text-[#18181B] mb-3">
                        {{ __('contact.standards.card2_title') }}
                    </h3>
                    <p class="text-xs sm:text-sm text-[#6E6E73] leading-relaxed font-normal mb-6">
                        {{ __('contact.standards.card2_desc') }}
                    </p>

                    <div class="pt-5 border-t border-black/[0.06] space-y-2 text-xs font-medium text-[#18181B]">
                        <div class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                            <span>{{ __('contact.standards.card2_b1') }}</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                            <span>{{ __('contact.standards.card2_b2') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Card 03: Data Confidentiality & Compliance -->
                <div class="bento-card bg-[#FAFAFC] hover:bg-white rounded-[30px] p-8 sm:p-9 border border-black/[0.06] transition-all reveal-up">
                    <div class="flex items-center justify-between mb-8">
                        <span class="font-mono text-xs font-bold text-[#B89758] px-3 py-1 rounded-full bg-white border border-black/[0.06]">
                            {{ __('contact.standards.card3_tag') }}
                        </span>
                        <div class="w-8 h-8 rounded-full bg-[#18181B]/5 flex items-center justify-center text-[#18181B]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="apple-subdisplay text-xl font-bold text-[#18181B] mb-3">
                        {{ __('contact.standards.card3_title') }}
                    </h3>
                    <p class="text-xs sm:text-sm text-[#6E6E73] leading-relaxed font-normal mb-6">
                        {{ __('contact.standards.card3_desc') }}
                    </p>

                    <div class="pt-5 border-t border-black/[0.06] space-y-2 text-xs font-medium text-[#18181B]">
                        <div class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                            <span>{{ __('contact.standards.card3_b1') }}</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#B89758]"></span>
                            <span>{{ __('contact.standards.card3_b2') }}</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 4: ARCHITECTURAL CLOSING CALLOUT BANNER                           -->
    <!-- ========================================================================= -->
    <section class="pb-20 sm:pb-28 bg-white">
        <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 reveal-up">
            <div class="bento-card dark-bento bg-gradient-to-br from-[#18181B] via-[#18181B] to-[#09090B] rounded-[34px] p-10 sm:p-14 lg:p-16 relative overflow-hidden shadow-2xl text-white">
                <!-- Ambient Glow -->
                <div class="absolute -top-28 -right-28 w-[400px] h-[400px] rounded-full bg-[#B89758]/15 blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-28 -left-28 w-[340px] h-[340px] rounded-full bg-white/[0.04] blur-3xl pointer-events-none"></div>

                <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                    <div class="max-w-2xl">
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-[#D8BF8A] block mb-3">
                            {{ __('contact.cta.eyebrow') }}
                        </span>
                        <h2 class="apple-display text-3xl sm:text-4xl font-bold leading-tight mb-4">
                            {{ __('contact.cta.title') }}
                        </h2>
                        <p class="text-sm sm:text-base text-white/80 font-light leading-relaxed">
                            {{ __('contact.cta.desc') }}
                        </p>
                    </div>
                    <div class="shrink-0 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <button onclick="openQuoteModal('General Business Inquiry')" class="group inline-flex items-center justify-center px-8 py-4 bg-white hover:bg-[#F5F5F7] text-[#18181B] text-sm font-semibold rounded-full transition-all duration-300 shadow-md hover:shadow-xl active:scale-[0.98] cursor-pointer">
                            <span>{{ __('contact.cta.btn_modal') }}</span>
                            <span class="ml-2 text-[#B89758] transition-transform duration-300 group-hover:translate-x-1">→</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- ULTRA-CLEAN MINIMAL APPLE-STYLE FOOTER                                    -->
    <!-- ========================================================================= -->
    @include('partials.footer')

    @include('partials.rfq-modal')

    <!-- Global UI & Motion Controller -->
    <script src="{{ asset('js/welcome.js') }}"></script>

    <!-- Page Specific Script: Embedded Form & Copy Helpers -->
    <script>
        function copyEmailToClipboard(email, buttonEl) {
            navigator.clipboard.writeText(email).then(() => {
                const label = buttonEl.querySelector('.copy-label');
                const originalText = label ? (label.getAttribute('data-default-text') || label.textContent) : 'Copy';
                const copiedText = label ? (label.getAttribute('data-copied-text') || 'Copied!') : 'Copied!';
                if (label) label.textContent = copiedText;
                buttonEl.classList.add('bg-emerald-500', 'text-white');
                
                // Show floating notification
                const toast = document.getElementById('lang-toast');
                const text = document.getElementById('lang-toast-text');
                if (toast && text) {
                    const copiedTpl = '{{ addslashes(__('contact.form.email_copied_toast')) }}';
                    text.textContent = copiedTpl.replace(':email', email);
                    toast.classList.add('show');
                    setTimeout(() => toast.classList.remove('show'), 2500);
                }

                setTimeout(() => {
                    if (label) label.textContent = originalText;
                    buttonEl.classList.remove('bg-emerald-500', 'text-white');
                }, 2000);
            }).catch(err => {
                window.location.href = `mailto:${email}`;
            });
        }

        function handleContactFileSelect(input) {
            const label = document.getElementById('contact-file-label');
            if (input.files && input.files.length > 0) {
                const pattern = label.getAttribute('data-selected-tpl') || 'File Selected: :name (:size MB)';
                const sizeMb = (input.files[0].size / 1024 / 1024).toFixed(2);
                label.textContent = pattern.replace(':name', input.files[0].name).replace(':size', sizeMb);
                label.classList.add('text-[#18181B]', 'font-bold');
            }
        }

        async function handleContactPageSubmit(e) {
            e.preventDefault();
            const form = e.target;
            const formContainer = document.getElementById('contact-form-container');
            const successContainer = document.getElementById('contact-success-container');
            const refCode = document.getElementById('confirmation-ref-code');
            const errorBox = document.getElementById('contact-error-box');
            const submitBtn = document.getElementById('contact-submit-btn');

            if (errorBox) {
                errorBox.classList.add('hidden');
                errorBox.textContent = '';
            }

            if (submitBtn) {
                submitBtn.disabled = true;
            }

            try {
                const formData = new FormData(form);
                const timeline = document.getElementById('contact-timeline')?.value?.trim();
                const payment = document.getElementById('contact-payment')?.value?.trim();
                const baseMsg = (formData.get('message') || '').toString().trim();

                const extraNotes = [];
                if (timeline) extraNotes.push(`Target Delivery Timeline: ${timeline}`);
                if (payment) extraNotes.push(`Preferred Payment Terms: ${payment}`);
                if (extraNotes.length > 0) {
                    formData.set('message', [baseMsg, extraNotes.join('\n')].filter(Boolean).join('\n\n'));
                }

                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                });

                const data = await response.json();

                if (!response.ok) {
                    const firstError = data?.errors
                        ? Object.values(data.errors).flat()[0]
                        : (data?.message || 'Unable to submit inquiry. Please verify your entries.');
                    if (errorBox) {
                        errorBox.textContent = firstError;
                        errorBox.classList.remove('hidden');
                        errorBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    return;
                }

                if (refCode && data.reference_code) {
                    refCode.textContent = `REF: ${data.reference_code}`;
                }

                formContainer.classList.add('hidden');
                successContainer.classList.remove('hidden');
                successContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } catch (err) {
                if (errorBox) {
                    errorBox.textContent = 'Network error while submitting your inquiry. Please try again.';
                    errorBox.classList.remove('hidden');
                }
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                }
            }
        }

        function resetContactPageForm() {
            const form = document.getElementById('contact-inquiry-form');
            const formContainer = document.getElementById('contact-form-container');
            const successContainer = document.getElementById('contact-success-container');
            const fileLabel = document.getElementById('contact-file-label');

            if (form) form.reset();
            if (fileLabel) {
                fileLabel.textContent = fileLabel.getAttribute('data-default-text') || 'Attach Technical Data Sheet (TDS) or Blueprints (Optional)';
                fileLabel.classList.remove('text-[#18181B]', 'font-bold');
            }

            successContainer.classList.add('hidden');
            formContainer.classList.remove('hidden');

            formContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    </script>
</body>
</html>
