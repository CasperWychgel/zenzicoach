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

<section id="form">
    <div class="section white">
        <div class="row container">
            <h2 class="header center-align">Reserveren</h2>
                <div class="row">
                    <form action="includes/formdata.inc.php" class="col s12" method="POST">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" name="first" type="text" class="validate">
                                <label for="first_name"> Voornaam</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" name="last" type="text" class="validate">
                                <label for="last_name">Achternaam</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="age" name="age" type="number" min="18" max="100" class="validate" >
                                <label for="age">Leeftijd (minimaal achttien jaar oud)</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" name="email" type="email" class="validate" >
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="tel" name="tel" type="tel" class="validate" >
                                <label for="tel">Telefoon</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="text" name="problem" type="text">
                                <label>Waar heb je last van?</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="text2" name="question" type="text">
                                <label>Overige vraag/ opmerking.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="date" name="date" type="text" class="datepicker">
                                <label>Wanneer wilt u een afspraak maken?</label>
                            </div>
                        </div>
                        <div>
                            <button class="btn waves-effect waves-light" type="submit" name="submit" onclick="return confirm('Klopt de ingevoerde info?')">Verstuur
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="js/init.js"></script>

</body>
</html>