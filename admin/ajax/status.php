<?php

    include "../../include/config.php";

    $getid = $_POST['id'];
    
    $query1 = "SELECT * FROM pending_order WHERE id = {$getid}";

    $run = mysqli_query($conn, $query1);

    $result = mysqli_fetch_object($run);

    $output = "";
            if($result->status == 1){
                $output .= "<select id='mgct' class='p-3 w-100' style='border-radius:5px;'>
                <optgroup label='Recived'>
                    <option value='1' selected>Recived</option>
                </optgroup>
                <optgroup label='Shipping'>
                    <option value='2'>Shipped</option>
                    <option value='3'>Dispached</option>
                </optgroup>
            </select>
            <input id='mgctt' type='hidden' value='{$getid}' />
            ";
            
        } elseif($result->status == 2){
            $output .= "<select id='mgct' class='p-3 w-100' style='border-radius:5px;'>
                <optgroup label='Recived'>
                    <option value='1'>Recived</option>
                </optgroup>
                <optgroup label='Shipping'>
                    <option value='2' selected>Shipped</option>
                    <option value='3'>Dispached</option>
                </optgroup>
            </select>
            <input id='mgctt' type='hidden' value='{$getid}' />
            ";
        }elseif($result->status == 3){
            $output .= "<select id='mgct' class='p-3 w-100' style='border-radius:5px;'>
                <optgroup label='Recived'>
                    <option value='1'>Recived</option>
                </optgroup>
                <optgroup label='Shipping'>
                    <option value='2'>Shipped</option>
                    <option value='3' selected>Dispached</option>
                </optgroup>
            </select>
            <input id='mgctt' type='hidden' value='{$getid}' />
            ";
        }elseif($result->status == 4){
            $output .= "<a href='cancelorders.php'> Please check it out!!</a>";
        }/* elseif($result->status == 5){
            $output .= "<select id='mgct' class='p-3 w-100' style='border-radius:5px;'>
                <optgroup label='Recived'>
                    <option value='1'>Recived</option>
                </optgroup>
                <optgroup label='Shipping'>
                    <option value='2'>Shipped</option>
                    <option value='3'>Dispached</option>
                </optgroup>
                <optgroup label='Delivery'>
                    <option value='5' selected>Out for delivery</option>
                    <option value='6'>Delivered</option>
                </optgroup>
            </select>
            <input id='mgctt' type='hidden' value='{$getid}' />
            ";
        }elseif($result->status == 6){
            $output .= "<select id='mgct' class='p-3 w-100' style='border-radius:5px;'>
                <optgroup label='Recived'>
                    <option value='1'>Recived</option>
                </optgroup>
                <optgroup label='Shipping'>
                    <option value='2'>Shipped</option>
                    <option value='3'>Dispached</option>
                </optgroup>
                <optgroup label='Delivery'>
                    <option value='5'>Out for delivery</option>
                    <option value='6' selected>Delivered</option>
                </optgroup>
            </select>
            <input id='mgctt' type='hidden' value='{$getid}' />
            ";
        }
            */ 

        echo $output;
?>