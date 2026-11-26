<footer class="bg-schmitz-appleGray border-t border-black/[0.06] text-schmitz-appleMuted">
    <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 py-16 sm:py-20">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 pb-14 border-b border-black/[0.06]">
            <div class="lg:col-span-5">
                <div class="flex items-center space-x-2.5 mb-4">
                    <div class="w-7 h-7 rounded-lg bg-schmitz-navy flex items-center justify-center">
                        <svg class="w-3.5 h-3.5 text-white" viewBox="0 0 24 24" fill="none">
                            <path d="M5 7H19V9.5H8V11H19V17H5V14.5H16V13H5V7Z" fill="currentColor"/>
                            <circle cx="18" cy="5.5" r="1.5" fill="#B89758"/>
                        </svg>
                    </div>
                    <span class="text-lg font-bold tracking-[0.22em] text-schmitz-navy">SCHMITZ</span>
                </div>
                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-schmitz-navy mb-3">
                    {{ __('messages.footer.tagline') }}
                </p>
                <p class="text-xs sm:text-[13px] leading-relaxed mb-3 max-w-md">
                    {{ __('messages.footer.desc_1') }}
                </p>
                <p class="text-xs sm:text-[13px] leading-relaxed max-w-md">
                    {{ __('messages.footer.desc_2') }}
                </p>
            </div>

            <!-- Quick Links -->
            <div class="lg:col-span-3">
                <h4 class="text-xs font-semibold text-schmitz-appleText uppercase tracking-wider mb-4">
                    {{ __('messages.footer.quick_links') }}
                </h4>
                <ul class="space-y-2.5 text-xs sm:text-[13px]">
                    <li><a href="{{ route('home') }}" class="hover:text-schmitz-navy transition-colors">{{ __('messages.nav.home') }}</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-schmitz-navy transition-colors">{{ __('messages.nav.about') }}</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-schmitz-navy transition-colors">{{ __('messages.nav.services') }}</a></li>
                    <li><a href="{{ route('industries') }}" class="hover:text-schmitz-navy transition-colors">{{ __('messages.nav.industries') }}</a></li>
                    <li><a href="{{ route('how-we-work') }}" class="hover:text-schmitz-navy transition-colors">{{ __('messages.nav.process') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-schmitz-navy transition-colors">{{ __('messages.nav.contact') }}</a></li>
                </ul>
            </div>

            <!-- Corporate & Departments -->
            <div class="lg:col-span-4">
                <h4 class="text-xs font-semibold text-schmitz-appleText uppercase tracking-wider mb-4">
                    {{ __('messages.footer.corporate_info') }}
                </h4>
                <div class="space-y-4 text-xs sm:text-[13px]">
                    <div>
                        <span class="block text-[11px] text-schmitz-appleMuted mb-0.5">{{ __('messages.footer.official_email') }}</span>
                        <a href="mailto:{{ $companySettings->email_info }}" class="font-semibold text-schmitz-navy hover:text-schmitz-gold transition-colors">{{ $companySettings->email_info }}</a>
                        <span class="block text-[11px] mt-1">{{ $companySettings->email_trade }} • {{ $companySettings->email_sourcing }}</span>
                    </div>
                    <div>
                        <span class="block text-[11px] text-schmitz-appleMuted mb-0.5">{{ __('messages.footer.registered_company') }}</span>
                        <p class="font-semibold text-schmitz-appleText">
                            {{ $companySettings->legal_name }}
                        </p>
                        <span class="text-[11px]">{{ $companySettings->country ?: __('messages.footer.country') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Legal & Copyright -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
            <p>© 2026 SCHMITZ. {{ __('messages.footer.rights_reserved') }}</p>
            <div class="flex items-center space-x-5">
                <button onclick="openLegalModal('{{ __('messages.footer.privacy_policy') }}')" class="hover:text-schmitz-navy transition-colors cursor-pointer">{{ __('messages.footer.privacy_policy') }}</button>
                <span class="text-black/15">|</span>
                <button onclick="openLegalModal('{{ __('messages.footer.cookie_policy') }}')" class="hover:text-schmitz-navy transition-colors cursor-pointer">{{ __('messages.footer.cookie_policy') }}</button>
                <span class="text-black/15">|</span>
                <button onclick="openLegalModal('{{ __('messages.footer.legal_info') }}')" class="hover:text-schmitz-navy transition-colors cursor-pointer">{{ __('messages.footer.legal_info') }}</button>
            </div>
        </div>
    </div>
</footer>
