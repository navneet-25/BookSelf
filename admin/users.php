<?php include "header1.php";
    include "slider.php"; ?>

        <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="widget-heading">
                                <h4 class="text-center"> Users <img src="https://img.icons8.com/fluent/48/000000/user-male-circle.png" style="width: auto;height:35px;margin-bottom: 3px;"></h4>
                            </div>
                            <div class="table-responsive mb-4 mt-4">

                            
                                

                                <table class="multi-table table table-striped table-bordered table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Progress</th>
                                            <th>Phone</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            include "../include/config.php";
                                            $query = "SELECT * FROM users ORDER BY user_id ASC";
                                            $result = mysqli_query($conn, $query) or die("Query Dosest work");
                                            $rows_count = mysqli_num_rows($result);
                                            $count = 1;
                                            if($rows_count > 0){
                                                while($rows = mysqli_fetch_object($result)){
                                    ?>
                                        <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $rows->user_n ?></td>
                                            <td><?php echo $rows->user_email ?></td>
                                            <td><?php echo $rows->user_username ?></td>
                                            <td>
                                                <div class="progress br-30">
                                                    <div class="progress-bar br-30 bg-danger" role="progressbar" style="width: 25%" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><?php echo $rows->user_phone ?></td>
                                            <td class="text-center">
                                                <div class="dropdown custom-dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                        <a class="dropdown-item" href="profile.php?uid=<?php echo $rows->user_id; ?>" target="_blank">View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                                <?php $count++;}}?>
                                        
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>


            </div>

        </div>
    </div>




<?php include "footer1.php"; ?>