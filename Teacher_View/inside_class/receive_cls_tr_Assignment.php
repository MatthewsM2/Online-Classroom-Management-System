<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$clsCode=$_SESSION['clsCode'];
$AssignDesc=$_POST['AssigDes'];
$AssignModule=$_POST['AssignModule'];
$AssignHeading=$_POST['AssignHeading'];
$AssignDate=$_POST['AssignDate'];
$AssignTime=$_POST['AssignTime'];

echo $AssignDate.'<br>';
echo $AssignModule.'<br>';
echo $AssignDesc.'<br>';
echo $AssignTime.'<br>';

// document get here
$OldAssignDocName=$_FILES['AssignDoc']['name'];
if($OldAssignDocName != ""){
$AssignDocName='Assign'.time().$OldAssignDocName;
$AssignDocTempath=$_FILES['AssignDoc']['tmp_name'];
$AssignDocPerpath="gitignore/doc/";
move_uploaded_file($AssignDocTempath, $AssignDocPerpath.$AssignDocName) or die("Document can't upload");
$AssignPath = $AssignDocPerpath.$AssignDocName;
echo $AssignDocPerpath;
echo $AssignPath;
}else{
    $AssignPath=NULL;
}
// insert into table
$queryInsertAssign = "INSERT INTO `Class_Table` (`Sl_No`, `Class_code`, `Module`, `Is_Assignment`, `Heading`, `Description`, `date`, `time`, `document`, `thumbnail`) VALUES (NULL, '$clsCode', '$AssignModule', '1', '$AssignHeading', '$AssignDesc', '$AssignDate', '$AssignTime', '$AssignPath', NULL);";
if (mysqli_query($con ,$queryInsertAssign))
{
    header("Location:http://localhost/MiniProject/Teacher_View/inside_cls_tr.php");
}
else
{
    echo "Can't Upload";
}
