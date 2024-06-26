<?php
include_once ('db/conn.php');
$result = mysqli_query($con, "SELECT * FROM products LIMIT 50");
$data = $result->fetch_all(MYSQLI_ASSOC);
mysqli_close($con);
$title = "หน้าหลัก";
?>
<?php require_once('fragments/head.php');?>
<body>
    <div class="container-fluid boder border-1">
        <?php include_once ('fragments/navbar.php'); ?>
        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">รูปภาพสินค้า</th>
                    <th scope="col">ชื่อสินค้า</th>
                    <th scope="col">ประเภทสินค้า</th>
                    <th scope="col">รายละเอียดสินค้า</th>
                    <th scope="col">ราคาสินค้า</th>
                    <th scope="col">จำนวนสินค้า</th>
                    <th scope="col">การกระทำ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['ProductID']) ?></td>
                        <td><img src="images/<?= $row['Picture'] ?>" alt="" height="50px"></td>
                        <td><?= htmlspecialchars($row['ProductName']) ?></td>
                        <td><?= htmlspecialchars($row['Category']) ?></td>
                        <td><?= htmlspecialchars($row['ProductDescription']) ?></td>
                        <td><?= htmlspecialchars($row['Price']) ?></td>
                        <td><?= htmlspecialchars($row['QuantityStock']) ?></td>
                        <td><a class="btn btn-warning"
                                href="editPage/?id=<?= $row['ProductID'] ?>&ProductName=<?= $row['ProductName'] ?>&Category=<?= $row['Category'] ?>&ProductDescription=<?= $row['ProductDescription'] ?>&Price=<?= $row['Price'] ?>&QuantityStock=<?= $row['QuantityStock'] ?>">แก้ไข</a>
                            <a class="btn btn-danger" href="delete/?id=<?= $row['ProductID'] ?>"
                                onclick="confirm('ยืนยันการลบหรือไม่?')">ลบ</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php require_once('fragments/footer.php');?>
    </div>
</body>

</html>