function homeClick() {
  document.getElementsByClassName("MainDiv1")[0].style.display = "block";
  document.getElementsByClassName("MainDiv2")[0].style.display = "none";
  document.getElementById("home").style.backgroundColor = "white";
  document.getElementById("account").style.backgroundColor = "#00b4d8";
}
function AccClick() {
  document.getElementsByClassName("MainDiv2")[0].style.display = "block";
  document.getElementsByClassName("MainDiv1")[0].style.display = "none";
  document.getElementById("home").style.backgroundColor = "#00b4d8";
  document.getElementById("account").style.backgroundColor = "white";
}
function PopUpAddClass() {
  document.getElementsByClassName("addClassPopup")[0].style.display = "flex";
}

function PopUpAddClassCloseBtn() {
  document.getElementsByClassName("addClassPopup")[0].style.display = "none";
}
function reDirctoCls(ClassCode){
  var clscode = ClassCode.value;
  window.location.href = "http://localhost/MiniProject/Student_View/studentSub.php?clcode="+clscode;
}