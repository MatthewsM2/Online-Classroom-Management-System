<div class="MainDiv check-assignment">
    <h3 id="class-title"><?php echo $TrClsValues['Class_Name']; ?></h3>
    <div class="assignment-container">
        <textarea name="" id="text-area-assignment-question-forCheckTeacher" class="text-area-assignment-question" placeholder="Question .............." readonly></textarea>
        <div class="assignment-arrage-div"><label id="assignment-file-label-checkAssign" class="assignment-file-upload"><a id="linktoAssignmentQuestion" href="">Assignment.pdf</a></label>
            <form action="inside_class/sentAssignment.php" method="POST">
                <div class="check-assignment-btns-container">
                <input id="AssignDateCheckAssign" type="button" class="assignment-bts" value="">
                <input id="AssignTimeCheckAssign" type="button" class="assignment-bts" value="">
                    <input  type="button" class="assignment-bts" value="Details" onclick="disDetailsAssign()">
                    <input  type="submit" class="assignment-bts" value="Save">
                </div>
                <table id="CheckAssignStudentTable">
                    <thead>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>File</th>
                        <th>Status</th>
                        <th>Marks</th>
                        <th></th>
                    </thead>
                    <tbody id="CheckAssignStudentTableTbody">
                    </tbody>
                </table>
            </form>
            <div class="detailBox-checkAssignment">
                <div>
                    <p class="detail-txt det-txt-1">Total Number of Students : 08</p>
                    <p class="detail-txt det-txt-2">Accepted:5</p>
                    <p class="detail-txt det-txt-3">Rejected:3</p>
                    <p class="detail-NB">NB: <span class="detail-NB-italic">Calculations will be updated after
                            saving</span> </p>
                    <input id="detail-btn-ok" type="button" value="Okey" onclick="disDetailsAssignOkey()">
                </div>
            </div>

        </div>
    </div>
</div>