<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$clsCode=$_SESSION['clsCode'];
$usrName = $_SESSION['user'];

$serialNo=$_POST['slnumber'];

var_dump($serialNo) ;
date_default_timezone_set('Asia/Calcutta');
$day=date('Y-m-d');
$tim=date("H:i:s");

// document files are getting here
$AssignName=$_FILES['Assign']['name'];
$AssignName=time().$oldDocmentName;
$documentTmpPath=$_FILES['Assign']['tmp_name'];
$documentPerPath="gitignore/doc/AssignStudent/";
move_uploaded_file($documentTmpPath,$documentPerPath.$AssignName) or die("document can't uploaded");
$documentPath=$documentPerPath.$docmentName;

// insert query
$queryInsertAssign="INSERT INTO `Assign_Table` (`SlNo`, `UserName`, `clscode`, `date`, `time`, `Status`, `document`) VALUES ('$serialNo', '$usrName', '$clsCode', '$day', '$tim', 'Waiting', '$documentPath');";
mysqli_query($con, $queryInsertAssign);
?>