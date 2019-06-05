<html>
<head>
    <title>Zenzicoach Mail-Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

<div class="container">
    <h3 class="text-center">Zenzicoach Email</h3>

    <div class="">
        <div class="">
            <!--Form-->
            <form action="../SendGrid-API/send-email.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="message" placeholder="message">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="../js/admin.init.js"></script>
</body>
</html>