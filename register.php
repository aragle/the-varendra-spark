<!-- Login Pages -->
<?php
    include 'includes/pages/header.php';
?>
<section id="registeration">
    <div class="reg_form">
        <form method="post" action="register.php">
            <!-- <?php include 'includes/handlers/errors-handler.php'; ?> -->
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" />
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter Password" />
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password_check" name="password_check"
                    placeholder="Enter password again" />
            </div>
            <div class="mb-3">
                <label class="form-label">Department</label>
                <input type="text" class="form-control" id="dept" name="dept" placeholder="e.g. CSE,Law,Pharmecy" />
            </div>
            <div class="mb-3">
                <label class="form-label">Department</label>
                <input type="text" class="form-control" id="batch" name="batch" placeholder="e.g. 21st" />
            </div>
            <div class="modal-footer">
                <p class="sign-text" style="float:left;">Have an account? <a data-bs-toggle="modal"
                        data-bs-target="#loginModal">[Login Here]</a></p>
                <button type="submit" class="btn btn-warning float-end">Register</button>
            </div>
        </form>
    </div>
</section>
<?php
    include 'includes/pages/footer.php';
?>