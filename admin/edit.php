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
if (isset($_POST['submit'])) {


    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $tel = mysqli_real_escape_string($conn, $_POST['tel']);
    $problem = mysqli_real_escape_string($conn, $_POST['problem']);
    $question = mysqli_real_escape_string($conn, $_POST['question']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);


    $sql = "UPDATE users SET user_first='$first', user_last='$last', user_age='$age', user_email='$email', user_tel='$tel', user_problem='$problem', user_question='$question', user_date='$date' WHERE id=$userid";
    mysqli_query($conn, $sql);
    header("Location: ./edit.php?id=$userid");
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
                <form action="" class="col s12" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" name="first" type="text" class="validate" value="<?= $client['user_first']; ?>" placeholder="<?= $client['user_first']; ?>">
                            <label for="first_name"> Voornaam</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" name="last" type="text" class="validate" value="<?= $client['user_last']; ?>" placeholder="<?= $client['user_last']; ?>">
                            <label for="last_name">Achternaam</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="age" name="age" type="number" min="18" max="100" class="validate" value="<?= $client['user_age']; ?>" placeholder="<?= $client['user_age']; ?>">
                            <label for="age">Leeftijd (minimaal achttien jaar oud)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate" value="<?= $client['user_email']; ?>" placeholder="<?= $client['user_email']; ?>">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="tel" name="tel" type="tel" class="validate" value="<?= $client['user_tel']; ?>" placeholder="<?= $client['user_tel']; ?>">
                            <label for="tel">Telefoon</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="text" name="problem" type="text" value="<?= $client['user_problem']; ?>" placeholder="<?= $client['user_problem']; ?>">
                            <label>Waar heb je last van?</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="text2" name="question" type="text" value="<?= $client['user_question']; ?>" placeholder="<?= $client['user_question']; ?>">
                            <label>Overige vraag/ opmerking.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="date" name="date" type="text" class="datepicker" value="<?= $client['user_date']; ?>" placeholder="<?= $client['user_date']; ?>">
                            <label>Wanneer wilt u een afspraak maken?</label>
                        </div>
                    </div>
                    <div>
                        <button class="btn waves-effect waves-light" type="submit" name="submit" onclick="return confirm('Klopt de ingevoerde info?')">Update
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
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