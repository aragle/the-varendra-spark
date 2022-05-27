<?php
    include 'controllers/session.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <!-- Primary Meta Tags -->
    <meta charset='UTF-8'>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='The Varendra Spark'>
    <title>The Varendra Spark</title>

    <!--  Social tags -->
    <meta name='description' content='A Varendra University Community'>
    <meta name='keywords' content='varendra,community,forum,podcasts,vu,journal,varendra university,students,academic,resources'>

    <!-- Favicon -->
    <meta name='msapplication-TileColor' content='#ffffff'>
    <meta name='theme-color' content='#ffffff'>

    <!-- Link Styles -->
    <link rel='stylesheet' href='components/styles/css/bootstrap.css'>
    <link rel='stylesheet' href='components/styles/css/fontawesome.all.css'>
    <link rel='stylesheet' href='components/styles/css/fonts.css'>
    <link rel='stylesheet' href='components/styles/css/custom.css'>

    <!-- Link Scripts -->
    <script src='components/scripts/bootstrap.js'></script>
    <script src='components/scripts/custom.js'></script>
</head>

<body>
    <!-- Navbar Section-->
    <section id='header'>
        <nav class='navbar navbar-expand-lg navbar-dark'>
            <div class='container-fluid'>
                <a class='navbar-brand logo-font' href='/spark/'>The Varendra Spark</a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                    <ul class='navbar-nav'>
                        <li class='nav-item'>
                            <a class='nav-link' href='journal'>Journal</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='study-resources'>Study Resources</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='forum'>Forum</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='podcast'>Podcast</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='news'>News</a>
                        </li>
                        <?php
                        if (isset($_SESSION['id'])) {
                            echo '<a class="nav-link" href="messages">Message (<span class="text-danger">5</span>)</a>';
                        }
                        ?>
                    </ul>
                    <div class='sign-item login-button '>
                        <?php
                            if (isset($_SESSION['id'])) {
                                echo "<a class='sign-link' style='background: #fff; color: #000;' href='profile'>My Profile</a>";
                            } else {
                                echo "<a class='sign-link' href='signin'>Sign In</a>";
                            }
                        ?>
                        <?php
                            if (!isset($_SESSION['id'])) {
                                echo "<a class='sign-link' href='signup' style='background: #fff; color: #000;'>Sign Up</a>";
                            } else {
                                echo "<a class='sign-link' href='signout'>Sign Out</a>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </nav>
        <div style='height: 2px;background: linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, #202124 100%);  box-shadow: 0px -30px 33px #ccc;'>
        </div>

        <!-- Alert Panel -->
        <!-- <div id='alertStyle' class='alert alert-dismissible fade show' style='display:none'>
            <strong id='alertName'></strong> <span id='alertMessage'></span>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        </div> -->
        </div>
    </section>