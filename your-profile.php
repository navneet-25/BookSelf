<?php session_start(); include "loginheader.php"; ?>

<link rel="stylesheet" type="text/css" href="CSS/profile.css">
<div class="container" style="min-height:500px">
        <div class="row">
            <div class="col-sm-12 my-5">
                <div class="card mx-auto" style="width: 18rem;box-shadow: 0px 0px 15px 1px #ebebeb;position: sticky;top:25px;">
                        <div class="card-body">
                            <?php include "include/config.php";
                            $uid = $_SESSION['id'];
                            $query = "SELECT * FROM users WHERE user_id = {$uid}";
                            $run = mysqli_query($conn, $query) or die("okdie");
                            $reslut = mysqli_fetch_assoc($run);
                            ?>
                            <img id="user-img" src=<?php if($reslut['user_gend'] == "Male"){ echo "img/user-boy.png";}else{ echo "img/user-girl.png";} ?> class="border rounded-circle mx-auto d-block" alt="">
                            <h4 class="card-title text-center my-3"><?php echo $reslut['user_n'] ?></h4>
                            <hr style="width:80%;margin:auto;">
                            <p style="margin:5px;"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $reslut['user_email'] ?></p>
                            <p style="margin:5px;"><i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Total Oders : 5</p>
                            <p style="margin:5px;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $reslut['user_phone'] ?></p>
                        </div>
                </div>
            </div>
        </div>
        <hr class="d-lg-none">

        <div class="row">
            <div class="col-xl-4 my-2 col-lg-6">
                <div class="card border rounded mx-auto" style="box-shadow: 0px 0px 10px 0px #f5f5f5;width:20rem;">
                <a href="orders.php" style="text-decoration:none;color:black">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-inline col-sm-3">
                            <img src="img/order.png" class="" style="width:auto;height:50px;" alt="">
                            </div>
                            <div class="d-inline col-sm-9">
                            <h4 class="d-inline" style="">Your Orders</h4>
                            <p class="small text-secondary" style="margin-bottom:0;">All about your orders</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 my-2 col-lg-6">
                
                <div class="card scard border rounded mx-auto" style="box-shadow: 0px 0px 10px 0px #f5f5f5;width:20rem;">
                    <a href="undercons.php" style="text-decoration:none;color:black">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-inline col-sm-3">
                            <img src="img/lock.png" class="" style="margin:0 0 0 9px;width:auto;height:47px;" alt="">
                            </div>
                            <div class="d-inline col-sm-9">
                            <h4 class="d-inline" style="">Login & Security</h4>
                            <p class="small text-secondary" style="margin-bottom:0;">Edit login, and more</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 my-2">
                <div class="card scard border rounded mx-auto" style="box-shadow: 0px 0px 10px 0px #f5f5f5;width:20rem;">
                    <a href="yourac.php" style="text-decoration:none;color:black">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-inline col-sm-3">
                            <img src="img/location.png" class="" style="margin:4px 0 0 15px;width:auto;height:40px;" alt="">
                            </div>
                            <div class="d-inline col-sm-9">
                            <h4 class="d-inline" style="">Your Address</h4>
                            <p class="small text-secondary" style="margin-bottom:0;">Edit Your Address for Orders</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>


</div>


<?php include "footer.php"; ?>