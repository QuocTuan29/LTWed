<link rel="stylesheet" type="text/css" href="css/tatcasanpham.css">


<div class="prd-block">
    <h2>Tất cả sản phẩm</h2>
    <div class="pr-list">
        <?php
        include_once('cauhinh/ketnoi.php');


        //tim kiếm
        $search = '';
        $whereClause = '';
        if (isset($_GET['noidung']) && !empty(trim($_GET['noidung']))) {
            $search = mysqli_real_escape_string($conn, $_GET['noidung']);
            $whereClause = "Where ten_sp LIKE '%$search%'";
        }

        //Số bản ghi trên trang
        $rowPerPage = 8;


        //Số trang hiện tại
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        //Vị trí 
        $perRow = ($page - 1) * $rowPerPage;

        //lệnh sql chính
        $sql = "SELECT * FROM sanpham $whereClause LIMIT $perRow,$rowPerPage";
        $query = mysqli_query($conn, $sql);

        ////Tổng số bản ghi 

        $totalRow = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM sanpham $whereClause"));
        $totalPage = ceil($totalRow / $rowPerPage);


        //Danh sách nút phân trang
        $listPage = '';
        $urlParams = "index.php?page_layout=tatcasanpham";
        if (!empty($search)) {
            $urlParams .= "&noidung=" . urlencode($search);
        }

        //Nút trang trước và trang đầu
        if ($page > 1) {
            $listPage .= '<a href="' . $urlParams . '&page=1"> First </a>';

            $listPage .= '<a href="' . $urlParams . '&page=' . ($page - 1) . '"> << </a>';
        }

        //số trang

        for ($i = 1; $i <= $totalPage; $i++) {
            if ($i == $page) {
                $listPage .= '<span class="current"> ' . $i . '</span>';
            } else {
                $listPage .= '<a href="' . $urlParams . '&page=' . $i . ' "> ' . $i . ' </a>';
            }
        }

        //Nút trang sau và trang cuối
        if ($page < $totalPage) {
            $next = $page + 1;
            $listPage .= '<a href="' . $urlParams . '&page=' . ($page + 1) . ' "> >> </a>';
            $listPage .= '<a href="' . $urlParams . '&page=' . $totalPage . ' "> Last </a>';
        }

        //Hiện thị sản phẩm
        $i = 0;
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="prd-item">
                <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp'] ?>">
                    <img width="140" height="150" src="quantri/anh/<?php echo $row['anh_sp'] ?>" />
                </a>
                <h3><a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp'] ?>">
                        <?php echo $row['ten_sp'] ?></a>
                </h3>
                <p>Tình trạng: <?php echo $row['tinh_trang'] ?></p>
                <p class="price"><span>Giá: <?php echo $row['gia_sp'] ?> VNĐ</span></p>
            </div>
        <?php
            $i++;
            if ($i % 4 == 0) {
                echo '<div class="clear"></div>';
            }
        }

        //Nếu Không có kết quả 
        if ($totalRow == 0) {
            echo '<p> Không tìm thấy sản phẩm nào "<strong>' . htmlspecialchars($search) . '<strong>".<\p> ';
        }
        ?>
    </div>
</div>
<div id="pagination"><?php echo $listPage ?></div>