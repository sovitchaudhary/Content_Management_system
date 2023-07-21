<?php
include "includes/header.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($conn,$id);
    $id = htmlentities($id);

    $sql = "UPDATE comments SET status=1 where id=$id";
    $res = mysqli_query($conn,$sql);
    if ($res) {
        echo "<div class='chip green white-text'> Comment Approved</div>";
    }else {
        echo "<div class='chip red black-text'>Sorry, Something went wrong.</div>";
    }
}
?>