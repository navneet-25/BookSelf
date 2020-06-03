<?php 
    include "include/config.php";
    $query = "SELECT * FROM category";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){ 
        echo "<li class='nav-item'>
            <p style='cursor: pointer;' class='nav-link' data-nid={$row['cat_id']} id='nav-link'>{$row['cat_name']}</p>
        </li>";
    } 
?>