<!-- Sub Menu -->
<div class="sub-header fs-6 fw-lighter">
    <a class="sub-nav">Login</a>
</div>

<!-- Login -->
<section id="login" class="sign">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-dark text-white">
                    <div class="card-body p-5">

                        <div class="mb-md-5 mt-md-4 pb-5 ">

                            <h2 class="fw-bold mb-2 logo-font site-name">The Varendra Spark</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                            <form action="login" method="post">
                              <?php
                                  echo "<span class='text-danger'> " . $error . "</span><br>";
                               ?>
                               <br>
                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="student_id" id="student_id" class="form-control form-control-lg" />
                                    <label class="form-label" for="student_id">Student ID</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Password</label>
                                </div>

                                <p class="mb-5 text-end"><a class="text-white-50" href="recovery">Forgot
                                        password?</a></p>

                                <button name="login" class="btn btn-outline-light btn-lg px-5 submit-button"
                                    type="submit">Login</button>
                            </form>
                        </div>

                        <div>
                            <p class="mb-0 text-white-50 text-center">Don't have an account? <a href="registration"
                                    class="text-white-50 fw-bold">[Register Here]</a></p>
                            <p class="mb-0 text-white-50 text-center">Have an inactive account? <a href="verification"
                                            class="text-white-50 fw-bold">[Activate Here]</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
