<?php
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$usr = $_POST['username'];
$query="DELETE FROM Account WHERE Usr_Name = '$usr';";
if(mysqli_query($con, $query))
{
    echo "Okey";
}
else{
    echo "Problem";
}
?>