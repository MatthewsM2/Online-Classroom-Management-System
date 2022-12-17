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

function reDirctoCls(ClassCode) {
  var clscode = ClassCode.value;
  window.location.href =
    "http://localhost/MiniProject/Teacher_View/inside_cls_tr.php?clcode=" +
    clscode;
}
function DelAcc() {
  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      jQuery.ajax({
        url: "deleteAccount.php",
        data: "username=" + $("#UsrNameTwoDel").val(),
        type: "POST",
        success: function (data) {
          if (data == "Okey") {
            swal("Successfully deleted!", {
              icon: "success",
            });
            swal("Logging Out...!", {
              icon: "info",
            });
          } else {
            swal("Something went Wrong!", {
              icon: "warning",
            });
          }
        },
      });
      window.location.href = "../logout.php";
    }
  });
  
}
