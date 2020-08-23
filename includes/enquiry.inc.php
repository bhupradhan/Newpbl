<?php

if(isset($_POST['enquiry'])){
	
	$idUsers=$_SESSION['userId'];
	require 'dbh.inc.php';

	$sitename = $_POST['sitename'];
	$enquiry = $_POST['enq'];
	$email = $_POST['mailuid'];



		$sql = "SELECT emailUsers FROM users WHERE emailUsers=?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){

			header("Location: ../user.php?error=sqlerror");
		exit();
		}
		else{

			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);

if($resultCheck ==0){
				header("Location: ../user.php?error=INVALIDEMAIL".$email);
		exit();
	}

else{
	//$sql= "UPDATE users SET sitename = ?,enquiry = ? WHERE emailUsers = ?;";
	$sql= "INSERT INTO enquiry (emailUsers, enquiry, sitename ) VALUES (?, ?, ?) ";

	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql)){

				header("Location: ../user.php?error=sqlError");
		exit();
	}

	else{
				
			mysqli_stmt_bind_param($stmt, "sss", $email, $enquiry,$sitename);
			mysqli_stmt_execute($stmt);

				header("Location: ../user.php?signup=success");
				exit();

			}

	}
}
mysqli_stmt_close($stmt);
mysqli_close($conn);


}