<?php
session_start();
$serialNo = $_POST["slno"];
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$usrName = $_SESSION['user'];
$clsCode = $_SESSION['clsCode'];
$query="SELECT * FROM `Assign_Table` WHERE tr_slno = $serialNo ;";
$exe=mysqli_query($con, $query);
$rows=[];
$returnArray=[];
while($fetch=mysqli_fetch_assoc($exe)){
    $AccUser = $fetch['UserName'];
    $docStatus = $fetch['Status'];
    $DocLink = $fetch['document'];

    $Accquery = "SELECT * FROM `Account` WHERE Usr_Name = '$AccUser';";
    $Accexe = mysqli_query($con, $Accquery);
    $AccFetch = mysqli_fetch_assoc($Accexe);
    $RealName = $AccFetch['First_Name']." ".$AccFetch['Last_Name'];

    $rows[]=array($RealName,$docStatus,$DocLink);
    $returnArray=array($rows);
}
echo json_encode($returnArray);
?>