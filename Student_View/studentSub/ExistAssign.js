function hello() {
    console.log("Iaminhere");
  var slnoData=$('.uploadDivViewSlno').val();
  console.log(slnoData);
}
function workAjax(){
  var slnoData=$('.uploadDivViewSlno').val();
jQuery.ajax({
    url: 'http://localhost/MiniProject/Student_View/studentSub/ExistAssign.php',
    type: 'post',
    data: "slno=" + slnoData,
    success: function(response){
        if(response=="Zero"){
        }else{
          var link="studentSub/"+response;
        $('#aAssignAnchortag').attr("href", link);
        $('#AssignAnchortag').css("display", "flex");
        $('#InputAssignAnchortag').css("display", "none");  
        $('#SubmitAssignAnchortag').css("display", "none");
        }
     }
 });
}