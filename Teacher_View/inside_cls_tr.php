<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
if ($_GET['clcode'] == NULL) {
    $clsCode = $_SESSION['clsCode'];
} else {
    $clsCode = $_GET['clcode'];
}
$_SESSION['clsCode'] = $clsCode;
$userName = $_SESSION['user'];
$queryGetTrClsValues = "SELECT * FROM teacher_table WHERE Class_Code = '$clsCode';";
$GetTrClsValues = mysqli_query($con, $queryGetTrClsValues);
$TrClsValues = mysqli_fetch_assoc($GetTrClsValues);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://localhost/MiniProject/Teacher_View/Assets/home_app_logo_FILL0_wght400_GRAD0_opsz48.svg" type="image/ico">
    <title>Teacher</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="studentIcon.css">
    <link rel="stylesheet" href="selectboxCss.css">
    <link rel="stylesheet" href="MainDiv4.css">
    <link rel="stylesheet" href="toggleBtn.css">
    <link rel="stylesheet" href="MainDiv5.css">
    <link rel="stylesheet" href="check-assignment.css">
</head>

<body>
    <div class="DivContainers">
        <div class="subDiv">
            <span class="material-symbols-outlined icons1" id="home" onclick="homeClick()" title="Home">
                home_app_logo
            </span>
            <span class="material-symbols-outlined icons" id="Maindiv2" title="Students" onclick="studentsClick()">
                groups
            </span>
            <span class="material-symbols-outlined icons" id="Maindiv3" title="Create Module" onclick="createModule()">
                post_add
            </span>
            <span class="material-symbols-outlined icons" id="Maindiv4" title="Attaendance" onclick="Attaendance()">
                new_releases
            </span>
            <span class="material-symbols-outlined icons" id="Maindiv5" title="Assignment" onclick="Assignment()">
                assignment
            </span>
            <span class="material-symbols-outlined icons" id="check-assignment" title="Check Assignment" onclick="CheckAssignment()">
                inventory
            </span>
            <a href="../logout.php"><span class="material-symbols-outlined icons" id="logOut">
                logout
            </span></a>
        </div>

        <?php include 'inside_class/inside_cls_tr_Maindiv1.php' ?>
        <?php include 'inside_class/inside_cls_tr_Maindiv2.php' ?>
        <?php include 'inside_class/inside_cls_tr_Maindiv3.php' ?>
        <?php include 'inside_class/inside_cls_tr_Maindiv4.php' ?>
        <?php include 'inside_class/inside_cls_tr_Maindiv5.php' ?>
        <?php include 'inside_class/inside_cls_tr_CheckAssignment.php' ?>
</body>
<script src="/MiniProject/script.js"></script>
<script src="selectbox.js"></script>
<script src="fileSelect.js"></script>
<script src="/MiniProject/jquery.js"></script>
<script src="CheckAssignment.js"></script>
</html>