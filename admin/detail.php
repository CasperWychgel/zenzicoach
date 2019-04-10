<?php
// redirect when uri does not contain a id
if(!isset($_GET['id'])) {
    // redirect to zenzipanel.php
    header('Location: zenzipanel.php');
    exit;
}

session_start();
//Require database in this file
require_once "../includes/dbh.inc.php";

//Retrieve the GET parameter from the 'Super global'
$userid = $_GET['id'];

//Get the record from the database result
$query = "SELECT * FROM users WHERE id = " . mysqli_escape_string($conn, $userid);
$result = mysqli_query($conn, $query)
    or die ('Error: ' . $query );

if(mysqli_num_rows($result) == 1)
{
    $client = mysqli_fetch_assoc($result);
}
else {
    // redirect when db returns no result
    header('Location: zenzipanel.php');
    exit;
}

//Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zenzicoach Detail-Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="../css/style.min.css">
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
            <h1 class="centeredtext center-align teal-text text-lighten-2">Cliënt Informatie</h1>
        </div>
    </section>

<section id="textinfo">
    <div class="section white">
        <div class="row container">
            <h3 class=" center-align grey-text text-darken-3 lighten-3"><?= $client['user_first'] . ' ' . $client['user_last']; ?></h3>
            <p class="flow-text center-align grey-text text-darken-3 lighten-3">
                <?= $client['user_first']; ?> heeft een reservering geplaatst voor <?= $client['user_date']; ?><br><br>
                Leeftijd: <?= $client['user_age']; ?><br>
                Email: <a href="mailto:<?= $client['user_email']; ?>?Subject=<?= $client['user_problem']; ?>" target="_top"><?= $client['user_email']; ?></a> <br>
                Tel: <a href="tel:<?= $client['user_tel']; ?>"><?= $client['user_tel']; ?></a><br>

            </p>
            <h4 class=" center-align grey-text text-darken-3 lighten-3">Probleem:</h4>
            <p class="flow-text center-align grey-text text-darken-3 lighten-3">
                <?= $client['user_problem']; ?>
            </p>
            <h4 class=" center-align grey-text text-darken-3 lighten-3">Overige vragen/opmerkingen:</h4>
            <div class="center-align">
                <form method="post" action="detail.php">
                <input type="text" class="grey-text center-align text-darken-3 lighten-3" id="<?= $client['id']; ?>" value="<?= $client['user_question']; ?>">
                <br><br>
                </form>
                <br><br>

                <a class="btn waves-effect waves-light grey darken-3" href="zenzipanel.php" >Zenzipanel</a>
            </div>

        </div>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="../js/admin.init.js"></script>

</body>
