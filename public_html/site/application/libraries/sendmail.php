<?php
class sendmail 
{
function sendmaildata($send,$file = false)
{

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
//ssl://
//tls
$mail->Host = "md-in-73.webhostbox.net";
//enable this if you are using gmail smtp, for mandrill app it is not required
$mail->SMTPSecure = 'ssl';                            
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "order@dollson.in";
//Password to use for SMTP authentication
$mail->Password = 'Manoj@Order';
//Set who the message is to be sent from
$mail->setFrom('order@dollson.in', 'The coding Centre');
//Set an alternative reply-to address
$mail->addReplyTo('gauravpethe22387@gmail.com', 'Reply-to The coding Centre');
//Set who the message is to be sent to
$mail->addAddress('snehalbthakur18@gmail.com', 'Snehal practice mail');
$bcc = "snehalbthakur18@gmail.com";  $bccname = "Snehal thakur";

//$mail->AddCC($cc1, $cc1name);


$mail->AddCC($bcc, $bccname);

$mail->AddCC($send, "Ashish the coder");



//$mail->AddBCC($bcc2, $bcc2name);

//Set the subject line

$mail->Subject = 'Form Submitted Successfully';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body



//$mail->msgHTML(file_get_contents($target_fileoutp), dirname(__FILE__));



//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//$mail->MsgHTML = 'This is a plain-text message body';
$mail->IsHTML(true);
//$mail->Body = $message;
$mail->Body = "Your form have been submitted successfully!";

if($file != false)
{
if (file_exists($target_file)) {
//$mail->addAttachment($target_file);
}
}
if ($result = $mail->send()) {
return $result;
}
}
	
	

	
	
function sendstartup($send,$file = false)
{

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
//ssl://
//tls
$mail->Host = "md-in-73.webhostbox.net";
//enable this if you are using gmail smtp, for mandrill app it is not required
$mail->SMTPSecure = 'ssl';                            
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "order@dollson.in";
//Password to use for SMTP authentication
$mail->Password = 'Manoj@Order';
//Set who the message is to be sent from
$mail->setFrom('order@dollson.in', 'The coding Centre');
//Set an alternative reply-to address
$mail->addReplyTo('gauravpethe22387@gmail.com', 'Reply-to The coding Centre');
//Set who the message is to be sent to
$mail->addAddress('snehalbthakur18@gmail.com', 'Snehal practice mail');
$bcc = "snehalbthakur18@gmail.com";  $bccname = "Snehal thakur";

//$mail->AddCC($cc1, $cc1name);


$mail->AddCC($bcc, $bccname);

$mail->AddCC($send, "Ashish the coder");



//$mail->AddBCC($bcc2, $bcc2name);

//Set the subject line

$mail->Subject = 'Form Submitted Successfully';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body



//$mail->msgHTML(file_get_contents($target_fileoutp), dirname(__FILE__));



//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//$mail->MsgHTML = 'This is a plain-text message body';
$mail->IsHTML(true);
//$mail->Body = $message;
$mail->Body = "Your form have been submitted successfully!";

if($file != false)
{
if (file_exists($target_file)) {
//$mail->addAttachment($target_file);
}
}
if ($result = $mail->send()) {
return $result;
}



}	
}

?>