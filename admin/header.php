<?php
include "../include/config.php";
session_start();
if(!isset($_SESSION["username"])){
    header("Location: http://localhost/BookSelf/admin/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSRAP library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FAFAFA Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Admin</title>
    <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }
        .text-center{
            width: fit-content;
            margin: 25px auto;
        }
        .center{
            width: fit-content;
            margin: auto;
        }
        .crimsion{
            color: white;
            background-color: #ff5757;
        }
        #formcont{
            width: 80%;
            margin: 3rem auto;
        }
        #show{
            width: 90%;
            margin: 3rem auto;
        }
        #button{
            width: fit-content;
            margin: 3vh auto;
        }
        #button:hover{
            box-shadow: 0px 0px 10px 1px #fc0339;
        }
        #login{
            padding: 1vh 10vh;
        }
        td{
            text-align: center;
        }
        #edit:link, #edit:visited {
            background-color: #7c7d7c;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
        #edit:hover, #edit:active {
            background-color: #a6a6a6;
        }
        td a:link, a:visited {
            background-color: #d90000;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
        #delete:hover, #delete:active {
            background-color: #ff1f1f;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row mx-0 border-bottom">
            <div class="col-md-3 center">
                <img src="../img/logo.PNG" alt="">
            </div>
            <div class="col-md-6 center">
            <?php 
            include "../include/config.php";
            $query = "SELECT admin_name FROM admin WHERE admin_username = '{$_SESSION["username"]}'";
            $result = mysqli_query($conn, $query) or die("ok");
            $var = mysqli_fetch_assoc($result);
            ?>
                <h3 class="text-center">Welcome <?php echo $var['admin_name']; ?></h3>
            </div>
            <div class="col-md-3 text-center">
               <a href="logout_admin.php"><button type="button" class="btn crimsion">Logout</button></a> 
            </div>
        </div>
    </div>