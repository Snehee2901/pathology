<?php

		session_start();
		include 'connection.php';
		$prof = $_POST['profession'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$pass = $_POST['pass'];

		if($prof == 'pat'){
			$qry="INSERT INTO patient(name,email,phone,password) VALUES('$name','$email','$phone','$pass')";
			$aa=mysqli_query($conn,$qry);
			if ($aa) {
			# code...
			header('Location:login.html');
		}
		else{
			echo "<script language='javascript'>alert('ERROR!!');</script>";
		}
	}

		if($prof == 'doc'){
			$qry="INSERT INTO doctor(name,email,phone,password) VALUES('$name','$email','$phone','$pass')";
			$aa=mysqli_query($conn,$qry);
			if ($aa) {
			# code...
			header('Location:login.html');
		}
		else{
			echo "<script language='javascript'>alert('ERROR!!');</script>";
		}
	}

?>