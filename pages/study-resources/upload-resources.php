<!-- Sub Menu -->
<div class="sub-header fs-6 fw-lighter">
    <a class="sub-nav">Upload Your Files</a>
    <a href="study-resources.php" class="sub-nav">Study Resources</a>
</div>

<section id="login" class="sign">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-dark text-white">
                    <div class="card-body p-5">

                        <div class="mb-md-0 mt-md-0 pb-5 ">
                            <form action="upload-resources" method="post" enctype="multipart/form-data">
                                <br>
                                <div class="form-outline form-white mb-3">
                                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control form-control-lg" />
                                    <label class="form-label" for="fileToUpload">Select File</label>
                                </div>

                                <div class="form-outline form-white mb-2">
                                    <select type="select" id="department" name="department" class="form-control form-control-lg">
                                        <option value="">BBA</option>
                                        <option value="">CSE</option>
                                    </select>
                                    <label class="form-label" for="department">Select Department</label>
                                </div>

                                <div class="form-outline form-white mb-2">
                                    <select type="select" id="department" name="department" class="form-control form-control-lg">
                                        <option value="">1st Semester</option>
                                        <option value="">2nd Semester</option>
                                    </select>
                                    <label class="form-label" for="semester">Select Semester</label>
                                </div>

                                <div class="form-outline form-white mb-2">
                                    <select type="select" id="department" name="department" class="form-control form-control-lg">
                                        <option value="">CSE 101</option>
                                        <option value="">PHY 101</option>
                                    </select>
                                    <label class="form-label" for="semester">Select Course</label>
                                </div>

                                <button name="login" class="btn btn-outline-light btn-lg px-5 submit-button"
                                    type="submit">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
