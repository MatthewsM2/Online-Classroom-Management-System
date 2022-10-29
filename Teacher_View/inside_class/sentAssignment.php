<?php
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$StudentUsrName = $_POST['UserNameArr'];
$StudentAssignStatus = $_POST['checkboxAssign'];
$TeacherSerialNum = $_POST['trSerialNumber'];
$marks = $_POST['AssignMarks'];
$loop = 0;
while ($StudentUsrName[$loop] != NULL) {
    $UserName = $StudentUsrName[$loop];
    if ($StudentAssignStatus[$loop] == "Accpted") {
        $Accquery = "UPDATE `Assign_Table` SET `Status` = 'Accepted' WHERE `tr_slno` = '$TeacherSerialNum' AND `UserName` = '$UserName';";
        $Accexe = mysqli_query($con, $Accquery);
    } else {
        $Rejquery = "UPDATE `Assign_Table` SET `Status` = 'Rejected' WHERE `tr_slno` = '$TeacherSerialNum' AND `UserName` = '$UserName';";
        $Rejexe = mysqli_query($con, $Rejquery);
    }

    $Mark = $marks[$loop];
    if ($Mark != null) {
        $Marksquery = "UPDATE `Assign_Table` SET `marks` = '$Mark' WHERE `tr_slno` = '$TeacherSerialNum' AND `UserName` = '$UserName';";
        $Marksexe = mysqli_query($con, $Marksquery);
    }
    $loop = $loop + 1;
}
header("Location:http://localhost/MiniProject/Teacher_View/inside_cls_tr.php");
?>