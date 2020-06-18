<?php

    include "include/config.php";
    session_start();
    $userid = $_SESSION['id'];

    $query = "SELECT sum(book_quant) FROM orders WHERE user_id = {$userid}";
    $query2 = "SELECT sum(total) FROM orders WHERE user_id = {$userid}";

    $run1 = mysqli_query($conn, $query) or die("QUERY FAILED");
    $run3 = mysqli_query($conn, $query2) or die("QUERY FAILED");
    
    $run2 = mysqli_query($conn, "SELECT sum(total) FROM orders WHERE user_id = {$userid}");

    $output = "";

    $row1 = mysqli_fetch_assoc($run1);
    $row3 = mysqli_fetch_assoc($run3);
    $row2 = mysqli_fetch_assoc($run2);

        if($row3['sum(total)'] < 500 ){
            $deliv = "₹100.00";
        }else{
            $deliv = "Free";
        }
        if($row3['sum(total)'] < 500 ){
            $deliv1 = $row3['sum(total)'] + 100;
        }else{
            $deliv1 = $row3['sum(total)'];
        }

                $output .= "<p style='font-size: 14px;float: right;'>₹{$row3['sum(total)']}.00</p>
                            <p style='font-size: 14px;'>Price ({$row1['sum(book_quant)']} Books)</p>
                            <p style='font-size: 14px;float: right;'>{$deliv}</p>
                            <p style='font-size: 14px;'>Delivery Charge</p>
                            <hr>
                            <h6 class='float-right' style='color: rgb(190, 0, 0);'>₹{$deliv1}.00</h6>
                            <h6 style='color: rgb(190, 0, 0);'>Total Amount :</h6>
                            <hr>";
            
        echo $output;
?>