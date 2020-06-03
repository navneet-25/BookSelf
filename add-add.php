<?php include "include/config.php";
    session_start();
    $uid = $_SESSION['id'];
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['addressU'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];


    $query = "INSERT INTO `addresses`(`user_id`, `user_name`, `user_email`, `user_phone`, `address_name`, `city`, `zip`, `state`) 
            VALUES ({$uid},'{$name}','{$email}',{$phone},'{$address}','{$city}','{$state}',{$zip});";
    
    if(mysqli_query($conn, $query)){
        echo 1;
    }else{
        echo 0;
    } 
?>