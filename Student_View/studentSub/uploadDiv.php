<div class="MainDiv uploadDiv">
    <?php

    ?>
    <form action="studentSub/get_uploadDiv.php"method="POST" enctype="multipart/form-data">
        <div class="upload-items-container">

            <textarea name="" id="text-area-assignment-question" placeholder="Question .............." readonly></textarea>
            <div class="view-document-container">
                <a id="AnchorTagforDocu" href="">document.pdf</a>
            </div>
            <input type="file" class="upload-document-assignment" required>
            <div class="upload-student-doc-btns-container">
                <input id="uploadDivViewSlno" type="hidden" value="">
                <input id="uploadDivViewDate" class="assignment-status" type="button" value="Date: Waiting">
                <input id="uploadDivViewTime" class="assignment-status" type="button" value="Time: Waiting">
                <input id="uploadDivViewStatus" class="assignment-status" type="button" value="Status: Waiting">
                <input class="assign-student-btn" type="submit" value="Save">
            </div>
    </form>
</div>
</div>