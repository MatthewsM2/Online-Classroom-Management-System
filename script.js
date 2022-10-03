function CreateAccount() {
  document.getElementsByClassName("WBox1")[0].style.display = "none";
  document.getElementsByClassName("WBox2")[0].style.display = "block";
  document.getElementsByClassName("WBox3")[0].style.display = "none";
}

function Login() {
  document.getElementsByClassName("WBox2")[0].style.display = "none";
  document.getElementsByClassName("WBox3")[0].style.display = "none";
  document.getElementsByClassName("WBox1")[0].style.display = "block";
}

function teacher() {
  document.getElementsByClassName("WBox3")[0].style.display = "block";
  document.getElementsByClassName("WBox1")[0].style.display = "none";
  document.getElementsByClassName("WBox2")[0].style.display = "none";
  document.getElementById("Account-Status").value = "teacher";
  console.log(document.getElementById("Account-Status").value);
}

function student() {
  document.getElementsByClassName("WBox3")[0].style.display = "block";
  document.getElementsByClassName("WBox1")[0].style.display = "none";
  document.getElementsByClassName("WBox2")[0].style.display = "none";
  document.getElementById("Account-Status").value = "student";
  console.log(document.getElementById("Account-Status").value);
}

function scrollArrowLeft() {
  const left = document.querySelector(".DivClassContainer");
  left.scrollBy(-350, 0);
}
function scrollArrowRight() {
  const right = document.querySelector(".DivClassContainer");
  right.scrollBy(350, 0);
}
function AccClick() {
  document.getElementsByClassName("MainDiv")[0].style.display = "none";
  document.getElementsByClassName("MainDiv2")[0].style.display = "block";
  document.getElementById("account").style.backgroundColor = "white";
  document.getElementById("home").style.backgroundColor = "#00b4d8";
}
function disAttandDetails() {
  document.getElementsByClassName("detailBox")[0].style.display = "block";
}
function disAttandOkey() {
  document.getElementsByClassName("detailBox")[0].style.display = "none";
}
function disDetailsAssign() {
  document.getElementsByClassName(
    "detailBox-checkAssignment"
  )[0].style.display = "block";
}
function disDetailsAssignOkey() {
  document.getElementsByClassName(
    "detailBox-checkAssignment"
  )[0].style.display = "none";
}

// implementing Switch Functions
function homeClick() {
  document.getElementsByClassName("check-assignment")[0].style.display = "none";
  document.getElementsByClassName("MainDiv5")[0].style.display = "none";
  document.getElementsByClassName("MainDiv4")[0].style.display = "none";
  document.getElementsByClassName("MainDiv3")[0].style.display = "none";
  document.getElementsByClassName("MainDiv2")[0].style.display = "none";
  document.getElementsByClassName("MainDiv")[0].style.display = "block";
  document.getElementById("home").style.backgroundColor = "white";
  document.getElementById("Maindiv2").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv3").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv4").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv5").style.backgroundColor = "#00b4d8";
  hideCheckAssignment();
}
function studentsClick() {
  document.getElementsByClassName("check-assignment")[0].style.display = "none";
  document.getElementsByClassName("MainDiv5")[0].style.display = "none";
  document.getElementsByClassName("MainDiv4")[0].style.display = "none";
  document.getElementsByClassName("MainDiv3")[0].style.display = "none";
  document.getElementsByClassName("MainDiv2")[0].style.display = "block";
  document.getElementsByClassName("MainDiv")[0].style.display = "none";
  document.getElementById("home").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv2").style.backgroundColor = "white";
  document.getElementById("Maindiv3").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv4").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv5").style.backgroundColor = "#00b4d8";
  hideCheckAssignment();
}
function createModule() {
  document.getElementsByClassName("check-assignment")[0].style.display = "none";
  document.getElementsByClassName("MainDiv5")[0].style.display = "none";
  document.getElementsByClassName("MainDiv4")[0].style.display = "none";
  document.getElementsByClassName("MainDiv3")[0].style.display = "block";
  document.getElementsByClassName("MainDiv2")[0].style.display = "none";
  document.getElementsByClassName("MainDiv")[0].style.display = "none";
  document.getElementById("home").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv2").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv3").style.backgroundColor = "white";
  document.getElementById("Maindiv4").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv5").style.backgroundColor = "#00b4d8";
  hideCheckAssignment();
}
function Attaendance() {
  document.getElementsByClassName("check-assignment")[0].style.display = "none";
  document.getElementsByClassName("MainDiv5")[0].style.display = "none";
  document.getElementsByClassName("MainDiv4")[0].style.display = "block";
  document.getElementsByClassName("MainDiv3")[0].style.display = "none";
  document.getElementsByClassName("MainDiv2")[0].style.display = "none";
  document.getElementsByClassName("MainDiv")[0].style.display = "none";
  document.getElementById("home").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv2").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv3").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv4").style.backgroundColor = "white";
  document.getElementById("Maindiv5").style.backgroundColor = "#00b4d8";
  hideCheckAssignment();
}
function Assignment() {
  document.getElementsByClassName("check-assignment")[0].style.display = "none";
  document.getElementsByClassName("MainDiv5")[0].style.display = "block";
  document.getElementsByClassName("MainDiv4")[0].style.display = "none";
  document.getElementsByClassName("MainDiv3")[0].style.display = "none";
  document.getElementsByClassName("MainDiv2")[0].style.display = "none";
  document.getElementsByClassName("MainDiv")[0].style.display = "none";
  document.getElementById("home").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv2").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv3").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv4").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv5").style.backgroundColor = "white";
  hideCheckAssignment();
}
function CheckAssignment(parent) {
  
  var que = parent.children[1].value;
  var doc = parent.children[2].value;
  document.getElementById("check-assignment").style.display = "block";
  document.getElementsByClassName("check-assignment")[0].style.display =
    "block";
  document.getElementsByClassName("MainDiv5")[0].style.display = "none";
  document.getElementsByClassName("MainDiv4")[0].style.display = "none";
  document.getElementsByClassName("MainDiv3")[0].style.display = "none";
  document.getElementsByClassName("MainDiv2")[0].style.display = "none";
  document.getElementsByClassName("MainDiv")[0].style.display = "none";
  document.getElementById("home").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv2").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv3").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv4").style.backgroundColor = "#00b4d8";
  document.getElementById("Maindiv5").style.backgroundColor = "#00b4d8";
  document.getElementById("check-assignment").style.backgroundColor = "white";
  document.getElementById("text-area-assignment-question-forCheckTeacher").innerHTML = que;
  document.getElementById("linktoAssignmentQuestion").href=doc;
  if(doc==""){
    document.getElementById("linktoAssignmentQuestion").innerHTML="document not Available";
    document.getElementById("linktoAssignmentQuestion").style.pointerEvents = "none";
  }
}
function hideCheckAssignment() {
  document.getElementsByClassName("check-assignment")[0].style.display = "none";
  document.getElementById("check-assignment").style.display = "none";
}
