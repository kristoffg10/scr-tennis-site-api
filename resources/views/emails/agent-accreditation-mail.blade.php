<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Agent Accreditation Application</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', Arial, sans-serif; background-color: #f9f9f9; color: #1a1a1a; line-height: 1.6;">
    <table cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f9f9f9;" role="presentation">
        <tr>
            <td align="center" style="padding: 20px;">
                <table cellpadding="0" cellspacing="0" style="width: 100%; max-width: 600px; background-color: #ffffff; border: 1px solid #f0f0f0;" role="presentation">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #0f172a; padding: 48px 32px; text-align: center;">
                            <div style="font-size: 11px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: #e2e8f0; margin-bottom: 12px;">
                                InLife Benefits
                            </div>
                            <h1 style="margin: 0; font-size: 28px; font-weight: 300; color: #ffffff; letter-spacing: -0.5px; line-height: 1.3;">
                                New Application
                            </h1>
                            <p style="margin: 8px 0 0 0; font-size: 13px; color: #cbd5e1; font-weight: 300; letter-spacing: 0.5px;">
                                Agent Accreditation
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
                                            <strong style="font-weight: 600;">New agent accreditation application received</strong> for the <strong>{{ $data['agentPosition'] }}</strong> position. Please review the applicant details below.
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Position Applied For -->
                            <div style="margin-bottom: 32px;">
                                <table cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f8fafc; border-left: 3px solid #0f172a; padding: 16px; margin-bottom: 32px;" role="presentation">
                                    <tr>
                                        <td>
                                            <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin-bottom: 8px;">
                                                Position Applied For
                                            </div>
                                            <p style="margin: 0; font-size: 16px; font-weight: 600; color: #1a1a1a;">
                                                {{ $data['agentPosition'] }}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Personal Information Section -->
                            <div style="margin-bottom: 32px;">
                                <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin-bottom: 16px;">
                                    Personal Information
                                </div>

                                <!-- Name -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Full Name
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            {{ $data['first_name'] }} {{ $data['middleName'] ? $data['middleName'] . ' ' : '' }}{{ $data['last_name'] }}
                                        </td>
                                    </tr>
                                </table>

                                <!-- Birthdate -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Birthdate
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            {{ $data['birthdate'] }}
                                        </td>
                                    </tr>
                                </table>

                                <!-- Place of Birth -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Place of Birth
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            {{ $data['birthPlace'] }}
                                        </td>
                                    </tr>
                                </table>

                                <!-- Nationality -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Nationality
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            {{ $data['nationality'] }}
                                        </td>
                                    </tr>
                                </table>

                                <!-- Religion -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Religion
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            {{ $data['religion'] }}
                                        </td>
                                    </tr>
                                </table>

                                <!-- Civil Status -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Civil Status
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            {{ $data['civilStatus'] }}
                                        </td>
                                    </tr>
                                </table>

                                <!-- SSS/TIN -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 0; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            SSS No. / TIN
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            {{ $data['sssTin'] }}
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

                            <!-- Contact Details Section -->
                            <div style="margin-bottom: 32px;">
                                <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin-bottom: 16px;">
                                    Contact Details
                                </div>

                                <!-- Email -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Email
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            <a href="mailto:{{ $data['email_address'] }}" style="color: #0f172a; text-decoration: none; word-break: break-all;">
                                                {{ $data['email_address'] }}
                                            </a>
                                        </td>
                                    </tr>
                                </table>

                                <!-- Mobile -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Mobile
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            <a href="tel:{{ $data['mobile'] }}" style="color: #0f172a; text-decoration: none;">
                                                {{ $data['mobile'] }}
                                            </a>
                                        </td>
                                    </tr>
                                </table>

                                <!-- Phone -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 0; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Phone
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            <a href="tel:{{ $data['countryCode'] }}{{ $data['phone'] }}" style="color: #0f172a; text-decoration: none;">
                                                {{ $data['countryCode'] }} {{ $data['phone'] }}
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

                            <!-- Referral Details Section -->
                            <div style="margin-bottom: 32px;">
                                <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin-bottom: 16px;">
                                    Referral Details
                                </div>

                                <!-- Referring Person -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Referring Person
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            {{ $data['referPerson'] }}
                                        </td>
                                    </tr>
                                </table>

                                <!-- Referral Source -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 0; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Referral Source
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                            {{ $data['referralSource'] }}
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

                            <!-- Employment Details Section -->
                            @php
                                $employments = json_decode($data['employments_parsed'], true);
                            @endphp

                            @if (!empty($employments) && is_array($employments))
                                <div style="margin-bottom: 32px;">
                                    <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin-bottom: 16px;">
                                        Employment Details
                                    </div>
                                    
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: #f8fafc;" role="presentation">
                                        <tr style="background-color: #f1f5f9;">
                                            <td style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; border: 1px solid #e2e8f0;">Company</td>
                                            <td style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; border: 1px solid #e2e8f0;">Position</td>
                                            <td style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; border: 1px solid #e2e8f0;">Duration</td>
                                        </tr>
                                        @foreach ($employments as $employment)
                                            <tr>
                                                <td style="padding: 12px 16px; font-size: 13px; color: #1a1a1a; border: 1px solid #e2e8f0;">{{ $employment['employer'] ?? '-' }}</td>
                                                <td style="padding: 12px 16px; font-size: 13px; color: #1a1a1a; border: 1px solid #e2e8f0;">{{ $employment['position'] ?? '-' }}</td>
                                                <td style="padding: 12px 16px; font-size: 13px; color: #1a1a1a; border: 1px solid #e2e8f0;">{{ $employment['dates'] ?? '-' }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>

                                <!-- Divider -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin: 32px 0;" role="presentation">
                                    <tr>
                                        <td style="height: 1px; background-color: #e2e8f0;"></td>
                                    </tr>
                                </table>
                            @endif

                            <!-- Professional Membership Section -->
                            @php
                                $memberships = json_decode($data['professional_memberships_parsed'], true);
                            @endphp

                            @if (!empty($memberships) && is_array($memberships))
                                <div style="margin-bottom: 32px;">
                                    <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin-bottom: 16px;">
                                        Professional Membership
                                    </div>
                                    
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: #f8fafc;" role="presentation">
                                        <tr style="background-color: #f1f5f9;">
                                            <td style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; border: 1px solid #e2e8f0;">Organization</td>
                                            <td style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; border: 1px solid #e2e8f0;">Position</td>
                                            <td style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; border: 1px solid #e2e8f0;">Duration</td>
                                        </tr>
                                        @foreach ($memberships as $membership)
                                            <tr>
                                                <td style="padding: 12px 16px; font-size: 13px; color: #1a1a1a; border: 1px solid #e2e8f0;">{{ $membership['name'] ?? '-' }}</td>
                                                <td style="padding: 12px 16px; font-size: 13px; color: #1a1a1a; border: 1px solid #e2e8f0;">{{ $membership['position'] ?? '-' }}</td>
                                                <td style="padding: 12px 16px; font-size: 13px; color: #1a1a1a; border: 1px solid #e2e8f0;">{{ $membership['dates'] ?? '-' }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>

                                <!-- Divider -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin: 32px 0;" role="presentation">
                                    <tr>
                                        <td style="height: 1px; background-color: #e2e8f0;"></td>
                                    </tr>
                                </table>
                            @endif

                            <!-- Character References Section -->
                            @php
                                $references = json_decode($data['character_references_parsed'], true);
                            @endphp

                            @if (!empty($references) && is_array($references))
                                <div style="margin-bottom: 32px;">
                                    <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin-bottom: 16px;">
                                        Character References
                                    </div>
                                    
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: #f8fafc;" role="presentation">
                                        <tr style="background-color: #f1f5f9;">
                                            <td style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; border: 1px solid #e2e8f0;">Name</td>
                                            <td style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; border: 1px solid #e2e8f0;">Relation</td>
                                            <td style="padding: 12px 16px; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; border: 1px solid #e2e8f0;">Phone</td>
                                        </tr>
                                        @foreach ($references as $reference)
                                            <tr>
                                                <td style="padding: 12px 16px; font-size: 13px; color: #1a1a1a; border: 1px solid #e2e8f0;">{{ $reference['name'] ?? '-' }}</td>
                                                <td style="padding: 12px 16px; font-size: 13px; color: #1a1a1a; border: 1px solid #e2e8f0;">{{ $reference['relation'] ?? '-' }}</td>
                                                <td style="padding: 12px 16px; font-size: 13px; color: #1a1a1a; border: 1px solid #e2e8f0;">
                                                    <a href="tel:{{ $reference['phone'] }}" style="color: #0f172a; text-decoration: none;">
                                                        {{ $reference['phone'] ?? '-' }}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>

                                <!-- Divider -->
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin: 32px 0;" role="presentation">
                                    <tr>
                                        <td style="height: 1px; background-color: #e2e8f0;"></td>
                                    </tr>
                                </table>
                            @endif

                            <!-- Education Section -->
                            <div style="margin-bottom: 32px;">
                                <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748b; margin-bottom: 16px;">
                                    Educational Background
                                </div>

                                <!-- High School -->
                                <div style="margin-bottom: 20px;">
                                    <p style="margin: 0 0 8px 0; font-size: 13px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px;">
                                        High School
                                    </p>
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                        <tr>
                                            <td style="padding: 10px 16px; font-size: 12px; font-weight: 600; color: #475569; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">School</td>
                                            <td style="padding: 10px 16px; font-size: 13px; color: #1a1a1a;">{{ $data['highSchoolName'] ?? '-' }}</td>
                                        </tr>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                        <tr>
                                            <td style="padding: 10px 16px; font-size: 12px; font-weight: 600; color: #475569; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">Years</td>
                                            <td style="padding: 10px 16px; font-size: 13px; color: #1a1a1a;">{{ $data['highSchoolFrom'] ?? '-' }} - {{ $data['highSchoolUntil'] ?? '-' }}</td>
                                        </tr>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                        <tr>
                                            <td style="padding: 10px 16px; font-size: 12px; font-weight: 600; color: #475569; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">Awards</td>
                                            <td style="padding: 10px 16px; font-size: 13px; color: #1a1a1a;">{{ $data['highSchoolAwards'] ?? '-' }}</td>
                                        </tr>
                                    </table>
                                </div>

                                <!-- College -->
                                <div style="margin-bottom: 20px;">
                                    <p style="margin: 0 0 8px 0; font-size: 13px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px;">
                                        College
                                    </p>
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                        <tr>
                                            <td style="padding: 10px 16px; font-size: 12px; font-weight: 600; color: #475569; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">School</td>
                                            <td style="padding: 10px 16px; font-size: 13px; color: #1a1a1a;">{{ $data['collegeName'] ?? '-' }}</td>
                                        </tr>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                        <tr>
                                            <td style="padding: 10px 16px; font-size: 12px; font-weight: 600; color: #475569; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">Degree</td>
                                            <td style="padding: 10px 16px; font-size: 13px; color: #1a1a1a;">{{ $data['collegeDegree'] ?? '-' }}</td>
                                        </tr>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                        <tr>
                                            <td style="padding: 10px 16px; font-size: 12px; font-weight: 600; color: #475569; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">Years</td>
                                            <td style="padding: 10px 16px; font-size: 13px; color: #1a1a1a;">{{ $data['collegeFrom'] ?? '-' }} - {{ $data['collegeUntil'] ?? '-' }}</td>
                                        </tr>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                        <tr>
                                            <td style="padding: 10px 16px; font-size: 12px; font-weight: 600; color: #475569; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">Awards</td>
                                            <td style="padding: 10px 16px; font-size: 13px; color: #1a1a1a;">{{ $data['collegeAwards'] ?? '-' }}</td>
                                        </tr>
                                    </table>
                                </div>

                                <!-- Post Grad -->
                                <div style="margin-bottom: 0;">
                                    <p style="margin: 0 0 8px 0; font-size: 13px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px;">
                                        Post Graduate
                                    </p>
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                        <tr>
                                            <td style="padding: 10px 16px; font-size: 12px; font-weight: 600; color: #475569; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">School</td>
                                            <td style="padding: 10px 16px; font-size: 13px; color: #1a1a1a;">{{ $data['postGradName'] ?? '-' }}</td>
                                        </tr>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                        <tr>
                                            <td style="padding: 10px 16px; font-size: 12px; font-weight: 600; color: #475569; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">Degree</td>
                                            <td style="padding: 10px 16px; font-size: 13px; color: #1a1a1a;">{{ $data['postGradDegree'] ?? '-' }}</td>
                                        </tr>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                        <tr>
                                            <td style="padding: 10px 16px; font-size: 12px; font-weight: 600; color: #475569; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">Years</td>
                                            <td style="padding: 10px 16px; font-size: 13px; color: #1a1a1a;">{{ $data['postGradFrom'] ?? '-' }} - {{ $data['postGradUntil'] ?? '-' }}</td>
                                        </tr>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                        <tr>
                                            <td style="padding: 10px 16px; font-size: 12px; font-weight: 600; color: #475569; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">Awards</td>
                                            <td style="padding: 10px 16px; font-size: 13px; color: #1a1a1a;">{{ $data['postGradAwards'] ?? '-' }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <!-- Divider -->
                            <table cellpadding="0" cellspacing="0" style="width: 100%; margin: 32px 0;" role="presentation">
                                <tr>
                                    <td style="height: 1px; background-color: #e2e8f0;"></td>
                                </tr>
                            </table>

                            <!-- Document & Submission Info -->
                            <div style="margin-bottom: 32px;">
                                <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 12px; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                    <tr>
                                        <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                            Government ID
                                        </td>
                                        <td style="padding: 12px 16px; font-size: 13px; color: #1a73e8; word-break: break-all;">
                                            <strong>{{ $remotePath }}</strong>
                                        </td>
                                    </tr>
                                </table>
                                <p style="margin: 8px 0 0 0; font-size: 12px; color: #64748b;">
                                    The uploaded document is available in the storage server for review.
                                </p>
                            </div>

                            <!-- Submission Date -->
                            <table cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f8fafc; border-radius: 4px;" role="presentation">
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 12px; font-weight: 600; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; background-color: #f1f5f9; border-radius: 4px 0 0 4px; width: 40%;">
                                        Submitted
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 14px; color: #1a1a1a;">
                                        {{ $data['submitted_at'] }}
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
                                Thank you,<br>
                                <span style="font-weight: 500; color: #0f172a; display: block; margin-top: 8px;">InLife Benefits</span>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 24px 32px; background-color: #f8fafc; text-align: center; font-size: 11px; color: #94a3b8; letter-spacing: 0.3px; border-top: 1px solid #e2e8f0;">
                            © 2024 InLife Benefits. All rights reserved.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>