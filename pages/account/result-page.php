<?php
  include "pages/account/sub-header.php";
 ?>

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

.search_panel{
  display: grid;
  justify-content: center;
}

input {
  background-color: rgba(var(--bs-dark-rgb),var(--bs-bg-opacity)) !important;
  border: 1px solid #bbb;
  width: 49%;
  padding: 10px;
}

select{
  background-color: rgba(var(--bs-dark-rgb),var(--bs-bg-opacity)) !important;
  border: 1px solid #bbb;
  width: 49%;
  color: black;
  padding: 10px;
}

.ibutton {
  border: 1px solid #bbb;
  padding: 10px;
  background: #bbb;
    margin: 5px 0;
    width: 100%;
}

.ibutton:hover {
  background: #ccc;
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
    padding: 10px;
    margin: 10px 0px;
}

@media screen and (max-width: 1080px) {
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
    $program = "Searching...";
    $session = "Searching...";
    $session = "Searching...";
    $faculty = "Searching...";
    $department = "Searching...";
    $year = "Searching...";

    $url = "pages/account/result-view.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $id = $_POST["stu_id"];
      $semester = $_POST["semester"];

      $url = "http://202.5.52.152:8081/student/show_semester_transcript/" . $id . '/' . $semester;
      // $next_url = "/result.php?stu_id=" . $id . "&semester=";

      $sid = str_split($id);

      $year = "20$sid[0]$sid[1]";

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
                    <div class="small text-muted mb-3 search_panel">Result Archive</div>
                    <div class="search_panel">
                        <form method="post" action="results.php">
                            <input type="text" name="stu_id" id="stu_id" placeholder="Student ID" pattern="[0-9]{9}" minlength="9" maxlength="9" required autocomplete="on">
                            <select name="semester">
                              <option value="1st">1st Semester</option>
                              <option value="2nd">2nd Semester</option>
                              <option value="3rd">3rd Semester</option>
                              <option value="4th">4th Semester</option>
                              <option value="5th">5th Semester</option>
                              <option value="6th">6th Semester</option>
                              <option value="7th">7th Semester</option>
                              <option value="8th">8th Semester</option>
                              <option value="9th">9th Semester</option>
                              <option value="10th">10th Semester</option>
                              <option value="11th">11th Semester</option>
                              <option value="12th">12th Semester</option>
                            </select>
                            <button type="submit" class="ibutton" class="btn btn-primary">View Transcript</button>
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
                        <img class="mb-1" src="https://static.thenounproject.com/png/3938453-200.png"
                            height="150px" width="150px" alt="Target" style="margin: 0 auto;display: flex;">
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
                                <td style="padding:5px 20px;"><?php echo $year;?></td>
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
                        </table>
                        <table class="itable" style="text-align:center;padding:10px;">
                          <tr style="border-bottom: 1px dotted #000;">
                            <th style="padding:10px 5px" colspan="3">Semester</th>
                          </tr>
                          <tr style="border-bottom: 1px dotted #999;">
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "1st" ?>">1st</a></td>
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "2nd" ?>">2nd</a></td>
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "3rd" ?>">3rd</a></td>
                          </tr>
                          <tr style="border-bottom: 1px dotted #999;" style="border-bottom: 1px dotted #000;">
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "4th" ?>">4th</a></td>
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "5th" ?>">5th</a></td>
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "6th" ?>">6th</a></td>
                          </tr>
                          <tr style="border-bottom: 1px dotted #999;">
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "7th" ?>">7th</a></td>
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "8th" ?>">8th</a></td>
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "9th" ?>">9th</a></td>
                          </tr>
                          <tr>
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "10th" ?>">10th</a></td>
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "11th" ?>">11th</a></td>
                            <td style="padding:10px 5px;border-right: 1px dotted #999;"><a href="<?php echo $next_url . "12th" ?>">12th</a></td>
                          </tr>
                        </table>
                        </div>
                      <iframe  id="frame" class="col-lg-9 frame" src="<?php echo $url ?>"/>
                </div>
            </div>
        </div>
    </div>
</div>
