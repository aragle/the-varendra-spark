<?php
  include "pages/account/sub-header.php";
 
 
    if(isset($_SESSION['id'])){

        $sql = mysqli_query($connection, "SELECT * FROM users WHERE id='$_SESSION[id]'") or die(mysqli_error());
       $fetch = mysqli_fetch_array($sql);
 
    }
 ?>

<!-- Profile Body -->
<section id="profile">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="<?php echo 'http://202.5.52.152:8082/upload/'.$fetch["student_id"].'.jpg' ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;height: 150px;">
            <h5 class="my-1"><?php echo $fetch["first_name"] . ' ' . $fetch["last_name"] ?></h5>
            <p class="text-muted mb-3">@username</p>
            <p class="text-white-50 mb-3">9th Semester</p>
            <p class="mb-4 text-success">#admin #podcaster #dreamer</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-light w-75">Message</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="border-bottom border-dark d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-envelope fa-lg" style="color: #ccc;"></i>
                <p class="mb-0"><?php echo $fetch["email"] ?></p>
              </li>
              <li class="border-bottom border-dark d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-phone fa-lg" style="color: #ccc;"></i>
                <p class="mb-0">01712-345678</p>
              </li>
              <li class="border-bottom border-dark d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook fa-lg" style="color: #ccc;"></i>
                <p class="mb-0">@fb-handle</p>
              </li>
              <li class="border-bottom border-dark d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ccc;"></i>
                <p class="mb-0">@insta-handle</p>
              </li>
              <li class="d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #ccc;"></i>
                <p class="mb-0">@github-handle</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Student ID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $fetch["student_id"] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Faculty</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Science and Engineering</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Department</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Computer Science and Engineering</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Session</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Summer - 2019</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Program</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Bachalor</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-md-12">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4">Forum Posts</p>
                <div class="text-center p-5">No Forum Posts</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4">Journal Posts</p>
                  <div class="text-center p-5">No Journal Posts</div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
