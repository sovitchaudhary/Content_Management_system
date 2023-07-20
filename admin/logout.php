<?php
include "includes/header.php";

if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    $_SESSION['message'] = "<div class='chip green white-text'> You are successfully logout.</div>";
    header("Location: login.php");
}else {
    header("Location: login.php");
}
?>