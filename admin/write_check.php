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

    $image = $_FILES['image'];
    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $img_dir = $_FILES['image']['tmp_name'];
    $type = $_FILES['image']['type'];

    if ($type == "image/jpeg" || $type == "image/png" || $type == "image/jpg") {
        if ($img_size <= 2097152) {

            move_uploaded_file($tmp_dir,"../assets/images/".$img_name);

            $sql = "INSERT INTO `posts`(`title`, `content`,`feature_img`) VALUES ('$title','$data','$img_name')";

            $res = mysqli_query($conn, $sql);

            if ($res) {
                header("Location: write.php");
                $_SESSION['message'] = "<div class='chip green white-text'> Post in Published </div>";
            } else {
                header("Location: write.php");
                $_SESSION['message'] = "<div class='chip red black-text'> Sorry, Something went wrong. </div>";
            }
        }
        else {
            header("Location: write.php");
            $_SESSION['message'] = "<div class='chip red black-text'> Sorry, Image size exceded 2mb.</div>";  
        }
    }
    else {
        header("Location: write.php");
                $_SESSION['message'] = "<div class='chip red black-text'> Sorry, Image format is not Supported. </div>";
    }
}

?>