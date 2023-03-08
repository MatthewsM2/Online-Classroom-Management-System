<!-- J.M.J -->


<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
if (isset($_POST["loginUsrName"])) {
    $usr = $_POST["loginUsrName"];
    $pass = $_POST["loginPassword"];
}
// add some ajax code to check user name and password in live
if(isset($usr)) {
    $queryUser = "SELECT Account FROM Account WHERE Usr_Name = '$usr' and pasword = '$pass';";
    $acc = mysqli_query($con, $queryUser);
    $resultAcc = mysqli_fetch_assoc($acc);
    if ($resultAcc['Account'] == "teacher") {
        $_SESSION['user'] = $usr;
        header("Location:http://localhost/MiniProject/Teacher_View/index_teacher.php");
    } else if ($resultAcc['Account'] == "student") {
        $_SESSION['user'] = $usr;
        header("Location:http://localhost/MiniProject/Student_View/student.php");
    } else {
        echo '
    <script>
    swal({
        title: "Invalid Login Credentials !",
        text: "You have entered an invalid username or password !",
        icon: "error",
        dangerMode: true
      });
    </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="http://localhost/MiniProject/Teacher_View/Assets/home_app_logo_FILL0_wght400_GRAD0_opsz48.svg" type="image/ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smart</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">

</head>

<body>
    <!-- div whitebox1 -->
    <div class="outer-container-white-boxes">
        <div class="left-div-parent">
            <img src="Teacher_View/Assets/title.svg" alt="">
        </div>
        <div class="whiteBox WBox1">
            <h1 class="loginTxt">Login</h1>
            <h5 class="loginSubTxt">Login if you have an account in here</h5>
            <form action="index.php" method="post">
                <input type="text" name="loginUsrName" class="logTxtBoxUsrName" placeholder="Enter Your User Name" autocomplete="off" required>
                <input type="password" name="loginPassword" class="logTxtBoxPassword" placeholder="Enter Your Password" required>
                <div class="ConTlogSumbit">
                    <input type="submit" class="logSumbit" value="Login">
                </div>
            </form>
            <label for="newUser" class="txtNewuser">New User?</label>
            <label for="createAccount" class="txtCreateAcc" onclick="CreateAccount()">Create Account</label>
        </div>
        <!-- div whitebox2 -->
        <div class="whiteBox WBox2">
            <h1 class="loginTxt" id="iamA">I'm A</h1>
            <div class="ConTlogSumbit" id="BtnTrAndSt">
                <input type="button" class="BtnGradent BtnTr" value="Teacher" onclick="teacher()">
                <input type="button" class="BtnGradent BtnSt" value="Student" onclick="student()">
            </div>
            <label for="loginExistUsr" class="txtNewuser">Hava an Account Already?</label>
            <label for="dirctToLoginPage" class="txtCreateAcc" onclick="Login()">Login</label>
        </div>
        <!-- div whitebox3 -->
        <div class="whiteBox WBox3">
            <div class="AvAndGTBContainer">
                <div class="avatarContainer">
                    <div class="avatar"></div>
                </div>
                <form onsubmit="checkValidation()" action="createAcc.php" method="post">
                    <div class="GreyTxtBoxContainer">
                        <input type="hidden" id="Account-Status" name="AccountStatus">
                        <input type="text" class="GreyTxtBox GTB1" name="AccFirstname" placeholder="First Name" required>
                        <input type="text" class="GreyTxtBox GTB2" name="AccLastname" placeholder="Last Name">
                        <input type="text" class="GreyTxtBox GTB3" name="AccUsrname" id="userNameId" placeholder="User Name" oninput="checkUsername()" onblur="userinRed()" autocomplete="off" required>
                        <input type="password" class="GreyTxtBox GTB4" id="passOne" name="AccPass" placeholder="Password" required>
                        <input type="password" class="GreyTxtBox GTB5" id="passOneConfirm" name="AccRepass" placeholder="Re-Password" onkeyup="checkPasswordMatch()" required>
                        <input type="button" value="Create Account" id="GTBCACCBtn" class="BtnGradent GTBCreateAccBtn" onclick="AlertBoxCheck()">
                        <input type="submit" value="Create Account" id="GTBCACCSub" class="BtnGradent GTBCreateAccBtn">
                    </div>
                </form>
            </div>
            <label for="loginExistUsr" class="txtNewuser GTBTxtAccAl">Hava an Account Already?</label>
            <label for="dirctToLoginPage" class="txtCreateAcc" onclick="Login()">Login</label>
        </div>
    </div>
</body>
<script src="customAlert.js"></script>
<script src="script.js"></script>
<script src="validationpass.js"></script>
<script src="jquery.js"></script>
<script src="checkUsrName.js"></script>

</html>