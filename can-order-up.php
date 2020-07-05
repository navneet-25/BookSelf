<?php

include "include/config.php";

$oid = $_POST['id'];

$query = "UPDATE pending_order SET status = 4 WHERE id = {$oid};";
$query .= "INSERT INTO cancel_orders(order_id, can_status) VALUES ({$oid}, 0)";


$run = mysqli_multi_query($conn, $query);

if($run){
    echo 1;
}else{
    mysqli_error();
}
?>