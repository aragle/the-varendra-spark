<!-- Sub Menu -->
<div class="sub-header fs-6 fw-lighter">
    <a class="sub-nav">Registration</a>
</div>

<!-- Registration -->
<section id="registration" class="sign">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container p-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card bg-dark text-white">
                        <div class="card-body p-5">

                            <h2 class="fw-bold mb-2 site-name">The Varendra Spark</h2>
                            <p class="text-white-50 mb-5">Create your account here!</p>

                            <form action="registration" method="post">
                                    <?php
                                        foreach ($errors as $issues){
                                            echo "<script>alertBox('danger','Registration Failed!','Input Required Information.')</script>";
                                            echo "<span style='color:red;'> * </span> " . $issues . "<br>";
                                        }
                                    ?>
                                    <br>
                                <div class="form-outline mb-4 col-5 float-end">
                                    <input type="text" name="lastname" id="lastname" class="form-control form-control-lg"/>
                                    <label class="form-label" for="lastname">Last Name</label>
                                </div>

                                <div class="form-outline mb-4 col-6">
                                    <input type="text" name="firstname" id="firstname" class="form-control form-control-lg" />
                                    <label class="form-label" for="firstname">First Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" name="stu_id" id="stu_id" class="form-control form-control-lg" />
                                    <label class="form-label" for="stu_id">Your Student ID</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="email" class="form-control form-control-lg" />
                                    <label class="form-label" for="email">Your Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password_confirm" id="password_confirm" class="form-control form-control-lg" />
                                    <label class="form-label" for="password_confirm">Confirm your password</label>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input name="terms" class="form-check-input me-2" type="checkbox" value=""
                                        id="terms" required/>
                                    <label class="form-check-label" for="terms">
                                        I agree all statements in <a href="#"
                                            class="text-white-50 fst-italic fw-bold">Terms of
                                            service</a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-outline-light btn-lg submit-button px-5" name="registration" id="registration">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login"
                                        class="fw-bold text-white-50">[Login Here]</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
  window.onbeforeunload = function() {
    sessionStorage.setItem("firstname", $('#firstname').val());
    sessionStorage.setItem("lastname", $('#lastname').val());
    sessionStorage.setItem("stu_id", $('#stu_id').val());
    sessionStorage.setItem("email", $('#email').val());
  }

  window.onload = function() {
    var firstname = sessionStorage.getItem("firstname");
    var lastname = sessionStorage.getItem("lastname");
    var stu_id = sessionStorage.getItem("stu_id");
    var email = sessionStorage.getItem("email");

    if (firstname !== null) $('#firstname').val("firstname");
    if (lastname !== null) $('#lastname').val("lastname");
    if (stu_id !== null) $('#stu_id').val("stu_id");
    if (email !== null) $('#email').val("email");
  }
</script>
