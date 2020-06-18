<?php include "include/config.php";
    session_start();
    $userid = $_SESSION['id'];
    
    $run = mysqli_query($conn, "SELECT * FROM orders WHERE user_id = {$userid}");
    $row = mysqli_num_rows($run);

        echo $row;                
                    
?>