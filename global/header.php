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
		<meta name="description" content="A Varendra University Community">
		<!-- <meta name="keywords" content="X">
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
								<a class="navbar-brand" href="/">The Varendra Spark</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
										data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
										aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarNavDropdown">
										<ul class="navbar-nav">
												<!-- <li class="nav-item">
														<a class="nav-link" aria-current="page" href="/">Home</a>
												</li> -->
												<li class="nav-item">
														<a class="nav-link" aria-current="page" href="board">Board</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="news">News</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="journal">Journal</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="forum">Forum</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="podcast"> Podcast</a>
												</li>
												<?php
												 if(isset($_SESSION['student_id'])){
														 echo '<a class="nav-link" href="messages">Message (<span class="text-danger">5</span>)</a>';
												 }
												?>
												<li class="nav-item">
													<?php
													 if(isset($_SESSION['student_id'])){
															 echo '<a class="nav-link" href="logout">Logout</a>';
													 }
													?>
												</li>
										</ul>
										<div class="sign-item login-button">
											<?php
												 if(isset($_SESSION['student_id'])){

														$sql = mysqli_query($connection, "SELECT * FROM users WHERE student_id='$_SESSION[student_id]'") or die(mysqli_error());
														$fetch = mysqli_fetch_array($sql);

														echo "<a class='sign-link' href='profile'>" . $fetch['first_name'] . " " . $fetch['last_name'] . "</a>";
												 }else{
													 echo "<a class='sign-link' href='login'>Login</a>";
												 }
											?>
										</div>
								</div>
						</div>
				</nav>
				<div style="height: 2px;background: linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, #202124 100%);  box-shadow: 0px -30px 33px #ccc;"></div>
</div>
</section>
