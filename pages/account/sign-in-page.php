<!-- Sub Menu -->
<div class="sub-header fs-6 fw-lighter">
    <a class="sub-nav">Sign In</a>
</div>

<!-- Login -->
<section id="login" class="sign">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-dark text-white">
                    <div class="card-body p-5">

                        <div class="mb-md-0 mt-md-0 pb-5 ">
                            <form action="signin" method="post">
                                <?php
                                echo "<span class='text-danger' style='text-align:center;display: block;'> " . $error . "</span><br>";
                                ?>
                                <br>
                                <div class="form-outline form-white mb-3">
                                    <input type="text" name="student_id" id="student_id" class="form-control form-control-lg" />
                                    <label class="form-label" for="student_id">Student ID</label>
                                </div>

                                <div class="form-outline form-white mb-2">
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Password</label>
                                </div>

                                <p class="mb-3 text-end"><a class="text-white-50" href="recovery">Forgot
                                        password?</a></p>

                                <button name="login" class="btn btn-outline-light btn-lg px-5 submit-button" type="submit">Login</button>
                            </form>
                        </div>

                        <div>
                            <p class="mb-0 text-white-50 text-center">Don't have an account? <a href="signup" class="text-white-50 fw-bold">[Sign Up]</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>