<?php
if (!isset($_SESSION['a_username'])){
    header("Location: ../index.php");
=======
    header("Location: ../index.php?login=unauthorised");
>>>>>>> a6ce16e42cd8d9b327d55860b2e82aa6e931f123
    exit();
}