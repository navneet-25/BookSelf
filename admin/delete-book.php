<?php 
include "../include/config.php";

$delid = $_GET['did'];

$query = "SELECT * FROM books WHERE book_id = {$delid}";
$result = mysqli_fetch_assoc(mysqli_query($conn, $query));

$category = $result['category'];

$sql = "DELETE FROM books WHERE book_id = {$delid};
        UPDATE category SET total_books = total_books - 1 WHERE cat_id = {$category}";

if(mysqli_multi_query($conn, $sql)){
    unlink("../img/book-image/".$result['book_img']);
    header("Location: main.php");
}else{
    die("QUERRY FAILED");
}
?>