<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once ('db/conn.php');
    $ProductName = $_REQUEST['ProductName'];
    $Picture = $_REQUEST['Picture'];
    $Category = $_REQUEST['Category'];
    $ProductDescription = $_REQUEST['ProductDescription'];
    $Price = $_REQUEST['Price'];
    $QuantityStock = $_REQUEST['QuantityStock'];

    $sql = "INSERT INTO products (ProductName, Picture, Category, ProductDescription, Price, QuantityStock) VALUES ('$ProductName', '$Picture', '$Category', '$ProductDescription', '$Price', '$QuantityStock')";
    if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'>alert('เพิ่มสำเร็จ');</script>";
        mysqli_close($con);
        echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    } else {
        mysqli_close($con);
        echo "<script type='text/javascript'>alert('เกิดข้อผิดพลาด');</script>";
    }
}
?>