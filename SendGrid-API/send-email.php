<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

/*Content*/
$from = new SendGrid\Email("Zenzicoach", "info@zenzicoach.nl");
$subject = "Uw Reservering";
$to = new SendGrid\Email("Casper Wychgel", "casper.wychgel@gmail.com");
$content = new SendGrid\Content("text/html", "
Email : {$email}<br>
Name : {$name}<br>
Bericht : {$message}
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
