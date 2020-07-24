<?php

include "include/config.php";

$search_term = $_POST['search'];

$sql = "SELECT * FROM books WHERE book_name LIKE '%{$search_term}%' OR book_name LIKE '{$search_term}%' OR Writer LIKE '%{$search_term}%' LIMIT 10";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

$output = "<ul>";

	if(mysqli_num_rows($result) > 0){  
		while($row = mysqli_fetch_assoc($result)){
			$output .= "<li>{$row['book_name']}</li>";
		}
  }else{  
  	$output .= "<li>Book Not Found</li>";
  } 
$output .= "</ul>";

echo $output;

?>
