<h1 id="h1Hi">Hi,</h1>
<h2 id="fnameHi"><?php echo $AccValues['First_Name']; ?></h2>

<div class="section">
    <h3 id="semTitle">Semester-1</h5>
        <!-- Main Div Container -->
        <div class="DivClassContainer">
            <!-- Subject Divs -->
            <div class="SubjectClass">
                <label for="SubjectName" class="SubClassTxt">BCA-1</label>
                <span class="material-symbols-outlined delIcon">
                    delete_forever
                </span>
                <label for="SubjectName" class="SubName">Python</label>
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
        add
    </span>
</div>

<div class="addClassPopup">

    <span class="material-symbols-outlined CloseBtnPopup" onclick="PopUpAddClassCloseBtn()">
        cancel
    </span>
    <form class="addClassPopupForm" action="index_teacher/index_tr_createClassForm.php" method="POST">
        <input type="text" name="ClassName"  placeholder="Class Name" class="addClassTxt" required>
        <input type="text" name="ClassSubjectName"  placeholder="Subject" class="addClassTxt" required>
        <input type="number" name="ClassSem"  placeholder="Semester" class="addClassTxt" required>
        <input type="submit" value="Create Class" class="addClassCreateClassBtn">
    </form>
</div>