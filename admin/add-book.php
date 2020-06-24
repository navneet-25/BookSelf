<?php 

if(isset($_POST['submit'])){
                    include "../include/config.php";
                    //For Image
                        if(file_exists($_FILES['bookimg']['tmp_name'])){
                            $file_name = $_FILES['bookimg']['name'];
                            $file_size = $_FILES['bookimg']['size'];
                            $file_tmp = $_FILES['bookimg']['tmp_name'];
                            $file_type = $_FILES['bookimg']['type'];
                            $file1 = explode('.', $file_name);
                            $file2 = end($file1);
                            $file_ext = strtolower($file2);
                            $extension = array("jpg", "jpeg", "png");
                            $book_img = rand(10000, 99999).'.'.$file_ext;

                            if(in_array($file_ext,$extension) === false){
                                $error = "File must be an Image";
                            }
                            if($file_size > 2097152){
                                $error = "Image size muse be bellow 2MB";
                            }
                            else{
                                move_uploaded_file($file_tmp, "../img/book-image/". $book_img);
                                $error = "Added Successfully";
                            } 
                            
                        }else{
                            $book_img = "";
                        }
                        $book_name = $_POST['bookname'];
                        $book_price = $_POST['bookprice'];
                        $discount = $_POST['discount'];
                        $sellp = $_POST['sellingprice'];
                        if($_POST['writer']){
                        $writer = $_POST['writer'];
                    }else{
                        $writer = "BookSelf";
                    }
                        $category = $_POST['category'];
                        $stock = $_POST['demo3_21'];
                        $book_discription = $_POST['discription'];

                        
                        
                        $query = "INSERT INTO `books`(`book_name`, `book_price`, `book_discription`, `stock`, `category`, `book_img`, `book_sp`, `book_disc`, `Writer`)
                                    VALUES ('{$book_name}','{$book_price}', '{$book_discription}', '{$stock}', '{$category}', '{$book_img}','{$sellp}', '{$discount}', '{$writer}');
                                    UPDATE category SET total_books = total_books + 1 WHERE cat_id = {$category}";
                            if(mysqli_multi_query($conn, $query)){
                                header("Location: allbooks.php");
                            }else{
                                echo mysqli_error($conn);
                                echo $error;
                            } 
}
?>