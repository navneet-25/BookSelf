<?php include "include/config.php";
        session_start();
        if(isset($_SESSION["user"])){
            header("Location: index.php");
        } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- FAFAFA Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        body{
            background-color: #fcfcfc;
        }
        #ok2{
            min-height: 100%;
        }
        #form{
           margin-top: 12vh;
           width: 31%;
           background-color: #ffffff;
           border-radius: 8px;
           box-shadow: 0px 0px 4px 1px #d6d6d6;
        }
        #form form{
            padding: 15px;
        }
        #img{
            font-size: 100px;
            text-align: center;
        }
        #button{
            width: fit-content;
            margin: 3vh auto;
        }
        #login{
            padding: 1vh 10vh;
        }
        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
            #form {
                width: 90%;
            }
        }
        .heading{
            margin-bottom: 2.5vh;
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

                            include "include/config.php";

                            $username = $_POST['username'];

                            $password = $_POST['password'];

                            $query = "SELECT * FROM users WHERE user_username = '{$username}' AND user_password = '{$password}'";

                            $run = mysqli_query($conn, $query) or die("QUERY PROBELM");

                            if(mysqli_num_rows($run) > 0){

                              while($rows = mysqli_fetch_assoc($run)){
                                  session_start();
                                    $_SESSION['id'] = $rows['user_id'];
                                    $_SESSION['user'] = $rows['user_username'];
                                    $_SESSION["name"] = $rows['user'];

                                    header("Location: index.php");
                              }

                            }else{

                               $error = "wrong";
                               $error_mess = "Worng Information";

                            }

                        }
                ?>
                    <form action="user-login.php" method="POST">
                        <div id="img">
                            <i class="fa fa-user" id="fafa" aria-hidden="true"></i>
                        </div>
                        <div class="heading">
                            <h4 style="font-family: Georgia, serif;">User Login</h4>
                        </div>
                        <div class="form-group">
                          <input type="text" name="username" class="form-control <?php echo $error ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                          <?php if(!empty($error) || !empty($error_mess)) { ?>
                          <small id="emailHelp" class="form-text text-danger"><?php echo $error_mess ?></small>
                          <?php } ?>
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" class="form-control <?php echo $error ?>" id="exampleInputPassword1" placeholder="Password">
                          <a href="#"><small id="forgotPass" class="form-text text-muted">Forget Password</small></a>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="showpass()">
                          <label class="form-check-label" for="exampleCheck1">Show Password</label>
                        </div>
                        <div id="button">
                        <button type="submit" id="login" name="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>

        
    </div>
    <script src="JS/jquery.js"></script>
    <script>
        function showpass(){
    let pass = document.getElementById('exampleInputPassword1');

    if (pass.type === "password") {
        pass.type = "text";
    }else {
        pass.type = "password";
    }
}
    </script>

</body>
</html>