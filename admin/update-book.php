<?php
    include "../include/config.php";

if(empty($_FILES['book_img']['name'])){
    $book_img = $_POST['old-image'];
    }else{
                    //For Image
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
                    if(empty($error) == true){
                        move_uploaded_file($file_tmp, "../img/book-image/". $book_img);
                        $error = "Added Successfully";
                    }
                    unlink("../img/book-image/".$_POST['old-image']);
                }
                    $bookid = $_POST['book_id'];
                    $query1 = "SELECT * FROM books WHERE book_id = {$bookid}";
                    $run = mysqli_query($conn, $query1) or die("PROB");
                    $result = mysqli_fetch_assoc($run);
                    $oldcat = $result['category'];
                    $book_name = $_POST['book_name'];
                    $book_price = $_POST['book_price'];
                    $book_discription = $_POST['book_discription'];
                    $category = $_POST['category1'];
                    $stock = $_POST['stock'];
                    $query = "UPDATE books SET book_name = '{$book_name}',
                                    book_price = '{$book_price}', 
                                    book_discription = '{$book_discription}', 
                                    book_img = '{$book_img}', 
                                    category = '{$category}',
                                    stock = {$stock}
                                WHERE book_id = {$_POST['book_id']};
                                UPDATE category SET total_books = total_books - 1 WHERE cat_id = {$oldcat};
                                UPDATE category SET total_books = total_books + 1 WHERE cat_id = {$category}";

                    if(mysqli_multi_query($conn, $query)){
                        header("Location: main.php");
                    }else{
                        echo "problem";
                    }
?>