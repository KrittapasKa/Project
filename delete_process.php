<?php
if (isset($_GET['id'])) {
    include_once ('db/conn.php');
    $ProductID = $_GET['id'];
    $sql = "DELETE FROM products WHERE ProductID = $ProductID";
    if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'>alert('ลบสำเร็จ');</script>";
        mysqli_close($con);
        header("location: http://localhost/test/index.php");
    } else {
        mysqli_close($con);
        echo "<script type='text/javascript'>alert('เกิดข้อผิดพลาด');</script>";
        header("location: http://localhost/test/index.php");
    }
}
?>