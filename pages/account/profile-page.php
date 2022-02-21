<?php
  include "pages/account/sub-header.php";
 ?>

<!-- Profile Body -->
<section id="profile">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="data:image/png;base64,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" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Ashiqur Rahman Alif</h5>
            <p class="text-muted mb-1">9th Semester</p>
            <p class="text-muted mb-3">Computer Science and Engineering</p>
            <p class="text-muted mb-4 text-white-50">#admin #podcaster #dreamer</p>
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
                <p class="mb-0">admin@thevarendraspark.com</p>
              </li>
              <li class="border-bottom border-dark d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-phone fa-lg" style="color: #ccc;"></i>
                <p class="mb-0">01712 345678</p>
              </li>
              <li class="border-bottom border-dark d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook fa-lg" style="color: #ccc;"></i>
                <p class="mb-0">@aratheunseen</p>
              </li>
              <li class="border-bottom border-dark d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ccc;"></i>
                <p class="mb-0">@aratheunseen</p>
              </li>
              <li class="d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #ccc;"></i>
                <p class="mb-0">@aratheunseen</p>
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
                <p class="text-muted mb-0">19XXXXXXX</p>
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
