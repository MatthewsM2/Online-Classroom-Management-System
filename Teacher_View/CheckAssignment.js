function checkAssignmentAjax(serialNo){
  jQuery.ajax({
      url: 'inside_class/getAssignment.php',
      type: 'post',
      data: "slno=" + serialNo,
      success: function(response){
          console.log(response);
          
       }
   });
  }