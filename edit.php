<?php
	
	session_start();
	include 'connection.php';
	if (isset($_SESSION['pid'])) {
		# code...
		$name = $_POST['name'];
		$email = $_POST['email'];
		$ph = $_POST['phone'];
		$p = $_POST['pass'];

		$qry = "UPDATE patient SET name='$name',email='$email',phone='$ph',password='$p' WHERE pid=".$_SESSION['pid'];
		$aa = mysqli_query($conn,$qry);
		if ($aa) {
			# code...
			echo "scc";
			echo "<script language='javascript'>alert('PROFILE EDITED SUCCESSFULLY!');window.location.href = 'pindex.html';</script>";		}
		else{
			echo "<script language='javascript'>alert('ERROR! PLEASE TRY AGAIN!');window.location.href = 'edit_temp.php';</script>";
		}
	}

	else {
		# code...
		$name = $_POST['name'];
		$email = $_POST['email'];
		$ph = $_POST['phone'];
		$p = $_POST['pass'];

		$qry = "UPDATE doctor SET name='$name',email='$email',phone='$ph',password='$p' WHERE did=".$_SESSION['did'];
		$aa = mysqli_query($conn,$qry);
		if ($aa) {
			# code...
			echo "scc";
			echo "<script language='javascript'>alert('PROFILE EDITED SUCCESSFULLY!');window.location.href = 'dindex.html';</script>";		}
		else{
			echo "<script language='javascript'>alert('ERROR! PLEASE TRY AGAIN!');window.location.href = 'edit_temp.php';</script>";
		}
	}



?>

