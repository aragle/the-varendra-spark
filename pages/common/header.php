<?php
	include "controllers/session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Varendra University Community">
    <meta name="keywords"
        content="varendra,community,forum,podcasts,vu,journal,varendra university,students,academic,resources">
    <meta name="author" content="The Varendra Spark">
    <title>The Varendra Spark</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Neumorphism UI - Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Neumorphism UI - Sign in">
    <meta name="author" content="Themesberg">

    <link rel="canonical" href="https://themesberg.com/product/ui-kits/neumorphism-ui/" />

    <!--  Social tags -->
    <meta name="keywords"
        content="neumorphism, neumorphism ui, neomorphism, neomorphism ui, neomorphism css, neumorphism css, neumorph, neumorphic, design system, login, form, table, tables, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, about us, account, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, themesberg, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit">
    <meta name="description"
        content="Start developing neumorphic web applications and pages using Neumorphism UI. It features over 100 individual components and 5 example pages.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Neumorphism UI by Themesberg">
    <meta itemprop="description"
        content="Start developing neumorphic web applications and pages using Neumorphism UI. It features over 100 individual components and 5 example pages.">
    <meta itemprop="image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/neumorphism-ui/neumorphism-thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@themesberg">
    <meta name="twitter:title" content="Neumorphism UI by Themesberg">
    <meta name="twitter:description"
        content="Start developing neumorphic web applications and pages using Neumorphism UI. It features over 100 individual components and 5 example pages.">
    <meta name="twitter:creator" content="@themesberg">
    <meta name="twitter:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/neumorphism-ui/neumorphism-thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="fb:app_id" content="214738555737136">
    <meta property="og:title" content="Neumorphism UI by Themesberg" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demo.themesberg.com/neumorphism-ui/" />
    <meta property="og:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/neumorphism-ui/neumorphism-thumbnail.jpg" />
    <meta property="og:description"
        content="Start developing neumorphic web applications and pages using Neumorphism UI. It features over 100 individual components and 5 example pages." />
    <meta property="og:site_name" content="Themesberg" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Link Styles -->
    <link rel="stylesheet" href="components/styles/css/bootstrap.css">
    <link rel="stylesheet" href="components/styles/css/fontawesome.all.css">
    <link rel="stylesheet" href="components/styles/css/fonts.css">
    <link rel="stylesheet" href="components/styles/css/custom.css">

    <!-- Link Scripts -->
    <script src="components/scripts/bootstrap.js"></script>
    <script src="components/scripts/custom.js"></script>
</head>

<body>
    <!-- Navbar Section-->
    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand logo-font" href="/">The Varendra Spark</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
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
												 if(isset($_SESSION['id'])){
														 echo '<a class="nav-link" href="messages">Message (<span class="text-danger">5</span>)</a>';
												 }
												?>
                        <li class="nav-item">
                            <?php
													 if(isset($_SESSION['id'])){
															 echo '<a class="nav-link" href="logout">Logout</a>';
													 }
													?>
                        </li>
                    </ul>
                    <div class="sign-item login-button">
                        <?php
												 if(isset($_SESSION['id'])){

														$sql = mysqli_query($connection, "SELECT * FROM users WHERE id='$_SESSION[id]'") or die(mysqli_error());
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
        <div
            style="height: 2px;background: linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, #202124 100%);  box-shadow: 0px -30px 33px #ccc;">
        </div>

        <!-- Alert Panel -->
        <div id="alertStyle" class="alert alert-dismissible fade show" style="display:none">
            <strong id="alertName"></strong> <span id="alertMessage"></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        </div>
    </section>