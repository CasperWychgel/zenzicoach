<html>
<head>
    <title>Zenzicoach Mail-Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo/logo.png" type="image/gif" sizes="32x32">
</head>
<body>
<?php
session_start();

if (!isset($_SESSION['a_username'])){
    header("Location: ../index.php?login=unauthorised");
    exit();
}
else { ?>

<?php include '../includes/admin.nav.inc.php';?>
    <section id="intro">
        <div class="backgroundtheme">
            <h1 class="centeredtext center-align teal-text text-lighten-2">Zenzicoach</h1>
        </div>
    </section>
    <section id="form">
<div class="container">
    <h3 class="text-center center-align">Zenzicoach Email</h3>
    <div class="">
        <div class="">
            <!--Form-->
            <form action="../SendGrid-API/send-email.php" method="post">
                <div>
                    <p>
                        <label>
                            <input value="Janine Kruf" name="name" placeholder="name" type="radio" checked />
                            <span>Janine Kruf</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input value="Igino D'ipollito" name="name" placeholder="name" type="radio"/>
                            <span>Igino D'ipollito</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input value="Casper Wychgel" name="name" placeholder="name" type="radio"/>
                            <span>Casper Wychgel</span>
                        </label>
                    </p>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="message" placeholder="Uw bericht aan de klant.">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Verstuur Email</button>
                </div>
            </form>
        </div>
    </div>
</div>
    </section>
<?php } ?>

<!-- scripts -->
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="../js/admin.init.js"></script>
</body>
</html>