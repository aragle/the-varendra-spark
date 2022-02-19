<?php

  include "controllers/config.php";
  // include "controllers/session.php";

   $error="";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
if (isset($_POST['login'])) {
      $student_id = mysqli_real_escape_string($connection,$_POST['student_id']);
      $password = mysqli_real_escape_string($connection,$_POST['password']);
      $pass = md5($password);

      $sql = "SELECT * FROM users WHERE student_id = '$student_id' and password = '$pass'";
      $result = mysqli_query($connection,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $status = $row['status'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

        echo "<script>alert('Login Successfully!')</script>";
         header("location: main-index.php");
         $_SESSION['student_id'] = $student_id;
      }else {
        echo "<script>alert('Login Failed!')</script>";
         $error = "Invalid Student ID or Password.";
      }
   }
 }
?>

<?php
    include 'global/header.php';
    include 'pages/account/login-page.php';
    include 'global/footer.php';
?>
