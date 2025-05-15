<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<body>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #search-box {
            background: #fff;
            border-radius: 30px;
        }

        #search-box #search-text {
            border: none;
            outline: none;
            background: none;
            padding: 10px 15px;
            font-size: 16px;
        }

        #search-box #search-btn {
            background-color: #fff;
            cursor: pointer;
            border: none;
            padding: 15px;
            border-radius: 50%;
        }
    </style>

    <form method="get" action="index.php" id="search-box">
        <input type="hidden" name="page_layout" value="tatcasanpham">
        <input id="search-text" type="text" placeholder="Tìm sản phẩm..." name="noidung" required>
        <button id="search-btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>

</body>