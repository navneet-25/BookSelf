<?php
include "include/config.php";

$book = $_POST["delete_id"];

$query = "DELETE FROM orders WHERE id = {$book}";

if(mysqli_query($conn, $query)){
    echo 1;
}else{
    echo 0;
}

?>