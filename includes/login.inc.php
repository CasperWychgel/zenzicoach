<?php

session_start();

if (isset($_POST['submit'])){

    include 'dbh.inc.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //error handler

    if (empty($username) || empty($password)) {
        header("Location: ../index.php?login=empty");
        exit();
    } else {

        $sql = "SELECT * FROM admin WHERE admin_username='$username'";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck < 1){
            header("Location: ../mobile table-checkbox fix.html?login=error");
            exit();
        } else{
            if ($row = mysqli_fetch_assoc($result)) {
                // De-hashing password
                $hashedpasswordcheck = password_verify($password, $row['admin_password']);
                if ($hashedpasswordcheck == false) {
                    header("Location: ../mobile table-checkbox fix.html?login=wrongpassword");
                    exit();
                } elseif ($hashedpasswordcheck == true) {
                    //login admin
                    $_SESSION['a_username'] = $row['admin_username'];
                    $_SESSION['a_password'] = $row['admin_password'];
                    header("Location: ../admin/zenzipanel.php?login=succes");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../mobile table-checkbox fix.html?login=failed");
    exit();
}
