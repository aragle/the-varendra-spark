<!-- Result Menu -->
<div class="sub-header bg-dark fs-6 fw-lighter">
    <a href="profile.php" class="sub-nav">Profile</a>
    <a href="courses.php" class="sub-nav">Courses</a>
    <a class="sub-nav sub-nav-active">Result</a>
    <a href="payment.php" class="sub-nav">Payment</a>
</div>
<hr class="mt-0 mb-4">



<style>
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    border-radius: 0.35rem;
}

.card .card-header {
    font-weight: 500;
}

.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}

.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}


input {
    margin: 5px 0;
    padding: 10px;
    width: 30%;
}

.ibutton {
    margin: 5px 0;
    padding: 10px;
    width: 20%;
}


.search_panel {
    margin: 5px auto;
    padding: 10px;
}

.frame {
    width: 50%;
    height: 450px;
    margin: 10px 0 0 150px;
}

.itable {
    border: 1px solid #bbb;
    width: 100%;
    color: black;
    padding: 20px;
    margin: 50px 0px;
}

@media screen and (max-width: 1080px) {

    input {
        margin: 0px auto;
        width: 49%;
    }

    .ibutton {
        margin: 5px 0;
        padding: 10px;
        width: 100%;
    }

    .frame {
    width: 100%;
    height: 450px;
    margin: 0;
    }
}
}

}
</style>



<?php

    $transcript = 'Searching...';
    $show = 'Searching...';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = "http://202.5.52.152:8081/student/show_semester_transcript/";
    $transcript = $_POST["vdw5cdserfd"];
    $show = $_POST["vxc2refd"];
    }
?>


<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card h-100 border-start-lg border-start-primary bg-light text-white-50">
                <div class="card-body">
                    <div class="small text-muted">View Transcript</div>
                    <div class="search_panel">
                        <form method="post" action="result.php">
                            <input type="text" class="search_box" name="vdw5cdserfd" id="stu_id"
                                placeholder="Student ID" required>
                            <input type="text" class="search_box" name="vxc2refd" id="semester" placeholder="Semester"
                                required>
                            <button type="submit" class="search_box ibutton" class="btn btn-primary">View Transcript</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-header-actions mb-4 bg-light">
        <div class="card-header">
            <div class="container-xl px-4 mt-4">
                <div class="row">
                    <div class="right col-lg-3">
                        <img src="data:image/png;base64,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"
                            height="200px" width="100%" alt="" srcset="">
                        <table class="itable">
                            <tr>
                                <td style="padding:5px 20px;">ID </td>
                                <td style="padding:5px 20px;"><?php echo $transcript;?></td>
                            </tr>
                            <tr>
                                <td style="padding:5px 20px;">Semester </td>
                                <td style="padding:5px 20px;"><?php echo $show;?></td>
                            </tr>
                        </table>
                    </div>
                    <iframe class="col-lg-9 frame" id="frame" src="<?php echo $base . $transcript . '/' . $show; ?>">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>