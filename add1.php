<?php
    session_start();
    include 'connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $qry="INSERT INTO patient(name,email,phone,password) VALUES('$name','$email','$phone','$pass')";
    $aa=mysqli_query($conn,$qry);
    if ($aa) {
        # code...
        header('Location:view.php');
    }

?>
