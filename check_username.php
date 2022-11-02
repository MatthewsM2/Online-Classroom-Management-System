<?php
# create database connection
$connect = mysqli_connect("localhost", "root", "", "smart_project");
if (!empty($_POST["username"])) {
  $query = "SELECT * FROM Account WHERE Usr_Name='" . $_POST["username"] . "'";
  $result = mysqli_query($connect, $query);
  echo mysqli_num_rows($result);
}
