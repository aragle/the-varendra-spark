<?php
    include 'pages/common/header.php';
    include 'controllers/users/verify-handler.php';
?>

<!-- Sub Menu -->
<div class="sub-header fs-6 fw-lighter">
    <a class="sub-nav">Email Verification</a>
</div>

<!-- Activation -->
<section id="verification" class="sign">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-dark text-white">
                    <div class="card-body p-5">
                        <div class="mt-md-3">
                            <form action="verify" method="get">
                              <?php
                                  echo "<span class='text-danger' style='text-align:center;display:block;'> " . $error . "</span><br>";
                               ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include 'pages/common/footer.php';
?>