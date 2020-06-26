<?php
        include "../../include/config.php";

                    $query1 = "SELECT * FROM pending_order JOIN users ON pending_order.user = users.user_id JOIN addresses ON pending_order.address = addresses.add_id WHERE status = 4 ORDER BY id DESC";
                    
                    $run = mysqli_query($conn, $query1) or die("ok PROB");

                    $output = "";

                    if(mysqli_num_rows($run)){
                        while($rows = mysqli_fetch_object($run)){
                            $output .= "<tr>
                            <td style='width:10%;'>{$rows->tracking_id}</td>
                            <td style='width:20%;'>{$rows->book_name}</td>
                            <td style='width:10%;'>";
                            if($rows->status == 4){
                                $output .= "<span id='statusindi' data-oid={$rows->id} style='cursor:pointer;' class='badge badge-danger'>Canceled</span>";
                            }
                            
                               /*  <span data-toggle='modal' style='cursor:pointer;' data-target='#exampleModal' class='d-none badge badge-primary'>In Progress</span>
                                <span data-toggle='modal' style='cursor:pointer;' data-target='#exampleModal' class='d-none badge badge-warning'>Suspended</span>
                                <span data-toggle='modal' style='cursor:pointer;' data-target='#exampleModal' class='d-none badge badge-danger'>Blocked</span>
                                <span data-toggle='modal' style='cursor:pointer;' data-target='#exampleModal' class='d-none badge badge-secondary'>On leave</span>
                                <span data-toggle='modal' style='cursor:pointer;' data-target='#exampleModal' class='d-none badge badge-info'>Pending</span> */
                                

                            $output .= "</td>
                                        <td style='width:5%;text-align:center;'>{$rows->book_quant}</td>";

                                        $query2 = "SELECT * FROM deliveryi";
                                        $result = mysqli_fetch_object(mysqli_query($conn, $query2));
                            if($result->ret_status == 0){
                                $output .= " <td style='width:20%;text-align:center;'><span data-toggle='modal' id='statusindi' data-oid={$result->del_id} style='cursor:pointer;' data-target='#exampleModal' class='badge badge-dark'>Not Started Yet</span></td>";
                            }elseif($result->ret_status == 1){
                                $output .= " <td style='width:20%;text-align:center;'><span data-toggle='modal' id='statusindi' data-oid={$result->del_id} style='cursor:pointer;' data-target='#exampleModal' class='badge badge-warning'> Returning... </span></td>";
                            }elseif($result->ret_status == 2){
                                $output .= " <td style='width:20%;text-align:center;'><span data-toggle='modal' id='statusindi' data-oid={$result->del_id} style='cursor:pointer;' data-target='#exampleModal' class='badge badge-success'> Returned </span></td>";
                            }
                        $output .= " <td style='width:13%;text-align:center;'>BookSelf</td>
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