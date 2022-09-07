function checkUsername() {
  jQuery.ajax({
    url: "check_username.php",
    data: "username=" + $("#userNameId").val(),
    type: "POST",
    success: function (data) {
      if (data != 0) {
        $("#userNameId").css("border-color", "red");
      } else {
        $("#userNameId").css("border-color", "green");
      }
    },
  });
}
