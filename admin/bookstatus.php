<?php include "header1.php";
include "slider.php"; ?>

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

            <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Hover Table</h4>
                                        </div>                 
                                    </div>
                                </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover mb-4">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Image</th>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Total Units</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Unit Left</th>
                                                    <th class="text-center">Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                include "../include/config.php";
                                                $query = "SELECT * FROM books ORDER BY book_id DESC";
                                                $result = mysqli_query($conn, $query) or die("Query Dosest work");
                                                $rows_count = mysqli_num_rows($result);
                                                $count = 1;
                                                if($rows_count > 0){
                                                    while($rows = mysqli_fetch_assoc($result)){
                                                        if($rows['book_img'] == ""){
                                                            $src = "../img/noi.png";
                                                        }else{
                                                            $src = "../img/book-image/{$rows['book_img']}";
                                                        }
                                            ?>
                                                <tr>
                                                    <td class="text-center" style="width:5%"><?php echo $count; ?></td>
                                                    <td class="text-center" style="width:10%"><img alt="avatar" class="img-fluid rounded" src="../img/book-image/<?php echo $rows['book_img']; ?>" style="width:auto;height:100px"></td>
                                                    <td class="text-center w-25"><?php echo $rows['book_name']; ?></td>
                                                    <td class="text-center">₹ <?php echo $rows['book_price']; ?></td>
                                                    <td class="text-center"><?php echo $rows['stock']; ?></td>
                                                    <td class="text-center"><span class="text-success">In Stock</span></td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <?php $count++;}
                                                } ?>
                                                <tr>
                                                    <td> Alma Clarke</td>
                                                    <td>11/08/2019</td>
                                                    <td>420</td>
                                                    <td class="text-center"><span class="text-secondary">Pending</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Xavier</td>
                                                    <td>12/08/2019</td>
                                                    <td>130</td>
                                                    <td class="text-center"><span class="text-info">In progress</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Vincent Carpenter</td>
                                                    <td>13/08/2019</td>
                                                    <td>260</td>
                                                    <td class="text-center"><span class="text-danger">Canceled</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                            </div>
                        </div>

             <!-- row layout-top-spacing -->
            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->




<?php include "footer1.php"; ?>