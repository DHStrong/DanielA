<html>
   <head>
   </head>
<body>
   
<h1>Confirmation</h1>
<form action="email_script.php" method="post">
<p>Email Address: <input type="text" name="email" size="30"><br><br></p>
<p> Subject:<input type="text" name="subject" size="30"><br><br></p>
<p>Message</p>
<p><textarea rows="10" cols="20" name="message"></textarea></p>
<input type="submit" name="submit" value="Submit">
</form>
   
</body>
</html>

<?PHP
$d =  swim("D");
if($d == "swim"){
    echo "www.swimcamps.com";
}
$d = hiking("D");
if($d == "hiking"){
    echo "www.hikingcamps.com";
}
$d = volunteering("D");
if($d == "volunteering"){
    echo "www.volunteercamps.com";
}

$from="dhstrong1@gmail.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$header = 'From: '.$from."\r\n".'Reply-To: '.$from."\r\n".'X-Mailer: PHP/'.phpversion();
mail($email, $subject, $message, $header);
print "Your message has been sent.  Someone would contact you soon:</br>$email</br> $subject</br> $message<p/>";
?>