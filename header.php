<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Constructions</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>

<header>
	<div class="stick">
		<h2>Construction website</h2>
	<div class="nav">
		<ul class="navbar">
			<li><a href="index.php">Home</h1></a></li>
			<li><a href="" >Sites</a></li>
			<li><a href="">about me</a></li>
			<li><a href="">contact</a></li>
			
			<li>
			<?php

			//if(isset($_SESSION['userId'])||isset($_SESSION['ouserId'])||isset($_SESSION['auserId'])||isset($_SESSION['muserId'])){
		    if(isset($_SESSION['userId'])){

			/*	echo '<form action="includes/logout.inc.php" method="post">
				
				<button type="submit" name="logout-submit">Logout</button>
			</form><p> You are logged in </p>'; */
			echo'<a href="includes/logout.inc.php" name="logout-sbmit">Logout</a>';

			}
			else{
			/*	echo'<form action="login.php" method="post">
				
				<button type="submit">Login</button>
			</form>'; */
			echo'<li><a href="login_u.php">Login</a></li><li><a href="signup.php">Signup</a></li>';
			}
			?>
		</li>

		</ul>
	</div>
</div>

		
		

	
</header>

</body>
</html>