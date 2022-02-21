<?php

    // Check If Already Login the Go to Root
    // if(isset($_SESSION['id'])){
    //   header("location: /");
    // }

     // initializing variables
     $error="";

      if($_SERVER["REQUEST_METHOD"] == "POST") {

      // get student id, code and token
      if (isset($_POST['activation'])) {
      $student_id = mysqli_real_escape_string($connection,$_POST['student_id']);
      $code = mysqli_real_escape_string($connection,$_POST['code']);
      $token = mysqli_real_escape_string($connection,$_POST['token']);

      $sql = "SELECT student_id,token,status FROM users WHERE student_id = '$student_id'";

      $result = mysqli_query($connection,$sql);
      $fetch = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      $codePlus =  substr($student_id, -4);
      $verifiedToken = md5((int)$code+(int)$codePlus);
      // If result matched and table row must be 1 row
      if($count == 1){
        if($student_id == $fetch['student_id'] && $verifiedToken == $fetch['token']){
          $updateStatus = "UPDATE users SET status='1' WHERE student_id='$student_id'";
          mysqli_query($connection,$updateStatus);
          echo "<script>alertBox('success','Activation Successful!','Your account is now active.')</script>";
        }
        else{
          echo "<script>alertBox('danger','Activation Failed!','Invalid Verification Code or Token.')</script>";
        }

        // header("location: /");
      }else {
         echo "<script>alertBox('danger','Activation Failed!','Invalid Request.')</script>";
      }
   }
 }
?>
