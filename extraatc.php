<?php 
    include "include/config.php";
    session_start();
    if(!isset($_SESSION['user'])){
        echo 0;
    }else{
        
            $uid = $_SESSION['id'];

            $book_id = $_POST['insert_id'];

            $getbookname = $_POST['bookname'];       

            $query1 = "SELECT * FROM books WHERE book_id = {$book_id}";

            $run1 = mysqli_query($conn, $query1) or die("SOME PROB");

            $row = mysqli_fetch_assoc($run1);

            $bookname = $row['book_name'];

            $bookprice = $row['book_price'];

            $bookimg = $row['book_img'];

            $quant = $_POST['book_q'];

            $totalp = $bookprice * $quant;

                $query3 = "SELECT * FROM orders WHERE user_id = {$uid}";

                $run2 = mysqli_query($conn, $query3) or die("QUERY FAILED");


                $array = array();

                while($reslut = mysqli_fetch_assoc($run2)){
                
                $array[] = $reslut['book_name'];

                }   

                if(in_array($getbookname, $array)){

                    $query4 = "SELECT * FROM orders WHERE book_name = '{$getbookname}' AND user_id = {$uid}";

                    $run3 = mysqli_query($conn, $query4) or die("QUERY FAILED");

                    $reslut1 = mysqli_fetch_assoc($run3);

                    $quant1 = $reslut1['book_quant'];

                    $total1 = $reslut1['total'];

                    $quant2 = $_POST['book_q'];

                    $total = $bookprice * $quant2;

                    if($quant1 <= 4){

                    $query5 = "UPDATE orders SET book_quant = {$quant2}, total = {$total} WHERE book_name = '{$getbookname}' AND user_id = {$uid}";

                        if(mysqli_query($conn, $query5)){
                            echo 1;
                        }else{
                            echo 2;
                        }
                    }else{
                        echo 1;
                    }
                }else{
                   $query2 = "INSERT INTO orders(book_name, book_price, book_img, user_id, total,book_quant) 
                    VALUES ('{$bookname}','{$bookprice}','{$bookimg}','{$uid}','{$totalp}','{$quant}')";
                        if(mysqli_query($conn, $query2)){
                            echo 1;
                        }else{
                            echo mysqli_error();
                        }
                }
                        
            
    }
?>