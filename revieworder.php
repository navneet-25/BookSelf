<?php include "include/config.php";
session_start();
if(!isset($_SESSION['user'])){
    header("location: user-login.php");
}elseif(!isset($_SESSION['add'])){
    header("location: user-cart.php");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
    <!-- BOOTSRAP library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FAFAFA Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@500&display=swap" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        body{
            font-family: 'Muli', sans-serif;
        }
        .loader {
        border: 5px solid grey;
        border-radius: 50%;
        border-top: 5px solid black;
        width: 40px;
        height: 40px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
        }
        .sya1{
                font-size: 12px;
            }
            #clickme{
                color: blue;
                cursor: pointer;
            }
            #clickme:hover{
                color: rgb(255, 95, 95);
            }
        .ryo{
            font-size: 23px;
            line-height: 1.3;
            font-weight: 700;
            text-rendering: optimizeLegibility;
        }
        .alert1{
            border:1px solid rgb(223, 223, 223);
            background-color: rgb(243, 243, 243);
            border-radius: 5px;
            padding: 1rem;
        }
        .apply{
            background-color: rgb(236, 236, 236); /* Green */
            border: none;
            color: rgb(0, 0, 0);
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0 0 4px;
            border-radius: 5px;
            cursor: pointer;
        }
        #logo h3{
            font-family: serif;
        }
        h6{
            font-weight: 600;
        }
    </style>
    <title>Checkout</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div id="logo" style="margin:1.5rem;">
                   <a href="index.php" style="text-decoration:none"><h3 style="display:inline;color: rgb(0, 0, 175);">Book<span style="color: rgb(255, 95, 95);">Self</span><span class="span" style="font-size:16px;color:black;">.com</span></h3></a> 
                </div>
            </div>
            <div class="col-sm-6">
                <h4 class="text-center" style="margin:1.5rem;">Payment & Delivery</h4>
            </div>
            <div class="col-sm-3">
                <div id="payimg">
                    <img src="img/payment.png" class="mx-auto d-block" style="width:auto;height:70px" alt="">
                </div>
            </div>
        </div>
        <div id="row" style="padding: 2rem 1rem 5px 1rem;">
            <h5 class="ryo">Review your Order</h5>
            <p class="sya1">By clicking on the 'Place Your Order' button, you agree to BookSelf's <span id="clickme">privacy notice</span> and <span id="clickme">conditions</span> of use.</p>
        </div>
        <div class="row" style="padding: 1rem;">
            <div class="col-sm-9">
                <div class="alert1">
                    <p style="color: black; margin: 0;">Disscount things</p>
                </div>
                <div class="row" style="padding: 1rem;border: 1px solid rgb(221, 221, 221);border-radius: 5px;margin:10px 0;">
                    <div class="col-sm-4" id="address">
                        <div id='shiping'><h6 class='d-inline'>Shipping Address</h6><p class='d-inline' data-toggle='modal' data-target='#exampleModalCenter' style='cursor: pointer;color: rgb(38, 38, 255);margin-left: 7px;font-size: 12px;'>Change</p></div>
                            <div class='card-body mb-2' id="triel" style='padding: 5px 0;'>
                            <h5 class='card-title w-75 rounded' style="padding:10px; background:#c7c7c7;"></h5>
                            <h6 class='card-subtitle mb-2 w-50 rounded' style="padding:10px; background:#c7c7c7;"></h6>
                            <p class='card-text w-100 rounded mb-2' style="padding:10px; background:#c7c7c7;"></p>
                            <p class='card-text w-75 rounded' style="padding:10px; background:#c7c7c7;"></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div id="pay-meth"><h6 class="d-inline">Payment Method</h6><a href="payment.php" class="d-inline" style="cursor: pointer;color: rgb(38, 38, 255);margin-left: 7px;font-size: 12px;">Change</a></div>
                            <div id="meth">
                                <img src="img/cod.png" style="width: auto;height: 23px;" class="d-inline" alt="">
                                <p class="d-inline">Cash on delivery</p>
                            </div>
                    </div>
                    <div class="col-sm-4">
                        <div id="coppon"><h6 class="d-inline">Promotional codes</h6></div>
                        <input type="text" name="" id="" class="float-left" style="border-radius: 5px;border: 1px solid rgb(211, 211, 211);margin: 1rem 0 0;width: 148px;padding: 4px 10px;" placeholder="Code Here">
                        <button class="apply d-inline">Apply</button>
                    </div>
                </div>
                <div id="orders" style="padding: 1rem; border: 1px solid rgb(211, 211, 211);border-radius: 5px;">
                    <div>
                        <h5 style="color: green;font-family: Arial, sans-serif;font-weight: 700;font-size: 18px;margin: 0;">Estimated Delivery Date: 5 JUN 2020</h5>
                        <p class="small text-secondary">This is estimated delivery date, so date may differ</p>
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="img/book-image/16730.jpg" class="d-block mx-auto mt-1" style="max-width: 100%;max-height:79px;" alt="">
                                </div>
                                <div class="col-sm-10">
                                    <h6 style="font-size: 15px;font-family: Arial, Helvetica, sans-serif;margin-bottom: 3px;">Book Name Book name book name book name book name</h6>
                                    <p class="d-inline" style="text-decoration: line-through;color: rgb(131, 131, 131);font-size: 12px;"><i>₹.100.00</i></p>
                                    <p class="d-inline ml-1" style="font-weight: 600; color: rgb(255, 77, 77);font-size: 14px;"> ₹.150.00</p>
                                    <img src="img/verif.JPG" style="width: auto;height: 15px;margin-bottom: 5px;" alt="">
                                    <p class="small" style="margin-bottom: 5px;">You Save: ₹.15.00 (15%)</p>
                                    <p class="d-inline" style="font-weight: 600;">Quantity: 1</p><p class="d-inline" style="color: rgb(38, 38, 255);margin-left: 5px;cursor: pointer; font-size: 12px;">Change</p>
                                </div>
                            </div>
                            <hr>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div id="summery" class="border" style="padding:1rem;border-radius: 5px;position: sticky; top: 5px;">
                    <h5>Order Summary</h5>
                    <hr>
                    <p class="small text-secondary">Buy books above ruppe 500 and get delivery absuletly free.</p>
                    <div id="total">
                    
                    </div>
                    <button id="pyo" class="btn btn-warning" style="background: linear-gradient(183deg, rgba(2,0,36,1) 0%, rgba(255,148,181,1) 0%, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 0%, rgba(255,227,177,1) 0%, rgba(214,162,0,1) 100%, rgba(255,193,2,1) 100%, rgba(255,146,190,1) 100%, rgba(0,212,255,1) 100%); width: 100%;margin: 0;">Place your order</button>
                </div>
            </div>
        </div>
        <div id="causion">
            <p class="text-secondary" style="font-size: 11px;">Need help? Check our <span id="clickme">help pages</span> or contact us <span id="clickme">24x7</span><br><br>

                When your order is placed, we'll send you an e-mail message acknowledging receipt of your order. If you choose to pay using an electronic payment method (credit card, debit card or net banking), you will be directed to your bank's website to complete your payment. Your contract to purchase an item will not be complete until we receive your electronic payment and dispatch your item. If you choose to pay using Pay on Delivery (POD), you can pay using cash/card/net banking when you receive your item.</p>
        </div>
    </div>

        
    <footer class="page-footer font-small special-color-dark mt-5">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="index.php"> BookSelf.com</a><span>, Inc. and its affiliates</span>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 65%;">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLongTitle" style="margin: 0 0 0 333px;">Change Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" id="adderssshow"></div>
                </div>
                </div>
            </div>
        </div>
    <script src="JS/jquery.js"></script>
    <script>
