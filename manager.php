<?php
require"header.php";
?>

<?php
require "includes/dbh.inc.php";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/sites.css">
</head>
<body>

<main>
<?php
if(isset($_SESSION['userId'])){
	 	                                    /* TO RETRIEVE DATA USE THIS */
	$idUsers=$_SESSION['userId'];
	 	
	$sql = "SELECT * FROM users WHERE idUsers='".$idUsers."'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	 	
	$emailUsers = $row[2]; 	
	$uidUsers = $row[1];
	$sitename = $row[4];
	$category = $row[6];
	$siteid = $row[7];


	
		echo "<h4 align='right'  style='font-size: 25px'> Hi! ".$uidUsers."</h4>";



		$sql = "SELECT * FROM prop where siteid='".$siteid."'";
	 

	 	$result = mysqli_query($conn, $sql);
	 	
	 	$resultCheck = mysqli_num_rows($result);

	 	

	 	while($row1=mysqli_fetch_array($result)){

	 		echo "<h2 align='center'>".$row1["sitename"]."</h2>"."<h2 align='center'>".$row1["address"]."</h2>" ;
	 		echo '
	 			<a href="order.php">place order</a>
	 		';
	 	}


	 }

?>
</main>
</body>
</html>
