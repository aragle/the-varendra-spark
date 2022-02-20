<?php

// initializing variables
$first_name = $last_name = $student_id = $email = $password = $password_confirm = "";
$errors = array();

// REGISTER USER
if (isset($_POST['registration'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($connection, $_POST['firstname']);
  $last_name = mysqli_real_escape_string($connection, $_POST['lastname']);
  $student_id = mysqli_real_escape_string($connection, $_POST['stu_id']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $password_confirm = mysqli_real_escape_string($connection, $_POST['password_confirm']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "First Name is required."); }
  if (empty($last_name)) { array_push($errors, "Last Name is required."); }
  if (empty($student_id)) { array_push($errors, "Student ID is required."); }
  if (empty($email)) { array_push($errors, "Email is required."); }
  if (empty($password)) { array_push($errors, "Password is required."); }
  if ($password != $password_confirm) {
	array_push($errors, "Password doesn't match.");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE student_id='$student_id' OR email='$email' LIMIT 1";
  $result = mysqli_query($connection, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['student_id'] === $student_id) {
      array_push($errors, "Student ID already exists.");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists.");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$pass = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (first_name, last_name, student_id, email, password)
  			  VALUES('$first_name', '$last_name', '$student_id', '$email', '$pass')";
  	mysqli_query($connection, $query);
    $name = $first_name . " " . $last_name;
  	$_SESSION['student_id'] = $student_id;
    $_SESSION['name'] = $name;
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = true;
  	header('location: login');
  }
}

?>
