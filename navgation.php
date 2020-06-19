<?php 
    include "include/config.php";
    $query = "SELECT * FROM category";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){ 
        if($row['cat_name'] == "Novel"){
            $src = "novic.png";
        }else if($row['cat_name'] == "Medical"){
            $src = "medic.png";
        }else if($row['cat_name'] == "Enginering"){
            $src = "engic.png";
        }else if($row['cat_name'] == "Ncert"){
            $src = "ncertic.png";
        }else if($row['cat_name'] == "Prepration"){
            $src = "civic.png";
        }else{
            $src = "elseic.png";
        }
        echo "<li class='nav-item'>
            <p style='cursor: pointer;' class='nav-link' data-nid={$row['cat_id']} id='nav-link'><img src='img/category/{$src}' style='width:auto; height:26px; margin-right:5px;'>{$row['cat_name']}</p>
        </li>";
    } 
?>