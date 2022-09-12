<div class="MainDiv MainDiv5">
    <h3 id="class-title"><?php echo $TrClsValues['Class_Name']; ?></h3>
    <div class="assignment-container">
        <textarea name="" id="text-area-assignment-question" placeholder="Question .............."></textarea>
        <div class="assignment-arrage-div"><label for="assignment-input-document-ori" id="assignment-file-label" class="assignment-file-upload">Upload Document</label><input type="file" name="" id="assignment-input-document-ori"></div>


        <div class="assignment-inputs">
            <select class="assignment-module-select" title="Select Module">
                <option value="" disabled selected hidden>Select Module</option>
                <option value="0">Module-1</option>
            </select>
            <input type="text" class="assignment-inp assignment-heading" placeholder="Enter Heading" title="Heading">
            <input type="date" class="assignment-inp" title="Before Date">
            <input type="time" class="assignment-inp" title="Before Time">
        </div>
        <div class="assignment-bts-container">
            <input type="button" class="assignment-bts" value="View Assignment" onclick="homeClick()">
            <input type="button" class="assignment-bts" value="Save">
        </div>
    </div>
</div>