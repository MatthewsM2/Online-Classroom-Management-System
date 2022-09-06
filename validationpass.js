function checkPasswordMatch(){
let pass=document.getElementById("passOne").value;
let passVali=document.getElementById("passOneConfirm").value;
if (pass!=passVali){
    document.getElementById("passOneConfirm").style.borderColor="red";
    const passVariable=true;
}
else{
    document.getElementById("passOneConfirm").style.borderColor="#eee";
}
};

function checkValidation(){
    if (passVariable==true){
        window.alert("Enter password");
    }
};