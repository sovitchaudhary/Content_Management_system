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
            $id = mysqli_real_escape_string($conn, $id);
            $id = htmlentities($id);

            $sql = "select * from posts where id=$id";
            $res = mysqli_query($conn, $sql);
            if (mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                $title = $row['title'];
                $content = $row['content'];

                ?>
                <div class="card-panel">
                    <h5 class="center">
                        <?php echo ucwords($title); ?>
                    </h5>
                    <p class="flow-text">
                        <?php echo ucfirst($content); ?>
                    </p>
                    <h5>Related Blogs</h5>
                    <div class="row">
                        <?php
                        $sql = "select * from posts order by rand() limit 4";
                        $res = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {

                                ?>
                                <div class="col l3 m4 s6">
                                    <div class="card small">
                                        <div class="card-image">
                                            <img src="assets/images/<?php echo $row['feature_img'] ?>">
                                            <span class="card-title pink-text truncate">
                                                <?php echo $row['title']; ?>
                                            </span>
                                        </div>
                                        <div class="card-content" style="height: 150px; overflow: hidden;">
                                            <?php echo $row['content']; ?>
                                        </div>
                                        <div class="card-action blue-grey lighten-4 center">
                                            <a href="post.php?id=<?php echo $row['id'] ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php

            } else {
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


</div>

<?php
include "includes/footer.php";
?>