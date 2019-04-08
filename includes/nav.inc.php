<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link type="text/css" rel="stylesheet" href="../css/materialize/css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
<section id="navigation">
    <nav>
        <div class="nav-wrapper white">
            <a href="index.php" class="brand-logo grey-text darken-2 center"><span class="grey-text text-darken-2">ZENZI</span><span style="color: #64918C">COACH</span></a>
            <a data-target="slide-out" style="display: block" class="sidenav-trigger"><i style="color: black" class="material-icons ">menu</i></a>
        </div>
    </nav>

    <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
            <div class="background" style="background-color: #ffcfce"></div>
            <a href=""><img class="circle" src="img/logo/Pasfoto-Janine-150x150.jpg"></a>
            <a href=""><span class="white-text name">Janine Kruf</span></a>
            <a href=""><span class="white-text email">info@zenzicoach.nl</span></a>
        </div></li>
        <?php
                if (isset($_SESSION['a_username'])){?>
                    <li><a class="subheader">Welkom <?php echo $_SESSION['a_username']?></a></li>
                    <li><a class="subheader">Administrator</a></li>
                    <li><a href="admin/zenzipanel.php">Zenzipanel</a></li>
                    <li><a href="admin/zenzical.php">ZenziCalender</a></li>
                    <li><a class="subheader">Homepage</a></li>
        <?php } else { ?>
        <li><a class="subheader">Homepage</a></li>
        <?php }?>
        <li><a href="index.php">Welkom</a></li>
        <li><a href="verhaal.php">Mijn verhaal</a></li>
        <li><a href="form.php">Reserveren</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Informatie</a></li>
        <li><a class="waves-effect" href="werkwijze.php">Werkwijze</a></li>
        <li><a class="waves-effect" href="reiki.php">Reiki</a></li>
        <li><a class="waves-effect" href="italy.php">Italië</a></li>
        <li><a class="waves-effect" href="photo.php">Foto's</a></li>
        <li><a class="waves-effect" href="costs.php">Tarieven</a></li>
        <li><a class="waves-effect" href="contact.php">Contact</a></li>
        <li><a class="subheader">Admin</a></li>
        <li><a class="waves-effect" href="login.php">Login</a></li>

    </ul>
</section>
</body>
</html>