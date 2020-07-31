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
    <link rel="stylesheet" href="CSS/checkout.css">
    <style>
    body{
            font-family: 'Muli', sans-serif;
            font-weight:500;
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
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
    </style>
    <title>Checkout</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div id="logo" style="margin:1.5rem;font-family: 'Raleway', sans-serif;">
                   <a href="index.php" style="text-decoration:none;"><h3 style="display:inline;color: rgb(0, 0, 175);">Book<span style="color: rgb(255, 95, 95);">Self</span><span class="span">.com</span></h3></a> 
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
            <h5 class="sya">Select Payment Method</h5>
        </div>
        <hr>
        <div id="address" class="row">
            <div class="col-md-9 border rounded py-2 px-3">
                <div class="row p-2">
                    <div class="col-md-7">
                    <div class="h6"><b>Your Saved Cards</b></div>
                    </div>
                    <div class="col-md-3">
                    <div class="h6 text-muted">Name on card</div>
                    </div>
                    <div class="col-md-2">
                    <div class="h6 text-muted">Expires on</div>
                    </div>
                </div>
                <hr class="mt-0">
                <div class="row">
                    <div class="form-check p-3 col-md-12">
                        <div class="row">
                            <div class="col-md-7" style="padding-left:30px">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled>
                            <div><b>RuPay</b> <span class="text-muted">ending in XXXX</span><img src="img/rupay.png" style="width:auto;height:18px;margin-left:10px" /></div>
                            <div id="cvvb" class="d-none">Enter CVV : <input type="number" id="cvv"></div>
                            </div>
                            <div class="col-md-3">
                            <div class="h6 text-muted" style="font-size:14px;margin-top:5px">SATXXXX MIXXXX</div>
                            </div>
                            <div class="col-md-2">
                            <div class="h6 text-muted" style="font-size:14px;margin-top:5px">XX/XXXX</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check p-3 col-md-12">
                        <div class="row">
                            <div class="col-md-7" style="padding-left:30px">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled>
                            <div><b>Master Card</b> <span class="text-muted">ending in XXXX</span><img src="img/mastercard.png" style="width:auto;height:28px;margin-left:10px" /></div>
                            <div id="cvvb" class="d-none">Enter CVV : <input type="number" id="cvv"></div>
                            </div>
                            <div class="col-md-3">
                            <div class="h6 text-muted" style="font-size:14px;margin-top:5px">GAUXXXX SIXXXX</div>
                            </div>
                            <div class="col-md-2">
                            <div class="h6 text-muted" style="font-size:14px;margin-top:5px">XX/XXXX</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check p-3 col-md-12">
                        <div class="row">
                            <div class="col-md-7" style="padding-left:30px">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled>
                            <div><b>Visa</b> <span class="text-muted">ending in XXXX</span><img src="img/visa.png" style="width:auto;height:18px;margin-left:10px" /></div>
                            <div id="cvvb" class="d-none">Enter CVV : <input type="number" id="cvv"></div>
                            </div>
                            <div class="col-md-3">
                            <div class="h6 text-muted" style="font-size:14px;margin-top:5px;background:#cecece;border-radius:3px;width:70%;height:16px"></div>
                            </div>
                            <div class="col-md-2">
                            <div class="h6 text-muted" style="font-size:14px;margin-top:5px;background:#cecece;border-radius:3px;width:70%;height:16px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check p-3 col-md-12">
                        <div class="row">
                            <div class="col-md-7" style="padding-left:30px">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled>
                            <div style="background:#cecece;border-radius:3px;width:70%;height:16px;margin-top: 4px;"></div>
                            <div id="cvvb" class="d-none">Enter CVV : <input type="number" id="cvv"></div>
                            </div>
                            <div class="col-md-3">
                            <div class="h6 text-muted" style="font-size:14px;margin-top:5px;background:#cecece;border-radius:3px;width:70%;height:16px"></div>
                            </div>
                            <div class="col-md-2">
                            <div class="h6 text-muted" style="font-size:14px;margin-top:5px;background:#cecece;border-radius:3px;width:70%;height:16px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 pl-4 h5"><b>Another Payment Method</b></div>
                </div>
                <hr class="mt-1">
                <div class="row">
                    <div class="form-check p-3 col-md-12">
                        <div class="row">
                            <div class="col-md-12" style="padding-left:30px">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <div class="ml-2"><b>Pay on Delivery</b></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="box-shadow:0 0;background:#f7f7f7;">
                    <a href="revieworder.php" class="btn btn-warning" style='margin:19px;width: 85%;border:none;color:white;background: linear-gradient(180deg, rgba(236,159,0,1) 0%, rgba(166,122,0,1) 100%);'>Continue</a>
                    <p class="text-center text-muted small">Continue with the choice!!</p>
                </div>
            </div>
        </div>

    </div>
    <footer class="page-footer font-small special-color-dark mt-5">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="index.php"> BookSelf.com</a><span>, Inc. and its affiliates</span>
        </div>
        <!-- Copyright -->
      
      </footer>
    <script src="JS/jquery.js"></script>
    <script>
$(document).ready(function(){
    // Load Table Records
    /* function loadAdd(){
      $.ajax({
        url : "ajax/deliver.php",
        type : "POST",
        success : function(data){
          $("#address").html(data);
        }
      });
    }
    loadAdd();
    $(document).on("click", "#submit", function(){
        let x = $(this).data("aid");
        $.ajax({
            url : "ajax/addsess.php",
            type : "POST",
            data : {addid : x},
            success : function(data){
            }
        })
    }) */
    

});
    </script>
    
</body>
</html>