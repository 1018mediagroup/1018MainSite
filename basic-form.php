<?php

/**
 * basic-form.php - Example of a simple contact form in ProcessWire
 *
 */ 

//include('./head.inc'); 

// set this to the email address you want to send to (or pull from a PW field)
$emailTo = ''; 

// or if not set, we'll just email the default superuser
if(empty($emailTo)) $emailTo = $users->get($config->superUserPageID)->email;

// set and sanitize our form field values
$form = array(
	'fullname' => $sanitizer->text($input->post->fullname),
	'email' => $sanitizer->email($input->post->email),
	'comments' => $sanitizer->textarea($input->post->comments),
	); 

// initialize runtime vars
$sent = false; 
$error = ''; 

// check if the form was submitted
if($input->post->submit) {

	// determine if any fields were ommitted or didn't validate
	foreach($form as $key => $value) {
		if(empty($value)) $error = "<h2 class='error'>Please check that you have completed all fields.</h2>";
	}

	// if no errors, email the form results
	if(!$error) {
		$subject = "Contact Form";
		$message = '';
		foreach($form as $key => $value) $message .= "$key: $value\n";
		mail($emailTo, $subject, $message, "From: $form[email]");
		$sent = true;	
	}
}

if($sent) {
	echo "<h2>Thank you, your message has been sent.</h2>"; // or pull from a PW field

} else {

	// encode values for placement in markup
	foreach($form as $key => $value) {
		$form[$key] = htmlentities($value, ENT_QUOTES, "UTF-8"); 
	}

	// output the form
	echo <<< _OUT

							
	$error
	<form action="./" method="post">
		<div class="form-group">
		<label for="fullname">Your Name</label><br />
		<input type="text" class="form-control" id="fullname" name="fullname"  value="$form[fullname]" />
		</div>
		
		<div class="form-group">
		<label for="email">Your Email</label><br />
		<input type="email" name="email" id="email" size="60" value="$form[email]" />
		</div>
		
		<div class="form-group">
		<label for="comments">Comments</label><br />
		<textarea id="comments" name="comments" rows="5" cols="60">$form[comments]</textarea>
		</div>
		
		<div class="form-group"><input type="submit" name="submit" class="btn btn-primary" value="Submit" /></div>
	</form>

_OUT;

}

//include("./foot.inc"); 
