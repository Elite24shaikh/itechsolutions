<?php 
$to = 'shaikhabd24@gmail.com'; // Put in your email address here
$subject  = "Contact us Fuenral"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$fname = stripslashes($_REQUEST['fname']); // sender's name
$email = stripslashes($_REQUEST['email']); // sender's email
 
$subject = stripslashes($_REQUEST['subject']);
$message = stripslashes($_REQUEST['message']); 


// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg .= "Name: ".$fname."\r\n\n";  // add sender's name to the message
$msg .= "E-mail: ".$email."\r\n\n";  //	add sender's email to the message
 
$msg .= "Subject: ".$subject."\r\n\n";  // add sender's name to the message
$msg .= "-----Comment------: ".$message."\r\n\n";  // add sender's email to the message
$msg .= "\r\n\n"; 

$mail = @mail($to, $subject, $msg, "From:".$email);  // This command sends the e-mail to the e-mail address contained in the $to variable

if($mail) {
	header("Location:index.html");	
} else {
	echo 'Message could not be sent!';   //This is the message that will be shown when an error occured: the message was not send
}

?>