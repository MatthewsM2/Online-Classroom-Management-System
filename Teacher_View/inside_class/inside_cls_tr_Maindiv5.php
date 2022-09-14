<div class="MainDiv MainDiv5">
    <?php
    $querySelectModule = "SELECT DISTINCT Module FROM Class_Table WHERE Class_code='$clsCode';";
    $getSelectModule = mysqli_query($con, $querySelectModule);
    ?>
    <h3 id="class-title"><?php echo $TrClsValues['Class_Name']; ?></h3>
    <form action="inside_class/receive_cls_tr_Assignment.php" method="POST" enctype="multipart/form-data">
        <div class="assignment-container">
            <textarea name="AssigDes" id="text-area-assignment-question" placeholder="Question .............." required></textarea>
            <div class="assignment-arrage-div"><label for="assignment-input-document-ori" id="assignment-file-label" class="assignment-file-upload">Upload Document</label><input type="file" name="AssignDoc" id="assignment-input-document-ori"></div>
            <div class="assignment-inputs">

                <select class="assignment-module-select" name="AssignModule" title="Select Module" required>
                    <option value="" disabled selected hidden>Select Module</option>
                    <?php
                    while ($SelectModule = mysqli_fetch_assoc($getSelectModule)) {
                        $Module=$SelectModule['Module'];
                        echo '<option value="'.$Module.'">Module-'.$Module.'</option>';
                    }
                    ?>
                </select>

                <input type="text" name="AssignHeading" class="assignment-inp assignment-heading" placeholder="Enter Heading" title="Heading" required>
                <input type="date" name="AssignDate" class="assignment-inp" title="Before Date" required>
                <input type="time" name="AssignTime" class="assignment-inp" title="Before Time" required>
            </div>
            <div class="assignment-bts-container">
                <input type="button" class="assignment-bts" value="View Assignment" onclick="homeClick()">
                <input type="submit" class="assignment-bts" value="Save">
            </div>

        </div>
    </form>
</div>