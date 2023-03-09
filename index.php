<!-- J.M.J -->


<?php
session_start();
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
if (isset($_POST["loginUsrName"])) {
    $usr = $_POST["loginUsrName"];
    $pass = $_POST["loginPassword"];
}
// add some ajax code to check user name and password in live
if (isset($usr)) {
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
    <!-- added by chatGpt design  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9Bj/pzWOXJg6erf1L2kXgXiJ+6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="style.css">

    <!-- just above links -->

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

    <!-- below code are from chatgpt start   -->
    <section id="features">
        <div class="container">
            <h2>Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-user-graduate"></i>
                        <h3>Student Management</h3>
                        <p>Manage your students' attendance, assignments, and grades all in one place. Easily track
                            their progress and provide feedback to help them succeed.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h3>Class Management</h3>
                        <p>Create and manage classes for different subjects and grade levels. Keep track of attendance
                            and assignments, and communicate with students and parents.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-file-alt"></i>
                        <h3>Assignment Management</h3>
                        <p>Create and manage assignments for your classes. Easily grade assignments and provide feedback
                            to help students improve.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-chart-line"></i>
                        <h3>Performance Analytics</h3>
                        <p>View analytics and reports on your students' performance. Identify areas where they need
                            extra help and adjust your teaching accordingly.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-comments"></i>
                        <h3>Communication</h3>
                        <p>Stay in touch with your students and their parents through our built-in communication tools.
                            Send announcements, share resources, and answer questions all in one place.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-calendar-check"></i>
                        <h3>Attendance Management</h3>
                        <p>Track attendance for all of your classes and get insights into your students' attendance
                            habits. Use this information to intervene early and help students stay on track.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Feature section styles */

        #features {
            background-color: #ffff;
            padding: 80px 0;
        }

        #features h2 {
            text-align: center;
            margin-bottom: 50px;
        }

        .feature-card {
            background-color: #ffff;
            border-radius: 5px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s ease-in-out;
        }

        .feature-card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .feature-card i {
            font-size: 40px;
            color: #0077ff;
            margin-bottom: 30px
        }

        .feature-card h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .feature-card p {
            font-size: 18px;
            color: #666;
            line-height: 1.5;
        }
    </style>

    <!-- Call to action section -->
    <section id="cta">
        <div class="container">
            <h2>Ready to get started?</h2>
            <p>
                Sign up now and start managing your classes, assignments, and students
                more efficiently.
            </p>
            <a href="#" class="cta-btn">Sign Up Now</a>
        </div>
    </section>

    <!-- Footer section -->
    <footer>
        <div class="container">
            <p>&copy; 2023 smart ( Education Management System )</p>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </footer>
    <!-- chatGpt stop code  -->
</body>
<script src="customAlert.js"></script>
<script src="script.js"></script>
<script src="validationpass.js"></script>
<script src="jquery.js"></script>
<script src="checkUsrName.js"></script>

</html>