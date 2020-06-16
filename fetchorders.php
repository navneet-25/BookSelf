<?php 
    session_start();

    include "include/config.php";

    $userid = $_SESSION['id'];

    
        /* INNER JOIN Sale s on s.ProductID = p.ProductID */
    /* $sql = "Select p.book_name, pu.user
    From pending_order p 
    INNER JOIN users pu on p.user = pu.user_id"; */
    $sql = "SELECT * FROM pending_order JOIN users ON pending_order.user = users.user_id JOIN addresses ON pending_order.address = addresses.add_id WHERE pending_order.user = {$userid}";

    $run = mysqli_query($conn, $sql) or die("query probelme");

    $output = "";

    if(mysqli_num_rows($run)){
        while($rows = mysqli_fetch_assoc($run)){
            $output .= "<div class='col-sm-12 orders mt-4'>
                            <div class='hed'>
                                <div class='row alertmy'>
                                    <div class='col-sm-2'>
                                        <h6 style='font-size: 12px;color: #555;margin-bottom: 3px;'>ORDERED ON</h6>
                                        <p style='font-size: 14px;margin-bottom: 0;color: #555;'>{$rows['date']}</p>
                                    </div>
                                    <div class='col-sm-2'>
                                        <h6 style='font-size: 12px;color: #555;margin-bottom: 3px;'>DELIVERD TO</h6>
                                        <p class='showadd'>{$rows['user_n']}</p> 
                                    </div>
                                    <div class='showadder' style='background:#ffffff;border-radius:4px;width:175px;height:130px;z-index:1;top:29%;margin-left:7rem;position:absolute;display:none;box-shadow: 0px 0px 38px -9px rgba(153,153,153,1);'></div>
                                    <div class='col-sm-4 offset-sm-4'>
                                        <h6 style='font-size: 12px;color: #555;text-align: right;'>ORDER NO# <span style='color: rgb(87, 87, 255);'>{$rows['tracking_id']}</span></h6>
                                        <h6 style='font-size: 12px;margin-bottom: 0;color: #555;cursor: pointer; text-align: right;color: rgb(0, 0, 211);'>Invoice <i class='fa fa-download' aria-hidden='true'></i></h6>
                                    </div>
                                </div>
                            </div>
                            <div class='bod'>
                                <div class='row p-3'>
                                    <div class='col-sm-2'>
                                        <img src='img/book-image/{$rows['book_img']}' style='width: auto; height: 100px;margin: auto;display: block;' alt=''>
                                    </div>
                                    <div class='col-sm-5'>
                                        <a href='singlebook.php?bid={$rows['bookid']}'><h5 style='font-size: 14px;color: #0066c0;'>{$rows['book_name']}</h5></a>
                                        <p style='font-size: 15px;font-weight: 700; margin-bottom:3px;color: rgb(165, 0, 33);'>₹ {$rows['total_amount']}</p>
                                        <p style='font-size: 12px; margin-bottom:4px;'>Quantity: {$rows['book_quant']}</p>
                                        <p style='font-size: 12px;margin-bottom:0;'>Seller: Book Self</p>
                                    </div>
                                    <div class='col-sm-5'>
                                        <h6 style='line-height: 1.4;text-align:center;font-weight:700!important;color:#090;font-size:17px;'>Delivery date: 15 Jun 2020</h6>
                                        <div style='background-color: rgb(0, 204, 0); width: 8px;height: 8px;border-radius: 50%;display: inline-block;'></div><p style='font-size: 12px;display: inline;color: rgb(75, 75, 75);'> Order Received &nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;<span style='color: rgb(116, 116, 116);'> Your order is received to BookSelf</span></p><br>
                                        <!-- <div style='background-color: rgb(247, 230, 0); width: 8px;height: 8px;border-radius: 50%;display: inline-block;'></div><p style='font-size: 12px;display: inline;color: rgb(124, 124, 124);'> Order Shipping &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp; Your order is shipped by BookSelf</p><br>
                                        <div style='background-color: rgb(255, 37, 37); width: 8px;height: 8px;border-radius: 50%;display: inline-block;'></div><p style='font-size: 12px;display: inline;color: rgb(124, 124, 124);'> Deliverd Order &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp; Your Book Successfully Deliverd</p><br> -->
                                            <div class='row' id='ocot'>
                                                <div class='col-sm mt-3'>
                                                    <button class='btn border' style='padding:3px 10px;color:background: rgb(238,238,238);background: linear-gradient(180deg, rgba(238,238,238,1) 0%, rgba(214,214,214,1) 100%);'>Cancel Order</button>
                                                </div>
                                                <div class='col-sm mt-3'>
                                                    <p class='text-center' style='font-size:20px;font-weight:200;'> | </p>
                                                </div>
                                                <div class='col-sm mt-3'>
                                                    <button class='btn border' style='padding:3px 10px;color:background: rgb(238,238,238);background: linear-gradient(180deg, rgba(238,238,238,1) 0%, rgba(214,214,214,1) 100%);' disabled>Track Your Order</button>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
        }
        echo $output;
    }else{
        echo "<h3>No Orders Yet!!</h3>";
    }

?>