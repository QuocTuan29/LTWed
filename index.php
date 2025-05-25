<?php
session_start();
include_once('cauhinh/ketnoi.php');
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Shop Dép - Siêu xịn</title>

    <link rel="stylesheet" type="text/css" href="css/trangchu.css">
    <link rel="stylesheet" type="text/css" href="css/khuyenmai.css">
    <link rel="stylesheet" type="text/css" href="css/chitietsp.css">

</head>
<div id="wrapper">
    <header>
        <h1>Website bán dép xịn số 1 Việt Nam</h1>
    </header>


    <div id="head-container">
        <div id="search-bar">
            <?php

            include_once('chucnang/timkiem/timkiem.php');

            ?>

        </div>

        <a href="">
            <img src="" alt="">

        </a>
        <div class="auth-container">
            <?php if (isset($_SESSION['username'])): ?>
                <p>Xin chào, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
                <span><a href="logout.php" class="auth-link">Đăng xuất</a></span>
            <?php else: ?>
                <a href="login.php" class="auth-link">Đăng nhập</a>
            <?php endif; ?>
        </div>
        <div id="main-bar">
            <div id="logo"><a href="index.php"><img width="50px" height="40px" src="quantri/anh/giohang.jpg" /></a></div>
            <div id="banner"></div>
            <?php
            include_once('chucnang/giohang/giohangcuaban.php');
            ?>
        </div>
    </div>

    <body>


        <div id="navbar">
            <nav class="navbar navbar-expand">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="index.php?page_layout=depnam">Dép nam</a></li>
                    <li><a href="index.php?page_layout=depnu">Dép nữ</a></li>
                    <li><a href="index.php?page_layout=tatcasanpham">Tất cả sản phẩm</a></li>
                    <li><a href="index.php?page_layout=khuyenmai">Khuyến mãi</a></li>
                    <?php
                    if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                        echo '<li><a href="quantri/quantri.php">Trang Admin</a></li>';
                    }
                    ?>
                </ul>
        </div>

        <div class="slide">
            <?php include_once('Slide/slide.php'); ?>
            <script src="Slide/slide.js"></script>
        </div>


        <div id="main">

            <?php
            if (isset($_GET['page_layout'])) {

                switch ($_GET['page_layout']) {
                    case 'tatcasanpham':

                        include_once('chucnang/menungang/tatcasanpham.php');
                        break;
                    case 'chitietsp':
                        include_once('chucnang/sanpham/chitietsp.php');
                        break;
                    case 'khuyenmai':
                        include_once('chucnang/menungang/khuyenmai.php');
                        break;
                    default:
                    case 'depnu':
                        include_once('chucnang/menungang/depnu.php');
                        break;
                    case 'depnam':
                        include_once('chucnang/menungang/depnam.php');
                        break;
                }
            } else {
                include_once('chucnang/sanpham/spdacbiet.php');
                include_once('chucnang/menungang/khuyenmai.php');
            }
            ?>
        </div>

        <div id="footer">
            <div id="footer-item">
                <h4>Cửa hàng Website bán dép uy tín Việt Nam</h4>
                <p><span>Địa chỉ:</span> 170 - An Dương Vương, Thành Phố Quy Nhơn | <span>Hotline: 0946042975</span> </p>
            </div>
        </div>

    </body>

</div>

</html>