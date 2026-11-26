<header id="main-header" class="sticky top-0 z-40 apple-glass">
    <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12">
        <div id="header-inner" class="flex items-center justify-between h-16 sm:h-[74px] transition-all duration-300">
            
            <!-- Custom Minimalist SCHMITZ Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group focus:outline-none">
                <div class="w-8 h-8 rounded-xl bg-schmitz-navy flex items-center justify-center shadow-xs transition-transform duration-500 ease-out group-hover:scale-105">
                    <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="none">
                        <path d="M5 7H19V9.5H8V11H19V17H5V14.5H16V13H5V7Z" fill="currentColor"/>
                        <circle cx="18" cy="5.5" r="1.5" fill="#B89758"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-lg sm:text-[19px] font-bold tracking-[0.22em] text-schmitz-navy leading-none">SCHMITZ</span>
                    <span class="text-[9px] uppercase tracking-[0.22em] text-schmitz-appleMuted font-medium mt-1">{{ __('messages.nav.tagline') }}</span>
                </div>
            </a>

            <!-- Center Navigation Links -->
            <nav class="hidden lg:flex items-center space-x-9 text-[13px] font-medium text-schmitz-appleMuted">
                <a href="{{ route('home') }}" class="{{ request()->routeIs(['*home', 'home']) ? 'text-[#1D1D1F] font-semibold' : 'hover:text-[#1D1D1F]' }} transition-colors">{{ __('messages.nav.home') }}</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs(['*about', 'about']) ? 'text-[#1D1D1F] font-semibold' : 'hover:text-[#1D1D1F]' }} transition-colors">{{ __('messages.nav.about') }}</a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs(['*services', 'services']) ? 'text-[#1D1D1F] font-semibold' : 'hover:text-[#1D1D1F]' }} transition-colors">{{ __('messages.nav.services') }}</a>
                <a href="{{ route('industries') }}" class="{{ request()->routeIs(['*industries', 'industries']) ? 'text-[#1D1D1F] font-semibold' : 'hover:text-[#1D1D1F]' }} transition-colors">{{ __('messages.nav.industries') }}</a>
                <a href="{{ route('how-we-work') }}" class="{{ request()->routeIs(['*how-we-work', 'how-we-work']) ? 'text-[#1D1D1F] font-semibold' : 'hover:text-[#1D1D1F]' }} transition-colors">{{ __('messages.nav.process') }}</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs(['*contact', 'contact']) ? 'text-[#1D1D1F] font-semibold' : 'hover:text-[#1D1D1F]' }} transition-colors">{{ __('messages.nav.contact') }}</a>
            </nav>

            <!-- Right Controls: Segmented Language Pill + Pill CTA -->
            <div class="flex items-center space-x-3 sm:space-x-4">
                <div class="inline-flex items-center bg-schmitz-appleGray p-1 rounded-full border border-black/[0.05]" role="group" aria-label="Language Switcher">
                    @foreach(['en' => 'EN', 'tr' => 'TR', 'de' => 'DE'] as $code => $label)
                        @if(app()->getLocale() === $code)
                            <span class="px-2.5 py-1 text-[11px] font-semibold rounded-full bg-white text-[#13293F] shadow-2xs cursor-default">{{ $label }}</span>
                        @else
                            <a href="{{ current_locale_url($code) }}" class="px-2.5 py-1 text-[11px] font-medium rounded-full text-schmitz-appleMuted hover:text-[#13293F] transition-colors cursor-pointer">{{ $label }}</a>
                        @endif
                    @endforeach
                </div>

                <button onclick="openQuoteModal('General Business Inquiry')" class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 bg-schmitz-navy hover:bg-schmitz-navyMid text-white text-xs font-medium tracking-wide rounded-full transition-all duration-300 shadow-xs hover:shadow-md active:scale-[0.98] cursor-pointer">
                    <span>{{ __('messages.nav.request_quote') }}</span>
                </button>

                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-btn" onclick="toggleMobileMenu()" class="lg:hidden p-2 text-schmitz-navy hover:bg-schmitz-appleGray rounded-full transition-colors focus:outline-none" aria-label="Toggle Menu">
                    <svg id="menu-icon-open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 7h16M4 12h16M4 17h16"/>
                    </svg>
                    <svg id="menu-icon-close" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white/95 backdrop-blur-2xl border-t border-black/5">
        <div class="max-w-7xl mx-auto px-6 py-6 space-y-3">
            <a href="{{ route('home') }}" onclick="toggleMobileMenu()" class="block py-2.5 text-base {{ request()->routeIs(['*home', 'home']) ? 'font-semibold text-schmitz-navy' : 'font-medium text-schmitz-appleMuted hover:text-schmitz-navy' }}">{{ __('messages.nav.home') }}</a>
            <a href="{{ route('about') }}" onclick="toggleMobileMenu()" class="block py-2.5 text-base {{ request()->routeIs(['*about', 'about']) ? 'font-semibold text-schmitz-navy' : 'font-medium text-schmitz-appleMuted hover:text-schmitz-navy' }}">{{ __('messages.nav.about') }}</a>
            <a href="{{ route('services') }}" onclick="toggleMobileMenu()" class="block py-2.5 text-base {{ request()->routeIs(['*services', 'services']) ? 'font-semibold text-schmitz-navy' : 'font-medium text-schmitz-appleMuted hover:text-schmitz-navy' }}">{{ __('messages.nav.services') }}</a>
            <a href="{{ route('industries') }}" onclick="toggleMobileMenu()" class="block py-2.5 text-base {{ request()->routeIs(['*industries', 'industries']) ? 'font-semibold text-schmitz-navy' : 'font-medium text-schmitz-appleMuted hover:text-schmitz-navy' }}">{{ __('messages.nav.industries') }}</a>
            <a href="{{ route('how-we-work') }}" onclick="toggleMobileMenu()" class="block py-2.5 text-base {{ request()->routeIs(['*how-we-work', 'how-we-work']) ? 'font-semibold text-schmitz-navy' : 'font-medium text-schmitz-appleMuted hover:text-schmitz-navy' }}">{{ __('messages.nav.process') }}</a>
            <a href="{{ route('contact') }}" onclick="toggleMobileMenu()" class="block py-2.5 text-base {{ request()->routeIs(['*contact', 'contact']) ? 'font-semibold text-schmitz-navy' : 'font-medium text-schmitz-appleMuted hover:text-schmitz-navy' }}">{{ __('messages.nav.contact') }}</a>
            
            <!-- Mobile Language Switcher -->
            <div class="pt-3 pb-2 flex items-center justify-between border-t border-black/5">
                <span class="text-xs font-medium text-schmitz-appleMuted">{{ __('messages.nav.language') }}</span>
                <div class="inline-flex items-center bg-schmitz-appleGray p-1 rounded-full border border-black/[0.05]" role="group" aria-label="Mobile Language Switcher">
                    @foreach(['en' => 'EN', 'tr' => 'TR', 'de' => 'DE'] as $code => $label)
                        @if(app()->getLocale() === $code)
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-white text-[#13293F] shadow-2xs cursor-default">{{ $label }}</span>
                        @else
                            <a href="{{ current_locale_url($code) }}" class="px-3 py-1 text-xs font-medium rounded-full text-schmitz-appleMuted hover:text-[#13293F] transition-colors cursor-pointer">{{ $label }}</a>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="pt-2">
                <button onclick="toggleMobileMenu(); openQuoteModal('General Business Inquiry')" class="w-full py-3.5 bg-schmitz-navy text-white text-sm font-medium rounded-full shadow-sm cursor-pointer">
                    {{ __('messages.nav.request_quote') }}
                </button>
            </div>
        </div>
    </div>
</header>
