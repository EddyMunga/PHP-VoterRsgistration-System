<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'voterregistration');

	// initialize variables
	$Fullname = "";
	$IDnumber = "";
	$Constituency = "";
	$Address = "";
	$Email = "";
	$Country = "";
	$Ward = "";
	$IDserialnumber = "";
	$dateofbirth="",
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO voters registration (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: display.php');
	}
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM voters registration WHERE id=$id");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: index.php');
    }
