<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: user-login.php");
} ?>
<?php include "loginheader.php"; ?>
<div class="container" style="min-height:500px">

<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> -->
<link rel="stylesheet" href="CSS/cart.css">


<!-- <div class="container"> -->
<br>  <p class="text-center h3">Your Cart [2]</p>
<hr>

                        <div class="card" style="min-height:400px;">
                                <table class="table table-hover shopping-cart-wrap">
                                    <thead class="text-muted">
                                    <tr>
                                    <th scope="col" class="text-center">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" class="text-left" width="120">Price</th>
                                    <th scope="col" class="text-center" width="200" class="text-right">Action</th>
                                    </tr>
                                </thead>

                                <tbody id="tbody">

                                </tbody>
                                </table>
                        </div> <!-- card.// -->
                        
                        <div id="totalcart">
                            
                        </div>

                    <!-- </div>  -->
<!--container end.//-->
</div>
        
<script src="JS/jquery.js"></script>
<script>
$(document).ready(function(){
    // Load Table Records
    function loadTable(){
      $.ajax({
        url : "product-to-cart.php",
        type : "POST",
        success : function(data){
          $("#tbody").html(data);
        }
      });
    }
    loadTable();

    function totalam(){
        $.ajax({
            url : "refresh-total.php",
            type : "POST",
            success : function(data){
                $("#totalcart").html(data);
            }
        });
    }
    totalam();
    function loadcart(){
        $.ajax({
            url : "cartload.php",
            type : "POST",
            success : function(data){
            $(".badge").html(data);
            }
        });
    }

    
       
    /* $("#close-btn").on("click",function(){
      $("#modal").hide();
    });  */

    $(document).on("change", "#quant", function(){
        var bookid2 = $(this).data("uid");
        var bookid1 = $(this).val();
        $.ajax({
            url : "load-update-quant.php",
            type : "POST",
            data : {quant : bookid1, orderid : bookid2},
            success : function(data){
                if(data == 1){
                    loadTable();
                    totalam();
                }
            }
        });
    });


    $(document).on("click", "#remove", function(){
        var book_id = $(this).data("did");

        $.ajax({
            url : "deletetocart.php",
            type : "POST",
            data : {delete_id : book_id},
            success : function(data){
                if(data == 1){
                    loadcart();
                    loadTable();
                    totalam();
                }else{
                    alert("PROBELM");
                }
            }
        });
    });
});
</script>
<?php include "footer.php"; ?>
