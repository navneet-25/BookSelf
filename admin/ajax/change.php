<?php

    include "../../include/config.php";

    $change = $_POST['changeid'];

    $getid = $_POST['id'];

    $query3 = "SELECT * FROM pending_order WHERE id = {$getid}";
    $run = mysqli_fetch_object(mysqli_query($conn, $query3));

    if($change == 3){
        $query1 = "UPDATE pending_order SET status = {$change}  WHERE id = {$getid};";
        $query1 .= "INSERT INTO deliveryi(del_id) VALUES({$run->id})";
        $run2 = mysqli_multi_query($conn, $query1);
        echo 1;
    }else{
    $query2 = "UPDATE pending_order SET status = {$change}  WHERE id = {$getid}";
    
    if(mysqli_query($conn, $query2)){
        echo 1;
    }
}


    ?>