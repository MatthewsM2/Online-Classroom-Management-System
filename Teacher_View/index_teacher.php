<?php session_start() ?>
<?php
if ($_SESSION['user'] == NULL) {
    header("Location: ../index.php");
}
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
    <link rel="stylesheet" href="index_teacherCss.css">
</head>

<body>
    <?php
    $con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
    $userName = $_SESSION['user'];
    $queryGetAccValues = "SELECT * FROM Account WHERE Usr_Name = '$userName';";
    $GetAccValues = mysqli_query($con, $queryGetAccValues);
    $AccValues = mysqli_fetch_assoc($GetAccValues);


    // check if the account is Student or 
    // not and redirct to teacher account
    $AccToCheckStudent = $AccValues['Account'];
    if ($AccToCheckStudent == "student") {
        header("Location: ../Student_View/student.php");
    }
    ?>
    <div class="DivContainers">
        <div class="subDiv">
            <span class="material-symbols-outlined icons1" id="home" onclick="homeClick()">
                home_app_logo
            </span>
            <span class="material-symbols-outlined icons" id="account" onclick="AccClick()">
                account_circle
            </span>

            <a href="../logout.php"><span class="material-symbols-outlined icons" id="logOut">
                    logout
                </span></a>
        </div>



        <div class="MainDiv MainDiv1">
            <?php include 'index_teacher/index_tr_home.php'; ?>
        </div>
        <div class="MainDiv MainDiv2">
            <?php include 'index_teacher/index_tr_Account.php' ?>
        </div>
    </div>
</body>
<script src="../customAlert.js"></script>
<script src="../jquery.js"></script>
<script src="index_teacher.js"></script>
</html>