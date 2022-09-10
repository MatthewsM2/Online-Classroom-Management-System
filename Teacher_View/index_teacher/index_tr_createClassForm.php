<?php
session_start();
$userName = $_SESSION['user'];
$ClsName = $_POST['ClassName'];
$ClsSubName = $_POST['ClassSubjectName'];
$ClsSem = $_POST['ClassSem'];


$uniqueId = uniqid();
$uniqueId = substr($uniqueId,10,13);
$ClsCode = substr($ClsName,0,3).$uniqueId;

$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$inerstForm = "INSERT INTO `teacher_table` (`Teacher_UsrName`, `Class_Name`, `Class_Code`, `Subject`, `Semester`) VALUES ('$userName', '$ClsName', '$ClsCode', '$ClsSubName', '$ClsSem');";
if(mysqli_query($con,$inerstForm))
{
    header("Location:http://localhost/MiniProject/Teacher_View/index_teacher.php");
}
else{
    echo "Can't Connect to table Teacher";
}
?>


