<?php
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$usrName = $_POST["usrname"];
$clsCode = $_POST["cls"];
$query = "DELETE FROM student_table WHERE `St_UsrName` = '$usrName' AND `Class_Code` = '$clsCode';";
$exequery = mysqli_query($con,$query);
// it wants some alert boxes and redirction while delete
?>