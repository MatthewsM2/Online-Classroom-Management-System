<div class="MainDiv MainDiv3">
    <h3 id="class-title"><?php echo $TrClsValues['Class_Name']; ?></h3>
    <div class="uploadDiv-Container">
        <div class="Master-Container">
            <div class="sub-Master-Container">
                <?php
                // <!-- the below div is not using it not used for this project its javascript and css are 
                // also here  -->
                ?>
                <div class="custom-select">
                    <select>
                        <option value="" disabled selected hidden>Select Module</option>
                        <option value="0">Module-1</option>
                    </select>
                </div>

                <form action="inside_class/receive_cls_tr_ModuleSub.php" method="POST" enctype="multipart/form-data">
                    <div class="uploadDiv-OuterDiv">
                        <label for="Input-Type-File">
                            <div class="uploadDiv">
                                <span class="material-symbols-outlined uploadDiv-Icon">
                                    image
                                </span>
                                <img id="thumb" src="" alt="">
                            </div>
                        </label>
                        <input type="file" id="Input-Type-File" name="thumbnailPic" accept="image/*">
                    </div>
            </div>
            <div class="docUpload-Container">
                <div class="moduleTextbox">
                    <input type="number" min="1" class=" input-upload-class" name="moduleName" placeholder="Module" required>
                    <div class="span-icon-container">
                        <span class="material-symbols-outlined upload-icon">
                            add_circle
                        </span>
                    </div>
                </div>

                <input type="file" id="selectFile" name="documentUpload">

                <label for="selectFile">
                    <div class="SF-container">
                        <input type="text" class="input-upload-class" id="choose-file-click" placeholder="Choose File" required>
                        <div class="span-icon-container">
                            <span class="material-symbols-outlined upload-icon">
                                file_upload
                            </span>
                        </div>
                    </div>
                </label>
                <div class="moduleTextbox">
                    <input type="text" class="input-upload-class" name="docTitle" placeholder="Enter Title" required>
                    <div class="span-icon-container">
                        <span class="material-symbols-outlined upload-icon">
                            title
                        </span>
                    </div>
                </div>
                <textarea name="docDescription" id="" cols="30" rows="10" class="input-upload-class inp-upl-cls-Des" placeholder="Description" required></textarea>
            </div>

        </div>
        <input type="submit" value="SAVE" class="saveBtn">
        </form>
    </div>

</div>