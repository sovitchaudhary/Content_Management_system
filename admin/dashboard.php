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
                                <span><a href=""> <i class="material-icons tiny black-text">edit</i> Edit</a> | <a href=""><i
                                            class="fa fa-trash-o red-text"></i> Delete</a> | <a href=""> <i
                                            class="material-icons tiny green-text">share</i> Share</a></span>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <!-- Recents comments -->
            <div class="col l6 m6 s12">
                <ul class="collection with-header">
                    <li class="collection-header blue-grey">
                        <h5 class="white-text">Recent Comments</h5>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href="">
                                <i class="fa fa-check green-text"></i> Approve</a> | <a href=""><i
                                    class="fa fa-times red-text"></i> Remove</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href="">
                                <i class="fa fa-check green-text"></i> Approve</a> | <a href=""><i
                                    class="fa fa-times red-text"></i> Remove</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href="">
                                <i class="fa fa-check green-text"></i> Approve</a> | <a href=""><i
                                    class="fa fa-times red-text"></i> Remove</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href="">
                                <i class="fa fa-check green-text"></i> Approve</a> | <a href=""><i
                                    class="fa fa-times red-text"></i> Remove</a></span>
                    </li>
                    <li class="collection-item">
                        <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </a>
                        <br>
                        <span><a href="">
                                <i class="fa fa-check green-text"></i> Approve</a> | <a href=""><i
                                    class="fa fa-times red-text"></i> Remove</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="fixed-action-btn">
        <a href="write.php" class="btn-floating btn btn-large white-text pulse">
            <i class="material-icons">edit</i>
        </a>
    </div>


<?php
include "includes/footer.php";
} else {
    $_SESSION['message'] = "<div class='chip red black-text'> Login To Continue</div>";
    header("Location: login.php");
}
?>