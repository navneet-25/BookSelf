<?php 
        include "include/config.php";

        session_start();

        if(isset($_SESSION['id'])){
            
            $uid = $_SESSION['id'];
            $query1 = "SELECT * FROM orders WHERE user_id = {$uid}";

        $result1 = mysqli_query($conn, $query1) or die("Query Failed");

        $array = array();

                while($rows1 = mysqli_fetch_assoc($result1)){
                
                $array[] = $rows1['book_name'];

                } 
        }
        $limit = 8;
            if(isset($_POST['page_no'])){
                $page = $_POST['page_no'];
            }else{
                $page = 0;
            }

        $query = "SELECT * FROM books LIMIT {$page}, $limit";

        $result = mysqli_query($conn, $query) or die("Query Failed");

        $output = "";

        
        if(isset($_POST['page_no'])){
            $last_id = $_POST['page_no'];
        }else{
            $last_id = 0;
        }
        
        if(mysqli_num_rows($result) > 0){
            $output .= "<div class='row my-2'>";
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

         $output .=   "<div class='col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 my-1'>
                        <div class='card shadow'>";
                        if(isset($_SESSION['id'])){
                            if(in_array($rows['book_name'], $array)){
                                $output .=   "<div style='width: 71px;background: rgb(80, 80, 80, 0.7);text-align: center;margin: 5px;position: absolute;color: white;height:31px;padding: 3px'>Added</div>";
                            }
                        }
        $output .=    "<a href='singlebook.php?bid={$rows['book_id']}' target='_blank' style='margin: auto;'><img class='card-img-top demo-img' src='{$src}' alt='Card image cap'></a>
                                <div class='card-body border-top demo-card'>
                                <a href='singlebook.php?bid={$rows['book_id']}' target='_blank' style='text-decoration: none;color: black;'><h6 class='card-title text-center'>{$name}</h6></a>
                                    <b><p class='card-text'>₹. {$rows['book_price']}</p></b>
                                    <button id='atc' class='btn mt-2 d-flex justify-content-center' data-name='{$rows['book_name']}' data-id={$rows['book_id']} style='width: 100%;border:none;color:white;background: linear-gradient(180deg, rgba(236,159,0,1) 0%, rgba(166,122,0,1) 100%);'>
                                    <i class='fa fa-shopping-cart' style='font-size:18px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-weight:400;font-family:Quicksand;' class='d-inline'>Add to Cart</p></i></button>
                                </div>
                        </div>
                    </div>";
            $last_id++;}

            $output .= "</div><div class='row justify-content-center'>
            <button id='show_more' class='btn mt-5' data-sm='{$last_id}'>Show More <i class='fa fa-angle-down' aria-hidden='true'></i></button>
            </div>";

        echo $output;

        }
?>