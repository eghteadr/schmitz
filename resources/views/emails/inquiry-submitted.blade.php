<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Commercial Inquiry — {{ $inquiry->reference_code }}</title>
</head>
<body style="margin:0;padding:24px;background-color:#F5F5F7;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;color:#1D1D1F;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:640px;margin:0 auto;background:#FFFFFF;border-radius:20px;overflow:hidden;border:1px solid #E5E5EA;">
        <tr>
            <td style="background:linear-gradient(135deg,#18181B 0%,#09090B 100%);padding:28px 32px;color:#FFFFFF;">
                <div style="font-size:11px;letter-spacing:2px;text-transform:uppercase;color:#B89758;font-weight:600;margin-bottom:6px;">
                    SCHMITZ Commercial Desk
                </div>
                <h1 style="margin:0;font-size:20px;font-weight:700;letter-spacing:-0.01em;">
                    New RFQ Received: {{ $inquiry->reference_code }}
                </h1>
            </td>
        </tr>
        <tr>
            <td style="padding:28px 32px;">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="6" style="font-size:14px;border-collapse:collapse;">
                    <tr>
                        <td style="color:#6E6E73;width:36%;border-bottom:1px solid #F2F2F7;">Reference Code</td>
                        <td style="font-weight:600;color:#18181B;border-bottom:1px solid #F2F2F7;">{{ $inquiry->reference_code }}</td>
                    </tr>
                    <tr>
                        <td style="color:#6E6E73;border-bottom:1px solid #F2F2F7;">Contact Name</td>
                        <td style="font-weight:600;border-bottom:1px solid #F2F2F7;">{{ $inquiry->full_name }}</td>
                    </tr>
                    <tr>
                        <td style="color:#6E6E73;border-bottom:1px solid #F2F2F7;">Company</td>
                        <td style="font-weight:600;border-bottom:1px solid #F2F2F7;">{{ $inquiry->company_name }}</td>
                    </tr>
                    <tr>
                        <td style="color:#6E6E73;border-bottom:1px solid #F2F2F7;">Country</td>
                        <td style="border-bottom:1px solid #F2F2F7;">{{ $inquiry->country }}</td>
                    </tr>
                    <tr>
                        <td style="color:#6E6E73;border-bottom:1px solid #F2F2F7;">Email</td>
                        <td style="border-bottom:1px solid #F2F2F7;"><a href="mailto:{{ $inquiry->email }}" style="color:#18181B;">{{ $inquiry->email }}</a></td>
                    </tr>
                    @if($inquiry->phone)
                    <tr>
                        <td style="color:#6E6E73;border-bottom:1px solid #F2F2F7;">Phone / WhatsApp</td>
                        <td style="border-bottom:1px solid #F2F2F7;">{{ $inquiry->phone }}</td>
                    </tr>
                    @endif
                    <tr>
                        <td style="color:#6E6E73;border-bottom:1px solid #F2F2F7;">Category</td>
                        <td style="font-weight:600;color:#18181B;border-bottom:1px solid #F2F2F7;">{{ $inquiry->category }}</td>
                    </tr>
                    <tr>
                        <td style="color:#6E6E73;border-bottom:1px solid #F2F2F7;">Quantity</td>
                        <td style="border-bottom:1px solid #F2F2F7;">{{ $inquiry->quantity }}</td>
                    </tr>
                    <tr>
                        <td style="color:#6E6E73;border-bottom:1px solid #F2F2F7;">Destination</td>
                        <td style="border-bottom:1px solid #F2F2F7;">{{ $inquiry->destination }}</td>
                    </tr>
                    <tr>
                        <td style="color:#6E6E73;border-bottom:1px solid #F2F2F7;">Form Locale</td>
                        <td style="text-transform:uppercase;border-bottom:1px solid #F2F2F7;">{{ $inquiry->locale }}</td>
                    </tr>
                </table>

                <div style="margin-top:20px;padding:16px;background:#F5F5F7;border-radius:12px;">
                    <div style="font-size:11px;text-transform:uppercase;letter-spacing:1px;color:#6E6E73;font-weight:600;margin-bottom:6px;">
                        Technical Specifications
                    </div>
                    <div style="font-size:14px;line-height:1.6;white-space:pre-line;color:#1D1D1F;">{{ $inquiry->specifications }}</div>
                </div>

                @if($inquiry->message)
                <div style="margin-top:14px;padding:16px;background:#F5F5F7;border-radius:12px;">
                    <div style="font-size:11px;text-transform:uppercase;letter-spacing:1px;color:#6E6E73;font-weight:600;margin-bottom:6px;">
                        Additional Commercial Notes
                    </div>
                    <div style="font-size:14px;line-height:1.6;white-space:pre-line;color:#1D1D1F;">{{ $inquiry->message }}</div>
                </div>
                @endif

                <div style="margin-top:24px;text-align:center;">
                    <a href="{{ url('/admin/inquiries/' . $inquiry->id . '/edit') }}" style="display:inline-block;padding:12px 24px;background:#18181B;color:#FFFFFF;text-decoration:none;border-radius:999px;font-size:13px;font-weight:600;">
                        Open in SCHMITZ Admin Panel
                    </a>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
