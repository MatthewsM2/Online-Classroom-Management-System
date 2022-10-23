function checkAssignmentAjax(serialNo) {
  jQuery.ajax({
    url: "inside_class/getAssignment.php",
    type: "post",
    data: "slno=" + serialNo,
    success: function (response) {
    $('#CheckAssignStudentTableTbody').html(response);
    },
  });
}


// var dataRecive = JSON.parse(response);
//       console.log(dataRecive.length);
//       var table = document.getElementById("CheckAssignStudentTable");
//       var tbody = table.getElementsByTagName("tbody");

//       dataRecive.forEach((array1) => {
//         tbody.innerHTML +="<tr><td>02</td>";
//         array1.forEach((element) => {
//           typeof(element);
//            tb.innerHTML +="<td>"+element+"</td>";
          
//         });
//         table.innerHTML +="</tr>"
//       });