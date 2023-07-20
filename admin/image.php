<?php
include "includes/navbar.php";

$dir = "../assets/images/";
$files = scandir($dir);
if ($files) {
    ?>
    <div class="main">
        <div class="row">

            <?php
            foreach ($files as $file) {
                if (strlen($file)>2) {

                    ?>
                    <div class="col l2 m3 s6">
                        <div class="card">
                            <div class="card-image">
                                <img src="../assets/images/<?php echo $file; ?>" alt="" style="height:150px; width: 200px; margin: 2px; " >
                                <span class="card-title">
                                    <?php echo $file; ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }
}
?>
    </div>
</div>

<?php
include "includes/footer.php";
?>