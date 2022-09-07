function checkPasswordMatch(){
let pass=document.getElementById("passOne").value;
let passVali=document.getElementById("passOneConfirm").value;
if (pass!=passVali){
    document.getElementById("passOneConfirm").style.borderColor="red";
    const passVariable=true;
    document.getElementById("GTBCACCSub").disabled = true;
    document.getElementById("GTBCACCBtn").disabled = false;
    document.getElementById("GTBCACCBtn").style.display="block";
    document.getElementById("GTBCACCSub").style.display="none";
}
else{
    document.getElementById("passOneConfirm").style.borderColor="#eee";
    document.getElementById("GTBCACCSub").disabled = false;
    document.getElementById("GTBCACCBtn").disabled = true;
    document.getElementById("GTBCACCSub").style.display="block";
    document.getElementById("GTBCACCBtn").style.display="none";
}
};

function AlertBoxCheck(){
    swal("The password confirmation does not match!");
};