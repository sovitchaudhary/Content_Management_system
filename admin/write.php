<?php
include "includes/navbar.php";

if (isset($_SESSION['username'])) {

    ?>

    <div class="main">
        <form action="write_check.php" method="POST" enctype="multipart/form-data">
            <div class="card-panel">
                <?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?>
                <h5>Title</h5>
                <textarea name="title" class="materialize-textarea" placeholder="Title"></textarea>
                <h5>Content</h5>
                <textarea name="ckeditor" id="ckeditor" class="ckeditor"></textarea>
                <div class="center">
                    <input type="submit" value="Publish" name="publish" class="btn white-text">
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="../assets/js/ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditor'));


    </script>
    <?php
    include "includes/footer.php";
} else {
    $_SESSION['message'] = "<div class='chip red black-text'> Login To Continue</div>";
    header("Location: login.php");
}
?>