<?php

include "include/config.php";

    $bookid = $_POST['update'];

    session_start();

    $user_id = $_SESSION['id'];

    $query = "SELECT * FROM orders WHERE id = {$bookid}";

    $run = mysqli_query($conn, $query) or die("QUERY FAILED");

    $reslut = mysqli_fetch_assoc($run);

    $output = "";

    $output .= "<select id='modal-form' data-uid={$bookid}>";

                if($reslut['book_quant'] == 1){
                    $output .="<option selected value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>";
                            }
                else if($reslut['book_quant'] == 2){
                    $output .="<option value='1'>1</option>
                                <option selected value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>";
                }else if($reslut['book_quant'] == 3){
                    $output .="<option value='1'>1</option>
                                <option value='2'>2</option>
                                <option selected value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>";
                }else if($reslut['book_quant'] == 4){
                    $output .="<option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option selected value='4'>4</option>
                                <option value='5'>5</option>";
                }else if($reslut['book_quant'] == 5){
                    $output .="<option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option selected value='5'>5</option>";
                }

                    
            $output .=   "</select>
            <input type='hidden' id='total' value='{$reslut["book_price"]}'>";

    if(true){
    echo $output;
    }else{
    echo 0;
    } 

?>
