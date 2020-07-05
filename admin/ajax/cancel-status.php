<?php

    include "../../include/config.php";

     $change = $_POST['changeid'];

     $getid = $_POST['id'];

     $query2 = "UPDATE cancel_orders SET can_status = '{$change}'  WHERE order_id = {$getid}";

    if(mysqli_query($conn, $query2)){
        echo 1;
    } 


    ?>