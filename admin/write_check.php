<?php
include "includes/header.php";

if (isset($_POST['publish'])) {
    $title = $_POST['title'];
    $title = mysqli_real_escape_string($conn, $title);
    $title = htmlentities($title);

    $data = $_POST['ckeditor'];
    $data = mysqli_real_escape_string($conn, $data);
    $data = htmlentities($data);

    // $author = $_POST['author'];
    // $author = mysqli_real_escape_string($conn, $author);
    // $author = htmlentities($author);

    // $image = $_POST['image'];
    // $image = mysqli_real_escape_string($conn, $image);
    // $image = htmlentities($image);



    // echo "Title: " . $title . "<br>";
    // echo "Data: " . $data . "<br>";

    $sql = "INSERT INTO `posts`(`title`, `content`) VALUES ('$title','$data')";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        header("Location: write.php");
        $_SESSION['message'] = "<div class='chip green white-text'> Post in Published </div>";
    } else {
        header("Location: write.php");
        $_SESSION['message'] = "<div class='chip red black-text'> Sorry, Something went wrong. </div>";
    }
}
?>