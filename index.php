<?php
session_start();
if(isset($_SESSION['user'])){
    include "loginheader.php"; 
}else{
    include "header.php"; 
} 
?>
<link rel="stylesheet" href="css/animation.css"/>
<div class="container" style="min-height:500px">
        <div class="row mx-0" style="height:68px;">
            <div class="col-md-12">
                <div id="book-list">
                    <ul class="nav justify-content-center" id="nav">
                        <li class="nav-item">
                            <p style="cursor: pointer;" class="nav-link selecteda" id="all"><img src='img/ok.png' style='width:auto; height:26px; margin-right:5px;'>All</p>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div id="cards" class="row my-2">
                    <div class='col-md-3 my-1'>
                        <div class='card shadow'>
                        <div class="loadingio-spinner-pulse-t1ilttbaskf mx-auto"><div class="ldio-2wmew4yihf">
                        <div></div><div></div><div></div>
                        </div></div>
                                <div class='card-body border-top demo-card'>
                                    <h6><div class="meter grey">
                                        <span style="width: 100%"></span>
                                    </div></h6>
                                    <div style="margin:20px" class="meter grey">
                                     <span style="width: 100%"></span>
                                    </div>
                                    <button class='btn btn-outline-primary mt-2 d-flex justify-content-center' style='width: 100%;'><i class='fa fa-shopping-cart' style='font-size:20px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-family:sans-serif;' class='d-inline'>Add to Cart</p></i></button>
                                </div>
                        </div>
                    </div>
                    <div class='col-md-3 my-1'>
                        <div class='card shadow'>
                        <div class="loadingio-spinner-pulse-t1ilttbaskf mx-auto"><div class="ldio-2wmew4yihf">
                        <div></div><div></div><div></div>
                        </div></div>
                                <div class='card-body border-top demo-card'>
                                    <h6><div class="meter grey">
                                        <span style="width: 100%"></span>
                                    </div></h6>
                                    <div style="margin:20px" class="meter grey">
                                     <span style="width: 100%"></span>
                                    </div>
                                    <button class='btn btn-outline-primary mt-2 d-flex justify-content-center' style='width: 100%;'><i class='fa fa-shopping-cart' style='font-size:20px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-family:sans-serif;' class='d-inline'>Add to Cart</p></i></button>
                                </div>
                        </div>
                    </div>
                    <div class='col-md-3 my-1'>
                        <div class='card shadow'>
                        <div class="loadingio-spinner-pulse-t1ilttbaskf mx-auto"><div class="ldio-2wmew4yihf">
                        <div></div><div></div><div></div>
                        </div></div>
                                <div class='card-body border-top demo-card'>
                                    <h6><div class="meter grey">
                                        <span style="width: 100%"></span>
                                    </div></h6>
                                    <div style="margin:20px" class="meter grey">
                                     <span style="width: 100%"></span>
                                    </div>
                                    <button class='btn btn-outline-primary mt-2 d-flex justify-content-center' style='width: 100%;'><i class='fa fa-shopping-cart' style='font-size:20px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-family:sans-serif;' class='d-inline'>Add to Cart</p></i></button>
                                </div>
                        </div>
                    </div>
                    <div class='col-md-3 my-1'>
                        <div class='card shadow'>
                        <div class="loadingio-spinner-pulse-t1ilttbaskf mx-auto"><div class="ldio-2wmew4yihf">
                        <div></div><div></div><div></div>
                        </div></div>
                                <div class='card-body border-top demo-card'>
                                    <h6><div class="meter grey">
                                        <span style="width: 100%"></span>
                                    </div></h6>
                                    <div style="margin:20px" class="meter grey">
                                     <span style="width: 100%"></span>
                                    </div>
                                    <button class='btn btn-outline-primary mt-2 d-flex justify-content-center' style='width: 100%;'><i class='fa fa-shopping-cart' style='font-size:20px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-family:sans-serif;' class='d-inline'>Add to Cart</p></i></button>
                                </div>
                        </div>
                    </div>
        </div>
</div>
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
                }else{
                    alert(data);
                }
            } 
        });
    });
    $('#all').on('click', function(){
        loadTable();
    });
    $(document).on("click", "#nav-link", function(){
        var x = $(this).data("nid");
        loadproduct(x);
    });
    $("#search").on("keyup",function(){
    var search_term = $(this).val();
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