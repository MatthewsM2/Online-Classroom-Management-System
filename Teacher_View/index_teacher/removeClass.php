<?php
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$cls=$_POST['cls'];
$query=mysqli_query($con,"DELETE FROM `teacher_table` WHERE `Class_Code` = '$cls'");
?>