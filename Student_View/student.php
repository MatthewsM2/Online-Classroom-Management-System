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
    <link rel="stylesheet" href="studentCss.css">
    <script src="/MiniProject/script.js"></script>
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
        <div class="MainDiv">
            <h1 id="h1Hi">Hi,</h1>
            <h2 id="fnameHi">First Name</h2>



            <div class="section">
                <h3 id="semTitle">Semester-1</h5>
                    <!-- Main Div Container -->
                    <div class="DivClassContainer">
                        <!-- Subject Divs -->
                        <div class="SubjectClass">
                            <label for="SubjectName" class="SubClassTxt">BCA-1</label>

                            <label for="SubjectName" class="SubName">Python</label>
                        </div>
                        <div class="SubjectClass">
                            <label for="SubjectName" class="SubClassTxt">BCA-1</label>
                            
                            
                            
                            <label for="SubjectName" class="SubName">Python</label>
                        </div>
                        <div class="SubjectClass">
                            <label for="SubjectName" class="SubClassTxt">BCA-1</label>
                            
                            
                            <label for="SubjectName" class="SubName">Python</label>
                        </div>
                        <div class="SubjectClass">
                            <label for="SubjectName" class="SubClassTxt">BCA-1</label>
                            
                            <label for="SubjectName" class="SubName">Python</label>
                        </div>
                        <div class="SubjectClass">
                            <label for="SubjectName" class="SubClassTxt">BCA-1</label>
                            
                            <label for="SubjectName" class="SubName">Python</label>
                        </div>
                        <div class="SubjectClass">
                            <label for="SubjectName" class="SubClassTxt">BCA-1</label>
                            
                            <label for="SubjectName" class="SubName">Python</label>
                        </div>
                        <div class="ArrowIconContainerLeft" onclick="scrollArrowLeft()">
                            <span class="material-symbols-outlined LeftNextIcon">
                                arrow_forward_ios
                            </span>
                        </div>
                        <div class="ArrowIconContainerRight" onclick="scrollArrowRight()">
                            <span class="material-symbols-outlined RightNextIcon">
                                arrow_forward_ios
                            </span>
                        </div>
                    </div>
            </div>




            <div class="addButton" onclick="PopUpAddClass()">
                <span class="material-symbols-outlined addIcon">
                group_add
                </span>
                
            </div>

            <div class="addClassPopup">

                <span class="material-symbols-outlined CloseBtnPopup" onclick="PopUpAddClassCloseBtn()">
                    cancel
                </span>

                <input type="text" name="ClassName" id="" placeholder="Enter User Name" class="addClassTxt">
                
                <input type="text" name="ClassSem" id="" placeholder="Enter Class Code" class="addClassTxt">
                <input type="button" value="Join Class" class="addClassCreateClassBtn">
            </div>


        </div>
        <div class="MainDiv MainDiv2">
            <div class="centerBoxWhite">
                <div class="htxt">
                    <h1 class="usrName">FirstName</h1>
                    <h1 class="usrName">SecondName</h1>
                </div>
                <h3 class="usrIdName">UserName</h3>
            </div>

        </div>
    </div>
</body>

</html>