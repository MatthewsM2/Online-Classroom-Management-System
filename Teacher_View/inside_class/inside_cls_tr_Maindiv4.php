<div class="MainDiv MainDiv4">
    <h3 id="class-title"><?php echo $TrClsValues['Class_Name']; ?></h3>
    <div class="attandDiv-btn-container">
        <input class="attand-btns" type="date">
        <input class="attand-btns" type="time">
        <input class="attand-btns" type="button" value="Details" onclick="disAttandDetails()">
        <input class="attand-btns" type="button" value="Save">
    </div>
    <table id="StudentTable" class="AttandMark-table">
        <tr>
            <th>Roll No:</th>
            <th>Name:</th>
            <th>Status</th>
        </tr>

        <?php
        $QuerycheckStudentName="SELECT * FROM student_table WHERE Class_Code = '$clsCode';";
        $ExecheckStudentName=mysqli_query($con, $QuerycheckStudentName);
        while ($checkStudentName=mysqli_fetch_assoc($ExecheckStudentName))
        {
            $passUserName=$checkStudentName['St_UsrName'];
            $queryTakeStduentName="SELECT * FROM Account WHERE Usr_Name = '$passUserName';";
            $exeTakeStudentName=mysqli_query($con, $queryTakeStduentName);
            while ($TakeStudentName=mysqli_fetch_assoc($exeTakeStudentName))
            {
            echo'
            <tr>
            <td>
                <h6></h6>
            </td>
            <td>'.$TakeStudentName['First_Name']." ".$TakeStudentName['Last_Name'].'</td>
            <td>
                <div class="container">
                    <label class="switch"><input type="checkbox">
                        <div></div>
                    </label>
                </div>
            </td>
        </tr>';
            }
        }

        ?>
        
        
    </table>
    <div class="detailBox">
        <div>
            <p class="detail-txt det-txt-1">Total Number of Students : 08</p>
            <p class="detail-txt det-txt-2">Present:5</p>
            <p class="detail-txt det-txt-3">Absent:3</p>
            <p class="detail-NB">NB: <span class="detail-NB-italic">Calculations will be updated after
                    saving</span> </p>
            <input id="detail-btn-ok" type="button" value="Okey" onclick="disAttandOkey()">
        </div>
    </div>
</div>