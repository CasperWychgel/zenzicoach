<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Zenzicoach</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link rel="icon" href="img/logo.png" type="image/gif" sizes="32x32">
</head>
<body>

<!-- navigation section -->
<?php include 'includes/nav.inc.php';?>

<section id="intro">
    <div class="backgroundtheme">
        <h1 class="centeredtext center-align mobilefont teal-text text-lighten-2">Zenzicoach</h1>
    </div>
</section>

<section id="textinfo">
    <div class="section white">
        <div class="row container">
            <h2 class="header center-align">Uw reservering is succesvol geplaatst!</h2>
            <p class="flow-text center-align grey-text text-darken-3 lighten-3">
                Er is een geautomatiseerde mail verzonden naar uw emailadres met de details.
            </p>
        </div>
    </div>
</section>

<section id="reservationinfo" class="backgroundtheme">
    <div class="container">
        <h3 class="centeredtextsmlbottom center-align teal-text text-lighten-2">
            Uw gegevens worden beveiligd opgeslagen,<br> heeft u hier vragen over dan kan u daar natuurlijk contact met ons over opnemen.
        </h3>
        <div class="center-align">
            <a href="contact.php" class=" waves-effect waves-light btn-large">Contact</a>
        </div>
        <br><br><br>
    </div>
</section>

<!-- footer section -->
<?php include 'includes/footer.php';?>

<!-- scripts -->
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="js/init.js"></script>
</body>
</html>