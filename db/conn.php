<?php
    $con = mysqli_connect("localhost", "root", "", "shop");
if ($con->connect_error) {
    die("Failed to Connect MYSQL" . $conn->connect_error);
  }
?>