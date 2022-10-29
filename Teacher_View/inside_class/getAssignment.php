<?php
session_start();
$serialNo = $_POST["slno"];
$con = new mysqli("localhost", "root", "", "smart_project") or die("Connection Failed");
$usrName = $_SESSION['user'];
$clsCode = $_SESSION['clsCode'];
$query = "SELECT * FROM `Assign_Table` WHERE tr_slno = $serialNo ;";
$exe = mysqli_query($con, $query);
$rows = [];
while ($fetch = mysqli_fetch_array($exe)) {

    $AccUser = $fetch['UserName'];
    $Accquery = "SELECT * FROM `Account` WHERE Usr_Name = '$AccUser';";
    $Accexe = mysqli_query($con, $Accquery);
    $AccFetch = mysqli_fetch_assoc($Accexe);
    $RealName = $AccFetch['First_Name'] . " " . $AccFetch['Last_Name'];
    $RealDocument = "../Student_View/studentSub/" . $fetch['document'];
    $RealMark = $fetch['marks'];
?>
    <tr>
        <td>
            <h6></h6>
        </td>
        <td><?php echo $RealName ?></td>
        <input type="hidden" value="<?php echo $AccUser ?>" name="UserNameArr[]">
        <input type="hidden" value="<?php echo $serialNo ?>" name="trSerialNumber">
        <td><a href="<?php echo $RealDocument ?>" target="_blank">Document</a></td>
        <td><?php echo $fetch['Status'] ?></td>
        <td>
            <input type="number" class="check-assignment-mark" min="0" name="AssignMarks[]" value="<?php echo $RealMark ?>">
        </td>
        <td>
            <label class="form-control-container">
                <input class="form-control" type="checkbox" name="checkboxAssign[]" value="Accpted" checked />
                Accept
            </label>
        </td>
    </tr>
<?php }
?>

<!-- $AccUser = $fetch['UserName'];
    $docStatus = $fetch['Status'];
    $DocLink = $fetch['document'];

$Accquery = "SELECT * FROM `Account` WHERE Usr_Name = '$AccUser';";
    $Accexe = mysqli_query($con, $Accquery);
    $AccFetch = mysqli_fetch_assoc($Accexe);
    $RealName = $AccFetch['First_Name']." ".$AccFetch['Last_Name'];
    $rows[]=array($RealName,$docStatus,$DocLink); -->