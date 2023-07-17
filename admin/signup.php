<?php
include "includes/header.php";

if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = mysqli_real_escape_string($conn, $email);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $email = htmlentities($email);
    $username = htmlentities($username);
    $password = htmlentities($password);
    $password = password_hash($password, PASSWORD_BCRYPT);

    $sql1 = "select * from users where email='$email' or username='$username'";
    $res1 = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($res1) > 0) {
        header("Location: login.php");
        $_SESSION['message'] = "Account Already Exists, Please Login To Continue";
    } else {
        $sql = "insert into users(email,username,password) values('$email','$username','$password')";

        $res = mysqli_query($conn, $sql);
        if ($res) {
            header("Location: login.php");
            $_SESSION['message'] = "You are successfully registered.";
        } else {
            header("Location: login.php");
            $_SESSION['message'] = "Sorry Something Went Wrong, Please Signup Again.";
        }
    }

}

?>