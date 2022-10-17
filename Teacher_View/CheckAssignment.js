// work on here
function workAjax(){
    var slnoData=$('.uploadDivViewSlno').val();
  jQuery.ajax({
      url: '',
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