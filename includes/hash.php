<?php
$password = "testing";
$hashing = password_hash($password, PASSWORD_DEFAULT);
echo $hashing;