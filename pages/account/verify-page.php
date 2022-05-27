<!-- Sub Menu -->
<div class="sub-header fs-6 fw-lighter">
    <a class="sub-nav">Manual Verification</a>
</div>

<!-- Activation -->
<section id="verification" class="sign">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-dark text-white">
                    <div class="card-body p-5">
                        <div class="mb-md-3 mt-md-3 pb-5 ">
                            <form action="verify" method="get">
                              <?php
                                  echo "<span class='text-danger' style='text-align:center;display:block;'> " . $error . "</span><br>";
                               ?>
                               <br>
                               <div class="form-outline form-white mb-2">
                                   <input type="text" name="student-id" id="student-id" class="form-control form-control-lg" />
                                   <label class="form-label" for="student-id">Student ID</label>
                               </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="verification-code" id="verification-code" class="form-control form-control-lg" />
                                    <label class="form-label" for="verification-code">Verification Code</label>
                                </div>

                                <button name="verify" value="manual" class="btn btn-outline-light btn-lg px-5 submit-button"
                                    type="submit">Verify</button>
                            </form>
                        </div>

                        <div>
                            <p class="mb-0 text-white-50 text-center">Have an active account? <a href="signin"
                                    class="text-white-50 fw-bold">[Sign In]</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
