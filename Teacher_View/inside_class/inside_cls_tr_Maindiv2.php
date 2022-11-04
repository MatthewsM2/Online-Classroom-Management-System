<!-- error happens here while a new user comes -->
<div class="MainDiv MainDiv2">
    <div class="titleContainer">
        <h3><?php echo $TrClsValues['Class_Name']; ?></h3>
    </div>
    <table id="StudentTable" class="ViewTable">
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Attendance %</th>
            <th>Assignments</th>
        </tr>

        <?php
        $QuerycheckStudentName = "SELECT * FROM student_table WHERE Class_Code = '$clsCode';";
        $ExecheckStudentName = mysqli_query($con, $QuerycheckStudentName);
        while ($checkStudentName = mysqli_fetch_assoc($ExecheckStudentName)) {
            $passUserName = $checkStudentName['St_UsrName'];
            $queryTakeStduentName = "SELECT * FROM Account WHERE Usr_Name = '$passUserName';";
            $exeTakeStudentName = mysqli_query($con, $queryTakeStduentName);
            while ($TakeStudentName = mysqli_fetch_assoc($exeTakeStudentName)) {
                $queryAttandTotalNumber = "SELECT * FROM Attand WHERE Class_Code = '$clsCode';";
                $exeAttandTotalNumber = mysqli_query($con, $queryAttandTotalNumber);
                $AttandTotalRows = mysqli_num_rows($exeAttandTotalNumber);
                if($AttandTotalRows != 0){
                $queryAttandPresentNumber = "SELECT * FROM Attand WHERE St_UsrName = '$passUserName' AND Class_Code = '$clsCode' AND Attendance = 1;";
                $exeAttandPresentNumber = mysqli_query($con, $queryAttandPresentNumber);
                $AttandPresentRows = mysqli_num_rows($exeAttandPresentNumber);
                $AttandPercent = round(($AttandPresentRows / $AttandTotalRows) * 100);
                echo '<tr>
                <td>
                    <h6></h6>
                </td>
                <td>' . $TakeStudentName['First_Name'] . " " . $TakeStudentName['Last_Name'] . '</td>';
                echo '
                <td>' . $AttandPercent . '%</td>';
                $queryAssignNumberTotal = "SELECT * FROM `Assign_Table` WHERE clscode = '$clsCode';";
                $executeAssignNumberTotal = mysqli_query($con, $queryAssignNumberTotal);
                $AssignNumberTotal = mysqli_num_rows($executeAssignNumberTotal);

                $queryAssignStudentNumber = "SELECT * FROM `Assign_Table` WHERE clscode = '$clsCode' AND UserName = '$passUserName';";
                $executeAssignStudentNumber = mysqli_query($con, $queryAssignStudentNumber);
                $AssignStudentNumber = mysqli_num_rows($executeAssignStudentNumber);
                echo '<td>' . $AssignStudentNumber . '/' . $AssignNumberTotal . '</td>
            </tr>';
                }else{
                    echo '<tr>
                    <td>
                    <h6></h6>
                    </td>
                    <td>' . $TakeStudentName['First_Name'] . " " . $TakeStudentName['Last_Name'] . '</td>
                    <td>0%</td>
                    <td>0/' . $AssignNumberTotal . '</td></tr>';
                }
            }
        }
        ?>

    </table>
</div>