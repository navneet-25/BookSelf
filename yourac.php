<?php 
    session_start();
    include "loginheader.php";
?>

<link rel="stylesheet" href="CSS/add-add.css">
<div class="container"style="min-height:450px;">
    <div class="row mt-4" style="position: relative;">
        
        <div class="col-sm-12">
            <div class="row" id="addressshow">
                <div class="col-md-3 mt-4">
                        <div class="card-body ml-3" style="box-shadow: 0px 0px 10px #c4c4c4;width: fit-content;">
                            <img id="add-add" src="img/add.png" style="cursor:pointer;width:auto; height:90px; margin:34px 55px" alt="">
                            <h4 class="text-center">Add Address</h4>
                        </div>
                </div>
                    <div id="modal">
                        <div id="modal-form">
                        <h2 class="text-center">Add Address</h2>
                        <div class="container con1">
                            <form>
                            <input type="hidden" name="user_id" id="">
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Gaurav Singh">

                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="bookself@example.com">

                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="B320 Sangam Gali Street">

                            <label for="phone"><i class="fa fa-phone"></i> Phone</label>
                            <input type="text" id="phone" name="phone" placeholder="9796954617">

                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="New Delhi">
                            <div class="row">
                                <div class="col">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="Delhi">
                                </div>
                                <div class="col">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="110096">
                                </div>
                            </div>
                            <div class="row">
                                <input type="submit" id="add" value="Add">
                            </div>
                            </form>
                        </div>
                        <div id="close-btn">X</div>
                        </div>
                </div>
                    <div id="appedn">
                    
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="JS/jquery.js"></script>
<script>
$(document).ready(function(){
    // Load Table Records
    function loadAdd(){
      $.ajax({
        url : "address.php",
        type : "POST",
        success : function(data){
          $("#addressshow").append(data);
        }
      });
    }
    loadAdd();
    $("#add-add").on("click", function(){
        $("#modal").show();
    });
    $("#close-btn").on("click",function(){
      $("#modal").hide();
    });
    $("#add").on("click",function(e){
        /* e.preventDefault(); */
        var u_name = $("#fname").val();
        var u_email = $("#email").val();
        var u_adr = $("#adr").val();
        var u_phone = $("#phone").val();
        var u_city = $("#city").val();
        var u_state = $("#state").val();
        var u_zip = $("#zip").val();
        $.ajax({
            url : "add-add.php",
            type : "POST",
            data : {user_name : u_name, email : u_email, addressU : u_adr, phone : u_phone, city : u_city, state : u_state, zip : u_zip},
            success : function(data){
                if(data == 1){
                    $("#modal").hide();
                }else{
                    alert("problem");
                }
            }
        });
    });
});
</script>
   

<?php
    include "footer.php";
?>