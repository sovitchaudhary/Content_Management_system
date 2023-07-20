<?php
include "includes/navbar.php";

$dir = "../assets/images/";
$files = scandir($dir);
if ($files) {
    ?>
    <div class="main">
        <div class="row">

            <?php
            foreach($files as $file){

                ?>
                <div class="col l2 m3 s4">
                    <div class="card">
                        <div class="card-image">
                            <img src="../assets/images/<?php echo $file; ?>" alt="">
                            <span class="card-title"><?php echo $file; ?></span>
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
include "includes/footer.php";
?>