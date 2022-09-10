<!-- this sub page of index_tr_home.php -->
<?php
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$queryGetTeacherValues = "SELECT * FROM `teacher_table` WHERE Teacher_UsrName = '$userName';";
$GetTeacherValues = mysqli_query($con,$queryGetTeacherValues);
$TeacherValuesRows = mysqli_num_rows($GetTeacherValues);
if($TeacherValuesRows > 0){
    echo '<div class="section">
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
</div>';  
}
else{
    echo '<div class="section">
    
</div> ';
}
?>
 
