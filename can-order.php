<?php

include "include/config.php";

$oid = $_POST['id'];

$run = mysqli_query($conn, "DELETE FROM pending_order WHERE id = {$oid}");

if($run){
    echo 1;
}else{
    mysqli_error();
}


?>