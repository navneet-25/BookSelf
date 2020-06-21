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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
                <link rel="stylesheet" href="CSS/signup.css">
                <?php 
                        include "include/config.php";
                            if(isset($_POST['submit'])){

                                $Uname = $_POST['username'];
                                $Upass = md5($_POST['password']);
                                $Umob = $_POST['phone'];
                                $Uemail = $_POST['email'];
                                $name = $_POST['name'];
                                $gend = $_POST['optradio'];
                                
                                    $sql = "SELECT user_username FROM users WHERE user_username = '{$Uname}'";
                                    $run = mysqli_query($conn, $sql) or die("Query PRoblem". mysqli_error());
                                
                                    if(mysqli_num_rows($run) > 0){
                                        $username_error = "Username Alreddy Takken..!!";
                                    }else{
                                        $sqli = "INSERT INTO users(user_n,user_username,user_email,user_phone,user_password,user_gend) VALUES ('{$name}', '{$Uname}', '{$Uemail}', '{$Umob}', '{$Upass}','{$gend}')";
                                        if(mysqli_query($conn, $sqli)){

                                            $query = "SELECT * FROM users WHERE user_username = '{$Uname}' AND user_password = '{$Upass}'";

                                            $run = mysqli_query($conn, $query) or die("QUERY PROBELM");

                                            while($rows = mysqli_fetch_assoc($run)){
                                                
                                            $_SESSION['id'] = $rows['user_id'];
                                            $_SESSION['user'] = $rows['user_username'];
                                            $_SESSION["name"] = $rows['user_n'];
                                            header("Location: index.php");
                                            }
                                        }
                                    }
                                
                                    mysqli_close($conn);

                            }
                ?>
                        <div class="container">
                            <div class="row box">
                                <div class="col-4 border-right p-5">
                                    <h5 class="text-center">Have an Account?</h5>
                                    <img src="img/user-boy.png" class="img-thumbnail d-block mx-auto mt-5" style="width:auto;height:180px;border-radius:50%" alt="">
                                    <p class="small text-secondary">If you alredy have an account then please <a href="user-login.php">Sign In</a></p>
                                    <hr>
                                    <h6 class="text-center">Or</h6>
                                    <hr>
                                    <div class="row">
                                        <ul class="social-icons col-12 text-center pr-0">
                                            <li><a class="facebook" target="_blank" href="https://www.facebook.com/navneetpal25/"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="dribbble" target="_blank" href="https://www.instagram.com/navneetpal.25"><i class="fa fa-instagram"></i></a></li>
                                            <li><a class="linkedin" target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>   
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-8 px-4 py-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="text-center">Create your account to <a href="index.php" style="color:black;text-decoration:none;">BookSelf</a> <img src="img/user.png" style="width:auto;height:50px" alt=""></h5>
                                    </div>
                                </div>
                                <hr style="width:70%;text-align:left;margin:auto">
                                <form action="signup.php" method="post" class="mt-3">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                        <label for="validationServer01">First name</label>
                                        <input type="text" onkeyup="saveValue(this)" name="name" class="form-control is-valid" id="validationServer01" placeholder="First name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                        <label for="validationServerUsername">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                            </div>
                                            <input type="text" name="username" onkeyup="saveValue(this)" class="form-control is-invalid" id="validationServerUsername" placeholder="Username*" aria-describedby="inputGroupPrepend3" required>
                                            <div class="invalid-feedback">
                                            Please choose a username.
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationServer05">Email</label>
                                            <input type="email" name="email" onkeyup="saveValue(this)" class="form-control is-invalid" id="validationServer05" placeholder="Email*" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationServer04">Phone</label>
                                            <input type="number" name="phone" onkeyup="saveValue(this)" class="form-control is-invalid" id="validationServer04" placeholder="Phone*" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                        <label for="validationServer03">Password</label>
                                        <input type="password" class="form-control is-invalid" onkeyup="saveValue(this)" id="validationServer07" placeholder="Password*" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                        <label for="validationServer03">Confirm Password</label>
                                        <input type="text" name="password" onkeyup="saveValue(this)" class="form-control is-invalid" id="validationServer03" placeholder="Confirm Password*" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1 p-0 ml-3">
                                            <label for="">Gender :</label>
                                        </div>
                                        <label class="radio-inline mx-4">
                                            <input type="radio" name="optradio" value="Male" checked> Male
                                            </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio" value="Female"> Female
                                            </label>
                                    </div>
                                    <button id="logup" name="submit" class="btn btn-success px-5 mt-3 d-block mx-auto" type="submit">Sign Up</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                
                    <!-- <form action="user-login.php" method="POST">
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
                   <p>Don't Have? <a href="">Create an account</a></p>
                </div>
                <div id="tnc">
                    <ul>
                        <a href=""><li>Term</li></a>
                        <a href=""><li>Privacy</li></a>
                        <a href=""><li>Service</li></a>
                        <a href=""><li style="color: rgb(119, 119, 119);">Contact@BookSelf</li></a>
                    </ul>
                </div>
        
    </div> -->
    <script src="JS/jquery.js"></script>
    <script>
    $(document).ready(function(){
        $("#validationServer01").on("blur", function(){
            let email = $(this).val();
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