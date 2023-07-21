<?php
include "includes/navbar.php";
?>

<div class="main">
    <div class="card-panel">
        <h5 class="center">Change Password</h5>
        <?php
        if ($_SESSION['message']) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>
        <form action="setting.php" method="POST">
            <input type="password" name="password" placeholder="New Password">
            <input type="password" name="con_password" placeholder="Conform Password">
            <div class="center">
                <input type="submit" name="update" value="submit" class="btn">
            </div>
        </form>
    </div>
</div>

<?php
include "includes/footer.php";
?>
<?php
if (isset($_POST['update'])) {
    $password = $_POST['password'];
    $password = mysqli_real_escape_string($conn, $password);
    $password = htmlentities($password);

    $con_password = $_POST['con_password'];
    $con_password = mysqli_real_escape_string($conn, $con_password);
    $con_password = htmlentities($con_password);

    if ($con_password === $password) {
        $username = $_SESSION['username'];
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "UPDATE users SET password='$password' WHERE username='$username'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $_SESSION['message'] = "<div class='chip green white-text'> Password Successfully Changed.</div>";
            header("Location: setting.php");
        } else {
            $_SESSION['message'] = "<div class='chip red black-text'> Sorry, Something went wrong, Try Again.</div>";
            header("Location: setting.php");
        }

    } else {
        $_SESSION['message'] = "<div class='chip red black-text'> Password donot Match.</div>";
        header("Location: setting.php");
    }
}
?>