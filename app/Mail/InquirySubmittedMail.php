<?php

namespace App\Mail;

use App\Models\Inquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class InquirySubmittedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Inquiry $inquiry)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [$this->inquiry->email],
            subject: "[SCHMITZ RFQ {$this->inquiry->reference_code}] {$this->inquiry->category} — {$this->inquiry->company_name}",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.inquiry-submitted',
        );
    }

    /**
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        if (
            $this->inquiry->attachment_path &&
            Storage::disk('public')->exists($this->inquiry->attachment_path)
        ) {
            return [
                Attachment::fromStorageDisk('public', $this->inquiry->attachment_path),
            ];
        }

        return [];
    }
}
