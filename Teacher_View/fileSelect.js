const hideFilebtn = document.getElementById("selectFile");
const chooseFile = document.getElementById("choose-file-click");
const thumbnailInput=document.getElementById("Input-Type-File");
const thumbnail=document.getElementById("thumb");
chooseFile.addEventListener("click", function () {
  hideFilebtn.click();
});


hideFilebtn.addEventListener("change", function() {
  if (hideFilebtn.value) {
    chooseFile.value = hideFilebtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    chooseFile.value = "";
  }
});

thumbnailInput.addEventListener("change",function(){
  const [file] = thumbnailInput.files
  if (file) {
thumbnail.src=URL.createObjectURL(file);
document.getElementsByClassName("uploadDiv-Icon")[0].style.display="none";
document.getElementById("thumb").style.display="block";
  }
})

