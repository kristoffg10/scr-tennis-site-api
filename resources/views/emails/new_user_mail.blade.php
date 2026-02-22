<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title>New Account Registration</title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style type="text/css">
        /* Gmail/Outlook safe resets - inline styles take precedence */
        body, table, td, p, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
    </style>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #e8ede9; color: #1a2e22; line-height: 1.5;">
    <!-- Wrapper table: Gmail strips body bg in some cases -->
    <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="background-color: #e8ede9;">
        <tr>
            <td align="center" style="padding: 24px 16px;">
                <!--[if mso]>
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="520">
                <tr><td>
                <![endif]-->
                <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="max-width: 520px; background-color: #ffffff; border: 1px solid #c9a227;" bgcolor="#ffffff">
                    <!-- Gold top stripe (brand accent) -->
                    <tr>
                        <td height="4" style="background-color: #C9A227; font-size: 0; line-height: 0;" bgcolor="#C9A227">&nbsp;</td>
                    </tr>
                    <!-- Header: dark green -->
                    <tr>
                        <td style="background-color: #0D2818; padding: 32px 24px; text-align: center;" bgcolor="#0D2818">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation">
                                <tr>
                                    <td align="center">
                                        <div style="font-size: 11px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: #D4AF37; margin-bottom: 8px;">
                                            {{ config('app.name') }}
                                        </div>
                                        <h1 style="margin: 0; font-size: 24px; font-weight: 600; color: #ffffff; letter-spacing: -0.5px; line-height: 1.3;">
                                            New Registration
                                        </h1>
                                        <p style="margin: 6px 0 0 0; font-size: 13px; color: #C9A227; font-weight: 500;">
                                            Account Created
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 32px 24px;">
                            <!-- Alert: light green/gold tint -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="margin-bottom: 24px;">
                                <tr>
                                    <td style="background-color: #f5f3eb; border: 1px solid #C9A227; border-left-width: 4px; padding: 14px 18px;" bgcolor="#f5f3eb">
                                        <p style="margin: 0; font-size: 13px; color: #1a2e22; line-height: 1.5;">
                                            <strong style="font-weight: 600; color: #0D2818;">New user account registered.</strong> Review the account details below.
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Section: Account Details -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="margin-bottom: 20px;">
                                <tr>
                                    <td style="font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #0D2818; margin-bottom: 12px; padding-bottom: 8px;">
                                        Account Details
                                    </td>
                                </tr>
                            </table>
                            <!-- Full Name row -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="margin-bottom: 10px;">
                                <tr>
                                    <td width="35%" style="padding: 10px 14px; font-size: 11px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #eef2e8;" bgcolor="#eef2e8">
                                        Full Name
                                    </td>
                                    <td style="padding: 10px 14px; font-size: 14px; color: #1a2e22; background-color: #f8faf8;" bgcolor="#f8faf8">
                                        {{ $data['first_name'] }} {{ $data['last_name'] }}
                                    </td>
                                </tr>
                            </table>
                            <!-- Username row -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="margin-bottom: 0;">
                                <tr>
                                    <td width="35%" style="padding: 10px 14px; font-size: 11px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #eef2e8;" bgcolor="#eef2e8">
                                        Username
                                    </td>
                                    <td style="padding: 10px 14px; font-size: 14px; background-color: #f8faf8;" bgcolor="#f8faf8">
                                        <a href="mailto:{{ $data['email'] }}" style="color: #0D2818; text-decoration: underline; word-break: break-all;">{{ $data['email'] }}</a>
                                    </td>
                                </tr>
                            </table>

                            <!-- Divider -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="margin: 24px 0;">
                                <tr>
                                    <td height="1" style="background-color: #C9A227; font-size: 0; line-height: 0;" bgcolor="#C9A227"></td>
                                </tr>
                            </table>

                            <!-- Subject -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="margin-bottom: 20px;">
                                <tr>
                                    <td style="font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #0D2818; padding-bottom: 8px;">
                                        Subject
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color: #f8faf8; padding: 14px; border-left: 4px solid #C9A227;" bgcolor="#f8faf8">
                                        <p style="margin: 0; font-size: 14px; font-weight: 600; color: #1a2e22;">{{ $data['subject'] }}</p>
                                    </td>
                                </tr>
                            </table>
                            <!-- Message -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="margin-bottom: 24px;">
                                <tr>
                                    <td style="font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #0D2818; padding-bottom: 8px;">
                                        Message
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color: #f8faf8; padding: 14px; border: 1px solid #e0e6dc;" bgcolor="#f8faf8">
                                        <p style="margin: 0; font-size: 14px; color: #475569; line-height: 1.6; white-space: pre-wrap; word-wrap: break-word;">{{ $data['message'] }}</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Divider -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="margin: 24px 0;">
                                <tr>
                                    <td height="1" style="background-color: #d4d9d0; font-size: 0; line-height: 0;" bgcolor="#d4d9d0"></td>
                                </tr>
                            </table>

                            <!-- CTA Button: gold -->
                            <table cellpadding="0" cellspacing="0" border="0" align="center" role="presentation" style="margin: 0 auto 24px auto;">
                                <tr>
                                    <td align="center" style="background-color: #C9A227; padding: 0; border-radius: 4px;" bgcolor="#C9A227">
                                        <a href="{{ config('app.cms_url') }}" target="_blank" style="display: inline-block; padding: 14px 28px; font-size: 14px; font-weight: 600; color: #0D2818; text-decoration: none; letter-spacing: 0.5px;">Go to Admin Panel</a>
                                    </td>
                                </tr>
                            </table>

                            <!-- Success notice: green -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="margin-bottom: 24px;">
                                <tr>
                                    <td style="background-color: #e8f0e8; border: 1px solid #2d5a3d; padding: 14px 18px;" bgcolor="#e8f0e8">
                                        <div style="font-size: 12px; font-weight: 700; color: #0D2818; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px;">&#10003; User Created</div>
                                        <p style="margin: 0; font-size: 13px; color: #1a3c29; line-height: 1.5;">New account has been successfully registered and is ready for use.</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Divider -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation" style="margin: 24px 0;">
                                <tr>
                                    <td height="1" style="background-color: #d4d9d0; font-size: 0; line-height: 0;" bgcolor="#d4d9d0"></td>
                                </tr>
                            </table>

                            <!-- Signature -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation">
                                <tr>
                                    <td style="font-size: 13px; color: #475569;">
                                        Thanks,<br>
                                        <span style="font-weight: 600; color: #0D2818;">{{ config('app.name') }}</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer: dark green with gold accent -->
                    <tr>
                        <td style="padding: 20px 24px; background-color: #0D2818; text-align: center; font-size: 11px; color: #D4AF37; border-top: 3px solid #C9A227;" bgcolor="#0D2818">
                            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        </td>
                    </tr>
                </table>
                <!--[if mso]>
                </td></tr></table>
                <![endif]-->
            </td>
        </tr>
    </table>
</body>
</html>
