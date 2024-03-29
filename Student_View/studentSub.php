<?php
session_start();
if ($_SESSION['user'] == NULL) {
    header("Location: ../index.php");
}
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
if ($_GET['clcode'] == NULL) {
    $clsCode = $_SESSION['clsCode'];
} else {
    $clsCode = $_GET['clcode'];
}
$_SESSION['clsCode'] = $clsCode;
$usrName = $_SESSION['user'];
$queryGetAcoountDetails = "SELECT * FROM Account WHERE Usr_Name = '$usrName';";
$GetAccountDetails = mysqli_query($con, $queryGetAcoountDetails);
$AccountDetails = mysqli_fetch_assoc($GetAccountDetails);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://localhost/MiniProject/Teacher_View/Assets/home_app_logo_FILL0_wght400_GRAD0_opsz48.svg" type="image/ico">
    <title>Student</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="studentSub.css">
    <link rel="stylesheet" href="progressbar.css">
    <link rel="stylesheet" href="MainDiv2.css">
    <link rel="stylesheet" href="uploadDiv.css">

</head>

<body>
    <div class="DivContainers">
        <div class="subDiv">
            
        <a href="../Teacher_View/index_teacher.php"><span class="custom-icon-4-smart" title="Back to home">
                    <img id="title-svg-image" src="../Teacher_View/Assets/titleOnly.svg" alt="">
                </span></a>

            <span class="material-symbols-outlined icons1" id="home" onclick="homeCall()" title="Home">
                home_app_logo
            </span>
            <span>Home</span>
            <span class="material-symbols-outlined icons" id="person-icon" onclick="personCall()">
                person
            </span>
            <span>Details</span>
            <span class="material-symbols-outlined icons" id="upload_file-icon">
                upload_file
            </span>
            <a href="../logout.php"><span class="material-symbols-outlined icons" id="logOut">
                    logout
                </span>
            <span>Logot</span>
            </a>
        </div>

        <?php include 'studentSub/MainDiv1.php' ?>
        <div class="MainDiv MainDiv2">
            <div class="titleContainer">
                <h3><?php echo $TrTable['Subject'] ?></h3>
            </div>
            <?php
            $queryAttandTotalNumber = "SELECT * FROM Attand WHERE St_UsrName = '$usrName' AND Class_Code = '$clsCode';";
            $queryAttandPresentNumber = "SELECT * FROM Attand WHERE St_UsrName = '$usrName' AND Class_Code = '$clsCode' AND Attendance = 1;";
            $exeAttandTotalNumber = mysqli_query($con, $queryAttandTotalNumber);
            $exeAttandPresentNumber = mysqli_query($con, $queryAttandPresentNumber);
            $AttandPresentRows = mysqli_num_rows($exeAttandPresentNumber);
            $AttandTotalRows = mysqli_num_rows($exeAttandTotalNumber);
            $AttandPercent = round(($AttandPresentRows / $AttandTotalRows) * 100);
            $ProgressBar = 180 * ($AttandPercent / 100);
            ?>
            <div class="attaend-assign-profile-container">
                <div class="Attendance-Section">
                    <p class="attendance-title">Attendance</p>
                    <div class="circle-wrap">
                        <div class="circle" style="
                                --value:<?php echo $ProgressBar ?>deg;
                                ">
                            <div class="mask half">
                                <div class="fill" style="
                                --value:<?php echo $ProgressBar ?>deg;
                                "></div>
                            </div>
                            <div class="mask full" style="
                                --value:<?php echo $ProgressBar ?>deg;
                                ">
                                <div class="fill"></div>
                            </div>
                            <div class="inside-circle"> <?php echo $AttandPercent ?>%</div>

                        </div>
                    </div>
                </div>


                <div class="Assignment-Section">
                    <?php
                    $queryAssignNumberTotal = "SELECT * FROM `Class_Table` WHERE Class_code = '$clsCode' AND Is_Assignment = '1';";
                    $executeAssignNumberTotal = mysqli_query($con, $queryAssignNumberTotal);
                    $AssignNumberTotal = mysqli_num_rows($executeAssignNumberTotal);

                    $queryAssignStudentNumber = "SELECT * FROM `Assign_Table` WHERE clscode = '$clsCode' AND UserName = '$usrName';";
                    $executeAssignStudentNumber = mysqli_query($con, $queryAssignStudentNumber);
                    $AssignStudentNumber = mysqli_num_rows($executeAssignStudentNumber);
                    ?>
                    <p class="assignment-tilte">Assignment</p>
                    <div class="assign-circle-wrap">
                        <p>
                        <p class="num assignment-values" data-val="<?php echo $AssignStudentNumber ?>">0</p>
                        <p class="assignment-values">/<?php echo $AssignNumberTotal ?></p>
                    </div>
                </div>

                <div class="Student-Details">
                    <div>
                        <span class="material-symbols-outlined details-account-logo">
                            account_circle
                        </span>
                    </div>
                    <div>
                        <p class="details-name-student"><?php echo $AccountDetails['First_Name'] . " " . $AccountDetails['Last_Name']  ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'studentSub/uploadDiv.html' ?>

</body>
<script src="counter.js"></script>
<script src="studentSub.js"></script>
<script src="../jquery.js"></script>
<script src="studentSub/ExistAssign.js"></script>

</html>