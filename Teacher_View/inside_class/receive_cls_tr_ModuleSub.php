<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$clsCode=$_SESSION['clsCode'];
$module=$_POST['moduleName'];
$doc=$_POST['documentUpload'];
$docTitle=$_POST['docTitle'];
$docDes=$_POST['docDescription'];

// document files are getting here
$oldDocmentName=$_FILES['documentUpload']['name'];
$docmentName=time().$oldDocmentName;
$documentTmpPath=$_FILES['documentUpload']['tmp_name'];
$documentPerPath=".gitignore/doc/";
move_uploaded_file($documentTmpPath,$documentPerPath.$docmentName) or die("document can't uploaded");
$documentPath=$documentPerPath.$docmentName;

// thumbnail files are getting here
$oldthumbName=$_FILES['thumbnailPic']['name'];
$thumbName = time().$oldthumbName;
$thumbTmpPath=$_FILES['thumbnailPic']['tmp_name'];
$thumbPerPath="gitignore/thumb/";
move_uploaded_file($thumbTmpPath,$thumbPerPath.$thumbName) or die("thumbnail can't uploaded");
$thumbPath=$thumbPerPath.$thumbName;

$queryInsertAddMod = "INSERT INTO `Class_Table` (`Sl_No`, `Class_code`, `Module`, `Is_Assignment`, `Heading`, `Description`, `date`, `time`, `document`, `thumbnail`) VALUES (NULL, '$clsCode', '$module', '0', '$docTitle', '$docDes', NULL, NULL, '$documentPath', '$thumbPath');";
if (mysqli_query($con ,$queryInsertAddMod))
{
    header("Location:http://localhost/MiniProject/Teacher_View/inside_cls_tr.php");
}
else
{
    echo "Can't Upload";
}
