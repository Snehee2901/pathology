<?php

		session_start();
		include 'connection.php';
		$prof = $_POST['profession'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		if($prof == 'pat'){
			$qry="SELECT * FROM patient WHERE email='$email' AND password='$pass'";
			$aa=mysqli_query($conn,$qry);
			if (mysqli_num_rows($aa)>0) {
				echo "Login success";
				$abc=mysqli_fetch_assoc($aa);
				$_SESSION['pid']=$abc['pid'];
				header("Location:pindex.html");
			}
			else{
				echo "Invalid username or password";
			}
		}

		if($prof == 'doc'){
			$qry="SELECT * FROM doctor WHERE email='$email' AND password='$pass'";
			$aa=mysqli_query($conn,$qry);
			if (mysqli_num_rows($aa)>0) {
				echo "Login success";
				$abc=mysqli_fetch_assoc($aa);
				$_SESSION['did']=$abc['did'];
				header("Location:dindex.html");
			}
			else{
				echo "Invalid username or password";
			}
		}

?>