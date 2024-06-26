<?php
if (isset($_GET['search'])) {
    include_once ('db/conn.php');
    $search = $_REQUEST['search'];
    $result = mysqli_query($con, "SELECT * FROM products WHERE ProductName LIKE '%$search%' OR category LIKE '%$search%'");
    $title = "หน้าค้นหารายการสินค้า";
    mysqli_close($con);
}
?>
<?php require_once ('fragments/head.php'); ?>

<body>
    <div class="container-fluid boder border-1">
        <?php include_once ('fragments/navbar.php'); ?>
        <?php if ($result->num_rows == 0) {
            echo "<div class='alert alert-danger text-center my-2' role='alert'>
                    <h5>ไม่พบผลลัพธ์</h5>
                        </div>";
        } else {
            echo '<table class="table table-bordered table-striped table-hover text-center">
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
            <tbody>'; ?>
            <?php
            $data = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row):
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['ProductID']) ?></td>
                    <td><img src="images/<?= $row['Picture'] ?>" alt="" height="50px"></td>
                    <td><?= htmlspecialchars($row['ProductName']) ?></td>
                    <td><?= htmlspecialchars($row['Category']) ?></td>
                    <td><?= htmlspecialchars($row['ProductDescription']) ?></td>
                    <td><?= htmlspecialchars($row['Price']) ?></td>
                    <td><?= htmlspecialchars($row['QuantityStock']) ?></td>
                    <td>
                        <a class="btn btn-warning"
                            href="editPage/?id=<?= $row['ProductID'] ?>&ProductName=<?= $row['ProductName'] ?>&Category=<?= $row['Category'] ?>&ProductDescription=<?= $row['ProductDescription'] ?>&Price=<?= $row['Price'] ?>&QuantityStock=<?= $row['QuantityStock'] ?>">แก้ไข</a>
                        <a class="btn btn-danger" href="delete/?id=<?= $row['ProductID'] ?>"
                            onclick="return confirm('ยืนยันการลบหรือไม่?')">ลบ</a>
                    </td>
                </tr>
                <?php
            endforeach;
            ?>

            </tbody>
            </table>
            <?php
        }
        ?>
        <?php require_once ('fragments/footer.php'); ?>
    </div>
</body>

</html>