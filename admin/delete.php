<?php

require_once '../includes/dbh.inc.php';

if(!empty($_POST['checkdelete'])) {
    foreach ($_POST['checkdelete'] as $check) {

        $id = $check;

        echo $id;

        $delete = "DELETE FROM users WHERE id = {$id}";

        $query = mysqli_query($conn, $delete);
    }
}

header( "refresh:0;url=zenzipanel.php" );