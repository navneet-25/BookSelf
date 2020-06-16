<?php

    include "include/config.php";
    session_start();
    $userid = $_SESSION['id'];
    
    $run = mysqli_query($conn, "SELECT sum(total) FROM orders WHERE user_id = {$userid}");

    $output = "";

        $row = mysqli_fetch_assoc($run);
            if($row['sum(total)'] == ""){
                $output;
            }else{
                $output .= "<div class='card-footer' style='height:84px;'>
                                <div class='pull-right' style='margin: 10px 18px;'>
                                    <a href='checkout.php' class='btn btn-success pull-right'>Checkout</a>
                                    <div class='pull-right' style='margin: 8px 15px 0px 15px'>
                                        <h6>Total Ruppe: <b>₹. {$row['sum(total)']}</b></h6>
                                    </div>
                                </div>
                            </div>";
            }
        echo $output;
?>