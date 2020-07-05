<?php

    include "../../include/config.php";

    $getid = $_POST['id'];
    
    $query1 = "SELECT * FROM cancel_orders WHERE order_id = {$getid}";

    $run = mysqli_query($conn, $query1);

    $result = mysqli_fetch_object($run);

    $output = "";
            if($result->can_status == 0){
                $output .= "<select id='mgct' class='p-3 w-100' style='border-radius:5px;'>
                <optgroup label='Return to owner'>
                    <option value='0' selected>Not Started Yet</option>
                </optgroup>
                <optgroup label='Returing to owner'>
                    <option value='1'>Returning</option>
                    <option value='2'>Returned</option>
                </optgroup>
            </select>
            <input id='mgctt' type='hidden' value='{$getid}' />
            ";
            
        }elseif($result->can_status == 1){
            $output .= "<select id='mgct' class='p-3 w-100' style='border-radius:5px;'>
            <optgroup label='Returing to owner'>
                <option value='1' selected>Returning</option>
                <option value='2'>Returned</option>
            </optgroup>
        </select>
        <input id='mgctt' type='hidden' value='{$getid}' />
        ";
        
    } elseif($result->can_status == 2){
            $output .= "<select id='mgct' class='p-3 w-100' style='border-radius:5px;'>
                <optgroup label='Returing to owner'>
                    <option value='1' disabled>Returning</option>
                    <option value='2' selected>Returned</option>
                </optgroup>
            </select>
            <input id='mgctt' type='hidden' value='{$getid}' />
            ";
        }

        echo $output;
?>