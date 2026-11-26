<?php

namespace App\Http\Controllers;

use App\Mail\InquirySubmittedMail;
use App\Models\CompanySetting;
use App\Models\Inquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Throwable;

class InquiryController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:100'],
            'category' => ['required', 'string', Rule::in(array_keys(Inquiry::CATEGORIES))],
            'quantity' => ['required', 'string', 'max:255'],
            'destination' => ['required', 'string', 'max:255'],
            'specifications' => ['required', 'string', 'max:10000'],
            'message' => ['nullable', 'string', 'max:10000'],
            'locale' => ['nullable', 'string', Rule::in(array_keys(Inquiry::LOCALES))],
            'attachment' => ['nullable', 'file', 'max:15360', 'mimes:pdf,xlsx,xls,dwg,jpg,jpeg,png,doc,docx'],
        ]);

        $attachmentPath = null;
        if ($request->hasFile('attachment')) {
            $attachmentPath = $request->file('attachment')->store('inquiries', 'public');
        }

        $inquiry = Inquiry::create([
            'full_name' => $validated['full_name'],
            'company_name' => $validated['company_name'],
            'country' => $validated['country'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'category' => $validated['category'],
            'quantity' => $validated['quantity'],
            'destination' => $validated['destination'],
            'specifications' => $validated['specifications'],
            'message' => $validated['message'] ?? null,
            'attachment_path' => $attachmentPath,
            'locale' => $validated['locale'] ?? (in_array(app()->getLocale(), ['en', 'tr', 'de'], true) ? app()->getLocale() : 'en'),
            'status' => 'new',
        ]);

        $settings = CompanySetting::current();
        $recipient = $settings->rfq_notification_email ?: $settings->email_trade ?: 'trade@schmitzglobal.com';

        try {
            Mail::to($recipient)->send(new InquirySubmittedMail($inquiry));
        } catch (Throwable $e) {
            Log::warning('Failed to dispatch RFQ notification email.', [
                'reference_code' => $inquiry->reference_code,
                'error' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'ok' => true,
            'reference_code' => $inquiry->reference_code,
        ], 201);
    }
}
