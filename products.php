<?php 
        include "include/config.php";

        $query = "SELECT * FROM books";

        $result = mysqli_query($conn, $query) or die("Query Failed");

        $output = "";
        
        if(mysqli_num_rows($result) > 0){
            while($rows = mysqli_fetch_assoc($result)){
                $name = $rows['book_name'];
                if(strlen($name) > 25){
                $name = substr($rows['book_name'],0,25)."...";
                }else{
                    $name;
                }
                if($rows['book_img'] == ""){
                    $src = "img/noi.png";
                }else{
                    $src = "img/book-image/{$rows['book_img']}";
                }

         $output .=   "<div class='col-md-3 my-1'>
                        <div class='card shadow'>
                            <a href='singlebook.php?bid={$rows['book_id']}' target='_blank' style='margin: auto;'><img class='card-img-top demo-img' src='{$src}' alt='Card image cap'></a>
                                <div class='card-body border-top demo-card'>
                                <a href='singlebook.php?bid={$rows['book_id']}' target='_blank' style='text-decoration: none;color: black;'><h6 class='card-title text-center'>{$name}</h6></a>
                                    <b><p class='card-text'>₹. {$rows['book_price']}</p></b>
                                    <button id='atc' class='btn mt-2 d-flex justify-content-center' data-name='{$rows['book_name']}' data-id={$rows['book_id']} style='width: 100%;border:1px solid rgb(228, 228, 228);'>
                                    <i class='fa fa-shopping-cart' style='font-size:20px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-family:sans-serif;' class='d-inline'>Add to Cart</p></i></button>
                                </div>
                        </div>
                    </div>";
            }

        echo $output;

        }else{
            echo "<img src='img/nobook.jpg' style='width:70%;margin:auto'>";
        }
        
        
?>