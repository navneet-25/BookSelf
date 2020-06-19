<?php include "include/config.php";

session_start();

$uid = $_SESSION['id'];

$query = "SELECT * FROM addresses WHERE user_id = {$uid}";

$reslut = mysqli_query($conn, $query) or die("Query Failed");

$output = "";

if(mysqli_num_rows($reslut) > 0){
    while($rows = mysqli_fetch_assoc($reslut)){
        $output .= "<div class='col-md-3 mt-4'>
                            <div class='card-body ml-3' style='box-shadow: 0px 0px 10px #c4c4c4;width: 100;height:auto'>
                                <h5 class='card-title'>{$rows['user_name']}</h5>
                                <h6 class='card-subtitle mb-2 text-muted'>{$rows['user_phone']}</h6>
                                <p class='card-text' style='height:85px'>{$rows['address_name']}</p>
                                <a id='submit' href='revieworder.php' data-aid={$rows['add_id']} class='btn btn-light'>Deliver to this</a><br>
                                <a href='#' data-eid={$rows['add_id']} id='edit' class='card-link' style='color:green'>EDIT</a>
                                <a href='#' data-did={$rows['add_id']} id='delete' class='card-link' style='margin-left: 3rem;color:red'>DELETE</a>
                            </div> 
                    </div>";
    }
    echo $output;
}else{
    echo "<div class='col-md-3 mt-4'>
                <div class='card-body ml-3' style='box-shadow: 0px 0px 10px #c4c4c4;width: 100;height:234px;'>
                    <h5 class='card-title' style='margin:80px 14px;'>No Address Found</h5>

                </div>
            </div>";
}


?>