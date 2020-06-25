<?php include "header1.php"; include "slider.php"; ?>

     <!--  BEGIN CONTENT AREA  -->
     <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-spacing">

                    <!-- Content -->
                    <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
                        <?php include "../include/config.php";
                            $id = $_GET['uid'];
                            $query = "SELECT * FROM users WHERE user_id = {$id}";
                            $run = mysqli_query($conn, $query);
                            $reslut = mysqli_fetch_object($run);
                        ?>

                            <div class="user-profile layout-spacing">
                                <div class="widget-content widget-content-area">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="">Profile</h3>
                                        <a href="user_account_setting.html" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                    </div>
                                    <div class="text-center user-info">
                                        <?php if($reslut->user_gend == "Male"){ ?>
                                        <img src="../img/boy-<?php echo(rand(1,3)); ?>.png" alt="avatar" style="width:auto;height:80px;" >
                                        <?php }else{ ?>
                                            <img src="../img/girl-<?php echo(rand(1,4)); ?>.png" alt="avatar" style="width:auto;height:80px;" >
                                        <?php }?>
                                        <p class=""><?php echo $reslut->user_n ?></p>
                                    </div>
                                    <div class="user-info-list">

                                        <div class="">
                                            <ul class="contacts-block list-unstyled">
                                                <li class="contacts-block__item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> User
                                                </li>
                                                <li class="contacts-block__item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>Jan 20, 1989
                                                </li>
                                                <li class="contacts-block__item">
                                                    <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> <?php echo $reslut->user_email ?></a>
                                                </li>
                                                <li class="contacts-block__item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> <?php echo $reslut->user_phone ?>
                                                </li>
                                                <li class="contacts-block__item">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <div class="social-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                                            </div>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <div class="social-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                                            </div>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <div class="social-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>

                            <div class="education layout-spacing ">
                                <div class="widget-content widget-content-area">
                                    <h3 class="">Education</h3>
                                    <div class="timeline-alter">
                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">04 Mar 2009</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Royal Collage of Art</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>
                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">25 Apr 2014</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Massachusetts Institute of Technology (MIT)</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>
                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">04 Apr 2018</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>School of Art Institute of Chicago (SAIC)</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
                                    <div class="widget-content widget-content-area icon-pill">
                                        
                                        <ul class="nav nav-pills mb-3 mt-3" id="icon-pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="icon-pills-home-tab" data-toggle="pill" href="#icon-pills-home" role="tab" aria-controls="icon-pills-home" aria-selected="true"><img src="https://img.icons8.com/carbon-copy/100/000000/purchase-order.png" style="width:auto;height:25px;" /> Orders</a>
                                            </li>
                                            <!-- <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="icon-pills-profile-tab1" data-toggle="tab" href="#icon-pills-profile" role="tab" aria-controls="icon-pills-profile" aria-selected="false">Action</a>
                                                    <a class="dropdown-item"  id="icon-pills-profile-tab2" data-toggle="tab" href="#icon-pills-profile2" role="tab" aria-controls="icon-pills-profile2" aria-selected="false">Another action</a>
                                                </div>
                                            </li> -->

                                            <li class="nav-item">
                                                <a class="nav-link" id="icon-pills-contact-tab" data-toggle="pill" href="#icon-pills-contact" role="tab" aria-controls="icon-pills-contact" aria-selected="false"><img src="https://img.icons8.com/pastel-glyph/100/000000/worldwide-location.png" style="width:auto;height:25px;"/> Address </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="icon-pills-tabContent">
                                            <div class="tab-pane fade show active" id="icon-pills-home" role="tabpanel" aria-labelledby="icon-pills-home-tab">
                                                    <div id="tableCaption" class="col-lg-12 col-12 layout-spacing">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-4">
                                                                    <thead>
                                                                            <tr>
                                                                                <th class="text-center">#</th>
                                                                                <th>Image</th>
                                                                                <th>Name</th>
                                                                                <th>Price</th>
                                                                                <th>Quant</th>
                                                                                <th class="text-center">Status</th>
                                                                                
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php include "../include/config.php";
                                                                            $query1 = "SELECT * FROM pending_order WHERE user = {$id}";
                                                                            $run = mysqli_query($conn, $query1);
                                                                            $count = 1;
                                                                            while($rows = mysqli_fetch_object($run)){
                                                                            ?>
                                                                            <tr>
                                                                                <td class="text-center"><?php echo $count; ?></td>
                                                                                <td class="text-primary"><img src="../img/book-image/<?php echo $rows->book_img; ?>" alt="" style="width:auto;height:100px;"></td>
                                                                                <td style="width:32%"><?php echo $rows->book_name; ?></td>
                                                                                <td style="width:15%">₹.<?php echo $rows->total_amount; ?></td>
                                                                                <td style="width:8%;text-align:center"><?php echo $rows->book_quant; ?></td>
                                                                            <td class="text-center"><?php if($rows->status == 1 || $rows->status == 2 || $rows->status == 3 || $rows->status == 5){ ?><span class=" shadow-none badge outline-badge-warning">Pending</span> <?php }elseif($rows->status == 4){ ?><span class=" shadow-none badge outline-badge-danger">Canceled</span> <?php }else{ ?><span class=" shadow-none badge outline-badge-success">Deliverd</span> <?php } ?></td>
                                                                                
                                                                            </tr>
                                                                            <?php $count++;}?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                    </div>   
                                            </div>
                                            <div class="tab-pane fade" id="icon-pills-profile" role="tabpanel" aria-labelledby="icon-pills-profile-tab1">
                                                <div class="media">
                                                    <img class="mr-3" src="assets/img/profile-32.jpg" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="icon-pills-profile2" role="tabpanel" aria-labelledby="icon-pills-profile-tab2">
                                                <p class="">
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                            </div>

                                            <div class="tab-pane fade" id="icon-pills-contact" role="tabpanel" aria-labelledby="icon-pills-contact-tab">
                                            <div id="tableCaption" class="col-lg-12 col-12 layout-spacing">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-4">
                                                                    <caption>List of all users</caption>
                                                                    <thead>
                                                                            <tr>
                                                                                <th class="text-center">#</th>
                                                                                <th>Name</th>
                                                                                <th>Email</th>
                                                                                <th class="">Status</th>
                                                                                <th>Register</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-center">1</td>
                                                                                <td class="text-primary">Shaun Park</td>
                                                                                <td>johndoe@yahoo.com</td>
                                                                                <td class=""><span class=" shadow-none badge outline-badge-warning">Complete</span></td>
                                                                                <td>5 min ago</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-center">2</td>
                                                                                <td class="text-primary">Andy King</td>
                                                                                <td>andyking@gmail.com</td>
                                                                                <td class=""><span class="badge outline-badge-success shadow-none">Pending</span></td>
                                                                                <td>10 min ago</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-center">3</td>
                                                                                <td class="text-primary">Mary McDonald</td>
                                                                                <td>lisadoe@live.com</td>
                                                                                <td class=""><span class="badge outline-badge-info shadow-none">In Progress</span></td>
                                                                                <td>1 hour ago</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-center">4</td>
                                                                                <td class="text-primary">Vincent Carpenter</td>
                                                                                <td>vinnyc@outlook.com</td>
                                                                                <td class=""><span class="badge outline-badge-danger shadow-none">Cancel</span></td>
                                                                                <td>1 day ago</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                    </div>
                                            </div>
                                        </div>

                                    </div>

                            </div>

                    </div>
                    <!-- End Content -->
                </div>

            </div>
     </div>


<?php include "footer1.php"; ?>