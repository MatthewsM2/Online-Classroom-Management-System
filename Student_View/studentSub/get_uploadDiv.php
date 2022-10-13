<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$clsCode=$_SESSION['clsCode'];
var_dump($clsCode);
$usrName = $_SESSION['user'];

$serialNo=$_POST['slnumber'];

var_dump($serialNo) ;
date_default_timezone_set('Asia/Calcutta');
$day=date('Y-m-d');
$tim=date("H:i:s");

// document files are getting here
$AssignName=$_FILES['Assign']['name'];
$AssignName=time().$AssignName;
$documentTmpPath=$_FILES['Assign']['tmp_name'];
$documentPerPath="gitignore/AssignStudent/";
move_uploaded_file($documentTmpPath,$documentPerPath.$AssignName) or die("document can't uploaded");
$documentPath=$documentPerPath.$AssignName;
// insert query
$queryInsertAssign="INSERT INTO `Assign_Table` (`tr_slno`, `UserName`, `clscode`, `date`, `time`, `Status`, `document`) VALUES ('$serialNo', '$usrName', '$clsCode', '$day', '$tim', 'Waiting', '$documentPath');";
if (mysqli_query($con, $queryInsertAssign)){
    header("Location:http://localhost/MiniProject/Student_View/studentSub.php");
}else{
    echo "Something Went Wrong";
}
?>