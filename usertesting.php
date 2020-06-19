<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: user-login.php");
} ?>
<?php include "loginheader.php"; ?>
<div id="main" style="box-shadow: 0 0 8px -1px #ebebeb, 0 0 8px -1px #ebebeb; border-radius:5px; min-height:500px;">
            <div id="all-elements" class="mt-4">
                <h3 style="text-align:center; padding: 12px;">Your Cart</h3>
            </div>
             <div class="dropdown-divider" style="width:95%;margin:auto"></div>
                <div id="cart" class="" style="height:100px;">
                <?php
                    include "include/config.php";
                    $userid = $_SESSION['id'];
                    $query = "SELECT * FROM orders WHERE user_id = {$userid}";
                    $result = mysqli_query($conn, $query) or die("Query Dosest work");
                    if(mysqli_num_rows($result) > 0){
                ?>
                    <div class="row">
                        <div class="col-md-8">
                        <table class="table table-striped">
                            <thead class="text-center">
                              <tr>
                                <th>Book Name</th>
                                <th>Book Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php while($rows = mysqli_fetch_assoc($result)){ ?>
                              <tr>
                                <td><img src="img/book-image/<?php echo $rows['book_img'];?>" alt="img" style="width:100px;height:100px"></td>
                                <td><?php echo $rows['book_name'] ?></td>
                                <td><?php echo $rows['book_price'] ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr><!-- 
                              <div class="dropdown-divider" style="width:92%;margin:auto"></div> -->
                            <?php } ?>
                            </tbody>
                          </table>
                        </div>
                        <div class="col-md-4">
                            
                        </div>       
                    </div>
                    <?php } ?>
                </div>
    </div>
<?php include "footer.php"; ?>