<!-- APPLE-SHEET RFQ MODAL -->
<div id="rfq-modal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen px-4 py-8 text-center sm:p-6">
        <div onclick="closeQuoteModal()" class="fixed inset-0 bg-schmitz-dark/60 backdrop-blur-md transition-opacity"></div>

        <div class="modal-sheet-animate relative inline-block bg-white text-left overflow-hidden shadow-2xl sm:max-w-2xl w-full rounded-[28px] border border-black/10">
            
            <div class="px-7 sm:px-9 pt-7 pb-5 flex items-start justify-between border-b border-black/[0.06]">
                <div>
                    <span class="text-[11px] uppercase tracking-[0.18em] text-schmitz-gold font-semibold block mb-1">{{ __('messages.rfq.eyebrow') }}</span>
                    <h3 class="apple-subdisplay text-xl sm:text-2xl font-bold text-schmitz-navy" id="modal-title">{{ __('messages.rfq.title') }}</h3>
                </div>
                <button onclick="closeQuoteModal()" class="w-8 h-8 rounded-full bg-schmitz-appleGray hover:bg-[#E5E5EA] text-schmitz-appleMuted hover:text-schmitz-navy flex items-center justify-center transition-colors cursor-pointer" aria-label="{{ __('messages.common.close') }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div id="rfq-form-container" class="p-7 sm:p-9">
                <form id="rfq-form" action="{{ route('inquiries.store') }}" method="POST" enctype="multipart/form-data" onsubmit="handleInquirySubmit(event)" class="space-y-4">
                    @csrf
                    <input type="hidden" name="locale" value="{{ app()->getLocale() }}">
                    <div id="rfq-error-box" class="hidden p-3.5 rounded-xl bg-rose-50 border border-rose-200 text-xs text-rose-700"></div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-medium text-schmitz-appleText mb-1.5">{{ __('messages.rfq.full_name') }}</label>
                            <input type="text" name="full_name" required class="w-full px-4 py-3 text-sm bg-schmitz-appleGray/75 border border-transparent focus:border-schmitz-navy focus:bg-white rounded-xl focus:outline-none transition-all" placeholder="{{ __('messages.rfq.full_name_ph') }}">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-schmitz-appleText mb-1.5">{{ __('messages.rfq.company_name') }}</label>
                            <input type="text" name="company_name" required class="w-full px-4 py-3 text-sm bg-schmitz-appleGray/75 border border-transparent focus:border-schmitz-navy focus:bg-white rounded-xl focus:outline-none transition-all" placeholder="{{ __('messages.rfq.company_name_ph') }}">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-medium text-schmitz-appleText mb-1.5">{{ __('messages.rfq.email') }}</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 text-sm bg-schmitz-appleGray/75 border border-transparent focus:border-schmitz-navy focus:bg-white rounded-xl focus:outline-none transition-all" placeholder="{{ __('messages.rfq.email_ph') }}">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-schmitz-appleText mb-1.5">{{ __('messages.rfq.phone') }}</label>
                            <input type="tel" name="phone" class="w-full px-4 py-3 text-sm bg-schmitz-appleGray/75 border border-transparent focus:border-schmitz-navy focus:bg-white rounded-xl focus:outline-none transition-all" placeholder="{{ __('messages.rfq.phone_ph') }}">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-medium text-schmitz-appleText mb-1.5">{{ __('messages.rfq.country') }}</label>
                            <input type="text" name="country" required class="w-full px-4 py-3 text-sm bg-schmitz-appleGray/75 border border-transparent focus:border-schmitz-navy focus:bg-white rounded-xl focus:outline-none transition-all" placeholder="{{ __('messages.rfq.country_ph') }}">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-schmitz-appleText mb-1.5">{{ __('messages.rfq.category') }}</label>
                            <select id="rfq-category" name="category" required class="w-full px-4 py-3 text-sm bg-schmitz-appleGray/75 border border-transparent focus:border-schmitz-navy focus:bg-white rounded-xl focus:outline-none transition-all">
                                <option value="Textile Raw Materials">{{ __('messages.rfq.cat_textile') }}</option>
                                <option value="Industrial Machinery & Equipment">{{ __('messages.rfq.cat_machinery') }}</option>
                                <option value="International Sourcing">{{ __('messages.rfq.cat_sourcing') }}</option>
                                <option value="Logistics Coordination">{{ __('messages.rfq.cat_logistics') }}</option>
                                <option value="General Business Inquiry">{{ __('messages.rfq.cat_general') }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-medium text-schmitz-appleText mb-1.5">{{ __('messages.rfq.quantity') }}</label>
                            <input type="text" name="quantity" required class="w-full px-4 py-3 text-sm bg-schmitz-appleGray/75 border border-transparent focus:border-schmitz-navy focus:bg-white rounded-xl focus:outline-none transition-all" placeholder="{{ __('messages.rfq.quantity_ph') }}">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-schmitz-appleText mb-1.5">{{ __('messages.rfq.destination') }}</label>
                            <input type="text" name="destination" required class="w-full px-4 py-3 text-sm bg-schmitz-appleGray/75 border border-transparent focus:border-schmitz-navy focus:bg-white rounded-xl focus:outline-none transition-all" placeholder="{{ __('messages.rfq.destination_ph') }}">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-medium text-schmitz-appleText mb-1.5">{{ __('messages.rfq.specifications') }}</label>
                        <textarea rows="3" name="specifications" required class="w-full px-4 py-3 text-sm bg-schmitz-appleGray/75 border border-transparent focus:border-schmitz-navy focus:bg-white rounded-xl focus:outline-none transition-all" placeholder="{{ __('messages.rfq.specifications_ph') }}"></textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-medium text-schmitz-appleText mb-1.5">{{ __('messages.rfq.message') }}</label>
                        <textarea rows="2" name="message" class="w-full px-4 py-3 text-sm bg-schmitz-appleGray/75 border border-transparent focus:border-schmitz-navy focus:bg-white rounded-xl focus:outline-none transition-all" placeholder="{{ __('messages.rfq.message_ph') }}"></textarea>
                    </div>

                    <div class="bg-schmitz-appleGray/60 border border-dashed border-black/15 p-4 rounded-2xl flex items-center justify-between">
                        <div class="text-xs text-schmitz-appleMuted">
                            <span class="font-semibold text-schmitz-navy block">{{ __('messages.rfq.attachment_title') }}</span>
                            <span>{{ __('messages.rfq.attachment_formats') }}</span>
                        </div>
                        <label class="px-4 py-2 bg-white border border-black/10 text-xs font-semibold text-schmitz-navy hover:bg-schmitz-appleGray rounded-full shadow-2xs cursor-pointer transition-colors">
                            <span id="file-chosen-text" data-default-text="{{ __('messages.rfq.attachment_btn') }}">{{ __('messages.rfq.attachment_btn') }}</span>
                            <input type="file" name="attachment" accept=".pdf,.xlsx,.xls,.dwg,.jpg,.jpeg,.png,.doc,.docx" class="hidden" onchange="updateFileName(this)">
                        </label>
                    </div>

                    <p class="text-[11px] text-schmitz-appleMuted leading-relaxed pt-1">
                        {{ __('messages.rfq.disclaimer') }}
                    </p>

                    <div class="pt-4 flex items-center justify-end space-x-3 border-t border-black/[0.06]">
                        <button type="button" onclick="closeQuoteModal()" class="px-5 py-2.5 text-xs font-semibold text-schmitz-appleMuted hover:text-schmitz-navy cursor-pointer">
                            {{ __('messages.common.cancel') }}
                        </button>
                        <button id="rfq-submit-btn" type="submit" class="px-7 py-3 bg-schmitz-navy hover:bg-schmitz-navyMid disabled:opacity-60 text-white text-xs font-semibold rounded-full transition-all shadow-sm cursor-pointer">
                            {{ __('messages.rfq.submit_btn') }}
                        </button>
                    </div>
                </form>
            </div>

            <div id="rfq-success-container" class="hidden p-10 sm:p-12 text-center">
                <div class="w-14 h-14 bg-schmitz-navy text-schmitz-gold mx-auto flex items-center justify-center rounded-2xl mb-6 shadow-md">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <span id="rfq-modal-ref-code" class="text-xs font-mono text-schmitz-gold uppercase tracking-widest block mb-2">{{ __('messages.rfq.success_ref') }}</span>
                <h4 class="apple-subdisplay text-2xl font-bold text-schmitz-navy mb-3">{{ __('messages.rfq.success_title') }}</h4>
                <p class="text-sm text-schmitz-appleMuted max-w-md mx-auto leading-relaxed mb-8">
                    {{ __('messages.rfq.success_msg') }}
                </p>
                <button onclick="resetAndCloseModal()" class="px-8 py-3 bg-schmitz-navy text-white text-xs font-semibold rounded-full shadow-sm cursor-pointer">
                    {{ __('messages.rfq.return_home') }}
                </button>
            </div>

        </div>
    </div>
</div>

<!-- Legal Notice Modal -->
<div id="legal-modal" class="fixed inset-0 z-50 hidden overflow-y-auto" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen px-4 text-center">
        <div onclick="closeLegalModal()" class="fixed inset-0 bg-schmitz-dark/60 backdrop-blur-md"></div>
        <div class="modal-sheet-animate relative inline-block bg-white text-left p-7 sm:p-9 max-w-lg w-full rounded-[28px] border border-black/10 shadow-2xl">
            <div class="flex items-center justify-between pb-4 border-b border-black/[0.06] mb-5">
                <h4 id="legal-modal-title" class="text-lg font-bold text-schmitz-navy">{{ __('messages.legal.title') }}</h4>
                <button onclick="closeLegalModal()" class="w-8 h-8 rounded-full bg-schmitz-appleGray text-schmitz-appleMuted hover:text-schmitz-navy flex items-center justify-center cursor-pointer">✕</button>
            </div>
            <p class="text-sm text-schmitz-appleMuted leading-relaxed mb-7">
                <strong class="text-schmitz-navy">{{ __('messages.legal.company') }}</strong><br><br>
                {{ __('messages.legal.content') }}
            </p>
            <div class="text-right">
                <button onclick="closeLegalModal()" class="px-6 py-2.5 bg-schmitz-navy text-white text-xs font-semibold rounded-full cursor-pointer">{{ __('messages.common.close') }}</button>
            </div>
        </div>
    </div>
</div>

<!-- Apple Dynamic-Island Style Floating Toast (Fallback) -->
<div id="lang-toast" class="apple-toast fixed bottom-6 left-1/2 z-50 bg-schmitz-dark/95 backdrop-blur-xl text-white px-5 py-3 rounded-full shadow-2xl border border-white/15 flex items-center space-x-3 text-xs">
    <span class="w-2 h-2 rounded-full bg-schmitz-gold"></span>
    <span id="lang-toast-text" class="font-medium tracking-wide">Language selected.</span>
</div>
