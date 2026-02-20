<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Account Registration</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', Arial, sans-serif; background-color: #f9f9f9; color: #1a1a1a; line-height: 1.6;">
    <table cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f9f9f9;" role="presentation">
        <tr>
            <td align="center" style="padding: 20px;">
                <table cellpadding="0" cellspacing="0" style="width: 100%; max-width: 520px; background-color: #ffffff; border: 1px solid #f0f0f0;" role="presentation">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #0f172a; padding: 48px 32px; text-align: center;">
                            <div style="font-size: 11px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: #e2e8f0; margin-bottom: 12px;">
                                {{ config('app.name') }}
                            </div>
                            <h1 style="margin: 0; font-size: 28px; font-weight: 300; color: #ffffff; letter-spacing: -0.5px; line-height: 1.3;">
                                New Registration
                            </h1>
                            <p style="margin: 8px 0 0 0; font-size: 13px; color: #cbd5e1; font-weight: 300; letter-spacing: 0.5px;">
                                Account Created
                            </p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 48px 32px;">
                            
                            <!-- Alert Banner -->
                            <table cellpadding="0" cellspacing="0" style="width: 100%; background-color: #eff6ff; border: 1px solid #bfdbfe; border-radius: 6px; padding: 16px 20px; margin-bottom: 32px;" role="presentation">
                                <tr>
                                    <td>
                                        <p style="margin: 0; font-size: 13px; color: #1e40af; line-height: 1.6;">
                                            <strong style="font-weight: 600;">New user account registered.</strong> Review the account details below.
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <!-- User Information Section -->
                            <div style="margin-bottom: 32px;">
                                <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin-bottom: 16px;">
                                    Account Details
                                </div>

                                <!-- Full Name -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="width: 35%; padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px;">
                                            Full Name
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            {{ $data['first_name'] }} {{ $data['last_name'] }}
                                        </td>
                                    </tr>
                                </table>

                                <!-- Email / Username -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 0; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="width: 35%; padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px;">
                                            Username
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            <a href="mailto:{{ $data['email'] }}" style="color: #0f172a; text-decoration: none; word-break: break-all;">
                                                {{ $data['email'] }}
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Divider -->
                            <table cellpadding="0" cellspacing="0" style="width: 100%; margin: 32px 0;" role="presentation">
                                <tr>
                                    <td style="height: 1px; background-color: #e2e8f0;"></td>
                                </tr>
                            </table>

                            <!-- Message Section -->
                            <div style="margin-bottom: 32px;">
                                <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin-bottom: 12px;">
                                    Subject
                                </div>
                                <div style="background-color: #f8fafc; padding: 16px; border-left: 3px solid #0f172a; border-radius: 4px; margin-bottom: 24px;">
                                    <p style="margin: 0; font-size: 14px; font-weight: 600; color: #1a1a1a;">
                                        {{ $data['subject'] }}
                                    </p>
                                </div>

                                <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin-bottom: 12px;">
                                    Message
                                </div>
                                <div style="background-color: #f8fafc; padding: 16px; border: 1px solid #e2e8f0; border-radius: 4px;">
                                    <p style="margin: 0; font-size: 14px; color: #475569; line-height: 1.8; white-space: pre-wrap; word-wrap: break-word;">
                                        {{ $data['message'] }}
                                    </p>
                                </div>
                            </div>

                            <!-- Divider -->
                            <table cellpadding="0" cellspacing="0" style="width: 100%; margin: 32px 0;" role="presentation">
                                <tr>
                                    <td style="height: 1px; background-color: #e2e8f0;"></td>
                                </tr>
                            </table>

                            <!-- CTA Button -->
                            <div style="text-align: center; margin-bottom: 32px;">
                                <table cellpadding="0" cellspacing="0" style="margin: 0 auto;" role="presentation">
                                    <tr>
                                        <td style="background-color: #0f172a; border-radius: 6px; padding: 0;">
                                            <a href="{{ config('app.cms_url') }}" target="_blank" style="display: inline-block; padding: 14px 32px; font-size: 14px; font-weight: 600; color: #ffffff; text-decoration: none; border-radius: 6px; background-color: #0f172a; letter-spacing: 0.5px;">
                                                Go to Admin Panel
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Action Notice -->
                            <table cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 6px; padding: 16px 20px; margin-bottom: 32px;" role="presentation">
                                <tr>
                                    <td>
                                        <div style="font-size: 12px; font-weight: 700; color: #166534; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">
                                            ✓ User Created
                                        </div>
                                        <p style="margin: 0; font-size: 13px; color: #15803d; line-height: 1.6;">
                                            New account has been successfully registered and is ready for use.
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Divider -->
                            <table cellpadding="0" cellspacing="0" style="width: 100%; margin: 32px 0;" role="presentation">
                                <tr>
                                    <td style="height: 1px; background-color: #e2e8f0;"></td>
                                </tr>
                            </table>

                            <!-- Signature -->
                            <p style="margin: 0; font-size: 13px; color: #64748b;">
                                Thanks,<br>
                                <span style="font-weight: 500; color: #0f172a; display: block; margin-top: 8px;">{{ config('app.name') }}</span>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 24px 32px; background-color: #f8fafc; text-align: center; font-size: 11px; color: #94a3b8; letter-spacing: 0.3px; border-top: 1px solid #e2e8f0;">
                            © 2026 {{ config('app.name') }}. All rights reserved.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>