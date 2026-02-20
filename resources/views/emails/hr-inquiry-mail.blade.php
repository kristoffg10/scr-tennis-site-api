<h3>Hello HR Team!</h3>
<p>A new application has been submitted via the company website for the <b>{{ $data['position'] }}</b> role.</p>
<p>Here are the details of the applicant:</p>
<p><strong>Position Applied For:</strong> {{ $data['position'] }}</p>

<p><strong>First Name:</strong> {{ $data['first_name'] }}<br>
<strong>Middle Name:</strong> {{ $data['middle_name'] }}<br>
<strong>Last Name:</strong> {{ $data['last_name'] }}<br>
<strong>Email:</strong> {{ $data['email_address'] }}
</p>

<p><strong>Birthdate:</strong> {{ $data['birthdate'] }}<br>
<strong>Civil Status:</strong> {{ $data['civil_status'] }}</p>


<p><strong>Mobile Number:</strong> {{ $data['mobile_number'] }}<br>
<strong>Telephone Number:</strong> {{ $data['telephone_number'] }}</p>

<p><strong>Nationality:</strong> {{ $data['nationality'] }}</p>


<p><strong>Post-Graduate:</strong> {{ $data['edu_post_grad'] }}<br>
<strong>College:</strong> {{ $data['edu_college'] }}<br>
<strong>High School:</strong> {{ $data['edu_high_school'] }}<br>
<strong>Elementary:</strong> {{ $data['edu_elementary'] }}
</p>

@php
    $employments = json_decode($data['employments'], true);
@endphp

@if (!empty($employments) && is_array($employments))
    <p><strong>Employment History:</strong></p>

    <table width="100%" cellpadding="6" cellspacing="0" border="1" style="border-collapse: collapse; font-family: Arial, sans-serif; font-size: 14px;">
        <tr style="background-color: #f2f2f2;">
            <th align="left">#</th>
            <th align="left">Company Name</th>
            <th align="left">Position Held</th>
            <th align="left">Duration</th>
        </tr>

        @foreach ($employments as $index => $employment)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $employment['employer'] ?? '-' }}</td>
                <td>{{ $employment['position'] ?? '-' }}</td>
                <td>{{ $employment['dates'] ?? '-' }}</td>
            </tr>
        @endforeach
    </table>
@endif


<p><strong>Resume / CV File location: </strong><b style="color:#1a73e8; font-weight:600;">{{ $remotePath }}</b><br>
The uploaded document is available in the storage server for review.</p>
<p><strong>Submission Date:</strong> {{ $data['submitted_at'] }}</p>    
<br>
<p>Thank you,</p>
<p><b>InLife Benefits</b></p>
