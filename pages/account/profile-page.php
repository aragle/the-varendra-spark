<?php
  include "pages/account/sub-header.php";
 ?>

<!-- Profile Body -->
<style>
.img-account-profile {
    height: 10rem;
}

.rounded-circle {
    border-radius: 50% !important;
}

.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}

.card .card-header {
    font-weight: 600;
}

.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}

.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: #262932;
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}

.form-control,
.dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
</style>

<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0 bg-dark">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2"
                        src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="font-bold text-white mb-2">Ashiqur Rahman Alif</div>
                    <div class="small font-italic text-muted mb-0">1923XXXXXX</div>
                    <!-- Profile picture upload button-->
                    <!-- <button class="btn btn-primary" type="button">Upload new image</button> -->
                </div>
            </div>
            <!-- Profile picture card-->
            <div class="card mb-0 mb-xl-0 bg-dark">
                <div class="card-header">Admission Information</div>
                <div class="card-body text-start">
                    <!-- Profile picture help block-->
                    <div class="font-bold text-muted mb-0">
                        Department: Computer Science and Engineering <br>
                        Program: B. Sc. in CSE <br>
                        Semester: 9th <br>
                        Session: Summer-2019 <br>
                        Section: A <br>
                    </div>
                </div>
            </div>





        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4 bg-dark">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (Student ID)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Student ID</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username"
                                value="1923XXXXXX">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text"
                                    placeholder="Enter your first name" value="Ashiqur Rahman">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text"
                                    placeholder="Enter your last name" value="Alif">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputDepartment">Department</label>
                                <input class="form-control" id="inputDepartment" type="text"
                                    placeholder="Enter your drpartment" value="CSE">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBatch">Batch</label>
                                <input class="form-control" id="inputBatch" type="text" placeholder="Enter your batch"
                                    value="21st">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email"
                                placeholder="Enter your email address" value="1923XXXXX@thevarendraspark.com">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel"
                                    placeholder="Enter your phone number" value="+880 1234567890">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="joinDate">Account Creation Date</label>
                                <input disabled class="form-control" id="joinDate" type="text"
                                    name="accountCreationDate" value="02 February 2022">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary justify-content-md-end" type="button">Save changes</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
