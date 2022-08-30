const hideFilebtn = document.getElementById("selectFile");
const chooseFile = document.getElementById("choose-file-click");
const thumbnailInput = document.getElementById("Input-Type-File");
const thumbnail = document.getElementById("thumb");
chooseFile.addEventListener("click", function () {
  hideFilebtn.click();
});

hideFilebtn.addEventListener("change", function () {
  if (hideFilebtn.value) {
    chooseFile.value = hideFilebtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
  } else {
    chooseFile.value = "";
  }
});

thumbnailInput.addEventListener("change", function () {
  const [file] = thumbnailInput.files;
  if (file) {
    thumbnail.src = URL.createObjectURL(file);
    document.getElementsByClassName("uploadDiv-Icon")[0].style.display = "none";
    document.getElementById("thumb").style.display = "block";
  }
});

// here starts the upload btn in assignment div section upload document
const oriInputBtn=document.getElementById("assignment-input-document-ori");
const labelInputBtn=document.getElementById("assignment-file-label");
oriInputBtn.addEventListener("change",function(){
  if(oriInputBtn.value){
    labelInputBtn.innerHTML = oriInputBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
  }
  else{
    labelInputBtn.innerHTML ="Upload Document"; 
  }
});