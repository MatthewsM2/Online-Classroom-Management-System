<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
if ($_GET['clcode'] == NULL) {
    $clsCode = $_SESSION['clsCode'];
} else {
    $clsCode = $_GET['clcode'];
}
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
    <link rel="stylesheet" href="studentSub.css">
    <link rel="stylesheet" href="progressbar.css">
    <link rel="stylesheet" href="MainDiv2.css">
    <link rel="stylesheet" href="uploadDiv.css">

</head>

<body>
    <div class="DivContainers">
        <div class="subDiv">
            <span class="material-symbols-outlined icons1" id="home" onclick="homeCall()" title="Home">
                home_app_logo
            </span>
            <span class="material-symbols-outlined icons" id="person-icon" onclick="personCall()">
                person
            </span>
            <span class="material-symbols-outlined icons" id="upload_file-icon">
                upload_file
            </span>
            <span class="material-symbols-outlined icons" id="logOut" title="Sign Out">
                logout
            </span>
        </div>

        <?php include 'studentSub/MainDiv1.php' ?>
        <div class="MainDiv MainDiv2">
            <div class="titleContainer">
                <h3>C Program</h3>
            </div>
            <div class="attaend-assign-profile-container">
                <div class="Attendance-Section">
                    <p class="attendance-title">Attendance</p>
                    <div class="circle-wrap">
                        <div class="circle">
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            <div class="inside-circle"> 100% </div>

                        </div>
                    </div>
                </div>


                <div class="Assignment-Section">
                    <p class="assignment-tilte">Assignment</p>
                    <div class="assign-circle-wrap">
                        <p>
                        <p class="num assignment-values" data-val="5">0</p>
                        <p class="assignment-values">/8</p>
                    </div>
                </div>

                <div class="Student-Details">
                    <div>
                        <span class="material-symbols-outlined details-account-logo">
                            account_circle
                        </span>
                    </div>
                    <div>
                        <p class="details-name-student">Adam John</p>
                    </div>
                </div>
            </div>



        </div>
        <div class="MainDiv uploadDiv">
            <div class="upload-items-container">
                <textarea name="" id="text-area-assignment-question" placeholder="Question .............."></textarea>
                <div class="view-document-container">
                    <a href="Assets/540cb75550adf33f281f29132dddd14fded85bfc.pdf">document.pdf</a>
                </div>
                <input type="file" class="upload-document-assignment">
                <div class="upload-student-doc-btns-container">
                    <input class="assignment-status" type="button" value="Status: Waiting">
                    <input class="assign-student-btn" type="button" value="Save">
                </div>
            </div>
</body>
<script src="counter.js"></script>
<script src="studentSub.js"></script>


</html>