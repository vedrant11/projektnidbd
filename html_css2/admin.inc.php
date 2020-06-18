<?php 
	session_start();
	$db = mysqli_connect('localhost:3307', 'root', '', 'loginsystem');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['uidUsers'];
		$address = $_POST['emailUsers'];

		mysqli_query($db, "INSERT INTO usres (uidUsers, emailUsers) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: admin.php');
    }
?>    