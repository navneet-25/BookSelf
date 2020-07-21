<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>404 HTML Template by Colorlib</title>

<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/ucons.css" />
</head>
<body>

                    <script>
                        var timeleft = 5;
                            var downloadTimer = setInterval(function(){
                            if(timeleft <= 0){
                                clearInterval(downloadTimer);
                            } else {
                                document.getElementById("countdown").innerHTML = timeleft;
                            }
                            timeleft -= 1;
                            }, 1000);
                    </script>
    <div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>Oops!</h1>
				<h2>404 - The Page is Under Construction</h2>
			</div>
			<a href="#">Soory For Incovenence!</a>
            <p style="font-family:Montserrat;">You will be redirect to home page in <span id="countdown">5</span> seconds</p>
		</div>
	</div>
                    <script>
                        setTimeout(function(){
                            window.location.href = 'index.php';
                        }, 6000);
                    </script>


</body>
</html>