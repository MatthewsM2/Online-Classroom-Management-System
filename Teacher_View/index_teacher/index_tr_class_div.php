<!-- this sub page of index_tr_home.php -->
<?php
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$queryGetTeacherValues = "SELECT * FROM `teacher_table` WHERE Teacher_UsrName = '$userName';";
$GetTeacherValues = mysqli_query($con, $queryGetTeacherValues);
$TeacherValuesRows = mysqli_num_rows($GetTeacherValues);

if ($TeacherValuesRows > 0) {
  $queryUniqueSem = "SELECT DISTINCT Semester FROM teacher_table;";
  $GetUniqueSem = mysqli_query($con, $queryUniqueSem);
  while ($SemValtoTrav = mysqli_fetch_assoc($GetUniqueSem)) {
    $SemVal = $SemValtoTrav['Semester'];
    echo '<div class="section">
  <h3 id="semTitle">Semester-' . $SemVal . '</h5>
  <div class="DivClassContainer">
            <!-- Subject Divs -->';
    $queryUniqueSemClass = "SELECT * FROM `teacher_table` WHERE Teacher_UsrName = '$userName' and Semester = '$SemVal';";
    $GetUniqueSemClass = mysqli_query($con, $queryUniqueSemClass);
    while ($SemClassValtoTrav = mysqli_fetch_assoc($GetUniqueSemClass)) {
      echo '<div class="SubjectClass" onclick="reDirctoCls(this.children[1])">
                <label for="SubjectName" class="SubClassTxt">' . $SemClassValtoTrav['Class_Name'] . '</label>
                <input type="hidden" id="cls-code-hide"  value="' . $SemClassValtoTrav['Class_Code'] . '">
                <label for="SubjectName" class="SubName">' . $SemClassValtoTrav['Subject'] . '</label>
            </div>';
    }
    echo '</div> </div>';
  }
}

?>