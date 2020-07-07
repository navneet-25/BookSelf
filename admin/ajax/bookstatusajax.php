<?php
            include "../../include/config.php";
            $query = "SELECT * FROM books ORDER BY book_id DESC";
            $result = mysqli_query($conn, $query) or die("Query Dosest work");
            $rows_count = mysqli_num_rows($result);
            $count = 1;
            $output = "";
            if($rows_count > 0){
                while($rows = mysqli_fetch_assoc($result)){
                    if($rows['book_img'] == ""){
                        $src = "../img/noi.png";
                    }else{
                        $src = "../img/book-image/{$rows['book_img']}";
                    }
        
            $output .= "<tr>
                <td class='text-center' style='width:5%'>{$count}</td>
                <td class='text-center' style='width:10%'><img alt='avatar' class='img-fluid rounded' src='{$src}' style='width:auto;height:100px'></td>
                <td class='text-center w-25'>{$rows['book_name']}</td>
                <td class='text-center'>₹ {$rows['book_price']}</td>
                <td class='text-center'>{$rows['total_stock']}</td>";

                if($rows['stock'] > 10){
                    $output .= "<td class='text-center font-weight-bold'><span class='text-success'>In Stock</span></td>";
                }elseif($rows['stock'] <= 10){
                    $output .= "<td class='text-center font-weight-bold'><span class='text-warning'>Soon will be Out of Stock</span></td>";
                }else{
                    $output .= "<td class='text-center font-weight-bold'><span class='text-danger'>Out Of Stock</span></td>";
                }
                $output .= "<td class='text-center'>{$rows['stock']}</td>
                <td class='text-center' data-toggle='modal' data-target='#registerModal' id='idch' data-bid='{$rows['book_id']}' style='cursor:pointer;'><img src='icons/plus.png' style='width:auto;height:25px'></td>
            </tr>";
            $count++;}
}

    echo $output;

?>