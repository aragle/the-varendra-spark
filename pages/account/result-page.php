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
    margin: 80px 0 0 150px;
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
      background-color: rgba(var(--bs-dark-rgb),var(--bs-bg-opacity)) !important;
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

    $id = 'Searching...';
    $semester = 'Searching...';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = $_POST["stu_id"];
      $semester = $_POST["semester"];

      $sid = str_split($id);

      //Find Program
      if($sid[5] == "1"){
        $program = "Bachelor's";
      }
      elseif ($sid[5] == "2") {
        $program = "Master's";
      }
      else{
        $program = "Unknown";
      }

      // Find Session
      if($sid[2] == "1"){
        $session = "Spring";
      }
      elseif ($sid[2] == "2") {
        $session = "Summer";
      }
      elseif ($sid[2] == "3") {
        $session = "Fall";
      }
      else {
        $session = "Unknown";
      }

      // Find Faculty
      if($sid[3] == "0"){
        $faculty = "Arts";
      }
      elseif ($sid[3] == "1") {
        $faculty = "Social Science";
      }
      elseif ($sid[3] == "2" && $sid[5] == "1") {
        $faculty = "Pharmecy";
      }
      elseif ($sid[3] == "2" && $sid[5] == "2") {
        $faculty = "Public Health";
      }
      elseif ($sid[3] == "3") {
        $faculty = "Science and Engineering";
      }
      elseif ($sid[3] == "4") {
        $faculty = "Business";
      }
      elseif ($sid[3] == "5") {
        $faculty = "LAW";
      }

      // Find Department
      if ($sid[3] == "0" && $sid[4] == "1" ) {
        $department = "";
      }
      elseif ($sid[3] == "0" && $sid[4] == "1") {
        $department = "English";
      }
      elseif ($sid[3] == "1" && $sid[4] == "1") {
        $department = "Sociology";
      }
      elseif ($sid[3] == "1" && $sid[4] == "2") {
        $department = "Economics";
      }
      elseif ($sid[3] == "1" && $sid[4] == "3") {
        $department = "Journalism, Communication and Media Studies";
      }
      elseif ($sid[3] == "1" && $sid[4] == "4") {
        $department = "Political Science";
      }
      elseif ($sid[3] == "2" && $sid[4] == "1") {
        $department = "Pharmecy";
      }
      elseif ($sid[3] == "2" && $sid[4] == "3") {
        $department = "Public Health";
      }
      elseif ($sid[3] == "3" && $sid[4] == "1") {
        $department = "Computer Science and Engineering";
      }
      elseif ($sid[3] == "3" && $sid[4] == "2") {
        $department = "Electrical and Electronics Engineering";
      }
      elseif ($sid[3] == "4" && $sid[4] == "1") {
        $department = "Business Admisintartion";
      }
      elseif ($sid[3] == "5" && $sid[4] == "1") {
        $department = "Law and Human Rights";
      }

    }
?>


<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card h-100 border-start-lg border-start-primary text-white-50" style="background-color:#ddd;">
                <div class="card-body">
                    <div class="small text-muted">View Transcript</div>
                    <div class="search_panel">
                        <form method="post" action="result.php">
                            <input type="text" class="search_box" name="stu_id" id="stu_id"
                                placeholder="Student ID" required>
                            <input type="text" class="search_box" name="semester" id="semester" placeholder="Semester"
                                required>
                            <button type="submit" class="search_box ibutton" class="btn btn-primary">View Transcript</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-header-actions mb-4"  style="background-color:#ddd;">
        <div class="card-header">
            <div class="container-xl px-4 mt-4">
                <div class="row">
                    <div class="right col-lg-3">
                        <img src="https://www.freeiconspng.com/thumbs/results-icon-png/results-icon-png-2.png"
                            height="200px" width="100%" alt="" srcset="">
                        <table class="itable">
                            <tr style="border-bottom:1px solid #ccc">
                                <td style="padding:5px 20px;">Student ID </td>
                                <td style="padding:5px 20px;"><?php echo $id;?></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc">
                                <td style="padding:5px 20px;">Degree </td>
                                <td style="padding:5px 20px;"><?php echo $program;?></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc">
                                <td style="padding:5px 20px;">Year </td>
                                <td style="padding:5px 20px;">20<?php echo $sid[0] . $sid[1];?></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc">
                                <td style="padding:5px 20px;">Session </td>
                                <td style="padding:5px 20px;"><?php echo $session;?></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc">
                                <td style="padding:5px 20px;">Faculty </td>
                                <td style="padding:5px 20px;"><?php echo $faculty;?></td>
                            </tr>
                            <tr>
                                <td style="padding:5px 20px;">Department </td>
                                <td style="padding:5px 20px;"><?php echo $department;?></td>
                            </tr>
                            <!-- <tr>
                                <td style="padding:5px 20px;">Semester </td>
                                <td style="padding:5px 20px;"><?php echo $id;?></td>
                            </tr> -->
                        </table>
                    </div>
                    <iframe class="col-lg-9 frame" id="frame" src="<?php echo "http://202.5.52.152:8081/student/show_semester_transcript/" . $id . '/' . $semester; ?>">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
