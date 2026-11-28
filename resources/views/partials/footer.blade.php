<footer class="bg-schmitz-appleGray border-t border-black/[0.06] text-schmitz-appleMuted">
    <div class="max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-12 py-16 sm:py-20">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 pb-14 border-b border-black/[0.06]">
            <div class="lg:col-span-5">
                <a href="{{ route('home') }}" class="inline-block mb-4 focus:outline-none">
                    <img src="{{ asset('images/logo.png') }}" alt="SCHMITZ" class="h-16 sm:h-20 w-auto object-contain">
                </a>
                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-schmitz-carbon mb-3">
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
                    <li><a href="{{ route('home') }}" class="hover:text-schmitz-carbon transition-colors">{{ __('messages.nav.home') }}</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-schmitz-carbon transition-colors">{{ __('messages.nav.about') }}</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-schmitz-carbon transition-colors">{{ __('messages.nav.services') }}</a></li>
                    <li><a href="{{ route('industries') }}" class="hover:text-schmitz-carbon transition-colors">{{ __('messages.nav.industries') }}</a></li>
                    <li><a href="{{ route('how-we-work') }}" class="hover:text-schmitz-carbon transition-colors">{{ __('messages.nav.process') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-schmitz-carbon transition-colors">{{ __('messages.nav.contact') }}</a></li>
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
                        <a href="mailto:{{ $companySettings->email_info }}" class="font-semibold text-schmitz-carbon hover:text-schmitz-gold transition-colors">{{ $companySettings->email_info }}</a>
                        <span class="block text-[11px] mt-1">{{ $companySettings->email_trade }}</span>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-white border border-black/[0.06] shadow-2xs">
                        <p class="text-[11px] text-schmitz-appleText font-medium leading-relaxed mb-2.5">
                            {{ __('messages.footer.contact_channels_note') }}
                        </p>
                        <div class="flex flex-wrap items-center gap-2">
                            <button type="button" onclick="openQuoteModal('General Business Inquiry')" class="inline-flex items-center justify-center px-3.5 py-1.5 rounded-full bg-schmitz-carbon hover:bg-schmitz-carbonMid text-white text-[11px] font-medium transition-colors cursor-pointer">
                                {{ __('messages.footer.open_form_btn') }}
                            </button>
                            <a href="mailto:{{ $companySettings->email_info }}" class="inline-flex items-center justify-center px-3.5 py-1.5 rounded-full bg-schmitz-appleGray hover:bg-black/10 text-schmitz-carbon text-[11px] font-medium transition-colors">
                                {{ __('messages.footer.send_email_btn') }}
                            </a>
                        </div>
                    </div>
                    <div>
                        <span class="block text-[11px] text-schmitz-appleMuted mb-0.5">{{ __('messages.footer.registered_company') }}</span>
                        <p class="font-semibold text-schmitz-appleText">
                            {{ $companySettings->legal_name }}
                        </p>
                        <span class="text-[11px]">{{ $companySettings->country ?: __('messages.footer.country') }}</span>
                        @if(! empty($companySettings->registered_address))
                            <span class="block text-[11px] text-schmitz-appleMuted mt-1 leading-relaxed">{{ $companySettings->registered_address }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Legal & Copyright -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
            <p>© 2026 SCHMITZ. {{ __('messages.footer.rights_reserved') }}</p>
            <div class="flex items-center space-x-5">
                <button onclick="openLegalModal('{{ __('messages.footer.privacy_policy') }}')" class="hover:text-schmitz-carbon transition-colors cursor-pointer">{{ __('messages.footer.privacy_policy') }}</button>
                <span class="text-black/15">|</span>
                <button onclick="openLegalModal('{{ __('messages.footer.cookie_policy') }}')" class="hover:text-schmitz-carbon transition-colors cursor-pointer">{{ __('messages.footer.cookie_policy') }}</button>
                <span class="text-black/15">|</span>
                <button onclick="openLegalModal('{{ __('messages.footer.legal_info') }}')" class="hover:text-schmitz-carbon transition-colors cursor-pointer">{{ __('messages.footer.legal_info') }}</button>
            </div>
        </div>
    </div>
</footer>
