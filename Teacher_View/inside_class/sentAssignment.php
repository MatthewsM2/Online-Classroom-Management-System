<?php
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$StudentUsrName=$_POST['UserNameArr'];
$StudentAssignStatus=$_POST['checkboxAssign'];
$TeacherSerialNum=$_POST['trSerialNumber']; 
$loop=0;
while($StudentUsrName[$loop]!=NULL){
    $UserName=$StudentUsrName[$loop];
    if($StudentAssignStatus[$loop]=="Accpted"){
        $Accquery="UPDATE `Assign_Table` SET `Status` = 'Accepted' WHERE `tr_slno` = '$TeacherSerialNum' AND `UserName` = '$UserName';";
        $Accexe=mysqli_query($con, $Accquery);
    }else{
        $Rejquery="UPDATE `Assign_Table` SET `Status` = 'Rejected' WHERE `tr_slno` = '$TeacherSerialNum' AND `UserName` = '$UserName';";
        $Rejexe=mysqli_query($con, $Rejquery);
    }
    $loop=$loop+1;
}
