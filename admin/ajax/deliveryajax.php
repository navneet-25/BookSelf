<?php
        include "../../include/config.php";

                    $query1 = "SELECT * FROM `deliveryi` d JOIN pending_order p ON d.del_id=p.id JOIN users u ON u.user_id=p.user JOIN addresses ad ON ad.add_id=p.address ORDER BY id DESC";
                    
                    $run = mysqli_query($conn, $query1) or die("ok PROB");

                    $output = "";

                    if(mysqli_num_rows($run)){
                        while($rows = mysqli_fetch_object($run)){
                            $output .= "<tr>
                            <td style='width:10%;'>{$rows->tracking_id}</td>
                            <td style='width:20%;'>{$rows->book_name}</td>
                            <td style='width:10%;'>";
                            if($rows->status == 3){
                                $output .= "<span data-toggle='modal' id='statusindi' data-oid={$rows->id} style='cursor:pointer;' data-target='#exampleModal' class='badge badge-info'>Time for delivery</span>";
                            }elseif($rows->status == 4){
                                $output .= "<span data-toggle='modal' id='statusindi' data-oid={$rows->id} style='cursor:pointer;' data-target='#exampleModal' class='badge badge-danger'>Canceled</span>";
                            }elseif($rows->status == 5){
                                $output .= "<span data-toggle='modal' id='statusindi' data-oid={$rows->id} style='cursor:pointer;' data-target='#exampleModal' class='badge badge-warning'>Atemting</span>";
                            }elseif($rows->status == 6){
                                $output .= "<span data-toggle='modal' id='statusindi' data-oid={$rows->id} style='cursor:pointer;' data-target='#exampleModal' class='badge badge-success'>Deliverd</span>";
                            }
                            
                               /*  <span data-toggle='modal' style='cursor:pointer;' data-target='#exampleModal' class='d-none badge badge-primary'>In Progress</span>
                                <span data-toggle='modal' style='cursor:pointer;' data-target='#exampleModal' class='d-none badge badge-warning'>Suspended</span>
                                <span data-toggle='modal' style='cursor:pointer;' data-target='#exampleModal' class='d-none badge badge-danger'>Blocked</span>
                                <span data-toggle='modal' style='cursor:pointer;' data-target='#exampleModal' class='d-none badge badge-secondary'>On leave</span>
                                <span data-toggle='modal' style='cursor:pointer;' data-target='#exampleModal' class='d-none badge badge-info'>Pending</span> */
                                

                            $output .= "</td>
                                        <td style='width:5%;text-align:center;'>{$rows->book_quant}</td>
                                        <td style='width:15%;text-align:center;'>₹ {$rows->total_amount}</td>
                                        <td style='width:8%;text-align:center;'>{$rows->user_n}</td>
                                        <td style='width:28%;text-align:center;'>Ordered By: {$rows->user_name}<br>{$rows->address_name}<br>City: {$rows->city}</td>
                                        <td class='text-center'>
                                            <div class='dropdown custom-dropdown'>
                                                <a class='dropdown-toggle' href='#' role='button' id='dropdownMenuLink1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'>
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-more-horizontal'><circle cx='12' cy='12' r='1'></circle><circle cx='19' cy='12' r='1'></circle><circle cx='5' cy='12' r='1'></circle></svg>
                                                </a>
                                                <div class='dropdown-menu' aria-labelledby='dropdownMenuLink1'>
                                                    <a class='dropdown-item' href='javascript:void(0);'>View</a>
                                                    <a class='dropdown-item' href='javascript:void(0);'>Edit</a>
                                                    <a class='dropdown-item' href='javascript:void(0);'>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>";
                        }
                        echo $output;
                    }else{
                        echo "<h4>No RECORD FOUND!! ABHI CSS KRENGE ISKI</h4>";
                    }


?>