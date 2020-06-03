<?php include "header.php" ?>

<div class="container mt-4 border rounded">
              <div id="navbar" class="mt-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#showbook" role="tab" aria-controls="home" aria-selected="true">All Books</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#addbook" role="tab" aria-controls="profile" aria-selected="false">Add Book</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#category" role="tab" aria-controls="" aria-selected="false">Add Category</a>
                    </li>
                  </ul>
              </div>
      <div id="formcont">
          <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="showbook" role="tabpanel" aria-labelledby="home-tab">
              <h2>All Books</h2>
              <?php
              include "../include/config.php";
              $query = "SELECT * FROM books";
              $result = mysqli_query($conn, $query) or die("Query Dosest work");
              $rows_count = mysqli_num_rows($result);
              if($rows_count > 0){
              ?>
                      <!-- <p><?php echo $rows_count ?></p>  -->        
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
                              <?php

                                while($rows = mysqli_fetch_assoc($result)){
                              ?>
                              <tr>
                                <td><?php echo substr($rows['book_name'],0,20) . "..." ?></td>
                                <td><?php echo $rows['book_price'] ?></td>
                                <td><?php echo substr($rows['book_discription'],0,150) . "..." ?></td>
                                <td><img src="../img/book-image/<?php echo $rows['book_img'] ?>" style="max-width:100px; max-height:45px;" alt=""></td>
                                <td><a id="edit" href="edit-book.php?eid=<?php echo $rows['book_id'] ?>" class="rounded"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                <td><a id="delete" href="delete-book.php?did=<?php echo $rows['book_id']; ?>" class="rounded"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                              </tr>
                                <?php 
                                
                                  }
                                }
                                ?>
                            </tbody>
                          </table>
                  </div>
                  
              <div class="tab-pane fade" id="addbook" role="tabpanel" aria-labelledby="profile-tab">
                <form action="add-book.php" method="post" enctype="multipart/form-data">
                      <div class="form-row mb-4">
                        <div class="col">
                          <label for="book-name">Book Name</label>
                          <input name="book_name" type="text" id="book-name" class="form-control" placeholder="Book Name">
                        </div>
                        <div class="col">
                          <label for="book-price">Book Price</label>
                          <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">₹</div>
                          </div>
                            <input name="book_price" type="number" id="book-price" class="form-control" placeholder="Price">
                          </div>
                        </div>
                      </div>
                      <hr style="border-top: 1px solid #e8e8e8;">
                      <div class="row">
                        <div class="form-group col">
                            <label for="categoryl">Category Name</label>
                            <select class='form-control' id='category1' name='category1'>
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
                        <div class="col">
                          <label for="stock">Stock</label>
                          <input name="stock" type="number" id="stock" class="form-control" placeholder="Stock">
                        </div>
                      </div>
                      <hr style="border-top: 1px solid #e8e8e8;">
                      <div class="form-group mb-4">
                        <label for="exampleFormControlTextarea1">Discription</label>
                        <textarea class="form-control" name="book_discription" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <hr style="border-top: 1px solid #e8e8e8;">
                      <div class="form-group mb-4">
                          <label for="book-img">Upload Image</label>
                          <input name="book_img" type="file" class="form-control-file" id="book-img">
                      </div>
                      <hr style="border-top: 1px solid #e8e8e8;">
                      <div id="button">
                        <button type="submit" id="login" name="submit" style="background-color:#ff5757; color:white;" class="btn">Add Book</button>
                      </div>
                    </form>
                    </div>

                    <div class="tab-pane fade" id="category" role="tabpanel" aria-labelledby="profile-tab">
                <form action="add-catergory.php" method="post">
                      <div class="form-row mb-4">
                        <div class="col-md-12">
                          <label for="category-name">Category Name</label>
                          <input name="category_name" type="text" id="category-name" class="form-control" placeholder="Category Name" autocomplete="off">
                        </div>
                      <div id="button">
                        <button type="submit" id="login" name="cat-submit" style="background-color:#ff5757; color:white;" class="btn">Add Category</button>
                      </div>
                    </form>
                    </div>
              </div>
            </div>
        </div>

    <script src="../JS/jquery.js"></script>
    <script>


      
    </script>
    
<?php include "footer.php"; ?>