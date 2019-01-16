<?php

if (isset($_POST['submit'])) {

        include_once 'dbh.inc.php';

        $first       = mysqli_real_escape_string($conn, $_POST['first']);
        $last         = mysqli_real_escape_string($conn, $_POST['last']);
        $age         = mysqli_real_escape_string($conn, $_POST['age']);
        $email       = mysqli_real_escape_string($conn, $_POST['email']);
        $tel           = mysqli_real_escape_string($conn, $_POST['tel']);
        $problem   = mysqli_real_escape_string($conn, $_POST['problem']);
        $question = mysqli_real_escape_string($conn, $_POST['question']);
        $date         = mysqli_real_escape_string($conn, $_POST['date']);

        //Error check

        //Lege velden checken
        if (empty($first) || empty($last)|| empty($age)|| empty($email)|| empty($tel)|| empty($problem)|| empty($date)) {
            header("Location: ../form.php?form=empty");
            exit();
        } else {
            //Check de characters uit input
            if (!preg_match("/^[a-zA-Z ]*$/", $first) || !preg_match("/^[a-zA-Z ]*$/", $last)) {
                header("Location: ../form.php?form=invalid");
                exit();
            } else {
                //Check of de email valide is
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../form.php?form=email");
                    exit();
                } else {
                    $sql = "INSERT INTO users (user_first, user_last, user_age, user_email, user_tel, user_problem, user_question,user_date) VALUES ('$first', '$last', '$age', '$email','$tel', '$problem', '$question', '$date')";
                    mysqli_query($conn, $sql);
                    header("Location: ../formsucces.php");
                    exit();
                }
            }
        }

    } else {
    header("Location: ../form.php");
    exit();
}