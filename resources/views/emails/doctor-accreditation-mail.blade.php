<h3>Hello Team!</h3>
<p>A new Doctor Accreditation Form has been successfully submitted through the website. Please review the details below.</p>

<p><strong>Doctor Information:</strong></p>

<p><strong>First Name:</strong> {{ $data['first_name'] }}<br>
<strong>Last Name:</strong> {{ $data['last_name'] }}<br>
<strong>email_address:</strong> {{ $data['email_address'] }}<br>
<p><strong>Phone:</strong> {{ $data['countryCode'] }} {{ $data['phone'] }}</p>
</p>

<p><strong>Specialization:</strong> {{ $data['specialization'] }}<br>
<strong>Sub Specialization:</strong> {{ $data['subSpecialization'] }}<br>
<strong>PRC License:</strong> {{ $data['prcLicense'] }}<br>
<strong>PhilHealth No:</strong> {{ $data['philhealthNo'] }}
<strong>TIN:</strong> {{ $data['tin'] }}
</p>

<p><strong>Uploaded Documents: </strong><b style="color:#1a73e8; font-weight:600;">{{ $remotePath }}</b><br>
The uploaded document is available in the storage server for review.</p>
<p><strong>Submission Date:</strong> {{ $data['submitted_at'] }}</p>   

<br>
<p>Thank you,</p>
<p><b>InLife Benefits</b></p>
