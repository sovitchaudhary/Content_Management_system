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
                $sql2 = "SELECT view FROM posts WHERE id=$id";
                $res2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($res2);
                $views = $row2['view'];
                $views = $views + 1;
                $sql3 = "UPDATE posts SET view=$views WHERE id=$id";
                mysqli_query($conn, $sql3);

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

                    <!-- comments area -->
                    <div class="card-panel">
                        <div class="row">
                            <div class="col l6 offset-l3 m8 offset-m2 s12">
                                <h5>Write Comment</h5>
                                <?php
                                if (isset($_SESSION['message'])) {
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                }
                                ?>
                                <form action="post.php?id=<?php echo $id; ?>" method="POST">
                                    <div class="input-field">
                                        <input type="email" name="email" id="email" placeholder="Enter Email" class="validate"
                                            required>
                                        <div class="error-message" id="email-error" style="display: none; color: red;">Invalid
                                            Email Format
                                        </div>
                                        <div class="success-message" id="email-success" style="display: none; color: green;">
                                            Valid Email
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <textarea name="comment" id="" cols="30" rows="10" class="materialize-textarea"
                                            placeholder="Your comment type here ..."></textarea>
                                    </div>
                                    <div class="center">
                                        <input type="submit" value="comment" name="submit" class="btn">
                                    </div>
                                </form>
                                <h5>Comments</h5>
                                <ul class="collection">
                                    <?php
                                    $sql5 = "SELECT * FROM comments WHERE post_id=$id AND status=1 ORDER BY id DESC";
                                    $res5 = mysqli_query($conn, $sql5);
                                    if (mysqli_num_rows($res5) > 0) {
                                        while ($row = mysqli_fetch_assoc($res5)) {
                                            ?>
                                            <li class="collection-item">
                                                <?php echo $row['comment_text']; ?>
                                                <span class="secondary-content">
                                                    <?php echo $row['email']; ?>
                                                </span>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>


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
                                            <img src="assets/images/<?php echo $row['feature_img'] ?>"
                                                style="height: 150px; overflow: hidden;">
                                        </div>
                                        <div>
                                            <span class="card-title blue-text truncate">
                                                <?php echo ucfirst($row['title']); ?>
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
<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $id = $_GET['id'];
    $email = mysqli_real_escape_string($conn, $email);
    $email = htmlentities($email);
    $comment = mysqli_real_escape_string($conn, $comment);
    $comment = htmlentities($comment);
    $id = mysqli_real_escape_string($conn, $id);
    $id = htmlentities($id);

    $sql4 = "INSERT INTO comments (email,post_id,comment_text) VALUES('$email',$id,'$comment')";
    $res4 = mysqli_query($conn, $sql4);
    if ($res4) {
        header("Location: post.php?id=$id");
        $_SESSION['message'] = "<div class='chip green white-text'> Comment Added Successfully</div>";
    } else {
        header("Location: post.php?id=$id");
        $_SESSION['message'] = "<div class='chip red black-text'> Sorry, Something went wrong.</div>";
    }
}
?>