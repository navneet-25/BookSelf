<?php

include "include/config.php";

$oid = $_POST['id'];

$run = mysqli_query($conn, "UPDATE pending_order SET status = 4 WHERE id = {$oid}");

if($run){
    echo 1;
}else{
    mysqli_error();
}


?>