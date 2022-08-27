const hideFilebtn = document.getElementById("selectFile");
const chooseFile = document.getElementById("choose-file-click");
chooseFile.addEventListener("click", function () {
  hideFilebtn.click();
});


hideFilebtn.addEventListener("change", function() {
  if (hideFilebtn.value) {
    chooseFile.innerHTML = hideFilebtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    chooseFile.innerHTML = "No file chosen, yet.";
  }
});
