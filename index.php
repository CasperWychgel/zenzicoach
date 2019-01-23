<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Zenzicoach</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link rel="icon" href="img/logo/logo.png" type="image/gif" sizes="32x32">
</head>
<body>

<!-- navigation section -->
<?php include 'includes/nav.inc.php';?>

<section id="intro">
    <div class="backgroundtheme">
        <h1 class="centeredtext center-align mobilefont teal-text text-lighten-2">Zenzicoach</h1>
    </div>
</section>

<section id="reservationlink">
    <div class="section white">
        <div class="row container">
            <h2 class="header center-align">Reserveren bij zenzicoach?</h2>
            <div class="center-align center">
                <br><br>
                <a href="form.php" class="waves-effect waves-light btn-large">Reserveer hier!</a>
                <br><br>
            </div>
        </div>
    </div>
</section>

<section id="responsive information cards">
        <div class="backgroundtheme row">
            <div class="col s12 m6 l4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="img/bg/art_trees.jpg">
                        <span class="card-title">Mijn werkwijze</span>
                    </div>
                    <div class="card-content">
                        <p>
                            Mijn andere manier van werken ontstaat vanuit mijn achtergrond als
                            reikimaster. Door de reiki te combineren met coaching kan ik sneller en
                            dieper op de problematiek ingaan, wat je gedurende het hele traject zal helpen.
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="werkwijze.php">Meer over mijn werkwijze</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="img/bg/ocean.jpg">
                        <span class="card-title">Reiki</span>
                    </div>
                    <div class="card-content">
                        <p>
                            Reiki is een alternatieve geneeswijze. Hierbij maak ik gebruik van de energiestromen van de mens. Hierdoor kan ik levensenergie van mensen voelen en indien nodig,  jou je energie teruggeven.
                            Dit zorgt ervoor dat je weer kracht krijgt en daardoor ook weer jezelf gelukkiger gaat voelen.
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="reiki.php">Meer over Reiki</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="img/bg/sunbeams-in-woods-om.jpg">
                        <span class="card-title">Mijn verhaal</span>
                    </div>
                    <div class="card-content">
                        <p>
                            Mijn levensverhaal over hoe alles tot stand is gekomen.
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="verhaal.php">Lees mijn verhaal</a>
                    </div>
                </div>
            </div>
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