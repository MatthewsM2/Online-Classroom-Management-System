<?php
// here wants checking to class code or anyone chanes the post method and makes confustion
$queryTeacherTableGetDetails="SELECT * FROM `teacher_table` WHERE  Class_Code = '$clsCode';";
$sqlTeacherTableDetails=mysqli_query($con, $queryTeacherTableGetDetails);
$TrTable=mysqli_fetch_assoc($sqlTeacherTableDetails);

$queryGetClassValues = "SELECT * FROM `Class_Table` WHERE Class_code = '$clsCode';";
$GetClassValues = mysqli_query($con, $queryGetClassValues);
$ClassValuesRows = mysqli_num_rows($GetClassValues);
$PathtoInside="http://localhost/MiniProject/Teacher_View/inside_class/";
?>
<div class="MainDiv MainDiv1">
            <div class="titleContainer">
                <h3><?php echo $TrTable['Subject']; ?> </h3>
                <h3>Class Code:<?php echo $clsCode; ?></h3>
            </div>
            <?php
    if ($ClassValuesRows > 0) {
        $queryUniqueModule = "SELECT DISTINCT Module FROM Class_Table;";
        $GetUniqueModule = mysqli_query($con, $queryUniqueModule);
        while ($ModuleValtoTrav = mysqli_fetch_assoc($GetUniqueModule)) {
            $mod = $ModuleValtoTrav['Module'];
            echo '<div class="outerContainer">
        <h4>Module-' . $mod . '</h4>
        <div class="subContainer">';
            $queryUniqueModuleMaterial = "SELECT * FROM `Class_Table` WHERE Class_code = '$clsCode' and Module ='$mod';";
            $GetUniqueModuleMaterial = mysqli_query($con, $queryUniqueModuleMaterial);
            while ($ModuleMaterialValtoTrav = mysqli_fetch_assoc($GetUniqueModuleMaterial)) {
                if ($ModuleMaterialValtoTrav['Is_Assignment'] == 0) {
                    echo '<div>
                    <img src="'.$PathtoInside. $ModuleMaterialValtoTrav['thumbnail'] .'" alt="">
                </div>';
                } else if ($ModuleMaterialValtoTrav['Is_Assignment'] == 1) {
                    echo '<div onclick="CheckAssignment()">
                    <span class="assignment-div">
                        <p class="assignment-heading">' . $ModuleMaterialValtoTrav['Heading'] . '</p>
                    </span>
                 </div>';
                }
            }
            echo '</div> </div>';
        }
    }
    echo '</div>';
    ?>