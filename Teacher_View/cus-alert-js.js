function rmStudent(child0,child1,child2) {
    let StudentName = child0.value;
    let StudentUserName = child1.value;
    let clscode = child2.value;
  swal({
    title: "Are you sure ?",
    text: "You want to remove "+StudentName,
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      jQuery.ajax({
        url: "inside_class/removeStu-class.php",
        data: {usrname:StudentUserName,cls:clscode},
        type: "POST",
        success: function (data) {
          window.location.reload();
          studentsClick();
        },
      });
    }
  });
}
