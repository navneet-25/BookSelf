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
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/cssfile2.css">
    <style>
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
                font-size: 14px;
                background: #ff0000;
                color: #fff;
                padding: 0 5px;
                vertical-align: top;
                margin-left: -10px;
                height: 17px;
                font-weight: 600;
                width: auto;
                line-height: 15px;
                font-weight: 500;
            }
    </style>
    <title>Book Self</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mx-0 border-bottom">
            <div class="col-md-3">
                <div class="my-2">
                        <a href="index.php"><img src="img/logo.PNG" alt="Logo" class="logo my-0 mx-3"></a>
                </div>
            </div>
            <div class="col-md-5">
                <form class="my-3">
                    <div class="input-group search" style="margin-top: 1.8rem;">
                      <input type="text" class="form-control search" style="border-radius: 20px 0px 0px 20px;border-right:none;" placeholder="Search">
                        <button class="btn" style="padding:0px 10px;cursor:pointer;border-radius: 0px 20px 20px 0px;background-color:white;border-left:none;border-right: 1px solid lightgrey;border-bottom: 1px solid lightgray;border-top: 1px solid lightgray;" type="submit">
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
                <div id="usernav" style="width:fit-content;margin:30px auto 15px">
                    <div id="name" style="display: inline;">
                    <div class="dropdown" style="border-bottom:none;">
                    <p class="dropbtn">Hello, <?php echo explode(" ", $var['user'])[0];?> <i class="fa fa-caret-down" style="font-size:15px" aria-hidden="true"></i></p>
                    <div class="dropdown-content">
                                <a href="your-profile.php"><i class="fa fa-user" style="color:blue;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;My Profile</a>
                                <a href="#"><i class="fa fa-heart" style="color:#ff4a3d" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Wishlist</a>
                                <a href="#"><i class="fa fa-bell" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Notification</a>
                                <a href="logout.php"><i class="fa fa-power-off" style="color:red" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Logout</a>
                            </div>
                    </div>
                    </div>
                    
                    
                    <div id="navorder" style="display: inline;">
                    <a href="#" style="margin:0 2px 0 10px;padding:5px 1rem;"><p style="display:inline;font-weight:400;font-size:18px">Orders</p></a> 
                    </div>
                    <div id="navcart" style="display: inline;">
                    <a href="user-cart.php" style="padding:;font-size:18px;text-decoration:none;color:black">
                    <i id="cartload" class="fa" style="font-size:24px">&#xf07a;</i>
                    <span class='badge badge-warning' id='lblCartCount'></span>
                        <p style="display:inline;font-weight:400;">Cart</p></a>

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