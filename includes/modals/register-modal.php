<!-- Login Modals -->
<?php include 'connection/connection.php'; ?>
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="sign-up.php">
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
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="password_check" name="password_check" placeholder="Enter password again" />
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
                        <p class="sign-text" style="float:left;">Have an account? <a  data-bs-toggle="modal" data-bs-target="#loginModal">[Login Here]</a></p>
                        <button type="submit" class="btn btn-warning float-end">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>