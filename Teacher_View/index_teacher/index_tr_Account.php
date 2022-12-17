<div class="centerBoxWhite">
    <div class="htxt">
        <h1 class="usrName"><?php echo $AccValues['First_Name']; ?></h1>
        <h1 class="usrName"><?php echo $AccValues['Last_Name']; ?></h1>
    </div>
    <h3 class="usrIdName">User Name : @<?php echo $userName; ?></h3>
    <input id="UsrNameTwoDel" type="hidden" value="<?php echo $userName; ?>">
    <h4><a class="fakeLink" onclick="DelAcc()">Delete Account</a></h4>
</div>
