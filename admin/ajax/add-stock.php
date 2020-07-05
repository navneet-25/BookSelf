<?php 
    include "../../include/config.php";

    $id = $_POST['id'];
    $stock = $_POST['stock'];

$query = "UPDATE books SET total_stock = total_stock + {$stock}, stock = stock + {$stock} WHERE book_id = {$id}";

if(mysqli_query($conn, $query)){
    echo 1;
}else{
    echo mysqli_error();
}


?>