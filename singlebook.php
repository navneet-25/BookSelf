<?php session_start();
if(isset($_SESSION['user'])){
    include "loginheader.php";
}else{
    include "header.php";
} ?>
<link rel="stylesheet" href="CSS/single.css">
    <div class="container1">
        <div class="row mt-5">
            <div class="col-sm-4">
                <div id="imgpre">
                    <?php include "include/config.php";
                    $id = $_GET['bid'];
                    $query = "SELECT * FROM books WHERE book_id = {$id}";
                    $run = mysqli_query($conn, $query) or die("OK QUERY DIE");
                    $result = mysqli_fetch_assoc($run);
                    if($result['book_img'] == ""){
                        $src = "img/noi.png";
                    }else{
                        $src = "img/book-image/{$result['book_img']}";
                    }
                    ?>
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
                    <p>BY <a href="#">Writer</a></p>
                </div>
                <div id="price">
                    <h6>M.R.P : <span class="" style="text-decoration: line-through;">₹ 150</span></h6>

                    <h6 class="d-inline">Price : <h5 class="d-inline">₹ <?php echo $result['book_price']; ?></h5></h6>
                    <h6>You save : ₹ 50(35%)</h6>
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
                <h5 style="color: rgb(180, 0, 0);">₹ <?php echo $result['book_price']; ?></h5>
                <p>M.R.P :<span class="" style="text-decoration: line-through;">₹ 150</span></p>
                <p>You Save: ₹ 251.00 (39%)</p>
                <p>Inclusive of all taxes</p>
                <img src="img/verif.JPG" id="imgv" alt="">
                <p class="text-secondary" style="font-size: 12px;">Exclusive Verified Books From team of @BookSelf</p>
                <hr>
                <h6 style="color: green;font-weight: 500;text-align: center;">In Stock</h6>
                <h6 style="color: rgb(128, 0, 0);font-weight: 500;text-align: center;display: none;">Out of Stock</h6>
                <hr>
                <p style="font-size: 16px;display: inline;">Quantity : </p>
                        <select id="quant" style="padding: 4px;border-radius: 4px;outline: none;width: 25%; margin:0 0 0 4px;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                        </select><br>
                            <input type="hidden" id="bookn" value="<?php echo $result['book_name']; ?>">
                            <input type="hidden" id="bokid" value="<?php echo $result['book_id']; ?>">
                            <input type="hidden" id="bokc" value="<?php echo $result['category']; ?>">
                            <input type="hidden" id="bokp" value="<?php echo $result['book_price']; ?>">
                            <button id="atc" class="btn w-100 mt-2"><i class="fa fa-cart-plus" aria-hidden="true"></i> ADD TO CART</button>
                            <hr>
                            <button id="wl" class="btn"><i class="fa fa-heart" aria-hidden="true"></i> Add To Wishlist</button>
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
                
                
            </div>
        </div>
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