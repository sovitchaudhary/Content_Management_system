<?php
include "includes/navbar.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($conn, $id);
    $id = htmlentities($id);

    $sql = "SELECT * FROM posts WHERE id = $id";
    $res = mysqli_query($conn,$sql);

    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);

    ?>
        <div class="main">
            <form action="edit_check.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data" >
                <div class="card-panel">
                    <?php
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                    <h5>Title</h5>
                    <textarea name="title" class="materialize-textarea" placeholder="Title"><?php echo $row['title']; ?>
                    </textarea>
                    <h5>Content</h5>
                    <textarea name="ckeditor" id="ckeditor" class="ckeditor">
                        <?php echo $row['content']; ?>
                    </textarea>
                    <br>
                    <div class="center">
                        <input type="submit" value="Update" name="update" class="btn white-text">
                    </div>
                </div>
            </form>
        </div>

    <?php
    } else {
        header("Location: dashboard.php");
    }
}
?>
<script type="text/javascript" src="../assets/js/ckeditor/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#ckeditor'));


        </script>
<?php
include "includes/footer.php";
?>
 