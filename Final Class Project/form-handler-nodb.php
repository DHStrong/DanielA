<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "dhstrong1@gmail.com"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$education = $_POST['education'];
$address = $_POST['address'];
$dates = $_POST['dates'];
$swim = $_POST['swim'];
$hiking = $_POST['hiking'];
$volunteer = $_POST['volunteer'];
$message = $_POST['message'];


// set up email
$msg = "New contact form submission!\nName: " . $name . "\nAge: " . $age . "\nGender: " . $gender . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEducation: " . $education . "\nAddress: " . $address .  "\nDates: " . $dates . "\nSwim: " . $swim . "\nHiking: " . $hiking . "\nVolunteer: " . $volunteer . "\nMessage: " . $message;
$msg = wordwrap($msg,70);

echo $msg;

$h = 'From: '.$myemail."\r\n".'Reply-To: '.$myemail."\r\n".'X-Mailer: PHP/'.phpversion();

mail($myemail,"New Form Submission",$msg, $h);
mail($email,"Thank you for your form submission",$msg, $h);
echo 'Thank you for your submission.  Please <a href="index.html">Click here to return to our homepage.';

?>
