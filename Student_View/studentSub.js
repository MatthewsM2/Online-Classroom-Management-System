function homeCall() {
  document.getElementsByClassName("MainDiv1")[0].style.display = "block";
  document.getElementsByClassName("MainDiv2")[0].style.display = "none";
  document.getElementById("upload_file-icon").style.display = "none";
  document.getElementsByClassName("uploadDiv")[0].style.display = "none";
  document.getElementById("home").style.backgroundColor = "white";
  document.getElementById("person-icon").style.backgroundColor = "#00b4d8";
  document.getElementById("upload_file-icon").style.backgroundColor = "#00b4d8";
}
function personCall() {
  document.getElementsByClassName("MainDiv2")[0].style.display = "block";
  document.getElementsByClassName("MainDiv1")[0].style.display = "none";
  document.getElementById("upload_file-icon").style.display = "none";
  document.getElementsByClassName("uploadDiv")[0].style.display = "none";
  document.getElementById("home").style.backgroundColor = "#00b4d8";
  document.getElementById("person-icon").style.backgroundColor = "white";
  document.getElementById("upload_file-icon").style.backgroundColor = "#00b4d8";
  count();
}
function showUploadDiv(parent) {
  var quenstion = parent.children[1].value;
  var docuMENT  = parent.children[2].value;
  var DaTe      = parent.children[3].value;
  var TiMe      = parent.children[4].value;
  var Slno      = parent.children[5].value;
  console.log(quenstion);
  document.getElementById("upload_file-icon").style.display = "block";
  document.getElementsByClassName("uploadDiv")[0].style.display = "block";
  document.getElementsByClassName("MainDiv2")[0].style.display = "none";
  document.getElementsByClassName("MainDiv1")[0].style.display = "none";
  document.getElementById("home").style.backgroundColor = "#00b4d8";
  document.getElementById("person-icon").style.backgroundColor = "#00b4d8";
  document.getElementById("upload_file-icon").style.backgroundColor = "white";
  document.getElementById("text-area-assignment-question").innerHTML = quenstion;
  document.getElementById("AnchorTagforDocu").href=docuMENT;
  if(docuMENT==""){
    document.getElementById("AnchorTagforDocu").innerHTML="Document not Available";
    document.getElementById("AnchorTagforDocu").style.pointerEvents = "none";
  }
  document.getElementById("uploadDivViewDate").value = DaTe;
  document.getElementById("uploadDivViewTime").value = TiMe;
  document.getElementById("uploadDivViewSlno").value = Slno;
}
