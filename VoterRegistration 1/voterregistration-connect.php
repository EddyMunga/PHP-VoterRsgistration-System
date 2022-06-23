<?php
session_start();

// initializing variables
$username = "";
$userid = "";
$Idserialnumber = "";
$address = "";
$emailaddress = "";
$county = "";
$country = "";
$ward = "";
$birthdate = "";
$constituency   = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'voterregistration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $Idserialnumber = mysqli_real_escape_string($db, $_POST['Idserialnumber']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $emailaddress = mysqli_real_escape_string($db, $_POST['emailaddress']);
  $county = mysqli_real_escape_string($db, $_POST['county']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $constituency = mysqli_real_escape_string($db, $_POST['constituency']);
  $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
  $ward = mysqli_real_escape_string($db, $_POST['ward']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "username is required"); }
  if (empty($email)) { array_push($errors, "emailaddress is required"); }
  if (empty($userid)) { array_push($errors, "userid is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $query = "SELECT * FROM registration WHERE username='$username' OR emailaddress ='$emailaddress' LIMIT 1";
  $result = mysqli_query($db, $query);
  $user = mysqli_fetch_assoc($result);
  
 // if (($result)) { // if user exists
  //  if ($user['username'] === $username) {
  //    array_push($errors, "Username already exists");
  //  }

  //  if (mysqli_num_rows($result['emailaddress'] === $emailaddress)) {
      array_push($errors, "emailaddress already exists");
   // }
  //}

  // Finally, register user if there are no errors in the form
  //if (count($errors) == 0) {
  	// $password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (username, emailaddress, userid, Idserialnumber, country, county, constituency, address, ward, birthdate) 
  			  VALUES('$username', '$emailaddress', '$userid', '$Idserialnumber', '$country', '$county', '$constituency', '$address','$ward', '$birthdate')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now Registered";
  	header('location: index.html');
  }
