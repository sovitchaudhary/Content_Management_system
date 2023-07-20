<?php
include "header.php";
?>
<body>
    <nav class="blue-grey">
        <div class="nav-wrapper">
            <div class="container">
                <a href="dashboard.php" class="brand-logo center">Aristo</a>
                <a href="#" data-target="sidenav" class="sidenav-trigger" data-activates="sidenav">
                    <i class="material-icons">menu</i>
                </a>
            </div>
        </div>
    </nav>

    <ul class="sidenav sidenav-fixed" id="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="../assets/images/ubg.jpg" alt="" class="responsive-img">
                </div>
                <a href=""> <img src="../assets/images/user.jpeg" alt="" class="circle"> </a>
                <span class="name white-text"> <?php echo $_SESSION['username']; ?> </span>
                <span class="email white-text">
                    <?php
                        $user = $_SESSION['username'];
                        $sql = "select email from users where username='$user'"; 
                        $res = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_assoc($res);
                        echo $row['email'];
                    ?>
                </span>
            </div>
        </li>
        <li>
            <a href="dashboard.php"><i class="fa fa-home blue-text" style="font-size:20px;"></i>Dashboard</a>
        </li>
        <li>
            <a href="post.php"><i class="fa fa-pencil-square-o black-text" style="font-size:18px;"></i>Posts</a>
        </li>
        <li>
            <a href=""><i class="fa fa-file-image-o green-text" style="font-size:18px;"></i>Images</a>
        </li>
        <li>
            <a href=""><i class="fa fa-comments-o blue-text" style="font-size:18px;"></i>Comments</a>
        </li>
        <li>
            <a href=""><i class="fa fa-cog black-text" style="font-size:18px;"></i> Setting</a>
        </li>
        <div class="divider">

        </div>
        <li>
            <a href=""><i class="fa fa-sign-out red-text" style="font-size:18px;"></i>Logout</a>
        </li>
    </ul>