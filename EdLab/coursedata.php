<?php
session_start();

// initializing variables
$coursename = "";
$coursedesc = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'edlab');

// REGISTER USER
if (isset($_POST['add_course'])) {
  // receive all input values from the form
  $coursename = mysqli_real_escape_string($db, $_POST['coursename']);
  $coursedesc = mysqli_real_escape_string($db, $_POST['coursedesc']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($coursename)) { array_push($errors, "Course name is required"); }
  if (empty($coursedesc)) { array_push($errors, "Course description is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM courses WHERE coursename='$coursename' OR coursedesc='$coursedesc' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['coursename'] === $coursename) {
      array_push($errors, "Course Name already exists");
    }

    if ($user['coursedesc'] === $coursedesc) {
      array_push($errors, "Course description already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO courses (coursename, coursedesc) 
  			  VALUES('$coursename', '$coursedesc')";
  	mysqli_query($db, $query);
  	$_SESSION['coursename'] = $coursename;
  	$_SESSION['success'] = "The course will be reviewed";
  	header('location: Homesignin.php');
  }
}


?>