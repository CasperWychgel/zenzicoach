<?php
if (!isset($_SESSION['a_username'])){
    header("Location: ../index.php");
    exit();
}