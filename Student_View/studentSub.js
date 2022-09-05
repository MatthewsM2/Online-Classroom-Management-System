function homeCall(){
    document.getElementsByClassName("MainDiv1")[0].style.display="block";
    document.getElementsByClassName("MainDiv2")[0].style.display="none";
    document.getElementById("upload_file-icon").style.display="none";
    document.getElementsByClassName("uploadDiv")[0].style.display="none";
    document.getElementById("home").style.backgroundColor="white";
    document.getElementById("person-icon").style.backgroundColor="#00b4d8";
    document.getElementById("upload_file-icon").style.backgroundColor="#00b4d8";
}
function personCall(){
    document.getElementsByClassName("MainDiv2")[0].style.display="block";
    document.getElementsByClassName("MainDiv1")[0].style.display="none";
    document.getElementById("upload_file-icon").style.display="none";
    document.getElementsByClassName("uploadDiv")[0].style.display="none";
    document.getElementById("home").style.backgroundColor="#00b4d8";
    document.getElementById("person-icon").style.backgroundColor="white";
    document.getElementById("upload_file-icon").style.backgroundColor="#00b4d8";
    count();
}
function showUploadDiv(){
    document.getElementById("upload_file-icon").style.display="block";
    document.getElementsByClassName("uploadDiv")[0].style.display="block";
    document.getElementsByClassName("MainDiv2")[0].style.display="none";
    document.getElementsByClassName("MainDiv1")[0].style.display="none";
    document.getElementById("home").style.backgroundColor="#00b4d8";
    document.getElementById("person-icon").style.backgroundColor="#00b4d8";
    document.getElementById("upload_file-icon").style.backgroundColor="white";
}