<?php
   // initializing variables
   $error="";

      if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form
      if (isset($_POST['login'])) {
      $student_id = mysqli_real_escape_string($connection,$_POST['student_id']);
      $password = mysqli_real_escape_string($connection,$_POST['password']);
      $pass = md5($password);

      $sql = "SELECT * FROM users WHERE student_id = '$student_id' and password = '$pass'";
      $result = mysqli_query($connection,$sql);
      $fetch = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $status = $row['status'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1){
        $_SESSION['student_id'] = $student_id;
        echo "<script>alert('" . $count . " +Login Successfully!')</script>";
        header("location: /");

      }else {
         $error = "Invalid Student ID or Password.";
      }
   }
 }
?>