$(document).ready(function(){
    // Load Address for model box
    function loadAdd(){
      $.ajax({
        url : "ajax/deliver2.php",
        type : "POST",
        success : function(data){
          $("#adderssshow").html(data);
        }
      });
    }
    loadAdd();
    // Load Table Records
    function loadTable(){
      $.ajax({
        url : "ordercart.php",
        type : "POST",
        success : function(data){
          $("#orders").html(data);
        }
      });
    }
    loadTable();
    function totalam(){
        $.ajax({
            url : "total.php",
            type : "POST",
            success : function(data){
                $("#total").html(data);
            }
        });
    }
    totalam();
    // temp //
    $("#pyo").on("click", function(){
        var add = $("#addid").val();
        $.ajax({
            url : "final.php",
            type : "post",
            data : {add_id : add},
            success : function(data){
                window.location.assign(data);
            }
        })
    });
    // For Address
    function address(){
        $.ajax({
            url : "ajax/r-add.php",
            type : "POST",
            success : function(data){
                $("#address").html(data);
            }
        })
    }
    address();
    $(document).on("click", "#submit", function(){
        $("#triel").html("<div class='loader'></div>").css("margin","25px 57px");
        var x = $(this).data("aid");
        $.ajax({
            url : "ajax/addsess.php",
            type : "POST",
            data : {addid : x},
            success : function(data){
            }
        })
        address();
    })
});
        
    </script>
    
</body>
</html>