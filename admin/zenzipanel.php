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
    <title>Zenzicoach Admin-Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <h1 class="adminintro center-align teal-text text-lighten-2">Zenzipanel</h1>
        </div>
    </section>

<section class="">
            <form method="post" action="delete.php" id="checkdelete">
                <div style="overflow-x:auto;">
                    <table id="customer" class="centered highlight ">
                    <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Leeftijd</th>
                        <th>Email</th>
                        <th>Telefoon</th>
                        <!--<th>Probleem</th>
                        <th>Vraag</th>-->
                        <th>Datum</th>
                        <th>
                            <button class="btn waves-effect waves-light grey darken-3" type="submit" name="submit" onclick="return confirm('Weet u zeker dat u deze klant(en) wilt verwijderen?')">Verwijder
                                <i class="material-icons right">delete</i>
                            </button>
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    while ($row = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td> <?php echo  $row['id'] ?> </td>
                        <td> <?php echo $row['user_first'] ?> </td>
                        <td> <?php echo $row['user_last'] ?> </td>
                        <td> <?php echo $row['user_age'] ?> </td>
                        <td> <?php echo $row['user_email'] ?> </td>
                        <td> <?php echo $row['user_tel'] ?> </td>
                       <!--<td> <?php// echo $row['user_problem'] ?> </td>
                        <td> <?php// echo $row['user_question'] ?> </td>-->
                        <td> <?php echo $row['user_date'] ?> </td>
                        <td>
                            <label>
                                <input type="checkbox" name="checkdelete[]" id="checkdelete" value=" <?php echo $row['id'] ?> " />
                                <span></span>
                            </label>
                        </td>
                        <td>
                            <a class="btn waves-effect waves-light grey darken-3" href="detail.php?id= <?php echo $row['id'] ?> " >Details</a>
                        </td>
                        <td>
                            <a class="btn waves-effect waves-light grey darken-3" onclick="return confirm('Weet u zeker dat u deze klant(en) een herinnerings email wilt sturen?')" >Mail</a>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                </div>
            </form>
</section>

    <section id="outro" class="backgroundtheme" style="height: inherit">

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