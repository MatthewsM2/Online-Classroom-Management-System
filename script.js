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
}

function student() {
  document.getElementsByClassName("WBox3")[0].style.display = "block";
  document.getElementsByClassName("WBox1")[0].style.display = "none";
  document.getElementsByClassName("WBox2")[0].style.display = "none";
}

function PopUpAddClass() {
  document.getElementsByClassName("addClassPopup")[0].style.display = "flex";
}

function PopUpAddClassCloseBtn() {
  document.getElementsByClassName("addClassPopup")[0].style.display = "none";
}

function scrollArrowLeft() {
  const left = document.querySelector(".DivClassContainer");
  left.scrollBy(-350, 0);
}
function scrollArrowRight() {
  const right = document.querySelector(".DivClassContainer");
  right.scrollBy(350, 0);
}
function homeClick() {
  document.getElementsByClassName("MainDiv2")[0].style.display = "none";
  document.getElementsByClassName("MainDiv")[0].style.display = "block";
  document.getElementById("home").style.backgroundColor = "white";
  document.getElementById("account").style.backgroundColor = "#00b4d8";
}
function AccClick() {
  document.getElementsByClassName("MainDiv")[0].style.display = "none";
  document.getElementsByClassName("MainDiv2")[0].style.display = "block";
  document.getElementById("account").style.backgroundColor = "white";
  document.getElementById("home").style.backgroundColor = "#00b4d8";
}
