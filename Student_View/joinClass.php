<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$usrName=$_SESSION['user'];
$clsCode=$_POST['ClassCode'];
$_SESSION['clsCode']=$clsCode;
$queryTeachertable="SELECT * FROM teacher_table WHERE Class_Code='$clsCode';";
$getTeachertable=mysqli_query($con, $queryTeachertable);
$getTeachertableRow=mysqli_num_rows($getTeachertable);
if($getTeachertableRow == 1){
    $getTeacherTableClassSem=mysqli_fetch_assoc($getTeachertable);
    $ClassSem=$getTeacherTableClassSem['Semester'];
    $queryStudenttable="SELECT * FROM student_table WHERE Class_Code = '$clsCode' ;";
    $getStudenttable=mysqli_query($con, $queryStudenttable);
    $getStudenttableRow=mysqli_num_rows($getStudenttable);
    var_dump($getStudenttableRow);
    if($getStudenttableRow == 0)
    {
        $queryInsertStudenttable="INSERT INTO `student_table` (`Sl_No`, `St_UsrName`, `Class_Code`, `Semester`) VALUES (NULL, '$usrName', '$clsCode', '$ClassSem')";
        mysqli_query($con, $queryInsertStudenttable) or die("Some thing went wrong");
        header("Location:http://localhost/MiniProject/Student_View/student.php");
    }
    else{
        echo "Already Add to your Account";
    }
}
else{
    echo"Check Enter Class code";
}
?>