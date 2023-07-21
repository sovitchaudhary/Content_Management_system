<?php
include "includes/header.php";
include "includes/navbar.php";

if (isset($_GET['submit'])) {
    $q = $_GET['search'];
    $q = mysqli_real_escape_string($conn, $q);
    $q = htmlentities($q);

    if (!empty($q)) {
        $sql = "SELECT * FROM posts WHERE title LIKE '$q' OR content LIKE '$q' OR title LIKE '%$q%' OR content LIKE '%$q%'";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
            ?>
            <div class="row">
                <div class="col l9 m9 s12">
                    <?php
                    while ($row = mysqli_fetch_assoc($res)) {

                        ?>
                        <div class="col l3 m4 s6">
                            <div class="card small">
                                <div class="card-image">
                                    <img src="assets/images/<?php echo $row['feature_img'] ?>">
                                    <span class="card-title purple-text truncate">
                                        <?php echo $row['title']; ?>
                                    </span>
                                </div>
                                <div class="card-content truncate" style="height: 150px; overflow: hidden;">
                                    <?php echo $row['content']; ?>
                                </div>
                                <div class="card-action blue-grey lighten-4 center">
                                    <a href="post.php?id=<?php echo $row['id'] ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="col l3 m3 s12">
                    <?php include "includes/sidebar.php"; ?>
                </div>
            </div>
            <?php
        } else {
            echo "<h5>Sorry No data found by given Search, Try Again.</h5>";
        }
    } else {
        echo "<h5>Please enter a search item and try again.</h5>";
    }
} else {

    header("Location: index.php");
}
?>