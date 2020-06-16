<?php include "include/config.php";

$search_value = $_POST["search"];

$sql = "SELECT * FROM books WHERE book_name LIKE '%{$search_value}%' OR book_name LIKE '{$search_value}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
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
                    <img class='card-img-top demo-img' src='{$src}' alt='Card image cap'>
                        <div class='card-body border-top demo-card'>
                            <h6 class='card-title text-center'>{$name}</h6>
                            <b><p class='card-text'>₹. {$rows['book_price']}</p></b>
                            <button id='atc' class='btn mt-2 d-flex justify-content-center' data-name='{$rows['book_name']}' data-id={$rows['book_id']} style='width: 100%;border:1px solid rgb(228, 228, 228);'><i class='fa fa-shopping-cart' style='font-size:20px;' aria-hidden='true'>&nbsp;&nbsp;<p style='font-family:sans-serif;' class='d-inline'>Add to Cart</p></i></button>
                        </div>
                </div>
            </div>";
    }

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
