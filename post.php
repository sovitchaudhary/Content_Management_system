<?php
    include "includes/header.php";
?>
        

<?php
    include "includes/navbar.php";
?>

<div class="row">
    <!-- Main post -->
    <div class="col l9 m9 s12">
        <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $id = mysqli_real_escape_string($conn,$id);
                $id = htmlentities($id);

                $sql = "select * from posts where id=$id";
                $res = mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)>0) {
                    $row = mysqli_fetch_assoc($res);
                    $title = $row['title'];
                    $content = $row['content'];

                ?>
                <h5><?php echo $title; ?></h5>
                <div class="card-panel">
                    <p class="flow-text"><?php echo $content; ?></p>
                </div>

                <?php

                }else {
                    header("LOcation: index.php");
                }
            } 
         ?>
    </div>
    
    <!-- sidebar area -->
    <div class="col l3 m3 s12">
    <?php 
        include "includes/sidebar.php"; 
    ?>
    </div>

    <!-- blog area -->
    <div class="col l12 m12 s12">

    </div>
</div>

<?php
    include "includes/footer.php";
?>