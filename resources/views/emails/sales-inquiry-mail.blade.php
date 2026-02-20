<h3>Hello Team!</h3>
<p>A new Request for Proposal has been submitted via the website. <br>Please review the details below and proceed with the next steps.</p>

<p><strong>Company Details:</strong></p>

<p><strong>Company Name:</strong> {{ $data['company_name'] }}<br>
<strong>Industry:</strong> {{ $data['type_of_industry'] }}<br>
<strong>Number of Employees:</strong> {{ $data['number_of_employees'] }}<br>
<strong>Full Office Address:</strong> {{ $data['full_office_address'] }}
</p>

<p><strong>Existing Coverage:</strong></p>

<p><strong>Interested in Group Insurance Program:</strong> {{ $data['is_interested'] ? 'Yes' : 'No' }}<br>
<strong>Has Existing Insurance:</strong> {{ $data['have_existing_insurance'] }}<br>
<strong>Current HMO Provider:</strong> {{ $data['current_hmo_provider'] }}
</p>

<p><strong>Primary Contact Details:</strong></p>

<p><strong>First Name:</strong> {{ $data['first_name'] }}<br>
<strong>Last Name:</strong> {{ $data['last_name'] }}<br>
<strong>Email:</strong> {{ $data['email_address'] }}<br>
<strong>Phone:</strong> {{ $data['country_code'] }} {{ $data['phone_number'] }}
</p>

<p><strong>Message:</strong><br>
{{ $data['message'] }}</p>

@php
    $employments = json_decode($selected_plans, true);
@endphp

@if (!empty($employments) && is_array($employments))
    <p><strong>Products Interested In:</strong></p>

    <table width="100%" cellpadding="6" cellspacing="0" border="1" style="border-collapse: collapse; font-family: Arial, sans-serif; font-size: 14px;">
        <tr style="background-color: #f2f2f2;">
            <th align="left">#</th>
            <th align="left">Product Name</th>
            <th align="left">Type</th>
        </tr>

        @foreach ($employments as $index => $employment)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $employment['title'] ?? '-' }}</td>
                <td>{{ $employment['type'] ?? '-' }}</td>
            </tr>
        @endforeach
    </table>
@endif
<p><strong>Submission Date:</strong> {{ $data['submitted_at'] }}</p>  
<br>
<p>Thank you,</p>
<p><b>InLife Benefits</b></p>
