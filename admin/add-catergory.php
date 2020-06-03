<?php

    include "../include/config.php";

    $catname = $_POST['category_name'];

    $sql = "INSERT INTO category(cat_name) VALUES ('{$catname}')";

    if(mysqli_query($conn, $sql)){
        header("Location: main.php");
    }else{
        mysqli_error($conn);
    }



?>