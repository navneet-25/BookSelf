<?php include "header1.php";
    include "slider.php"; ?>

       <!--  BEGIN CONTENT AREA  -->
       <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing" id="cancel-row">
                    <!-- Modal -->
                <div class="modal fade" id="deleteConformation" tabindex="-1" role="dialog" aria-labelledby="deleteConformationLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="deleteConformationLabel">
                            <div class="modal-header">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                </div>
                                <h5 class="modal-title" id="exampleModalLabel">Delete the task?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="">If you delete the task it will be gone forever. Are you sure you want to proceed?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger" data-remove="task">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4 class="text-center mt-1">All Books <img src="icons/books.png" style="width:auto;height:40px;" alt=""></h4>
                                        </div>                 
                                    </div>
                                </div>
                                <hr>
                            <div class="table-responsive mb-4 mt-3">
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">

                                    <thead>
                                        <tr>
                                            <th>S.NO</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Discription</th>
                                            <th>Units</th>
                                            <th>Image</th>
                                            <th>Action</th>
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
                                            <td style="width:5%"><?php echo $count; ?></td>
                                            <td style="width:18%;"><?php echo $rows['book_name'] ?></td>
                                            <td>₹ <?php echo $rows['book_price'] ?></td>
                                            <td style="width:32%;"><?php echo substr($rows['book_discription'],0,150) . "..." ?></td>
                                            <td><?php echo $rows['stock'] ?></td>
                                            <td>
                                                <div class="d-flex">
                                                
                                                        <img alt="avatar" class="img-fluid rounded d-block mx-auto" src="<?php if($rows['book_img'] == ""){ echo "../img/noi.png"; }else{ echo "../img/book-image/{$rows['book_img']}"; } ?>" style="width:auto;height:100px">
                                                </div>
                                            </td>
                                            <td class="">
                                                        <ul class="table-controls">
                                                            <!-- <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Settings"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-primary"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a> </li> -->
                                                            <li class="mr-2"><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a href="delete-book.php?did=<?php echo $rows['book_id'];?>" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                            </td>
                                        </tr>
                                            <?php $count++;
                                        }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->

<?php include "footer1.php"; ?>