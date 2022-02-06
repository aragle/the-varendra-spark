<!-- Login Pages -->
<?php
    include 'includes/components/global/header.php';
?>

<style>
body {
    color: #fff;
    background: #333;
}

.vh-100 {
    height: auto;
    margin: 30px
}

.card {
    border-radius: 1rem;
    background-color: #222;
}

.card:hover{
    background-color: #222;
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: .75em;
    padding-right: .75em;
}

.card-registration .select-arrow {
    top: 13px;
}

.text-white {
  color: rgba(255,255,255,.5) !important;
}
.vh-size{
  margin: 40px 0;
}
.px-5{
    width: 100%;
}
</style>


<section class="vh-size bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            
                        <h2 class="fw-bold mb-2" style="font-family: Unique;">The Varendra Spark</h2>
                            <p class="text-white-50 mb-5">Create your account here!</p>

                            <form>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1cg">Your Full Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example3cg">Your Student ID</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example3cg">Your Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value=""
                                        id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                        I agree all statements in <a href="#" class="text-body text-white">Terms of
                                                service</a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button"
                                        class="btn btn-outline-light btn-lg px-5">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                                        class="fw-bold text-white text-body">Login</a></p>

                            </form>

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