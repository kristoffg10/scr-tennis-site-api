<h3>New Contact Us Inquiry</h3>
<p>You have received a new inquiry through the Contact Us form. Here are the details:</p>
<p><strong>First Name:</strong> {{ $data['first_name'] }}</p>
<p><strong>Last Name:</strong> {{ $data['last_name'] }}</p>
<p><strong>Email:</strong> {{ $data['email_address'] }}</p>
<p><strong>Phone:</strong> {{ $data['country_code'] }} {{ $data['phone_number'] }}</p>
<p><strong>Contact Method:</strong> {{ is_array($data['contact_methods']) 
    ? implode(', ', $data['contact_methods']) 
    : $data['contact_methods'] }}</p>
<p><strong>Submission Date:</strong> {{ $data['submitted_at'] }}</p>    
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p>
<p><br></p>
<p>Please follow up with the inquirer as soon as possible.</p>
<p>Thank you,</p>
<p><b>InLife Benefits</b></p>
