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

                                <form>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="bookname"><b>Book Name</b></label>
                                            <input type="text" class="form-control" id="bookname" placeholder="Book Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="bookprice"><b>Book Price</b></label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">₹</div>
                                                </div>
                                                <input type="text" class="form-control" id="bookprice" placeholder="₹ 100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6 mb-4">
                                            <label for=""><b>Category</b></label>
                                                <select class="form-group selectpicker w-100" title="Choose Category">
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </select>
                                        </div>
                                        <div class="form-group col-md-6 mb-4">
                                            <label for="stock"><b>Stock</b></label>
                                                <input type="number" class="form-control" id="stock" placeholder="100">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="Discription"><b>Discription</b></label>
                                        <textarea class="form-control" id="Discription" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                                        <label>Upload Book Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                        <label class="custom-file-container__custom-file" >
                                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                        </label>
                                                        <div class="custom-file-container__image-preview"></div>
                                                    </div>
                                    </div>
                                <button type="submit" class="btn mt-3 w-50 d-block mx-auto" style="background-color: #ff5252;color: white;">Add Book</button>
                                </form>
                            </div>
                    </div>

                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <?php include "footer1.php"; ?>