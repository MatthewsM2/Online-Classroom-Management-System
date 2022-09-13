<div class="MainDiv check-assignment">
    <h3 id="class-title"><?php echo $TrClsValues['Class_Name']; ?></h3>
    <div class="assignment-container">
        <textarea name="" id="text-area-assignment-question" class="text-area-assignment-question" placeholder="Question .............."></textarea>

        <div class="assignment-arrage-div"><label id="assignment-file-label" class="assignment-file-upload"><a href="Assets/540cb75550adf33f281f29132dddd14fded85bfc.pdf">Assignment.pdf</a></label>

            <div class="check-assignment-btns-container">
                <input type="button" class="assignment-bts" value="Details" onclick="disDetailsAssign()">
                <input type="button" class="assignment-bts" value="Save">
            </div>
            <table id="StudentTable">
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>File</th>
                    <th>Time</th>
                    <th>Marks</th>
                    <th></th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Jilson</td>
                    <td><label>document.pdf</label></td>
                    <td><label> Late</label></td>
                    <td>
                        <input type="number" class="check-assignment-mark">
                    </td>
                    <td>
                        <input type="radio" name="radio-input-checkAssignment" id="Accept-input-checkAssignment" class="radio-checkAssignment">
                        <label for="Accept-input-checkAssignment" class="Accept-btn-checkAssignment">Accept</label>
                        <input type="radio" name="radio-input-checkAssignment" id="Reject-input-checkAssignment" class="radio-checkAssignment">
                        <label for="Reject-input-checkAssignment" class="Reject-btn-checkAssignment">Reject</label>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Manu</td>
                    <td><label>document.pdf</label></td>
                    <td><label>Ontime</label></td>
                    <td>
                        <input type="number" class="check-assignment-mark">
                    </td>
                    <td>
                        <input type="radio" name="radio-input-checkAssignment-01" id="Accept-input-checkAssignment-01" class="radio-checkAssignment">
                        <label for="Accept-input-checkAssignment-01" class="Accept-btn-checkAssignment">Accept</label>
                        <input type="radio" name="radio-input-checkAssignment-01" id="Reject-input-checkAssignment-01" class="radio-checkAssignment">
                        <label for="Reject-input-checkAssignment-01" class="Reject-btn-checkAssignment">Reject</label>
                    </td>
                </tr>
            </table>
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