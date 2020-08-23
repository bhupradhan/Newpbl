<?php
if(isset($_POST['login-submit'])){


	require'dbh.inc.php';


	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	if (empty($mailuid) || empty($password)){

		header("Location: ../index.php?error=emptyfields");
		exit();
	}
	else{

		$sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){

			header("Location ../index.php?error=sqlerror");
			exit();
		}

		else{

			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid );
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result)){
				$pwdCheck = password_verify($password, $row['pwdUsers']);

				if($pwdCheck == false){

				header("Location: ../login_u.php?error=wrongpwd");
				exit();
				}
			
				elseif($pwdCheck==true){


			

				session_start();
				$_SESSION['userId'] = $row['idUsers'];
				$_SESSION['userUid'] = $row['uidUsers'];
				
				$sql = "SELECT * FROM users WHERE idUsers='".$_SESSION['userId']."'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				$row=mysqli_fetch_array($result);



				$category = $row[6];
				if($category== 'user'){

					header("Location: ../user.php?login=success");
							exit();
				}
				if($category== 'owner'){

					header("Location: ../owner.php?login=success");
					exit();
				}
				if($category== 'manager'){

					header("Location: ../manager.php?login=success");
					exit();
				}











				


				}
				

				

			}
			else{

					header("Location: ../login_u.php?error=Nouserfound");
				exit();

			}	
		}

	
	}



}
else{

	header("Location: ../index.php");
	exit();
}