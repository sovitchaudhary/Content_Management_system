<?php
include "includes/header.php";

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($conn, $id);
    $id = htmlentities($id);

    $title = $_POST['title'];
    $title = mysqli_real_escape_string($conn, $title);
    $title = htmlentities($title);

    $data = $_POST['ckeditor'];
    $data = mysqli_real_escape_string($conn, $data);

    // $author = $_POST['author'];
    // $author = mysqli_real_escape_string($conn, $author);
    // $author = htmlentities($author);

    // $image = $_POST['image'];
    // $image = mysqli_real_escape_string($conn, $image);
    // $image = htmlentities($image);



    // echo "Title: " . $title . "<br>";
    // echo "Data: " . $data . "<br>";

    $sql = "UPDATE posts SET title='$title', content='$data' where id=$id";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        $_SESSION['message'] = "<div class='chip green white-text'> Post is updated </div>";
        header("Location: edit_post.php?id=$id");

    } else {
        $_SESSION['message'] = "<div class='chip red black-text'> Sorry, Something went wrong. </div>";
        header("Location: edit_post.php?id=$id");
    }
}


?>