<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
$name = $_POST['name'];
$message = $_POST['message'];

/*Content*/
$from = new SendGrid\Email("{$name} - Zenzicoach", "info@zenzicoach.nl");
$subject = "Zenzicoach Reservering";
$to = new SendGrid\Email("Casper Wychgel", "casper.wychgel@gmail.com");
$content = new SendGrid\Content("text/html", "
{$message}
<br><br>
Met vriendelijke groet,<br>
{$name}.
");

/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('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');
$sg = new \SendGrid($apiKey);

/*Response*/
$response = $sg->client->mail()->send()->post($mail);
?>

<!--Print the response-->
<pre>
    Hallo het is gelukt!
</pre>
