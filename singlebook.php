<?php session_start();
if(isset($_SESSION['user'])){
    include "loginheader.php";
}else{
    include "header.php";
} ?>

<link rel="stylesheet" href="CSS/single.css">
                    <?php include "include/config.php";
                        $id = $_GET['bid'];
                        $query = "SELECT * FROM books WHERE book_id = {$id}";
                        $run = mysqli_query($conn, $query) or die("OK QUERY DIE");
                        if(mysqli_num_rows($run) > 0){
                        $result = mysqli_fetch_assoc($run);
                        if($result['book_img'] == ""){
                            $src = "img/noi.png";
                        }else{
                            $src = "img/book-image/{$result['book_img']}";
                        }
                    ?>
    <div class="container1">
        <div class="row mt-5">
            <div class="col-sm-4">
                <div id="imgpre">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block" src="<?php echo $src ?>" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block" src="img/cons.JPG" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block" src="img/cons.JPG" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" style="color: black;" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fa fa-chevron-right" style="color: black;" aria-hidden="true"></i>
                        </a>
                      </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div id="name">
                    <h4><?php echo $result['book_name']; ?></h4>
                    <p>BY <a href="#"><?php echo $result['Writer']?></a></p>
                </div>
                <div id="price">
                    <h6>M.R.P : <span class="" style="text-decoration: line-through;">₹ <?php echo $result['book_price']; ?></span></h6>

                    <h6 class="d-inline">Price : <h5 class="d-inline">₹ <?php echo $result['book_sp']; ?></h5></h6>
                    <h6>You save : ₹ <?php echo $result['book_price'] - $result['book_sp'] ?>.00(<?php echo $result['book_disc']?>%)</h6>
                    <hr>
                        <div class="row info">
                            <div class="col-sm-3">
                                <img src="img/codi.png" style="width:44px;margin: 0 40px;" alt="">
                                <p style="color:#0066c0;text-align:center">COD Avilable</p>
                            </div>
                            <div class="col-sm-3">
                                <img src="img/deli.png" style="width:44px;margin: 0 40px;" alt="">
                                <p style="color:#0066c0;text-align:center">Teleport Delivery</p>
                            </div>
                            <div class="col-sm-3">
                                <img src="img/ret.png" style="width:44px;margin: 0 40px;" alt="">
                                <p style="color:#0066c0;text-align:center">5 Days Returnable</p>
                            </div>
                            <div class="col-sm-3">
                                <img src="img/ver.png" style="width:44px;margin: 0 40px;" alt="">
                                <p style="color:#0066c0;text-align:center">Verified Books</p>
                            </div>
                        </div>
                    <hr style="margin-top: 0;">
                    <div id="disk">
                        <h4>Discription</h4>
                        <p><?php echo $result['book_discription']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <h5 style="color: rgb(180, 0, 0);">₹ <?php echo $result['book_sp']; ?></h5>
                <p>M.R.P :<span class="" style="text-decoration: line-through;">₹ <?php echo $result['book_price']; ?></span></p>
                <p>You Save: ₹ <?php echo $result['book_price'] - $result['book_sp'] ?>.00 (<?php echo $result['book_disc']?>%)</p>
                <p>Inclusive of all taxes</p>
                <img src="img/verif.JPG" id="imgv" alt="">
                <p class="text-secondary" style="font-size: 12px;">Exclusive Verified Books From team of @BookSelf</p>
                <hr>
                <?php if($result['stock'] > 10){ ?>
                    <h6 style="color: green;font-weight: 700;text-align: center;">In Stock</h6>
                <?php }elseif($result['stock'] <= 10 && $result['stock'] >= 1 ){?>
                    <h6 style="color: rgb(237, 129, 0);font-weight: 700;text-align: center;">Hurry Up,<br> Only <?php echo $result['stock']; ?> unit left</h6>
                <?php }else{ ?>
                    <h6 style="color: rgb(226, 7, 7);font-weight: 700;text-align: center;">Out of Stock</h6>
                <?php } ?>
                <?php if($result['stock'] > 0){ ?>
                <hr>
                <p style="font-size: 16px;display: inline;">Quantity : </p>
                        <select id="quant" style="padding: 4px;border-radius: 4px;outline: none;width: auto; margin:0 0 0 4px;background: rgb(172,172,172);background: linear-gradient(180deg, rgba(172,172,172,0) 0%, rgba(222,222,222,1) 0%, rgba(190,190,190,1) 100%); border: 1px solid #e2e2e2;">
                                <option value="1">1 Unit</option>
                                <option value="2">2 Unit</option>
                                <option value="3">3 Unit</option>
                                <option value="4">4 Unit</option>
                                <option value="5">5 Unit</option>
                        </select><br>
                            <input type="hidden" id="bookn" value="<?php echo $result['book_name']; ?>">
                            <input type="hidden" id="bokid" value="<?php echo $result['book_id']; ?>">
                            <input type="hidden" id="bokc" value="<?php echo $result['category']; ?>">
                            <input type="hidden" id="bokp" value="<?php echo $result['book_price']; ?>">
                            <button id="atc" class="btn w-100 mt-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
                <?php }?>
                            <hr>
                            <button id="wl" class="btn" style="font-weight: 500;"><i class="fa fa-heart" aria-hidden="true"></i> Save At Wishlist</button>
                            <hr>
                            <i class="fa fa-map-marker" aria-hidden="true" class="d-inline"></i><p class="d-inline ml-2" style="color:#0066c0;text-align:right;"> Deliver to Navneet - Gorakhpur 273004</p>
                
            </div>
        </div>
    </div>
    <div id="cont2" style="width:90%;margin:25px auto 0;">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-info" role="alert">
                    <p class="text-center mb-0 my-2"><i class="fa fa-percent" aria-hidden="true"></i> Flat 50% off on all Novel Books Today Hurry Up before the sale over</p>
                </div>
            </div>
        </div>
    </div>
        <div class="cont3" style="width:94%;margin:25px auto 0">
            <div id="sugg" class="row" style="width:90%;margin:auto">
                <div class='col-sm-2 p-0 mx-auto'>
                    <div class='card'>
                        <div class='card-img-top demo-img' style="background: #e7e7e7;width: 165px;height: 178px;" ></div>
                        <div class='card-body border-top demo-card'>
                            <h6 class='card-title text-center' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></h6>
                            <p class='card-text' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></p>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2 p-0 mx-auto'>
                    <div class='card'>
                        <div class='card-img-top demo-img' style="background: #e7e7e7;width: 165px;height: 178px;" ></div>
                        <div class='card-body border-top demo-card'>
                            <h6 class='card-title text-center' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></h6>
                            <p class='card-text' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></p>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2 p-0 mx-auto'>
                    <div class='card'>
                        <div class='card-img-top demo-img' style="background: #e7e7e7;width: 165px;height: 178px;" ></div>
                        <div class='card-body border-top demo-card'>
                            <h6 class='card-title text-center' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></h6>
                            <p class='card-text' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></p>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2 p-0 mx-auto'>
                    <div class='card'>
                        <div class='card-img-top demo-img' style="background: #e7e7e7;width: 165px;height: 178px;" ></div>
                        <div class='card-body border-top demo-card'>
                            <h6 class='card-title text-center' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></h6>
                            <p class='card-text' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></p>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2 p-0 mx-auto'>
                    <div class='card'>
                        <div class='card-img-top demo-img' style="background: #e7e7e7;width: 165px;height: 178px;" ></div>
                        <div class='card-body border-top demo-card'>
                            <h6 class='card-title text-center' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></h6>
                            <p class='card-text' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></p>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
                <?php }else{ ?>
                    <script>
                        var timeleft = 5;
                            var downloadTimer = setInterval(function(){
                            if(timeleft <= 0){
                                clearInterval(downloadTimer);
                            } else {
                                document.getElementById("countdown").innerHTML = timeleft;
                            }
                            timeleft -= 1;
                            }, 1000);
                    </script>
                    <div id="notfound" style="height:80vh;">
                        <div class="notfound">
                            <div class="notfound-404">
                                <h1>404</h1>
                            </div>
                            <h2>Oops! Nothing was found</h2>
                            <p>The book you are looking for might have been removed had its name changed or is temporarily unavailable. <a href="index.php">Return to homepage</a></p>
                            <p>You will be redirect to home page in <span id="countdown">5</span> second</p>
                        </div>
                    </div>
                    <script>
                        setTimeout(function(){
                            window.location.href = 'index.php';
                        }, 6000);
                    </script>
                <?php } ?>
    <script src="JS/jquery.js"></script>
<script>
    $("#atc").click(function(){
        var book_id = $("#bokid").val();
        var book_name = $("#bookn").val();
        var book_quant = $("#quant").val();
        var book_p = $("#bookp").val();
        $.ajax({
            url : "extraatc.php",
            type : "POST",
            data : {insert_id : book_id, bookname : book_name, book_q : book_quant, bookprice : book_p},
            success : function(data){
                if(data == 0){
                    window.location.assign("user-login.php");
                }else if(data == 1){
                    window.location.assign("user-cart.php");
                }else{
                    alert(data);
                }
            }
        });
    });
    $(document).ready(function(){
        let x = $("#bokc").val();
        let y = $("#bokid").val();
            function loadTable(){
            $.ajax({
                url : "sugg.php",
                type : "POST",
                data : {cat_id : x, book_id : y},
                success : function(data){
                    $("#sugg").html(data);
                }
            });
        }
        loadTable();
    });

</script>
    

<?php include "footer.php";?>