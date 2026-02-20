<h3>Hello Team!</h3>
<p>A new Clinic Accreditation Form has been successfully submitted through the website. Please review the details below.</p>

<p><strong>Clinic / Business Details:</strong></p>

<p><strong>Clinic Name:</strong> {{ $data['name'] }}<br>
<strong>Business Name:</strong> {{ $data['business_name'] }}<br>
<strong>Business TIN:</strong> {{ $data['tin'] }}<br>
</p>

<p><strong>Administrator Details:</strong></p>

<p><strong>First Name:</strong> {{ $data['first_name'] }}<br>
<strong>Last Name:</strong> {{ $data['last_name'] }}<br>
<strong>Email:</strong> {{ $data['email_address'] }}<br>
<strong>Mobile Number:</strong> {{ $data['phone_number'] }}
</p>

<p><strong>BIR Tax Information:</strong></p>

<p><strong>BIR Tax Exempt:</strong> {{ $data['tax_exempt'] ? 'Yes' : 'No' }}</p>

<p><strong>Uploaded Documents: </strong><b style="color:#1a73e8; font-weight:600;">{{ $remotePath }}</b><br>
The uploaded document is available in the storage server for review.</p>
<p><strong>Submission Date:</strong> {{ $data['submitted_at'] }}</p>   

<br>
<p>Thank you,</p>
<p><b>InLife Benefits</b></p>
