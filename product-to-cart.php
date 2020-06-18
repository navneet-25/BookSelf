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
            $output .= "<tr>
                            <td>
                                <figure class='media my-2'>
                                    <div class='img-wrap'><img style='width:53px;height:75px;margin-right: 1rem;' src='{$src}' class='img-thumbnail img-sm'></div>
                                    <figcaption class='media-body'>
                                        <h5 class='title'>{$rows["book_name"]}</h5>
                                        <dl class='param param-inline small' style='margin-bottom: 7px;margin-top: 12px;line-height: 1.4;'>
                                        <dt style='display: inline-block;margin: 0;margin-right: 7px;font-weight: 600;'>Quantity : </dt>
                                        <dd style='display: inline-block;vertical-align: baseline;'>{$rows["book_quant"]}</dd>
                                    </figcaption>
                                </figure> 
                            </td>
                            <td>";
                $output .=   "<select id='quant' class='form-control my-2' data-uid={$rows["id"]}>";

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
                        </tr>";
                        $count++;
        }
        
        mysqli_close($conn);

        echo $output;
    }else{
        echo "<br><h2 class='text-right'>No Record Found</h2><br>";
    }

?>