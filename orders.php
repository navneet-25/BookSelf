<?php session_start();
include "loginheader.php"; ?>
<link rel="stylesheet" href="CSS/orders.css">
    <div class="wrapper">
        <div class="row">
            <div class="col-sm-3">
                <h3 class="heading">Your Orders</h3>
            </div>
            <div class="col-sm-4 offset-sm-5">
                <div id="searchorder">
                    <i class="fa fa-search" style="width: 13px;height: 13px;opacity: .55;position: absolute;top: 25%;
                    margin-left: 11px;" aria-hidden="true"></i>
                    <input type="text" style="padding:2px 25px;border-radius:5px;border:1px solid grey;outline:none;margin:4px;width:100%" placeholder="Search Your Order" name="" id="">
                </div>
            </div>
        </div>
        <hr class="mb-0">
        <div class="row" id="orderss">
            <div class="col-sm-12 orders mt-4">
                <div class="hed">
                    <div class="row alertmy">
                        <div class="col-sm-2">
                            <h6 style="font-size: 12px;color: #555;margin-bottom: 3px;">ORDERED ON</h6>
                            <p style="font-size: 14px;margin-bottom: 0;color: #555;">26 May 2020</p>
                        </div>
                        <div class="col-sm-2">
                            <h6 style="font-size: 12px;color: #555;margin-bottom: 3px;">DELIVERD TO</h6>
                            <p class="showadd">Navneet Pal</p>
                        </div>
                        <div class="col-sm-4 offset-sm-4">
                            <h6 style="font-size: 12px;color: #555;text-align: right;">ORDER NO# <span style="color: rgb(87, 87, 255);">5002202099894011520</span></h6>
                            <h6 style="font-size: 12px;margin-bottom: 0;color: #555;cursor: pointer; text-align: right;color: rgb(0, 0, 211);">Invoice <i class="fa fa-download" aria-hidden="true"></i></h6>
                        </div>
                    </div>
                </div>
                <div class="bod">
                    <div class="row p-3">
                        <div class="col-sm-2">
                            <img src="img/book-image/76860.jpg" style="width: auto; height: 100px;margin: auto;display: block;" alt="">
                        </div>
                        <div class="col-sm-5">
                            <a href="singlebook.php?bid=6"><h5 style="font-size: 14px;color: #0066c0;">Stories We Never Tell Paperback</h5></a>
                            <p style="font-size: 15px;font-weight: 700; margin-bottom:3px;color: rgb(165, 0, 33);">₹ 210</p>
                            <p style="font-size: 12px; margin-bottom:4px;">Quantity: 2</p>
                            <p style="font-size: 12px;">Seller: Gaurav Singh</p>
                        </div>
                        <div class="col-sm-5">
                            <h6 style="line-height: 1.4;text-align:center;font-weight:700!important;color:#090;font-size:17px;">Delivery date: 15 Jun 2020</h6>
                            <div style="background-color: rgb(0, 204, 0); width: 8px;height: 8px;border-radius: 50%;display: inline-block;"></div><p style="font-size: 12px;display: inline;color: rgb(75, 75, 75);"> Order Received &nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;<span style="color: rgb(116, 116, 116);"> Your order is received to BookSelf</span></p><br>
                            <div style="background-color: rgb(247, 230, 0); width: 8px;height: 8px;border-radius: 50%;display: inline-block;"></div><p style="font-size: 12px;display: inline;color: rgb(124, 124, 124);"> Order Shipping &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp; Your order is shipped by BookSelf</p><br>
                            <div style="background-color: rgb(255, 37, 37); width: 8px;height: 8px;border-radius: 50%;display: inline-block;"></div><p style="font-size: 12px;display: inline;color: rgb(124, 124, 124);"> Deliverd Order &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp; Your Book Successfully Deliverd</p><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="JS/jquery.js"></script>
<script>
$(document).ready(function(){
    // Load Table Records
    function loadTable(){
      $.ajax({
        url : "fetchorders.php",
        type : "POST",
        success : function(data){
          $("#orderss").html(data);
        }
      });
    }
    loadTable();
    // for hover to show the address 
    $(document).on("mouseenter", ".showadd", function(){
        $(".showadder").fadeIn(300);
    });
    $(document).on("mouseleave", ".showadd", function(){
        $(".showadder").fadeOut(300);
    });
});
    </script>
<?php include "footer.php"; ?>