<?php

include "include/config.php";

$bookquant = $_POST['quant'];

$orderid = $_POST['orderid']; 

$query = "SELECT * FROM orders WHERE id = {$orderid}";

$run = mysqli_query($conn, $query) or die("QUERY FAILED");

$reslut = mysqli_fetch_assoc($run);

$total1 = $reslut['book_price'];

$total = $total1 * $bookquant;

$query = "UPDATE orders SET book_quant = {$bookquant}, total = {$total} WHERE id = {$orderid}";

if(mysqli_query($conn, $query)){
    echo 1;
}else{
    echo 0;
}

?>