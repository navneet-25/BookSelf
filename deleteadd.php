<?php
include "include/config.php";

$id = $_POST['deleteid'];

$query = "DELETE FROM addresses WHERE add_id = {$id}";

if(mysqli_query($conn, $query)){
    echo 1;
}else{
    echo 0;
}



?>