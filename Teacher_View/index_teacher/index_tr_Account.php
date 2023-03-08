<div class="centerBoxWhite">
    <div class="htxt">
        <h1 class="usrName"><?php echo $AccValues['First_Name']; ?></h1>
        <h1 class="usrName"><?php echo $AccValues['Last_Name']; ?></h1>
    </div>
    <h3 class="usrIdName">User Name : @<?php echo $userName; ?></h3>
    <input id="UsrNameTwoDel" type="hidden" value="<?php echo $userName; ?>">
    <h4><a class="fakeLink" onclick="DelAcc()">Delete Account</a></h4>

    <table id="StudentTable" class="ViewTable custom-table">
        <tr>
            <th>Sl No</th>
            <th>Subject</th>
            <th>Class Name</th>
            <th>Class Code</th>
            <th></th>
        </tr>
        <?php
        $rmClassQuery = mysqli_query($con, "SELECT * FROM `teacher_table` WHERE Teacher_UsrName = '$userName'");
        while ($row = mysqli_fetch_assoc($rmClassQuery)) {
            echo '
                <tr>
                <td><h6></h6></td>
                <td>' . $row['Subject'] . '</td>
                <td>' . $row['Class_Name'] . '</td>
                <td>' . $row['Class_Code'] . '</td>
                <td><p class="herfLink" onclick="rmClass(this.children[0],this.children[1],this.children[2])">remove
                    <input type="hidden" value="'.$row['Subject'].'">
                    <input type="hidden" value="'.$row['Class_Name'] .'">
                    <input type="hidden" value="'.$row['Class_Code'] .'">
                    </p></td>
                </tr>
            ';
        }
        
        ?>
    </table>
</div>