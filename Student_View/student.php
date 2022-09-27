<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
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
    <title>Student</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="student.css">
</head>

<body>
    <div class="DivContainers">

        <div class="subDiv">
            <span class="material-symbols-outlined icons1" id="home" onclick="homeClick()">
                home_app_logo
            </span>
            <span class="material-symbols-outlined icons" id="account" onclick="AccClick()">
                account_circle
            </span>
            <span class="material-symbols-outlined icons" id="logOut">
                logout
            </span>

        </div>
        <div class="MainDiv MainDiv1">
            <h1 id="h1Hi">Hi,</h1>
            <h2 id="fnameHi"><?php echo $AccountDetails["First_Name"]; ?></h2>
            <?php
            $querySelectStudentTable = "SELECT DISTINCT Semester FROM `student_table` WHERE St_UsrName = '$usrName';";
            $getSelectStudentTable = mysqli_query($con, $querySelectStudentTable);
            if (mysqli_num_rows($getSelectStudentTable) > 0) {
                while ($StudentTable = mysqli_fetch_assoc($getSelectStudentTable)) {
                    $sem = $StudentTable['Semester'];
                    echo '<div class="section">
                    <h3 id="semTitle">Semester-' . $sem . '</h5>
                    <div class="DivClassContainer">
                    <!-- Subject Divs -->';
                    $querySelectStudentTValues = "SELECT * FROM `student_table` WHERE St_UsrName = '$usrName' and Semester = '$sem';";
                    $ExeStudentTableVal = mysqli_query($con, $querySelectStudentTValues);
                    while ($StudentTableVal = mysqli_fetch_assoc($ExeStudentTableVal)) {
                        $studentTabClsCode = $StudentTableVal['Class_Code'];
                        $queryTeacherTable = "SELECT * FROM `teacher_table` WHERE Class_Code = '$studentTabClsCode'; ";
                        $TeacherTableConnect = mysqli_query($con, $queryTeacherTable);
                        while ($TeacherClass = mysqli_fetch_assoc($TeacherTableConnect)) {
                            echo ' <div class="SubjectClass" onclick="reDirctoCls(this.children[1])">
                            <label for="SubjectName" class="SubClassTxt">' . $TeacherClass['Class_Name'] . '</label>
                            <input type="hidden" id="cls-code-hide"  value="' . $TeacherClass['Class_Code'] . '">
                            <label for="SubjectName" class="SubName">' . $TeacherClass['Subject'] . '</label>
                        </div>';
                        }
                    }
                    echo '</div> </div>';
                }
            }
            ?>


            <!-- <div class="section">
                <h3 id="semTitle">Semester-1</h5> -->
            <!-- Main Div Container -->
            <!-- <div class="DivClassContainer"> -->
            <!-- Subject Divs -->

            <!-- <div class="ArrowIconContainerLeft" onclick="scrollArrowLeft()">
                            <span class="material-symbols-outlined LeftNextIcon">
                                arrow_forward_ios
                            </span>
                        </div> -->
            <!-- <div class="ArrowIconContainerRight" onclick="scrollArrowRight()">
                            <span class="material-symbols-outlined RightNextIcon">
                                arrow_forward_ios
                            </span>
                        </div> -->





            <div class="addButton" onclick="PopUpAddClass()">
                <span class="material-symbols-outlined addIcon">
                    group_add
                </span>
            </div>

            <form action="joinClass.php" method="post">
                <div class="addClassPopup">
                    <span class="material-symbols-outlined CloseBtnPopup" onclick="PopUpAddClassCloseBtn()">
                        cancel
                    </span>
                    <input type="text" name="ClassCode" id="" placeholder="Enter Class Code" class="addClassTxt" required>
                    <input type="text" name="ClassSem" id="" placeholder="Enter Semester" class="addClassTxt">
                    <input type="submit" value="Join Class" class="addClassCreateClassBtn">
                </div>
            </form>


        </div>
        <div class="MainDiv MainDiv2">
            <div class="centerBoxWhite">
                <div class="htxt">
                    <h1 class="usrName"><?php echo $AccountDetails["First_Name"]; ?></h1>
                    <h1 class="usrName"><?php echo $AccountDetails["Last_Name"]; ?></h1>
                </div>
                <h3 class="usrIdName">@<?php echo $usrName; ?></h3>
            </div>

        </div>
    </div>
</body>
<script src="student.js"></script>

</html>