<!-- Login Page -->
<?php
    include 'includes/components/global/header.php';
?>

<style>
body{
    background-color: #222;
}
.pb-5{
    padding-bottom: 2rem !important;
    text-align: left;
}
.px-5{
    width: 100%;
}
.mb-5{
    margin-bottom: 3rem !important;
}
.vh-size{
    margin: 20px 0;
}
</style>

<section class="vh-size gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2" style="font-family: Unique;">The Varendra Spark</h2>
                            <p class="text-white-50 mb-5" style="text-align:left;">Please enter your login and password!</p>

                            <div class="form-outline form-white mb-4">
                                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                                <label class="form-label" for="typeEmailX">Email</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX">Password</label>
                            </div>

                            <p class="mb-5" style="text-align:center;"><a class="text-white-50" href="recovery.php">Forgot password?</a></p>

                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                        </div>

                        <div>
                            <p class="mb-0 text-white">Don't have an account? <a href="register.php" class="text-white-50 fw-bold">Register</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include 'includes/components/global/footer.php';
?>