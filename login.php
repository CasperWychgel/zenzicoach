<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Zenzicoach admin login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link rel="icon" href="img/logo/logo.png" type="image/gif" sizes="32x32">
</head>
<body>

<!-- navigation section -->
<?php include 'includes/nav.inc.php';?>

<section id="intro">
    <div class="backgroundtheme">
        <h1 class="centeredtext center-align mobilefont teal-text text-lighten-2">Zenzicoach login</h1>
    </div>
</section>

<section id="form">
    <div class="section white">
        <div class="row container">
            <h2 class="header center-align">Administrator login</h2>
            <div class="row">
                <form action="includes/login.inc.php" class="col s12" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="admin_username" name="username" type="text" class="validate">
                            <label for="admin_username">Gebruikersnaam/Email</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="admin_password" name="password" type="password" class="validate">
                            <label for="admin_password">Wachtwoord<label>
                        </div>
                        <div class="center">
                            <button class="btn-small waves-effect waves-light" type="submit" name="submit">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="outro">
    <div class="backgroundtheme">
        <h1 class="centeredtext center-align mobilefont teal-text text-lighten-2"></h1>
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