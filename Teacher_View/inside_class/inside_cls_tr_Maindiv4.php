<div class="MainDiv MainDiv4">
    <h3 id="class-title"><?php echo $TrClsValues['Class_Name']; ?></h3>
    <form method="POST" action="inside_class/Attand/verifyAttand.php">
        <div class="attandDiv-btn-container">
            <input class="attand-btns" name="AttDate" type="date" required>
            <input class="attand-btns" name="AttTime" type="time" required>
            <input class="attand-btns" type="button" value="Details" onclick="disAttandDetails()">
            <input class="attand-btns" type="Submit" value="Save">
        </div>
        <table id="StudentTable" class="AttandMark-table">
            <tr>
                <th>Roll No:</th>
                <th>Name:</th>
                <th>Status</th>
            </tr>

            <?php
            $QuerycheckStudentName = "SELECT * FROM student_table WHERE Class_Code = '$clsCode';";
            $ExecheckStudentName = mysqli_query($con, $QuerycheckStudentName);
            $loopToTravel=0;
            while ($checkStudentName = mysqli_fetch_assoc($ExecheckStudentName)) {
                $passUserName = $checkStudentName['St_UsrName'];
                $queryTakeStduentName = "SELECT * FROM Account WHERE Usr_Name = '$passUserName';";
                $exeTakeStudentName = mysqli_query($con, $queryTakeStduentName);
                while ($TakeStudentName = mysqli_fetch_assoc($exeTakeStudentName)) {
                    echo '
            <tr>
            <td>
                <h6></h6>
            </td>
            <td>' . $TakeStudentName['First_Name'] . " " . $TakeStudentName['Last_Name'] . '
            <input type="hidden" name="studName['.$loopToTravel.']" value="' . $passUserName . '">
            </td>
            <td>
                <div class="container">
                    <label class="switch"><input type="checkbox" value="Yes" name="studAttStatus['.$loopToTravel.']">
                        <div></div>
                    </label>
                </div>
            </td>
        </tr>';
        $loopToTravel=$loopToTravel+1;
                }
            }

            ?>


        </table>
    </form>
    <div class="detailBox">
        <div>
            <p class="detail-txt det-txt-1">Total Number of Students :Not Available</p>
            <p class="detail-txt det-txt-2">Present:0</p>
            <p class="detail-txt det-txt-3">Absent:0</p>
            <p class="detail-NB">NB: <span class="detail-NB-italic">Calculations will be updated after
                    saving</span> </p>
            <input id="detail-btn-ok" type="button" value="Okey" onclick="disAttandOkey()">
        </div>
    </div>
</div>