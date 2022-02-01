<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Varendra Spark</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <!-- Link JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>

<body>
    <!-- Header or Navbar -->
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
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/varendra-portal">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="journal">Journals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="community">Community</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="forum">Student Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="radio-podcast">Radio and Podcast</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Departments
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">A</a></li>
                                <li><a class="dropdown-item" href="#">B</a></li>
                                <li><a class="dropdown-item" href="#">C</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Clubs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">A</a></li>
                                <li><a class="dropdown-item" href="#">B</a></li>
                                <li><a class="dropdown-item" href="#">C</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#studentPanelModal">Student
                                Panel</a>
                        </li>
                    </ul>
                    <div class="sign-item login-button">
                        <a class="sign-link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

<?php
    include 'includes/modals/student-portal-modal.php';
    include 'includes/modals/login-modal.php';
    include 'includes/modals/register-modal.php';
?>