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
    <script src="https://kit.fontawesome.com/53c7c997e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/header.css">
    <script src="JS/jquery.js"></script>
    <style>
    @font-face {
        font-family: Quicksand;
        src: url(fonts/static/Quicksand-Medium.ttf);
    }
    body{
        font-family: 'Quicksand', sans-serif;
        font-weight:500;
    }
    #search:focus{
        outline:0px !important;
        -webkit-appearance:none;
        box-shadow: none !important;
    }
    </style>
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/cute-clipart/50/000000/book.png">
    <title>BookSelf</title>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row mx-0 border-bottom">
            <div class="col-md-3 my-2">
                <!-- <div class="my-2 ml-3"> -->
                        <a href="index.php"><img src="img/logo.PNG" alt="Logo" class="logo my-0 mx-3"></a>
                <!-- </div> -->
            </div>
            <div class="col-md-6">
            <form class="my-3">
                    <div class="input-group search" style="margin-top: 1.8rem;">
                      <input id="search" style="outline:none;border-radius: 20px 0px 0px 20px;border-right:none;outline:none;" type="text" class="form-control search" placeholder="Search">
                        <button type="button" class="btn" style="padding:0px 10px;cursor:pointer;border-radius: 0px 20px 20px 0px;background-color:white;border-left:none;border-right: 1px solid lightgrey;border-bottom: 1px solid lightgray;border-top: 1px solid lightgray;" type="submit">
                            <i class="fa fa-search" style="color:#ff4a3d" aria-hidden="true"></i>
                        </button>
                    </div>
                  </form> 
            </div>
            <!-- <div class="col-md-3 mt-2">
                &nbsp;&nbsp;<i class="fa fa-user-circle" style="font-size:50px" aria-hidden="true"></i>&nbsp;&nbsp;
                <p class="d-inline" style="font-size:40px">|</p>&nbsp;&nbsp;
                <p class="d-inline" style="font-size:30px">Hey, Navneet</p>
            </div> -->
             <div class="col-md-3">
                <!-- <button type="button" style="display:inline-block;" class="btn py-0 px-3"><i class="fab fa-facebook"></i></button>
                <button type="button" style="display:inline-block;" class="btn py-0 px-3"><i class="fa fa-instagram" aria-hidden="true"></i></button>
                <a href="user-login.php"> style="margin:auto"
                <button type="button" style="display:inline-block;" class="btn py-0 px-3"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                </a> -->
                <!-- <i class="fab fa-facebook" style="font-size:21px;padding:0 0.3rem"></i>
                <i class="fa fa-instagram" aria-hidden="true" style="font-size:21px;padding:0 0.3rem"></i>
                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:21px;padding:0 0.3rem"></i>
                <p class="d-inline" style="font-size:21px;">|</p>&nbsp;
                <a href="user-login.php"><i class="fa fa-sign-in" style="font-size:21px;" aria-hidden="true"></i></a> -->
                <ul id="log">
                    <li><a href="#"><i class="fa fa-facebook-official" style="font-size:21px;padding:0 0.3rem"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true" style="font-size:21px;padding:0 0.3rem"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:21px;padding:0 0.3rem"></i></a></li>
                    <li><p class="d-inline" style="font-size:21px;">|</p>&nbsp;</li>
                    <li><a href="user-login.php" style="color:blue"><i class="fa fa-sign-in" style="font-size:21px;" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>