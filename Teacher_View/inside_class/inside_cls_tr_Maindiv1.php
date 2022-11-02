<!-- here so many things to be done such us here only 
thumbnail is showing document is not getting here
documents are to be created make to view  -->
<?php
$queryGetClassValues = "SELECT * FROM `Class_Table` WHERE Class_code = '$clsCode';";
$GetClassValues = mysqli_query($con, $queryGetClassValues);
$ClassValuesRows = mysqli_num_rows($GetClassValues);
$PathtoInside = "http://localhost/MiniProject/Teacher_View/inside_class/";
?>
<div class="MainDiv MainDiv1">
    <div class="titleContainer">
        <h3><?php echo $TrClsValues['Class_Name']; ?></h3>
        <h3>Class Code:<?php echo $TrClsValues['Class_Code']; ?></h3>
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
                    <a href="' . $PathtoInside . $ModuleMaterialValtoTrav['document'] . '"><img src="' . $PathtoInside . $ModuleMaterialValtoTrav['thumbnail'] . '" alt="">
                    </a>
                </div>';
                } else if ($ModuleMaterialValtoTrav['Is_Assignment'] == 1) {
                    echo '<div onclick="CheckAssignment(this.children[0])">
                    <span class="assignment-div">
                        <p id="AssignHeading">' . $ModuleMaterialValtoTrav['Heading'] . '</p>
                        <input id="AssignDescr" type="hidden"  value="' . $ModuleMaterialValtoTrav['Description'] . '">
                        <input id="AssignSlNo" type="hidden"  value="' . $ModuleMaterialValtoTrav['Sl_No'] . '">
                        <input id="AssignDate" type="hidden"  value="' . $ModuleMaterialValtoTrav['date'] . '">
                        <input id="AssignTime" type="hidden"  value="' . $ModuleMaterialValtoTrav['time'] . '">';
                    if ($ModuleMaterialValtoTrav['document'] == "") {
                        echo '<input id="AssignDocmen" type="hidden"  value="' . $ModuleMaterialValtoTrav['document'] . '">';
                    } else {
                        echo ' <input id="AssignDocmen" type="hidden"  value="inside_class/' . $ModuleMaterialValtoTrav['document'] . '">';
                    }
                    echo '</span>
                 </div>';
                }
            }
            echo '</div> </div>';
        }
    }
    echo '</div>';

    ?>