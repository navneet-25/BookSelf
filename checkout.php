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
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/checkout.css">
    <style>
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
                <div id="logo" style="margin:1.5rem;">
                   <a href="index.php" style="text-decoration:none"><h3 style="display:inline;color: rgb(0, 0, 175);">Book<span style="color: rgb(255, 95, 95);">Self</span><span class="span">.com</span></h3></a> 
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
            <h5 class="sya">Select Your Address</h5>
            <p class="sya1">Is the address you'd like to use displayed below? If so, click the corresponding "Deliver to this address" button. Or you <span class="clickme" style="color: blue;cursor: pointer;">can enter a new delivery address.</span></p>
        </div>
        <hr>
        <div id="address" class="row">

        </div>
                   <!--  <div id="loader" style="z-index:1;margin: 49% auto;border: 10px solid #f3f3f3;border-radius: 50%;border-top: 10px solid #3498db;width: 120px;height: 120px;-webkit-animation: spin 2s linear infinite; /* Safari */animation: spin 2s linear infinite;"></div> -->
        <hr style="margin: 2rem 0 0 0;">
        <div class="row">
            <div class="col-sm-6 table">
                

                    <form class="text-center p-5" action="">

                        <p class="h4 mb-4">Add a new Address</p>

                        <!-- id -->
                        <!-- <input type="hidden" value="" id="id"> -->
                        <!-- Name -->
                        <input type="text" id="name" class="form-control mb-4" placeholder="Name">

                        <!-- Email -->
                        <input type="email" id="email" class="form-control mb-4" placeholder="E-mail">

                        <!-- phone -->
                        <input type="number" id="phone" class="form-control mb-4" placeholder="Phone Number">

                        <!-- address -->
                        <div class="form-group">
                            <textarea class="form-control rounded-0" id="address" rows="3" placeholder="Full Address"></textarea>
                        </div>

                        <!-- Copy -->
                        <input type="text" name="" id="city" class="form-control mb-4" placeholder="City">
                        <input type="text" name="" id="state" class="form-control mb-4" placeholder="State">
                        <input type="number" name="" id="zip" class="form-control mb-4" placeholder="Zip">

                        <!-- Send button -->
                        <button id="add-add" class="btn btn-dark btn-block" type="submit">Add</button>

                    </form>
                    <!-- Default form contact -->
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
    function loadAdd(){
      $.ajax({
        url : "deliver.php",
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
            url : "addsess.php",
            type : "POST",
            data : {addid : x},
            success : function(data){
            }
        })
    })
    $(".clickme").click(function() {
    $('html,body').animate({
        scrollTop: $(".table").offset().top},
        'slow');
    });
    $(document).on("click", ".clickme", function(){
    $('html,body').animate({
        scrollTop: $(".table").offset().top},
        'slow');
    });
    $("#add-add").on("click", function(){
        var u_name = $("#name").val();
        var u_email = $("#email").val();
        var u_phone = $("#phone").val();
        var u_adr = $("textarea").val();
        var u_city = $("#city").val();
        var u_state = $("#state").val();
        var u_zip = $("#zip").val();
        $.ajax({
            url : "add-add.php",
            type : "post",
            data : {user_name : u_name, email : u_email, addressU : u_adr, phone : u_phone, city : u_city, state : u_state, zip : u_zip},
            success : function(data){}
        });
    });
    $(document).on("click", "#delete", function(){
        var addid = $(this).data("did");
        $.ajax({
            url : "deleteadd.php",
            type : "POST",
            data : {deleteid : addid},
            success : function(data){
                if(data == 1){
                    loadAdd();
                }else{
                    alert(data);
                }
            }
        });
    });

});
    </script>
    
</body>
</html>