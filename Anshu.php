<!DOCTYPE html>
<html>
<head>
	<title>Progect 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style media="screen">

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
-webkit-appearance: none;
margin: 0;
}

.border-10{
-webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  box-shadow: 0px 0px 6px 1px red;
  outline: none;
  border: 1px solid red;
}
</style>
</head>
<body>
<?php 

if(isset($_POST['submit'])){

	$Uname = $_POST['user'];
	$Upass = md5($_POST['pass']);
	$Umob = $_POST['mobile'];
	$Uemail = $_POST['email'];
	$name = $_POST['name'];
	
		$conn = mysqli_connect("localhost", "root", "", "anshu") or die("Connection Problem". mysqli_connect_error());
	
		$sql = "SELECT Username FROM info WHERE Username = '{$Uname}'";
		$run = mysqli_query($conn, $sql) or die("Query PRoblem". mysqli_error());
	
		if(mysqli_num_rows($run) > 0){
			$username_error = "Username Alreddy Takken..!!";
		}else{
			$sqli = "INSERT INTO info(Username,Password,Phone,Email,Name) VALUES ('{$Uname}', '{$Upass}', '{$Umob}', '{$Uemail}', '{$name}')";
			$result = mysqli_query($conn, $sqli) or die("Result Problem". mysqli_error());
			header("Location: http://localhost/BookSelf/Anshu.php");
		}
	
		mysqli_close($conn);

}
?>
<h1 class="text-white text-center font-weight-bold bg-success" style="font-size: 55px;"> Project On JS And PHP </h1>

	<div class="container"><br>

		<div class="col-lg-6 m-auto d-block">

			<form id="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="bg-light">

			
				<div class="form-group">
					<label for="user" class="font-weight-bold"> Username: </label>
					<input type="text" name="user" class="form-control" id="user" onchange="nameFun()" autocomplete="off" >
					<span id="username" class="text-danger"><?php if(isset($username_error)){ echo         $username_error;} ?> </span>

				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Password: </label>
					<input type="password" name="pass" class="form-control" id="pass" onkeyup="passFun()" autocomplete="off" required><br>
					<span id="passwords" class="text-danger"> </span>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck1" onclick="showFun()">
						<label class="custom-control-label" for="customCheck1">Show Password</label>
					</div>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Confirm Password: </label>
					<input type="text" name="conpass" class="form-control" id="conpass" onkeyup="confirmPass()" autocomplete="off" required>
					<span id="confrmpass" class="text-danger"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Mobile Number: </label>
					<input type="number"  name="mobile" class="form-control" id="mobileNumber" onchange="checkmob()" autocomplete="off" required>
					<span id="mobileno" class="text-danger"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Email: </label>
					<input type="email" name="email" class="form-control" id="emails" autocomplete="off" onchange="checkemail()" required>
					<span id="emailids" class="text-danger"> </span>
				</div>
				<div class="form-group">
					<label class="font-weight-bold"> Name: </label>
					<input id="example" name="name" class="form-control" required />
				</div>

				<input type="submit"  id="submit" name="submit" value="submit" onclick="return Validation()" class="btn btn-success" autocomplete="off">


			</form><br><br>
		</div>
	</div>
	<script src="JS/jsnew.js"></script>

	<script src="JS/jquery.js"></script>
	
	<script src="JS/js.js"></script>

	<script>
		

	/* function Validation(){
	var name = document.getElementById('user');

    if (name.value == "") {
        document.getElementById('user').className = "form-control border-10";
		return false;
    }
	} */
	</script>
</body>
</html>
