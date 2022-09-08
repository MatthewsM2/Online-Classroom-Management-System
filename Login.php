<?php
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$usr = $_POST["loginUsrName"];
$pass = $_POST["loginPassword"];
echo $usr;
echo $pass;
// below codes will run properly without any error verified the system to change the login user and password to be checked and verified is needed
$queryUser = "SELECT Account FROM Account WHERE Usr_Name = '$usr';";
$acc = mysqli_query($con, $queryUser);
$resultAcc = mysqli_fetch_assoc($acc);
if ($resultAcc['Account'] == "teacher") {
    echo "teacher";
} else if ($resultAcc['Account'] == "student") {
    echo "student";
} else {
    echo "page Not Found";
}
