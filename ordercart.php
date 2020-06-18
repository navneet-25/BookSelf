<?php 

    include "include/config.php";

    session_start();

    $user_id = $_SESSION['id'];

    $query = "SELECT * FROM orders WHERE user_id = {$user_id}";

    $run = mysqli_query($conn, $query) or die("QUERY FAILED");

    $output = "";

    $count = 1;

    if(mysqli_num_rows($run) > 0){
        while($rows = mysqli_fetch_assoc($run)){
            if($rows['book_img'] == ""){
                $src = "img/noi.png";
            }else{
                $src = "img/book-image/{$rows['book_img']}";
            }
            $output .= "<div>
            <h5 style='color: green;font-family: Arial, sans-serif;font-weight: 700;font-size: 18px;margin: 0;'>Estimated Delivery Date: 5 JUN 2020</h5>
            <p class='small text-secondary'>This is estimated delivery date, so date may differ</p>
                <div class='row'>
                    <div class='col-sm-2'>
                        <img src='{$src}' class='d-block mx-auto mt-1' style='max-width: 100%;max-height:79px;' alt=''>
                    </div>
                    <div class='col-sm-10'>
                        <h6 style='font-size: 15px;font-family: Arial, Helvetica, sans-serif;margin-bottom: 3px;'>{$rows['book_name']}</h6>
                        <p class='d-inline' style='text-decoration: line-through;color: rgb(131, 131, 131);font-size: 12px;'><i>₹.100.00</i></p>
                        <p class='d-inline ml-1' style='font-weight: 600; color: rgb(255, 77, 77);font-size: 14px;'> ₹.{$rows['book_price']}</p>
                        <img src='img/verif.JPG' style='width: auto;height: 15px;margin-bottom: 5px;' alt=''>
                        <p class='small' style='margin-bottom: 5px;'>You Save: ₹.00.00 (0%)</p>
                        <p class='d-inline' style='font-weight: 600;'>Quantity: {$rows['book_quant']}</p><p class='d-inline' style='color: rgb(38, 38, 255);margin-left: 5px;cursor: pointer; font-size: 12px;'>Change</p>
                    </div>
                </div>
                <hr>
                </div>";
                /* $output .=   "<select id='quant' class='form-control my-2' data-uid={$rows["id"]}>";

                                if($rows['book_quant'] == 1){
                                    $output .="<option selected value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>";
                                            }
                                else if($rows['book_quant'] == 2){
                                    $output .="<option value='1'>1</option>
                                                <option selected value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>";
                                }else if($rows['book_quant'] == 3){
                                    $output .="<option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option selected value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>";
                                }else if($rows['book_quant'] == 4){
                                    $output .="<option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option selected value='4'>4</option>
                                                <option value='5'>5</option>";
                                }else if($rows['book_quant'] == 5){
                                    $output .="<option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option selected value='5'>5</option>";
                                }
                                $output .=   "</select>
                                <input type='hidden' id='total' value='{$rows["book_price"]}'>";
            $output .=     "</td>
                                <td> 
                                <div class='price-wrap my-2'> 
                                    <var class='price' style='color: #007bff;font-size: 18px;font-weight: bold;margin-right: 5px;display: block;'>₹ {$rows["total"]}</var> 
                                    <small class='text-muted'>(₹ {$rows["book_price"]} each)</small> 
                                </div> <!-- price-wrap .// -->
                            </td>
                            <td class='text-right'> 
                                    <a title='' href='' class='my-2 btn btn-outline-success' data-toggle='tooltip' data-original-title='Save to Wishlist'> <i class='fa fa-heart'></i></a> 
                                    <a id='remove' data-did={$rows['id']} class='my-2 btn btn-outline-danger'> × Remove</a>
                            </td>
                        </tr>"; */
                        $count++;
        }
        
        mysqli_close($conn);

        echo $output;
    }else{
        echo "<br><h2 class='text-right'>No Record Found</h2><br>";
    }

?>