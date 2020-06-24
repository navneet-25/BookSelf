<?php
        include "../include/config.php";

                    $query1 = "SELECT * FROM books";
                    $run = mysqli_query($conn, $query1) or die("ok PROB");
                    $book_name = $_POST['book'];
                    $array = array();
                    while($reslut = mysqli_fetch_assoc($run)){
                    $array[] = $reslut['book_name'];
                    }
                    if(in_array($book_name, $array)){
                        echo 1;
                    }else{
                        echo $book_name;
                    }

?>