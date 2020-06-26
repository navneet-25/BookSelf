<?php

    include "../../include/config.php";

    $getid = $_POST['id'];
    
    $query1 = "SELECT * FROM pending_order WHERE id = {$getid}";

    $run = mysqli_query($conn, $query1);

    $result = mysqli_fetch_object($run);

    $output = "";
        
    
        if($result->status == 3){
            $output .= "<select id='mgct' class='p-3 w-100' style='border-radius:5px;'>
                <optgroup label='Time To Delivery'>
                    <option value='3'>Time to delivery</option>
                </optgroup>
                <optgroup label='Delivery'>
                    <option value='5'>Out for delivery</option>
                    <option value='6'>Delivered</option>
                </optgroup>

            </select>
            <input id='mgctt' type='hidden' value='{$getid}' />
            ";
        }elseif($result->status == 5){
            $output .= "<select id='mgct' class='p-3 w-100' style='border-radius:5px;'>
                <optgroup label='Hold'>
                    <option value='3'>Hold</option>
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

                <optgroup label='Delivery'>
                    <option value='6' selected>Delivered</option>
                </optgroup>

            </select>
            <input id='mgctt' type='hidden' value='{$getid}' />
            ";
        }

        echo $output;
?>