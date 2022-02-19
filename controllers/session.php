<?php
   include('controllers/config.php');
   session_start();

   $student_id = $_SESSION['student_id'];

   $ses_sql = mysqli_query($connection,"select student_id from users where student_id = '$student_id' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['student_id'];

   if(!isset($_SESSION['student_id'])){
      header("location:login.php");
      die();
   }
?>
