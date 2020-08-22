<?php
require "header.php";
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
<a name="up"></a>
<main>

	





<?php

if(isset($_SESSION['userId'])){
	 	                                    /* TO RETRIEVE DATA USE THIS */
	$idUsers=$_SESSION['userId'];
	 	//echo $idUsers;
	$sql = "SELECT * FROM users WHERE idUsers='".$idUsers."'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	 	//print_r($row);
	 	/*
	 	$idUsers = $row[0];
	 	
	 	$emailUsers = $row[2];
	 	$pwdUsers = $row[3];

	 	*/
	$uidUsers = $row[1];
	$sitename = $row[4];
	$category = $row[6];
	$siteid = $row[7];
	
	
	
	if($category=='user'){
	echo "<h4 align='right'  style='font-size: 25px'> Hi! ".$uidUsers."</h4>";
	 	//echo "<BR>site:  ".$sitename ."<BR>Your enquiry:  ".$enquiry; 

/*
	 	echo'<table>
	<tr><th>SITE</th>
			<th>ENQUIRY</th>
	</tr>
	<tr><td> </td>
<td>About 2BHK Flats</td>
	</tr>
</table>';


*/
echo "<table align='center'>

<tr>

<th>SITE NAME</th>

<th>ENQUIRY</th>
</tr>";
echo "<tr>";
echo "<td>" . $row[4] . "</td>";
echo "<td>" . $row[5] . "</td>";
echo "</tr>";
echo "</table>";

/*
	 	if($resultCheck >0){
	 		
	 		
	 		while($row = mysqli_fetch_assoc($result)){
	 			foreach($row as $x => $x_value) {
 				echo $x_value;
  				echo "<br>";
  				
		 
	 		}
	 		
	 	}    

	 	}
*/			
	 		

	 
echo '<a href="details1.php" style="text-decoration:none">
<div class="box" allign="left">
	<br><br>
	<h3 align="center">ATLANTIS</h3>
	<h1 align="center">2 BHK Apartments</h1>
	<h1 align="center">OC RECEIVED + NO GST</h1>
	
	 	</div>

	</a>
	<a href="details1.php" style="text-decoration:none">
<div class="box align="center">
	<br><br>
	<h3 align="center">ATLANTIS</h3>
	<h1 align="center">2 BHK Apartments</h1>
	<h1 align="center">OC RECEIVED + NO GST</h1>
	
	 	</div>

	</a>';

echo' <h4>Enquiry System</h4>
<form action="includes/enquiry.inc.php" method="POST">
		

  <label for="sitename">Choose your site from the list:</label><br><br>

  <input list="sitenames" name="sitename" id="sitename">
  <datalist id="sitenames">
    <option value="site 1">
    <option value="site 2">
    <option value="site 3">
    <option value="site 4">
    <option value="site 5">
  </datalist><br><br>

		
		<input type="text" name="enq" placeholder="Enter your enquiry"><br><br>
		<input type="email" name="mailuid" placeholder="Enter email"><br><br>
		<input type="submit" name="enquiry">



		

	</form>';
			
		}

		//elseif(isset($_SESSION['ouserId'])){
		elseif($category=='owner'){

	
     //   $idUsers=$_SESSION['userId'];
	 	//echo $idUsers;

	 //	$sql = "SELECT * FROM users WHERE idUsers='".$idUsers."'";
	 

	 //	$result = mysqli_query($conn, $sql);
	 	
	 //	$resultCheck = mysqli_num_rows($result);

	 //	$row=mysqli_fetch_array($result);
	 	//print_r($row);
	 	/*
	 	$idUsers = $row[0];
	 	
	 	$emailUsers = $row[2];
	 	$pwdUsers = $row[3];

	 	*/

	 
	 //	$uidUsers = $row[1];
	 	//$sitename = $row[4];
		//$enquiry = $row[5];
		
	 	echo "HI!".$uidUsers; 
	 	

	 	

/*
	 	if($resultCheck >0){
	 		
	 		
	 		while($row = mysqli_fetch_assoc($result)){
	 			foreach($row as $x => $x_value) {
 				echo $x_value;
  				echo "<br>";
  				
		 
	 		}
	 		
	 	}    

	 	}
*/			
	 		

	 
echo '<a href="details1.php" style="text-decoration:none">
<div class="box" allign="left">
	<br><br>
	<h3 align="center">ATLANTIS</h3>
	<h1 align="center">2 BHK Apartments</h1>
	<h1 align="center">OC RECEIVED + NO GST</h1>
	
	 	</div>

	</a>
	<a href="details1.php" style="text-decoration:none">
<div class="box align="center">
	<br><br>
	<h3 align="center">ATLANTIS</h3>
	<h1 align="center">2 BHK Apartments</h1>
	<h1 align="center">OC RECEIVED + NO GST</h1>
	
	 	</div>

	</a>';




		}

		//elseif(isset($_SESSION['muserId'])){
		elseif($category=='manager'){
	
	//	$idUsers=$_SESSION['userId'];
	 	//echo $idUsers;

	 //	$sql = "SELECT * FROM users WHERE idUsers='".$idUsers."'";
	 

	 //	$result = mysqli_query($conn, $sql);
	 	
	// 	$resultCheck = mysqli_num_rows($result);

	 //	$row=mysqli_fetch_array($result);
	 	//print_r($row);
	 	/*
	 	$idUsers = $row[0];
	 	
	 	$emailUsers = $row[2];
	 	$pwdUsers = $row[3];

	 	*/
	 //	$uidUsers = $row[1];
	 //	$siteid = $row[7];
		//$menquiry = $row[5];
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

} 
		else{
			echo'<pre>









			

</pre>
			<a href="details1.php" style="text-decoration:none">
<div class="box">
	<br><br>
	<h3 align="center">ATLANTIS</h3>
	<h1 align="center">2 BHK Apartments</h1>
	<h1 align="center">OC RECEIVED + NO GST</h1>
	
	 	</div>

	</a>';
		}
	
//<input type="text" name="sitename" placeholder="Enter Site name"> 


/*
		if(isset($_SESSION['userId'])){
				echo '<form action="includes/logout.inc.php" method="post">
				
				<button type="submit" name="logout-submit">Logout</button>
			</form><p> You are logged in </p>';
			}
		
		else{
			echo '<p> You are logged out</p>';
		}

*/
	?>
	

</main>










<pre>


























































































<a href="#up" ><img src="images/upload.png" align="right"></a>
</pre>






<?php
require "footer.php";
?>


</body>
</html>









