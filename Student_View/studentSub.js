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
  var docuMENT = parent.children[2].value;
  var DaTe = parent.children[3].value;
  var TiMe = parent.children[4].value;
  var Slno = parent.children[5].value;
  // console.log("Don't paste or type anything to the here.\n It is consider as a Cyber crime and you will be punished");
  document.getElementById("upload_file-icon").style.display = "block";
  document.getElementsByClassName("uploadDiv")[0].style.display = "block";
  document.getElementsByClassName("MainDiv2")[0].style.display = "none";
  document.getElementsByClassName("MainDiv1")[0].style.display = "none";
  document.getElementById("home").style.backgroundColor = "#00b4d8";
  document.getElementById("person-icon").style.backgroundColor = "#00b4d8";
  document.getElementById("upload_file-icon").style.backgroundColor = "white";
  document.getElementById("text-area-assignment-question").innerHTML =
    quenstion;
  if (docuMENT == "") {
    document.getElementById("AnchorTagforDocu").innerHTML =
      "Document not Available";
    document.getElementById("AnchorTagforDocu").style.pointerEvents = "none";
  } else {
    document.getElementById("AnchorTagforDocu").innerHTML = "Document.pdf";
    document.getElementById("AnchorTagforDocu").href =
      "../Teacher_View/inside_class/" + docuMENT;
    document.getElementById("AnchorTagforDocu").style.pointerEvents = "auto";
  }
  document.getElementById("uploadDivViewDate").value = DaTe;
  document.getElementById("uploadDivViewTime").value = TiMe;
  document.getElementsByClassName("uploadDivViewSlno")[0].value = Slno;
  document.getElementsByClassName("uploadDivViewSlno")[1].value = Slno;
  workAjax();
}
