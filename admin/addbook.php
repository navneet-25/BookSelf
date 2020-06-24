<?php include "header1.php";
    include "slider.php"; ?>

        <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-two">

                            <div class="widget-heading">
                                <h4 class="text-center">Add Book <img src="https://img.icons8.com/cute-clipart/64/000000/book.png" style="width: auto;height:35px;margin-bottom: 3px;"></h4>
                            </div>

                            <hr>

                                <form action="add-book.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="bookname"><b>Book Name</b></label>
                                            <input type="text" name="bookname" class="form-control" id="bookname" placeholder="Book Name" required>
                                            <div class="invalid-feedback" style="display:none;">
                                                
                                            </div>
                                            <div class="valid-feedback" style="display:none;">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="bookprice"><b>Book Price</b></label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">₹</div>
                                                </div>
                                                <input type="number" name="bookprice" class="form-control" id="bookprice" placeholder="₹ 100" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-4 mb-4">
                                            <label for=""><b>Discount %</b></label>
                                                <select name="discount" id="discount" class="form-group selectpicker w-100" title="Choose Discount %">
                                                    <option value='0' selected>0%</option>
                                                    <option value='5'>5%</option>
                                                    <option value='10'>10%</option>
                                                    <option value='20'>20%</option>
                                                    <option value='30'>30%</option>
                                                    <option value='35'>35%</option>
                                                    <option value='40'>40%</option>
                                                    <option value='50'>50%</option>
                                                </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="sellingprice"><b>Selling Price</b></label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">₹</div>
                                                </div>
                                                <input type="hidden" name="sellingprice" class="form-control sellingprice">
                                                <input type="text" class="form-control sellingprice" id="sellingprice" placeholder="₹ 100" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 mb-4">
                                            <label for="writer"><b>Writer</b></label>
                                            <input type="text" name="writer" class="form-control" id="writer" placeholder="(Optional)">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6 mb-4">
                                            <label for=""><b>Category</b></label>
                                                <select name="category" class="form-group selectpicker w-100" title="Choose Category" required>
                                                <?php include "../include/config.php";
                                                    $sqle1 = "SELECT * FROM category";
                                                    $resulte1 = mysqli_query($conn, $sqle1) or die("Query desnt make");
                                                    if(mysqli_num_rows($resulte1) > 0){ 
                                                        while($rowe1 = mysqli_fetch_assoc($resulte1)){ 
                                                        echo "<option value='{$rowe1['cat_id']}'>{$rowe1['cat_name']}</option>";
                                                        }
                                                    }
                                                ?>
                                                </select>
                                        </div>
                                        <div class="form-group col-md-6 mb-4">
                                            <label for="stock"><b>Stock</b></label>
                                                <input type="number" name="demo3_21" class="form-control" id="stock" placeholder="100" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="Discription"><b>Discription</b></label>
                                        <textarea name="discription" class="form-control" id="Discription" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                                        <label>Upload Book Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                        <label class="custom-file-container__custom-file" >
                                                            <input type="file" name="bookimg" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                                            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="10485760" /> -->
                                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                        </label>
                                                        <div class="custom-file-container__image-preview"></div>
                                                    </div>
                                    </div>
                                <button type="submit" id="add" name="submit" class="btn mt-3 w-50 d-block mx-auto" style="background-color: #ff5252;color: white;">Add Book</button>
                                </form>
                            </div>
                    </div>

                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    <script src="../JS/jquery.js"></script>
    <script>
        $("#bookname").on("blur", function(){
        var bookname = $(this).val();
            $.ajax({
                url : "ajaxfile.php",
                type : "POST",
                data : {book : bookname},
                success : function(data){
                    if(data == 1){
                        $("#bookname").removeClass("is-valid");
                        $("#bookname").addClass("is-invalid");
                        $(".valid-feedback").hide();
                        $(".invalid-feedback").show().text("This book alredy exist!!");
                        return false;
                    }else{
                        $("#bookname").removeClass("is-invalid");
                        $("#bookname").addClass("is-valid");
                        $(".invalid-feedback").hide();
                        $(".valid-feedback").show().text("New Book Arives!!");
                        
                    }
                }
            }) 
        });
        $("#bookprice").keyup(function(){
            let bp = $(this).val();
            let dis = $("#discount").val();
            let sp = bp - (dis/100 * bp);
            $(".sellingprice").val(sp);
        })
        $("#discount").change(function(){
            let bp = $("#bookprice").val();
            let dis = $(this).val();
            let sp = bp - (dis/100 * bp);
            $(".sellingprice").val(sp);
        })

    </script>
    <script>
            $("input[name='demo3_21']").TouchSpin({
            initval: 40
            });
    </script>

    <?php include "footer1.php"; ?>