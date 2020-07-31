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
    <link rel="stylesheet" href="CSS/userlogin.css">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/cute-clipart/50/000000/book.png">
    <title>Login</title>
</head>
<body>
    
    <div id="ok2" class="container">
        <div class="row">
            <div class="col-sm-12">
                
                        <div id="img">
                            <img src="img/user.png" alt="">
                        </div>
                        <div class="heading">
                            <p>Login to BookSelf</p>
                        </div>
            </div>
        </div>

                <div id="form" class="mx-auto">
                <?php
                        if(isset($_POST['submit'])){

                            include "include/config.php";

                            $username = $_POST['username'];

                            $password = md5($_POST['password']);

                            $query = "SELECT * FROM users WHERE user_username = '{$username}' AND user_password = '{$password}'";

                            $run = mysqli_query($conn, $query) or die("QUERY PROBELM");

                            if(mysqli_num_rows($run) > 0){

                              while($rows = mysqli_fetch_assoc($run)){
                                    $_SESSION['id'] = $rows['user_id'];
                                    $_SESSION['user'] = $rows['user_username'];
                                    $_SESSION["name"] = $rows['user_n'];

                                    header("Location: index.php");
                              }

                            }else{

                               $error = "wrong";
                               $error_mess = "Id or Password are wrong";

                            }

                        }
                ?>
                    <form action="user-login.php" method="POST">
                        <div class="form-group">
                        <label for="">Username or email address</label>
                          <input type="text" name="username" class="<?php echo $error ?>" onkeyup="saveValue(this)" id="exampleInputEmail1" placeholder="Username">
                          <small id="emailHelp1" style="display:none;" class="form-text text-danger"></small>
                          <?php if(!empty($error) || !empty($error_mess)) { ?>
                          <small id="emailHelp" class="form-text text-danger"><?php echo $error_mess ?></small>
                          <?php } ?>
                        </div>
                        <div class="form-group">
                        <a href="#"  style="color:blue;float:right;"><small id="forgotPass" class="form-text text-muted">Forget Password?</small></a>
                        <label for="">Password</label>
                          <input type="password" name="password" class="<?php echo $error ?>" onkeyup="saveValue(this)" id="exampleInputPassword1" placeholder="Password">
                          <small id="emailHelp2" style="display:none;" class="form-text text-danger"></small>
                          
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="d-inline" id="exampleCheck1">
                          <p class="d-inline">Show Password</p>
                        </div>
                        <div id="button">
                        <button type="submit" id="login" name="submit" class="">Login</button>
                        </div>
                    </form>
                </div>
                <div id="create">
                   <p>Don't Have? <a href="signup.php">Create an account</a></p>
                </div>
                <div id="tnc">
                    <ul>
                        <a href=""><li>Term</li></a>
                        <a href=""><li>Privacy</li></a>
                        <a href=""><li>Service</li></a>
                        <a href=""><li style="color: rgb(119, 119, 119);">Contact@BookSelf</li></a>
                    </ul>
                </div>
        
    </div>
    <script src="JS/jquery.js"></script>
    <script>
    $(document).ready(function(){
        $("#exampleCheck1").click(function(){
            let pass = document.getElementById('exampleInputPassword1');
            if (pass.type === "password") {
                pass.type = "text";
            }else {
                pass.type = "password";
            }
        });
        $("#exampleInputEmail1").on("blur", function(){
            let email = $("#exampleInputEmail1").val();
            if(email !== ""){
                $(this).removeClass("wrong");
                $("#emailHelp").hide();
                $("#emailHelp1").hide();
            }
            if(email == ""){
                $("#emailHelp").html("Please fill the section")
                return false; 
            }
        });
        $("#exampleInputPassword1").on("blur", function(){
            let pass = $("#exampleInputPassword1").val();
            if(pass !== ""){
                $(this).removeClass("wrong");
                $("#emailHelp2").hide();
            }
        });
        $("#login").on("click", function(){
            let email = $("#exampleInputEmail1").val();
            let pass = $("#exampleInputPassword1").val();
            if(email == ""){
                $("#exampleInputEmail1").addClass("wrong");
                $("#emailHelp1").show().text("Please Fill Username!");
                return false; 
            }
            if(pass == ""){
                $("#exampleInputPassword1").addClass("wrong");
                $("#emailHelp2").show().text("Please Enter Your Password");
                return false; 
            }
        });
        
    });
    </script>
    <script type="text/javascript">
        document.getElementById("exampleInputEmail1").value = getSavedValue("exampleInputEmail1");    // set the value to this input
        document.getElementById("exampleInputPassword1").value = getSavedValue("exampleInputPassword1");   // set the value to this input
        /* Here you can add more inputs to set value. if it's saved */

        //Save the value function - save it to localStorage as (ID, VALUE)
        function saveValue(e){
            var id = e.id;  // get the sender's id to save it . 
            var val = e.value; // get the value. 
            localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
        }

        //get the saved value function - return the value of "v" from localStorage. 
        function getSavedValue  (v){
            if (!localStorage.getItem(v)) {
                return "";// You can change this to your defualt value. 
            }
            return localStorage.getItem(v);
        }
    </script>
</body>
</html>