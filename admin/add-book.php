<?php 

if(isset($_POST['submit'])){

                    include "../include/config.php";
                    //For Image
                    $query1 = "SELECT * FROM books";
                    $run = mysqli_query($conn, $query1) or die("ok PROB");
                    $book_name = $_POST['book_name'];
                    $array = array();
                    while($reslut = mysqli_fetch_assoc($run)){
                    $array[] = $reslut['book_name'];
                    }
                    if(!in_array($book_name, $array)){
                    $file_name = $_FILES['book_img']['name'];
                    $file_size = $_FILES['book_img']['size'];
                    $file_tmp = $_FILES['book_img']['tmp_name'];
                    $file_type = $_FILES['book_img']['type'];
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
                    
                        $book_price = $_POST['book_price'];
                        $book_discription = $_POST['book_discription'];
                        $category = $_POST['category1'];
                        $stock = $_POST['stock'];
                        $query = "INSERT INTO books(book_name,book_price,book_discription,book_img,category,stock)
                                VALUES ('{$book_name}', '{$book_price}', '{$book_discription}', '{$book_img}','{$category}',{$stock});
                                    UPDATE category SET total_books = total_books + 1 WHERE cat_id = {$category}";
                            if(mysqli_multi_query($conn, $query)){
                                header("Location: main.php");
                            }else{
                                echo mysqli_error($conn);
                                echo $error;
                            }
                        }else{
                            echo "Book Alredy Exist";
                        }
}
?>