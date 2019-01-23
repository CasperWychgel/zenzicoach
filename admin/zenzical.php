<?php

session_start();

require_once '../includes/dbh.inc.php';


$sql = 'SELECT * FROM users ORDER BY id';

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}

//Close connection
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zenzicoach Admin-Calender</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo/logo.png" type="image/gif" sizes="32x32">
</head>

<body>
<?php
if (!isset($_SESSION['a_username'])){
    header("Location: ../index.php?login=unauthorised");
    exit();
}
else { ?>

    <?php include '../includes/admin.nav.inc.php';?>

    <section id="intro">
        <div class="backgroundtheme">
            <h1 class="adminintro center-align teal-text text-lighten-2">ZenziCalender</h1>
        </div>
    </section>

    <section>
        <div class="container">
            <div id='calendar'></div>
        </div>
    </section>

    <section id="indexfooter">
        <footer class="page-footer red lighten-3">
            <div class="container ">
                <div class="row">
                    <div class="col l6 s12">
                        <div class="chip">
                            <img src="../img/logo/Profilepicturecas.jpg" alt="Contact Person">
                            By Casper Wychgel
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 Copyright
                </div>
            </div>
        </footer>
    </section>

<?php } ?>
<!--  Scripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
<script src="../js/admin.cal.init.js"></script>

</body>