<?php

$dbservername = "sql.hosted.hr.nl";
$dbusername = "0944456";
$dbpassword = "aachiehe";
$dbname = "0944456";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname)
or die("connection failed: " . mysqli_connect_error());