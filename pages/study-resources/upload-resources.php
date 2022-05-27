<!-- Sub Menu -->
<div class="sub-header fs-6 fw-lighter">
    <a class="sub-nav">Upload Your Files</a>
    <a href="study-resources.php" class="sub-nav">Study Resources</a>
</div>

<section id="upload" class="sign">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-dark text-white">
                    <div class="card-body p-5">

                        <div class="mb-md-0 mt-md-0 pb-5 ">
                            <form action="upload-resources" method="post" enctype="multipart/form-data">
                                <div style="text-align: center;" class="mb-5">
                                    <?php
                                    $target_dir = "uploads/";
                                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                    $uploadOk = 1;
                                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                                    // Check if image file is a actual image or fake image
                                    if (isset($_POST["upload"])) {
                                        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                        if ($check !== false) {
                                            echo "File is an image - " . $check["mime"] . ".";
                                            $uploadOk = 1;
                                        } else {
                                            echo "File is not an image.";
                                            $uploadOk = 0;
                                        }
                                    }

                                    // Check if file already exists
                                    if (file_exists($target_file)) {
                                        echo "Sorry, file already exists.";
                                        $uploadOk = 0;
                                    }

                                    // Check file size
                                    if ($_FILES["fileToUpload"]["size"] > 500000) {
                                        echo "Sorry, your file is too large.";
                                        $uploadOk = 0;
                                    }

                                    // Allow certain file formats
                                    if (
                                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                        && $imageFileType != "gif"
                                    ) {
                                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                        $uploadOk = 0;
                                    }

                                    // Check if $uploadOk is set to 0 by an error
                                    if ($uploadOk == 0) {
                                        echo "Sorry, your file was not uploaded.";
                                        // if everything is ok, try to upload file
                                    } else {
                                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                                        } else {
                                            echo "Sorry, there was an error uploading your file.";
                                        }
                                    }
                                    ?>
                                </div>
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

                                <button name="upload" class="btn btn-outline-light btn-lg px-5 submit-button" type="submit">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>