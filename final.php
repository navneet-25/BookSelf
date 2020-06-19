<?php
include "include/config.php";
session_start();
$uid = $_SESSION['id'];
$address = $_SESSION['add'];
date_default_timezone_set("Indian/Kerguelen");
$quer1 = "SELECT * FROM orders WHERE user_id = {$uid}";
$run1 = mysqli_query($conn, $quer1) or die("ok die");
if(mysqli_num_rows($run1) > 0){
    while($rows = mysqli_fetch_assoc($run1)){
        if($rows['book_img'] == ""){
            $src = "";
        }else{
            $src = $rows['book_img'];
        }
        $trackingid = date("jmY").rand(1,99999).date("his");
        $bookname = $rows['book_name'];
        $quer4 = "SELECT * FROM books WHERE book_name = '{$bookname}'";
        $run4 = mysqli_query($conn, $quer4);
        $row1 = mysqli_fetch_assoc($run4);
        $bookid = $row1['book_id'];
        $bookquant = $rows['book_quant'];
        $bookprice = $rows['total'];
        $date = date("j F Y");
        $paymeth = "COD"; 
        $quer2 = "INSERT INTO pending_order(book_name,book_quant,tracking_id,total_amount,date,payment_meth,user,address,book_img,bookid)
                    VALUES ('{$bookname}','{$bookquant}','{$trackingid}','{$bookprice}','{$date}','{$paymeth}','{$uid}','{$address}','{$src}','{$bookid}')";
        $run2 = mysqli_query($conn, $quer2);
     }
    $quer3 = "DELETE FROM orders WHERE user_id = {$uid}";
$run3 = mysqli_query($conn, $quer3);
unset($_SESSION['add']);
echo "index.php"; 
}else{
    echo "PROBELM";
} 



?>