<?php
  include "controllers/config.php";
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
		<!-- Meta Tags -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>The Varendra Spark</title>
		<!-- <meta name="description" content="X">
		<meta name="keywords" content="X">
		<meta name="author" content="X"> -->

		<!-- Link CSS -->
		<link rel="stylesheet" href="global/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="global/assets/css/styles.css">
		<link rel="stylesheet" href="global/assets/css/fonts.css">

		<!-- Link Font -->
		<link rel="stylesheet" href="global/assets/css/fontawesome.css">

		<!-- Link JS -->
		<script src="global/assets/js/bootstrap.min.js"></script>
</head>

<body>
		<!-- Navbar Section-->
		<section id="header">
				<nav class="navbar navbar-expand-lg navbar-dark">
						<div class="container-fluid">
								<a class="navbar-brand" href="main-index.php">The Varendra Spark</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
										data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
										aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarNavDropdown">
										<ul class="navbar-nav">
												<li class="nav-item">
														<a class="nav-link" aria-current="page" href="main-index.php">Home</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" aria-current="page" href="board.php">Board</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="news.php">News</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="journal.php">Journal</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="forum.php">Forum</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="podcast.php"> Podcast</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="messages.php">Message (<span style="color:#ccc;">5</span>)</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="profile.php">{Profile}</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="controllers/logout.php">{Logout}</a>
												</li>
										</ul>
										<div class="sign-item login-button">
											<?php
											 if(isset($_SESSION['student_id'])){
												  echo "<a class='sign-link' href='profile.php'>" . $_SESSION['student_id'] . "</a>";
											 }else{
												 echo "<a class='sign-link' href='login.php'>Login</a>";
											 }
											?>
										</div>
								</div>
						</div>
				</nav>
		</section>
