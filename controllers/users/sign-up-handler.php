<?php

// Check If Already Login the Go to Root
if (isset($_SESSION['id'])) {
  echo '<script>window.location.replace("/")</script>';
}

require 'plugins/phpmailer/src/PHPMailer.php';
require 'plugins/phpmailer/src/SMTP.php';
require 'plugins/phpmailer/src/Exception.php';

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


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
  	$pass = md5($password);

    //generate verification code and token
    // function tokenGenerator($length) {
    //     $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    //     $charactersLength = strlen($characters);
    //     $token = '';
    //     for ($i = 0; $i < $length; $i++) {
    //         $token .= $characters[rand(0, $charactersLength - 1)];
    //     }
    //     return $token;
    // }

    $code = rand('0000000','9999999');

    $tokenPlus = substr($student_id, -4);

    $token = md5($code+(int)$tokenPlus);

    //Initialize PHP Mailer and set SMTP as mailing protocol
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    //Connect to SMTP
    // $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = ""; // SMTP server
    $mail->Username   = ""; // SMTP account username
    $mail->Password   = ""; // SMTP account password

    // Mail Body
    $mail->IsHTML(true);
    $mail->AddAddress($email,$_POST['firstname']." ".$_POST['lastname']);
    $mail->SetFrom("varendraspark@gmail.com", "The Varendra Spark");
    // $mail->AddReplyTo("reply-email@domain", "reply-name");
    // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
    $mail->Subject = "Confirm your email";
    $content = "
    Hello, ".$_POST['firstname']." ".$_POST['lastname']."!<br>
    Thank you for registration. Please verify your email to continue your journey with us.<br><br>
    Your Verification Code is <b>".$code."</b><br><br>
    <a href='http://domain/email-verification?".$student_id."&verification-code=".$code."&verify=email'>Click here to verify your email</a><br><br>
    Copy this link and browse from any browser:<br>
    http://domain/email-verification?student-id=".$student_id."&verification-code=".$code."&verify=email<br><br>
    Account Info:<br>
    Student ID: ".$_POST['stu_id']."<br>
    Password: ".$_POST['password'];

    // Exception Handler
    $mail->MsgHTML($content);
    if(!$mail->Send()) {
        echo "<script>alertBox('danger','Failed!','Error while sending Email.')</script>";
        //var_dump($mail);
    } else {
        echo "<script>alertBox('primary','Account Created!','Verify your email.')</script>";
        array_push($errors, "<div style='text-align:center;color:green;'> Account created. <a href='/verify'>Verify your Email</a></div>");

        $status = 0; // Set account status as Deactive
        $permission = 9; // 9 for member or Generl users
        $query = "INSERT INTO users (first_name, last_name, student_id, email, password,status,token,permission)
                  VALUES('$first_name', '$last_name', '$student_id', '$email', '$pass', '$status', '$token','$permission')";
        mysqli_query($connection, $query);
    }
  }
}
?>
