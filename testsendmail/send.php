<?
include "class.phpmailer.php"; 
include "class.smtp.php"; 

$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = "mail.smartlinks.vn"; // specify main and backup server
$mail->Port = 465; // set the port to use
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = 'ssl';
$mail->Username = "info@smartlinks.vn"; // your SMTP username or your gmail username
$mail->Password = "thunguyen89@@"; // your SMTP password or your gmail password
$from = "info@smartlinks.vn"; // Reply to this email
$to="nhannc@matbao.com"; // Recipients email ID
$name="Test"; // Recipient's name
$mail->From = $from;
$mail->FromName = "Mat Bao"; // Name to indicate where the email came from when the recepient received
$mail->AddAddress($to,$name);
$mail->AddReplyTo($from,"Mat Bao");
$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML
$mail->Subject = "Test send mail";
$mail->Body = "<b>Mail nay duoc goi bang phpmailer class. -/a></b>"; //HTML Body
$mail->AltBody = "Mail nay duoc goi bang phpmailer class. "; //Text Body
//$mail->SMTPDebug = 2;
if(!$mail->Send())
{
	echo "<h1>Loi khi goi mail: " . $mail->ErrorInfo . '</h1>';
}
else
{
	echo "<h1>Mat Bao Send mail thanh cong</h1>";
}
?>
