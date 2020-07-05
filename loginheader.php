<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSRAP library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FAFAFA Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/cssfile2.css">
    <script src="JS/jquery.js"></script>
    <style>
    body{
        font-family: 'Quicksand', sans-serif;
        font-weight:500;
        font-size:16px;
    }
        .badge {
            padding-left: 9px;
            padding-right: 9px;
            -webkit-border-radius: 9px;
            -moz-border-radius: 9px;
            border-radius: 9px;
            }

            .label-warning[href],
            .badge-warning[href] {
            background-color: #c67605;
            }
            #lblCartCount {
                background: #ff0000;
                color: #fff;
                padding: 0 5px;
                vertical-align: top;
                height:17px;
                margin-left: -10px;
                width: auto;
                line-height: 16px;
            }
            #search{
                border-radius: 20px 0px 0px 20px;
                border-right:none;
            }
            #search:focus{
                outline:0px !important;
                -webkit-appearance:none;
                box-shadow: none !important;
            }
    </style>
    <title>Book Self</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mx-0 border-bottom">
            <div class="col-md-3" style="width:fit-content;margin:auto;">
                <a href="index.php"><img src="img/logo.PNG" alt="Logo"></a>
            </div>
            <div class="col-md-5">
                <form class="my-3">
                    <div class="input-group search" style="margin-top: 1.5rem;">
                      <input id="search" style="outline:none;" type="text" class="form-control search" placeholder="Search">
                        <button type="button" class="btn" style="padding:0px 10px;cursor:pointer;border-radius: 0px 20px 20px 0px;background-color:white;border-left:none;border-right: 1px solid lightgrey;border-bottom: 1px solid lightgray;border-top: 1px solid lightgray;" type="submit">
                            <i class="fa fa-search" style="color:#ff4a3d" aria-hidden="true"></i>
                        </button>
                    </div>
                  </form>
            </div>
            <!-- <div class="col-md-3 mt-2">
                &nbsp;&nbsp;<i class="fa fa-user-circle" style="font-size:50px" aria-hidden="true"></i>&nbsp;&nbsp;
                <p class="d-inline" style="font-size:40px">|</p>&nbsp;&nbsp;
                <p class="d-inline" style="font-size:30px">Hey, Navneet</p>
            </div> -->
            <?php
            include "include/config.php";
            $id = $_SESSION['user'];
            $sql = "SELECT * FROM users Where user_username = '{$id}'";
            $result = mysqli_query($conn, $sql) or die("query Failed");
            $var = mysqli_fetch_assoc($result);
            ?>
            <div class="col-md-4">
                <div id="usernav" class="row" style="width:fit-content;margin: 2px auto 10px">
                    <div class="dropdown col" style="cursor:pointer;margin-top:20px;padding:0;width:45px">
                        <p class="dropbtn" style="font-size: 13px;margin-bottom: 0;font-family: cursive;padding: 0;">Hello,<h6 style="margin-bottom:0"><?php echo explode(" ", $var['user_n'])[0];?> <i class="fa fa-caret-down"  style="font-size:15px;" aria-hidden="true"></i></h6></p>
                            <div class="dropdown-content" style="left:-60%">
                                        <a href="your-profile.php"><i class="fa fa-user" style="color:blue;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<span style="font-family: Quicksand;">My Profile</span></a>
                                        <a href="#"><i class="fa fa-heart" style="color:#ff4a3d" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<span style="font-family: Quicksand;">Wishlist</span></a>
                                        <a href="#"><i class="fa fa-bell" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<span style="font-family: Quicksand;">Notification</span></a>
                                        <a href="logout.php"><i class="fa fa-power-off" style="color:red" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<span style="font-family: Quicksand;">Logout</span></a>
                            </div>
                    </div>
                    
                    
                    <div id="navorder" class="col p-0 ml-5 mr-4" style="margin-top:20px;width:40px">
                        <p style="font-size: 13px;margin-bottom: 0;font-family: cursive;padding: 0;"><a href="orders.php">Your<h6 style="margin-bottom:0">Orders</h6></a></p> 
                    </div>
                    <div id="navcart" class="col p-0" style="margin-top:26px;width:140px">
                    <a href="user-cart.php" style="font-size:18px;text-decoration:none;color:black">
                    <i id="cartload" class="fa" style="font-size:24px">&#xf07a;</i>
                    <span class='badge badge-warning' id='lblCartCount' style="font-size: 14px;font-weight: 700;"></span>
                        <p style="display:inline;font-weight: 600;font-size: 14px;">Cart</p></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="JS/jquery.js"></script>
<script>
$(document).ready(function(){
    function loadcart(){
        $.ajax({
            url : "cartload.php",
            type : "POST",
            success : function(data){
            $(".badge").html(data);
            }
        });
    }
    loadcart();
});

</script>