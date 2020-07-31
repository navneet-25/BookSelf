<?php include "../include/config.php";

session_start();

    $addid = $_SESSION['add'];
    $query = "SELECT * FROM addresses WHERE add_id = {$addid}";
    $run = mysqli_query($conn, $query) or die("QUERY FT GYI");
    $result = mysqli_fetch_assoc($run);

$output = "";

        $output .= "<div id='shiping'><h6 class='d-inline'>Shipping Address</h6><p class='d-inline' data-toggle='modal' data-target='#exampleModalCenter' style='cursor: pointer;color: rgb(38, 38, 255);margin-left: 7px;font-size: 12px;'>Change</p></div>
                        <div class='card-body' id='triel' style='padding: 5px 0;'>
                        <input id='addid' type='hidden' value='{$result['add_id']}'>
                        <h5 class='card-title'>{$result['user_name']}</h5>
                        <h6 class='card-subtitle mb-2 text-muted small'>Phone: {$result['user_phone']}</h6>
                        <p class='card-text'>{$result['address_name']}  {$result['zip']}</p>
                        <p class='card-text' style='font-size:15px'>City: {$result['city']}</p>
                    </div>";
    
    echo $output;


?>

