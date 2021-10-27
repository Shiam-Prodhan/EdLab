<?php
session_start();

// initializing variables
$coursename = "";
$insname = "";
$email = "";
$transid = "";
$errors = array(); 
$data = 0;

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'edlab');

// REGISTER USER
if (isset($_POST['add_payment'])) {
  // receive all input values from the form
  $coursename = mysqli_real_escape_string($db, $_POST['coursename']);
  $insname = mysqli_real_escape_string($db, $_POST['insname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $transid = mysqli_real_escape_string($db, $_POST['transid']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($coursename)) { array_push($errors, "Course name is required"); }
  if (empty($insname)) { array_push($errors, "Instructor name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($transid)) { array_push($errors, "Transaction id is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
 

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO paymentinfo (coursename, insname, email, transid) 
  			  VALUES('$coursename', '$insname', '$email', '$transid')";
  	mysqli_query($db, $query);
	$data = 1;
	
  	$_SESSION['coursename'] = $coursename;
  	$_SESSION['success'] = "Wait a few minutes and your course details will be emailed";
  	header('location: Thanks.html');
  }
}


?>

