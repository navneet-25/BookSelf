<?php 
        include "include/config.php";

        $catid = $_POST['cat_id'];

        $bid = $_POST['book_id'];

        $query1 = "SELECT * FROM books WHERE category = {$catid} AND NOT book_id = {$bid} LIMIT 5";

        $result = mysqli_query($conn, $query1) or die("Query Failed");

        /* $ary = array(); 

        while($result2 = mysqli_fetch_assoc($result)){
            $ary[] = $result2['book_id'];
        }
        $key = array_rand($ary);

        $id = $ary[$key]; */

        $output = "";
        
        if(mysqli_num_rows($result) > 0){
            while($rows = mysqli_fetch_assoc($result)){

            /* $query = "SELECT * FROM books WHERE book_id = {$id}";

                $result3 = mysqli_query($conn, $query) or die("Query Failed");

                $rows1 = mysqli_fetch_assoc($result3); */

                $name = $rows['book_name'];
                if(strlen($name) > 15){
                $name = substr($rows['book_name'],0,15)."...";
                }else{
                    $name;
                }
                if($rows['book_img'] == ""){
                    $src = "img/noi.png";
                }else{
                    $src = "img/book-image/{$rows['book_img']}";
                }

         $output .=   "<div class='col-sm-2 p-0 mx-auto'>
                        <div class='card'>
                                <a href='singlebook.php?bid={$rows['book_id']}' style='margin: auto;'>
                                <img class='card-img-top demo-img' src='{$src}' alt='Card image cap'></a>
                                <div class='card-body border-top demo-card'>
                                    <a href='singlebook.php?bid={$rows['book_id']}' target='_blank' style='text-decoration: none;color: black;'>
                                    <h6 class='card-title text-center'>{$name}</h6></a>
                                    <b><p class='card-text' style='color:#b50000;font-weight:500;font-size:18px'>₹ {$rows['book_price']}</p></b>
                                    <!--  <button id='atc' class='btn btn-outline-primary mt-2 d-flex justify-content-center' data-name='{$rows['book_name']}' data-id={$rows['book_id']} style='width: 100%;'><i class='fa fa-shopping-cart' style='font-size:20px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-family:sans-serif;' class='d-inline'>Add to Cart</p></i></button> -->
                                </div>
                        </div>
                        </div>";
            }

        echo $output;

        }else{
            echo "<h3 class='mx-auto'>No Other Books Avilable In This Category!!</h3>";
        }
        
        
?>