<?php
if ($_REQUEST['id'] != "") {
    $ProductID = $_REQUEST['id'];
    $Picture = $_REQUEST['Picture'];
    $ProductName = $_REQUEST['ProductName'];
    $Category = $_REQUEST['Category'];
    $ProductDescription = $_REQUEST['ProductDescription'];
    $Price = $_REQUEST['Price'];
    $QuantityStock = $_REQUEST['QuantityStock'];
} else {
    header("location: http://localhost/test/index.php");
}
?>
<?php $title = "หน้าแก้ไขรายการสินค้า";
require_once('fragments/head.php');?>
<body>
    <div class="container-fluid">
        <?php include_once ('fragments/navbar.php'); ?>
        <div class="container text-center">
            <h2>ฟอร์มการเพิ่มสินค้า</h2>
            <form action="http://localhost/test/saveEdit.php" method="POST">
                <div class="row my-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">ชื่อสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="ProductName" id=""
                            value="<?php echo $ProductName; ?>"></div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">รูปภาพสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="Picture" id="" value="<?php echo $Picture; ?>" disabled></div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">ประเภทสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="Category" id=""
                            value="<?php echo $Category; ?>"></div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">รายละเอียดสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="ProductDescription" id=""
                            value="<?php echo $ProductDescription; ?>"></div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">ราคาสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="Price" id=""
                            value="<?php echo $Price; ?>"></div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">จำนวนสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="QuantityStock" id=""
                            value="<?php echo $QuantityStock; ?>"></div>
                </div>
                <button class="btn btn-success" type="submit" name="submit"
                    value="<?php echo $ProductID; ?>">บันทึก</button>
                <?php

                ?>
            </form>
        </div>
        <?php require_once('fragments/footer.php');?>
    </div>

</body>

</html>