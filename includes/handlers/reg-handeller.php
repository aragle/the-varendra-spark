<?php
session_start();

include 'connection/connection.php';

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $password_check = mysqli_real_escape_string($connection, $_POST['password_check']);
  $dept = mysqli_real_escape_string($connection, $_POST['dept']);
  $batch = mysqli_real_escape_string($connection, $_POST['batch']);

  // form validation
  if (empty($name)) { array_push($errors, "Full Name is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password_check) {
	array_push($errors, "The two passwords do not match");
  }

  // check existing data
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($connection, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // if user exists
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // register user if there are no errors in the form
  if (count($errors) == 0) {
  	$pass = md5($password);//encrypt the password through md5 encryption

  	$query = "INSERT INTO users (name, username, email, password, dept, batch) 
  			  VALUES('$name', '$username', '$email', '$password', '$dept', '$batch')";
  	mysqli_query($connection, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

?>