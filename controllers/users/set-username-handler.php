<?php

// Check If Already Login the Go to Root
// if (!isset($_SESSION['id'])) {
//   echo '<script>window.location.replace("/signin")</script>';
// }

// initializing variables
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // username and password sent from form
  if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);

    $sql = "SELECT username FROM users WHERE id = '$_SESSION[id]'";
    $result = mysqli_query($connection, $sql);
    $fetch = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $status = $row['status'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
      if ($fetch['status'] == 1) {
        $_SESSION['id'] = $fetch['id'];
        echo '<script>window.location.replace("/")</script>';
      } else {
        $error = "Your account is Inactive! <a href='verification'>[activate your account]</a>";
        echo "<script>alertBox('danger','Inactive Account!','Verify your email first.')</script>";
      }
    } else {
      $error = "Invalid Student ID or Password.";
      echo "<script>alertBox('danger','Login Failed!','Invalid Student ID or Password.')</script>";
    }
  }
}
