<?php
  include "header.php";  
?>
<ul class="collection">
    <li class="collection-item">
        <h5>Search</h5>
        <form action="search.php" method="GET" >
            <div class="input-field">
                <input type="text" id="search" name="search" placeholder="search anything..">
                <div class="center">
                    <input type="submit" class="btn blue-grey" value="search" name="submit" >
                </div>

            </div>
        </form>
    </li>
</ul>


<div class="collection with-header">
    <h5 style="padding-left: 20px;">Trending Blogs</h5>
    <?php
    $sql = "SELECT * FROM posts ORDER BY view DESC LIMIT 5";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
       while ($row = mysqli_fetch_assoc($res)) {
        ?>
        <a href="post.php?id=<?php echo $row['id']; ?>" class="collection-item grey lighten-3">
        <?php echo $row['title']; ?>
    </a>
        <?php
       } 
    }
    ?>
</div>
</div>