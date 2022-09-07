<?php
$con = new mysqli("localhost","root","","smart_project") or die("Connection Failed");
$usr=$_POST["loginUsrName"];
$pass=$_POST["loginPassword"];
echo $usr;
echo $pass;
$query = "SELECT `Account` FROM `Account` WHERE Usr_Name = '$usr';";
var_dump($query);
$acc=$con->query($query);
echo $acc;
?>