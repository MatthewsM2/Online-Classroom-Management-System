<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$clsCode = $_SESSION['clsCode'];
$Date=$_POST['AttDate'];
$Time=$_POST['AttTime'];
$StudentName = $_POST['studName'];
$studAttStatus = $_POST['studAttStatus'];
$loop=0;
while($StudentName[$loop]!=NULL)
{
    $StudName=$StudentName[$loop];
    $Attand=$studAttStatus[$loop];
    echo $StudName;
    echo $Attand;
    if($Attand==NULL){
        $Attand=0;
    }elseif($Attand=="Yes"){
        $Attand=1;
    }
    $queryAttand="INSERT INTO `Attand` (`Sl_No`, `St_UsrName`, `Class_Code`, `Date`, `Time`, `Attendance`) VALUES (NULL, '$StudName', '$clsCode', '$Date', '$Time', '$Attand')";
    mysqli_query($con, $queryAttand);
    $loop=$loop+1;
}
?>