<?php
session_start();
if(isset($_SESSION['user'])){
    include "loginheader.php"; 
}else{
    include "header.php"; 
} 
?>
<link rel="stylesheet" href="css/animation.css"/>
<div class="container" style="min-height:600px">
        <div class="row mx-auto">
            <div class="col-xl-12 p-0">
                <div id="book-list" class="navbar-collapse">
                    <ul class="nav justify-content-center navbar" id="nav">
                        <li class="nav-item">
                            <p style="cursor: pointer;" class="nav-link selecteda" id="all"><img src='img/ok.png' style='width:auto; height:26px; margin-right:5px;'>All</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" id="faltoff">
            
        </div>
        <div id="cards" class="row my-2">
                    <div class='col-md-3 my-1'>
                        <div class='card shadow'>
                            <div class="loadingio-spinner-pulse-t1ilttbaskf mx-auto"><div class="ldio-2wmew4yihf">
                            <div></div><div></div><div></div>
                            </div></div>
                                <div class='card-body border-top demo-card'>
                                <h6 class='card-title text-center' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></h6>
                                <p class='card-text' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></p>
                                    <button class='btn mt-2 d-flex justify-content-center' style='width: 100%;border:none;color:white;background: linear-gradient(180deg, rgba(236,159,0,1) 0%, rgba(166,122,0,1) 100%);'><i class='fa fa-shopping-cart' style='font-size:20px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-family:Quicksand;' class='d-inline'>Add to Cart</p></i></button>
                                </div>
                        </div>
                    </div>
                    <div class='col-md-3 my-1'>
                        <div class='card shadow'>
                            <div class="loadingio-spinner-pulse-t1ilttbaskf mx-auto"><div class="ldio-2wmew4yihf">
                            <div></div><div></div><div></div>
                            </div></div>
                                <div class='card-body border-top demo-card'>
                                <h6 class='card-title text-center' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></h6>
                                <p class='card-text' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></p>
                                    <button class='btn mt-2 d-flex justify-content-center' style='width: 100%;border:none;color:white;background: linear-gradient(180deg, rgba(236,159,0,1) 0%, rgba(166,122,0,1) 100%);'><i class='fa fa-shopping-cart' style='font-size:20px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-family:Quicksand;' class='d-inline'>Add to Cart</p></i></button>
                                </div>
                        </div>
                    </div>
                    <div class='col-md-3 my-1'>
                        <div class='card shadow'>
                            <div class="loadingio-spinner-pulse-t1ilttbaskf mx-auto"><div class="ldio-2wmew4yihf">
                            <div></div><div></div><div></div>
                            </div></div>
                                <div class='card-body border-top demo-card'>
                                <h6 class='card-title text-center' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></h6>
                                <p class='card-text' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></p>
                                    <button class='btn mt-2 d-flex justify-content-center' style='width: 100%;border:none;color:white;background: linear-gradient(180deg, rgba(236,159,0,1) 0%, rgba(166,122,0,1) 100%);'><i class='fa fa-shopping-cart' style='font-size:20px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-family:Quicksand;' class='d-inline'>Add to Cart</p></i></button>
                                </div>
                        </div>
                    </div>
                    <div class='col-md-3 my-1'>
                        <div class='card shadow'>
                            <div class="loadingio-spinner-pulse-t1ilttbaskf mx-auto"><div class="ldio-2wmew4yihf">
                            <div></div><div></div><div></div>
                            </div></div>
                                <div class='card-body border-top demo-card'>
                                <h6 class='card-title text-center' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></h6>
                                <p class='card-text' style="width:100%;height:20px;background: #e7e7e7;border-radius:3px;"></p>
                                    <button class='btn mt-2 d-flex justify-content-center' style='width: 100%;border:none;color:white;background: linear-gradient(180deg, rgba(236,159,0,1) 0%, rgba(166,122,0,1) 100%);'><i class='fa fa-shopping-cart' style='font-size:20px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-family:Quicksand;' class='d-inline'>Add to Cart</p></i></button>
                                </div>
                        </div>
                    </div>
                    
        </div>
</div>
<!-- <div class="container">
    <div class="row mt-4">
        <div class="col-sm-12 py-1" style="background-size:cover;">
            <img class="img-fluid" src="img/offers/offer3.jpg" alt="">
        </div>
        <div class="col-4">
            <img src="img/offers/offer2.jpg" class="img-thumbnail d-block mx-auto mt-2" alt="">
        </div>
        <div class="col-4">
            <img src="img/offers/books.jpg" style="height:170px" class="img-thumbnail d-block mx-auto mt-2" alt="">
        </div>
        <div class="col-4">
            <img src="img/offers/books.jpg" style="height:170px" class="img-thumbnail d-block mx-auto mt-2" alt="">
        </div>
    </div>
</div> -->
<script src="JS/jquery.js"></script>
<script>
        $(document).on("click", ".nav-link", function(){
        $("#book-list li p").removeClass('selecteda');
        $(this).addClass('selecteda');
    });
    /* $('#all').on('click', function(){
        $(this).addClass('selecteda');
    }); */

$(document).ready(function(){
    function flat(){
        $("#faltoff").html("<div class='col'> <img src='img/offers/offer7.jpeg' class='img-fluid d-block mx-auto img-thumbnail' alt=''> </div>");
    }
    // Load Table Records
    function loadTable(){
      $.ajax({
        url : "products.php",
        type : "POST",
        success : function(data){
          $("#cards").html(data);
        }
      });
    }
    loadTable();
    
    function loadproduct(cat){
        $.ajax({
            url : "product-nav.php",
            type : "POST",
            data : {catnm : cat},
            success : function(data){
            $("#cards").html(data);
            }
        });
    }
    function loadNav(){
      $.ajax({
        url : "navgation.php",
        type : "POST",
        success : function(data){
          $("#nav").append(data);
        }
      });
    }
    loadNav();
    function loadcart(){
        $.ajax({
            url : "cartload.php",
            type : "POST",
            success : function(data){
            $(".badge").html(data);
            }
        });
    }

    $(document).on("click", "#atc", function(){
        $(this).text("Adding...");
        var book_id = $(this).data("id");
        var book_name = $(this).data("name");
        $.ajax({
            url : "addtocart.php",
            type : "POST",
            data : {insert_id : book_id, bookname : book_name},
            success : function(data){
                if(data == 0){
                    window.location.assign("user-login.php");
                }else if(data == 1){
                    loadcart();
                    loadTable();
                }else{
                    alert(data);
                }
            } 
        });
    });
    $('#all').on('click', function(){
        flat();
        loadTable();
    });
    $(document).on("click", "#nav-link", function(){
        var x = $(this).data("nid");
        loadproduct(x);
    });
    $("#search").on("keyup",function(){
    let search_term = $(this).val();
        $.ajax({
            url: "search-products.php",
            type: "POST",
            data : {search:search_term },
            success: function(data) {
            $("#cards").html(data);
            }
        });
    });
});
</script>
<?php include "footer.php"; ?>