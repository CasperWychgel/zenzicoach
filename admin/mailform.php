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
if (!isset($_SESSION['a_username'])){
    header("Location: ../index.php?login=unauthorised");
    exit();
}
else { ?>

<?php include '../includes/admin.nav.inc.php';?>
    <section id="intro">
        <div class="backgroundtheme">
            <h1 class="centeredtext center-align teal-text text-lighten-2">ZenziMail</h1>
        </div>
    </section>
    <section id="form">
<div class="container">
    <h3 class="text-center center-align">Mailing <?= $client['user_first']; ?></h3>
    <div class="">
        <div class="">
            <!--Form-->
            <form action="../SendGrid-API/send-email.php" method="post">
                <div>
                    <input value="<?= $client['user_email']; ?>" type="email" name="email" hidden>
                    <input value="<?= $client['user_first']; ?>" type="text" name="firstname" hidden>
                    <input value="<?= $client['user_last']; ?>" type="text" name="lastname" hidden>
                    <p>
                        <label>
                            <input value="Janine Kruf" name="admin" type="radio" checked />
                            <span>Janine Kruf</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input value="Igino d'Ippolito" name="admin" type="radio"/>
                            <span>Igino d'Ippolito</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input value="Casper Wychgel" name="admin" type="radio"/>
                            <span>Casper Wychgel</span>
                        </label>
                    </p>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="message" placeholder="Uw bericht aan <?= $client['user_first']; ?>.">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Wilt u deze klant een email sturen?')">Verstuur Email</button>
                </div>
                <br><br>

                <a class="btn waves-effect waves-light grey darken-3" href="zenzipanel.php" >Zenzipanel</a>
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