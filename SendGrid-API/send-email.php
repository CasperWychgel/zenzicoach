<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
$admin = $_POST['admin'];
$message = $_POST['message'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

/*Content*/
$from = new SendGrid\Email("{$admin} - Zenzicoach", "info@zenzicoach.nl");
$subject = "Zenzicoach Reservering";
$to = new SendGrid\Email("{$firstname} {$lastname}", "{$email}");
$content = new SendGrid\Content("text/html", "
{$message}
<br><br>
Met vriendelijke groet,<br>
{$admin}.
");

/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('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');
$sg = new \SendGrid($apiKey);

/*Response*/
$response = $sg->client->mail()->send()->post($mail);
header('Location: ../admin/zenzipanel.php');
exit;
?>
