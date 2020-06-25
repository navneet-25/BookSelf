<?php

    include "../../include/config.php";

    $change = $_POST['changeid'];

    $getid = $_POST['id'];
    
    $query1 = "UPDATE pending_order SET status = {$change}  WHERE id = {$getid}";

    if(mysqli_query($conn, $query1)){
        echo 1;
    }


    ?>