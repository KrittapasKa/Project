<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ร้านKK SHOP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">หน้าหลัก</a>
                        <!-- <a class="nav-link" href="editPage.php">จัดการสินค้า</a> -->
                        <a class="nav-link" href="http://localhost/test/addPage.php">เพิ่มสินค้า</a>
                    </div>
                </div>
                <form class="d-flex" role="search" action="http://localhost/test/searchPage.php" method="GET">
                    <input class="form-control me-2" type="search" name="search" placeholder="ค้นหาสินค้า" aria-label="Search" value="<?php if (isset($_GET['search'])) echo $_GET['search']; ?>">
                    <button class="btn btn-success" type="submit">ค้นหา</button>
                </form>
            </div>
        </nav>