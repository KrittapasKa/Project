<?php 
if (isset($_POST["submit"])) {
    include_once ('db/conn.php');
    $ProductID = $_REQUEST['submit'];
    $ProductName = $_REQUEST['ProductName'];
    $Picture = $_REQUEST['Picture'];
    $Category = $_REQUEST['Category'];
    $ProductDescription = $_REQUEST['ProductDescription'];
    $Price = $_REQUEST['Price'];
    $QuantityStock = $_REQUEST['QuantityStock'];
    $sql = "UPDATE products SET ProductName = '$ProductName', Category = '$Category', ProductDescription = '$ProductDescription', Price = '$Price', QuantityStock = '$QuantityStock' WHERE ProductID = $ProductID";
    if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'>alert('แก้ไขสำเร็จ');</script>";
    } else {
        echo "<script type='text/javascript'>alert('เกิดข้อผิดพลาด');</script>";
    }
    mysqli_close($con);
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
}
?>