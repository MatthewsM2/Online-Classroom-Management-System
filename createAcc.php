<?php
$Account=$_POST["AccountStatus"];
$Firstname=$_POST["AccFirstname"];
$Lastname=$_POST["AccLastname"];
$Username=$_POST["AccUsrname"];
$pass=$_POST["AccPass"];
$rePass=$_POST["AccRepass"];
$con = new mysqli("localhost","root","","smart_project") or die("Connection Failed");
$con->query("INSERT INTO `Account` (`Account`, `First_Name`, `Last_Name`, `Usr_Name`, `Pasword`) VALUES ('$Account', '$Firstname', '$Lastname', '$Username', '$pass')");
header("Location: http://localhost/MiniProject/");
exit;
?>