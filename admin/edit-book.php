<?php include "header.php"; ?>

<div class="container mt-4 border rounded">
    <div class="header border-bottom"> <h2 class="text-center">Edit</h2> </div>
        <div style="width:80%; margin: 2rem auto">
            <form action="update-book.php" method="post" enctype="multipart/form-data">
                <?php
                include "../include/config.php";
                $editid = $_GET['eid'];
                $sql = "SELECT * FROM books JOIN category ON books.category = category.cat_id WHERE book_id = {$editid}";
                $query = mysqli_query($conn, $sql) or die("Query Failed");
                $rows = mysqli_fetch_assoc($query);
                ?>
                        <div class="form-row mb-4">
                            <div class="col">
                            <label for="book-name">Book Name</label>
                            <input name="book_name" type="text" id="book-name" class="form-control" placeholder="Book Name" value="<?php echo $rows['book_name'] ?>">
                            <input name="book_id" type="hidden" id="book-id" class="form-control" value="<?php echo $rows['book_id'] ?>">
                            </div>
                            <div class="col">
                            <label for="book-price">Book Price</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">₹</div>
                            </div>
                                <input name="book_price" type="number" id="book-price" class="form-control" placeholder="Price" value="<?php echo $rows['book_price'] ?>">
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
                                                if($rows['category'] == $rowe1['cat_id']){
                                                    $selected = "selected";
                                                }else{
                                                    $selected = "";
                                                }
                                                echo "<option {$selected} value='{$rowe1['cat_id']}'>{$rowe1['cat_name']}</option>";
                                            }
                                        }
                                ?> 
                                </select>
                            </div>
                            <div class="col">
                                <label for="stock">Stock</label>
                                <input name="stock" type="number" id="stock" class="form-control" value="<?php echo $rows['stock'] ?>" placeholder="Stock">
                            </div>
                      </div>
                        <hr style="border-top: 1px solid #e8e8e8;">
                        <div class="form-group mb-4">
                            <label for="exampleFormControlTextarea1">Discription</label>
                            <textarea class="form-control" name="book_discription" id="exampleFormControlTextarea1" rows="3"><?php echo $rows['book_discription'] ?></textarea>
                        </div>
                        <hr style="border-top: 1px solid #e8e8e8;">
                        <div class="row">
                        <div class="col-4 form-group mb-4">
                            <label for="book-img">Upload Image</label>
                            <input name="book_img" type="file" class="form-control-file" id="book-img" style="display: none;">
                            <div id="uploadimg" class="border rounded" style="max-width:fit-content; height:120px; background:#d9d9d9;">
                            <img src="../img/addbutton.PNG" alt="" style="width:137px; height:118px; cursor: pointer;">
                            <input type="hidden" name="old-image" value="<?php echo $rows['book_img']; ?>">
                            </div>
                        </div>
                        <div class="col" style="margin:auto;">
                        <img src="../img/book-image/<?php echo $rows['book_img'] ?>" alt="" style="max-width:140px; height:120px">
                        </div>
                        </div>
                        <hr style="border-top: 1px solid #e8e8e8;">
                        <div id="button">
                            <button type="submit" id="login" name="submit" style="background-color:#ff5757; color:white;" class="btn">Update Book</button>
                        </div>
            </form>
            <script>
            $("#uploadimg img").click(function() {
                $("input[id='book-img']").click();
            });
            </script>

        </div>
</div>
<?php include "footer.php" ?>