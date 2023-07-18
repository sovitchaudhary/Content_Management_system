<?php
include "includes/header.php";
include "includes/navbar.php";
?>

<form action="write.php" method="POST">
    <textarea name="ckeditor" id="ckeditor" cols="30" rows="10" class="materialize-textarea"></textarea>
</form>


<script type="text/javascript" src="../assets/js/ckeditor/ckeditor.js"></script>
<?php 
include "includes/footer.php";
?>
