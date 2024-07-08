<?php

?>
<?php
$title = "หน้าเพิ่มรายการสินค้า";
require_once ('fragments/head.php'); ?>

<body>
    <div class="container-fluid">
        <?php include_once ('fragments/navbar.php'); ?>
        <div class="container text-center">
            <h2>ฟอร์มการเพิ่มสินค้า</h2>
            <form action="add_process.php" method="POST">
                <div class="row my-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">ชื่อสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="ProductName" id="" required>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">รูปภาพสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="Picture" id="" required></div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">ประเภทสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="Category" id="" required></div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">รายละเอียดสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="ProductDescription" id=""
                            required></div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">ราคาสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="Price" id="" required></div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-2"><label class="form-label" for="">จำนวนสินค้า</label></div>
                    <div class="col-auto"><input class="form-control" type="text" name="QuantityStock" id="" required>
                    </div>
                </div>
                <button class="btn btn-success" type="submit" name="submit" value="ส่ง">บันทึก</button>
            </form>
        </div>
        <?php require_once ('fragments/footer.php'); ?>
    </div>

</body>

</html>