<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$slNo=$_POST['slno'];
$usrName = $_SESSION['user'];
$queryForAssignCheck="SELECT * FROM `Assign_Table` WHERE tr_slno = '$slNo' AND  UserName = '$usrName' ;";
$ExecuteForAssignCheck = mysqli_query($con, $queryForAssignCheck);
if(mysqli_num_rows($ExecuteForAssignCheck)==0){
    echo "Zero";
}else{
    $AssignmentData=mysqli_fetch_assoc($ExecuteForAssignCheck);
    echo $AssignmentData['document'];
}
?>