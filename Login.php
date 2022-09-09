<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$usr = $_POST["loginUsrName"];
$pass = $_POST["loginPassword"];
$_SESSION['user']="$usr";
var_dump($_SESSION['user']);
// add some ajax code to check user name and password in live
$queryUser = "SELECT Account FROM Account WHERE Usr_Name = '$usr' and pasword = '$pass';";
$acc = mysqli_query($con, $queryUser);
$resultAcc = mysqli_fetch_assoc($acc);
if ($resultAcc['Account'] == "teacher") {
    header("Location:http://localhost/MiniProject/Teacher_View/index_teacher.php");
} else if ($resultAcc['Account'] == "student") {
    header("Location:http://localhost/MiniProject/Student_View/student.html");
} else {
    echo "page Not Found";
}
