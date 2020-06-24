<?php
include "../include/config.php";
session_start();
if(isset($_SESSION["username"])){
    header("Location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        #ok2{
            min-height: 100%;
        }
        #form{
           margin-top: 16vh;
           width: 31%;
        }
        #img img{
            width: auto;
            height: 100px;
        }
        #img{
            margin-bottom: 15px;
        }
        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
            #form {
                width: 90%;
            }
        }
        .wrong{
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        box-shadow: 0px 0px 6px 1px #ff3333;
        outline: none;
        border: 1px solid red;
        }

    </style>
</head>
<body>
    
    <div id="ok2" class="container">

                <div id="form" class="mx-auto">
                <?php
                        if(isset($_POST['submit'])){

                            include "../include/config.php";

                            $username = $_POST['admin_username'];

                            $password = $_POST['admin_password'];

                            $query = "SELECT * FROM admin WHERE admin_username = '{$username}' AND admin_password = '{$password}'";

                            $run = mysqli_query($conn, $query) or die("QUERY PROBELM");

                            if(mysqli_num_rows($run) > 0){

                              while($rows = mysqli_fetch_assoc($run)){
                                  session_start();
                                    $_SESSION['admin_name'] = $rows['admin_name'];
                                    $_SESSION["username"] = $rows['admin_username'];

                                    header("Location: newadmin.php");
                              }

                            }else{

                               $error = "wrong";
                               $error_mess = "Worng Information";

                            }

                        }
                ?>
                    <form action="index.php" method="POST">
                        <div id="img">
                            <img src="../img/admin.png" class="rounded mx-auto d-block" alt="Admin">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Username</label>
                          <input type="text" name="admin_username" class="form-control <?php echo $error ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                          <?php if(!empty($error) || !empty($error_mess)) { ?>
                          <small id="emailHelp" class="form-text text-danger"><?php echo $error_mess ?></small>
                          <?php } ?>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="admin_password" class="form-control <?php echo $error ?>" id="exampleInputPassword1" placeholder="Password">
                          <a href="#"><small id="forgotPass" class="form-text text-muted">Forget Password</small></a>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                      </form>
                      
                </div>

        
    </div>
    <script src="JS/jquery.js"></script>
    <script>
    
    </script>

</body>
</html>