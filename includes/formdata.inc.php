<?php

if (isset($_POST['submit'])) {

        include_once 'dbh.inc.php';
        /*SendGrid Library*/
        require_once ('../SendGrid-API/vendor/autoload.php');

        $first       = mysqli_real_escape_string($conn, $_POST['first']);
        $last         = mysqli_real_escape_string($conn, $_POST['last']);
        $age         = mysqli_real_escape_string($conn, $_POST['age']);
        $email       = mysqli_real_escape_string($conn, $_POST['email']);
        $tel           = mysqli_real_escape_string($conn, $_POST['tel']);
        $problem   = mysqli_real_escape_string($conn, $_POST['problem']);
        $question = mysqli_real_escape_string($conn, $_POST['question']);
        $date         = mysqli_real_escape_string($conn, $_POST['date']);
        //Mail message
        $message = "<!DOCTYPE html>
<html lang=\"en\" style=\"-webkit-box-sizing: border-box;box-sizing: border-box;line-height: 1.5;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: -apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,Oxygen-Sans,Ubuntu,Cantarell,&quot;Helvetica Neue&quot;,sans-serif;font-weight: normal;color: rgba(0,0,0,0.87);\">
<head style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito\" rel=\"stylesheet\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\" media=\"screen,projection\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">
    <style style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">
        h1, h2, h3, h4, p {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body style=\"-webkit-box-sizing: inherit;box-sizing: inherit;margin: 0;\">
<div class=\"teal lighten-2 z-depth-5 container\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;-webkit-box-shadow: 0 24px 38px 3px rgba(0,0,0,0.14),0 9px 46px 8px rgba(0,0,0,0.12),0 11px 15px -7px rgba(0,0,0,0.2);box-shadow: 0 24px 38px 3px rgba(0,0,0,0.14),0 9px 46px 8px rgba(0,0,0,0.12),0 11px 15px -7px rgba(0,0,0,0.2);margin: 0 auto;max-width: 1280px;width: 90%;background-color: #4db6ac !important;\">
    <h2 class=\"centeredtext center-align white-text \" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;font-weight: 400;line-height: 110%;font-size: 3.56rem;margin: 2.3733333333rem 0 1.424rem 0;font-family: 'Nunito', sans-serif;text-align: center;color: #fff !important;\">Zenzicoach</h2>
</div>
    <div class=\"white\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;background-color: #fff !important;\">
        <div class=\"container\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;margin: 0 auto;max-width: 1280px;width: 90%;\">

            <h4 class=\"center-align black-text\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;font-weight: 400;line-height: 110%;font-size: 2.28rem;margin: 1.52rem 0 .912rem 0;font-family: 'Nunito', sans-serif;text-align: center;color: #000 !important;\">Beste {$first}, bedankt voor je reservering!</h4>


            <div class=\"row\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;margin-left: auto;margin-right: auto;margin-bottom: 20px;\">
                <div class=\"col s12\" style=\"-webkit-box-sizing: border-box;box-sizing: border-box;float: left;padding: 0 .75rem;min-height: 1px;width: 100%;margin-left: auto;left: auto;right: auto;\">
                    <div class=\"card-panel teal\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;-webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 3px 1px -2px rgba(0,0,0,0.12),0 1px 5px 0 rgba(0,0,0,0.2);box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 3px 1px -2px rgba(0,0,0,0.12),0 1px 5px 0 rgba(0,0,0,0.2);-webkit-transition: -webkit-box-shadow .25s;transition: box-shadow .25s, -webkit-box-shadow .25s;padding: 24px;margin: .5rem 0 1rem 0;border-radius: 2px;background-color: #009688 !important;\">
                        <span class=\"white-text center-align centeredtext\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;text-align: center;color: #fff !important;\">U heeft een afspraak gereserveerd onder de naam {$first} {$last},<br style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">
                met als telefoonnummer: {$tel}.
                        </span>
                    </div>
                </div>
            </div>
            <h4 class=\"center-align black-text\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;font-weight: 400;line-height: 110%;font-size: 2.28rem;margin: 1.52rem 0 .912rem 0;font-family: 'Nunito', sans-serif;text-align: center;color: #000 !important;\">Wanneer is uw afspraak?</h4>

            <p class=\"center-align grey-text\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;font-family: 'Nunito', sans-serif;text-align: center;color: #9e9e9e !important;\">
                Uw afspraak staat bij ons in de agenda op {$date}.<br style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\"><br style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">
                Als u verder nog vragen heeft kunt u ons altijd bereiken via: info@zenzicoach.nl
            </p>
        </div>
    </div>


</body>
</html>";

        //Error check

        //Lege velden checken
        if (empty($first) || empty($last)|| empty($age)|| empty($email)|| empty($tel)|| empty($problem)|| empty($date)) {
            header("Location: ../form.php?form=empty");
            exit();
        } else {
            //Check de characters uit input
            if (!preg_match("/^[a-zA-Z ]*$/", $first) || !preg_match("/^[a-zA-Z ]*$/", $last)) {
                header("Location: ../form.php?form=invalid");
                exit();
            } else {
                //Check of de email valide is
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../form.php?form=email");
                    exit();
                } else {
                    $sql = "INSERT INTO users (user_first, user_last, user_age, user_email, user_tel, user_problem, user_question,user_date) VALUES ('$first', '$last', '$age', '$email','$tel', '$problem', '$question', '$date')";
                    mysqli_query($conn, $sql);
                    /*Content*/
                    $from = new SendGrid\Email("Zenzicoach", "info@zenzicoach.nl");
                    $subject = "Zenzicoach Reservering";
                    $to = new SendGrid\Email("{$first} {$last}", "{$email}");
                    $content = new SendGrid\Content("text/html", "{$message}");
                    /*Send the mail*/
                    $mail = new SendGrid\Mail($from, $subject, $to, $content);
                    $apiKey = ('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');
                    $sg = new \SendGrid($apiKey);

                    /*Response*/
                    $response = $sg->client->mail()->send()->post($mail);
                    header("Location: ../formsucces.php");
                    exit();
                }


            }
        }

    } else {
    header("Location: ../form.php");
    exit();
}