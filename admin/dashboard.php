<?php
include "includes/navbar.php";

if (isset($_SESSION['username'])) {

    ?>

    <!-- Main content -->
    <div class="main">
        <div class="row">
            <div class="col l6 m6 s12">
                <ul class="collection with-header">
                    <li class="collection-header blue-grey">
                        <h5 class="white-text">Recent Posts</h5>
                        <span id="message"></span>
                    </li>
                    <?php
                    $sql = "select * from posts order by id desc";
                    $res = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {

                            ?>
                            <li class="collection-item">
                                <a href="">
                                    <?php echo $row['title']; ?>
                                </a>
                                <br>
                                <span><a href="edit_post.php?id=<?php echo $row['id']; ?>"> <i
                                            class="material-icons tiny black-text">edit</i> Edit</a> | <a href=""
                                        id="<?php echo $row['id']; ?>" class="delete"><i class="fa fa-trash-o red-text"></i>
                                        Delete</a> | <a href=""> <i class="material-icons tiny green-text">share</i>
                                        Share</a></span>
                            </li>
                            <?php
                        }
                    } else {

                        echo "<div class='chip red white-text'> You have No Posts yet, Click down bellow circular button</div>";
                    }
                    ?>
                </ul>
            </div>
            <!-- Recents comments -->
            <div class="col l6 m6 s12">
                <ul class="collection with-header">
                    <li class="collection-header blue-grey">
                        <h5 class="white-text">Recent Comments</h5>
                        <span id="message1"></span>
                    </li>
                    <?php
                    $sql5 = "SELECT * FROM comments ORDER BY id DESC";
                    $res5 = mysqli_query($conn, $sql5);
                    if (mysqli_num_rows($res5) > 0) {
                        while ($row = mysqli_fetch_assoc($res5)) {
                            ?>
                            <li class="collection-item">
                                <?php echo $row['comment_text']; ?>
                                <span class="secondary-content">
                                    <?php echo $row['email']; ?>
                                </span>
                                <br>
                                <span>
                                    <a href="" class="approve" id="<?php echo $row['id']; ?>" ><i class="fa fa-check green-text"></i> Approve</a>
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

    <div class="fixed-action-btn">
        <a href="write.php" class="btn-floating btn btn-large white-text pulse">
            <i class="material-icons">edit</i>
        </a>
    </div>

    <script>
        const approv = document.querySelectorAll(".approve");
        approv.forEach(function (item, index) {
            item.addEventListener("click", approvNow);
        });

        function approvNow(e) {
            e.preventDefault();
            if (confirm("Do you really want to Approve?")) {
                const xhr = new XMLHttpRequest();
                xhr.open("GET", "approv.php?id=" + Number(e.target.id), true);
                xhr.onload = function () {
                    const messg = xhr.responseText;
                    const message = document.getElementById("message1");
                    message.innerHTML = messg;
                }
                xhr.send();
            }
        }
    </script>
    <script>
        const del = document.querySelectorAll(".delete");
        del.forEach(function (item, index) {
            item.addEventListener("click", deleteNow);
        });

        function deleteNow(e) {
            e.preventDefault();
            if (confirm("Do you really want to delete?")) {
                const xhr = new XMLHttpRequest();
                xhr.open("GET", "delete_post.php?id=" + Number(e.target.id), true);
                xhr.onload = function () {
                    const messg = xhr.responseText;
                    const message = document.getElementById("message");
                    message.innerHTML = messg;
                }
                xhr.send();
            }
        }
    </script>


    <?php
    include "includes/footer.php";
} else {
    $_SESSION['message'] = "<div class='chip red black-text'> Login To Continue</div>";
    header("Location: login.php");
}
?>