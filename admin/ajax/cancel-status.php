<?php

    include "../../include/config.php";

     $change = $_POST['changeid'];

     $getid = $_POST['id'];

     $query2 = "UPDATE deliveryi SET ret_status = '{$change}'  WHERE del_id = {$getid}";

    if(mysqli_query($conn, $query2)){
        echo 1;
    } 


    ?>