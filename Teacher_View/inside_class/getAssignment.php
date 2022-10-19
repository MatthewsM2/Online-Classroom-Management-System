<?php
session_start();
$serialNo = $_POST["slno"];
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$usrName = $_SESSION['user'];
$clsCode = $_SESSION['clsCode'];
$query="SELECT * FROM `Assign_Table` WHERE tr_slno = $serialNo ;";
$exe=mysqli_query($con, $query);
while($fetch=mysqli_fetch_assoc($exe)){
    
}
?>