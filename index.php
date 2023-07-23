<?php
include "includes/header.php";
?>
<?php
include "includes/navbar.php";
?>

<!-- main content -->
<div class="row">
    <div class="col l9 m9 s12">
        <?php
        $sql = "select * from posts order by id DESC";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {

                ?>
                <div class="col l3 m4 s6">
                    <div class="card small">
                        <div class="card-image">
                            <img src="assets/images/<?php echo $row['feature_img'] ?>" style="height: 150px; overflow: hidden;">
                        </div>
                        <div>
                        <span class="card-title blue-text truncate">
                                <?php echo ucfirst($row['title']); ?>
                            </span>
                        </div>
                        <div class="card-content truncate">
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


    <!-- Sidebar -->
    <div class="col l3 m3 s12">
        <?php include "includes/sidebar.php"; ?>
    </div>
</div>
<?php
include "includes/footer.php";
?>