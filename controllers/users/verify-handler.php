<?php

// Check If Already Login the Go to Root
if (isset($_SESSION['id'])) {
  echo '<script>window.location.replace("/")</script>';
}

     // initializing variables
     $error="";

      if($_SERVER["REQUEST_METHOD"] == "GET") {

      // get student id, code and token
      if (isset($_GET['verify'])) {
      $student_id = mysqli_real_escape_string($connection,$_GET['student-id']);
      $code = mysqli_real_escape_string($connection,$_GET['verification-code']);

      $sql = "SELECT student_id,token,status FROM users WHERE student_id = '$student_id'";

      $result = mysqli_query($connection,$sql);
      $fetch = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      $codePlus =  substr($student_id, -4);
      $verifiedToken = md5((int)$code+(int)$codePlus);

      $newToken = rand(0000000,9999999);

      // If result matched and table row must be 1 row
      if($count == 1){
        if($student_id == $fetch['student_id'] && $verifiedToken == $fetch['token']){
          $updateStatus = "UPDATE users SET status='1',token='$newToken' WHERE student_id='$student_id'";
          mysqli_query($connection,$updateStatus);
          $error = "<span style='color:green'>Your email is verified! <a href='signin'>Sign In your account</a></span>";
          echo "<script>alertBox('success','Activation Successful!','Your account is now active.')</script>";
        }
        else{
          $error = "Invalid verification code.";
          echo "<script>alertBox('danger','Activation Failed!','Invalid Verification Code.')</script>";
        }
      }else {
        $error = "Invalid student ID or code.";
         echo "<script>alertBox('danger','Activation Failed!','Invalid Request.')</script>";
      }
   }
 }
?>
