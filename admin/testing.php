<?php

include "../include/config.php";

$query1 = "SELECT * FROM pending_order JOIN users ON pending_order.user = users.user_id JOIN addresses ON pending_order.address = addresses.add_id WHERE status = 4 ORDER BY id DESC";
                    
                    $run = mysqli_query($conn, $query1) or die("ok PROB");


                    if(mysqli_num_rows($run)){
                        while($rows = mysqli_fetch_object($run)){

                            echo  $rows->id . "<br>";

                            /* $query2 = "SELECT * FROM deliveryi WHERE del_id = {$ids}";
                            $result1 = mysqli_query($conn, $query2) or die("haveing prob");
                            $rows2 = mysqli_fetch_assoc($result1); */
                        }
                    }



    ?>