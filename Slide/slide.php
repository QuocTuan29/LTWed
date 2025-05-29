<head>
  <meta charset="UTF-8" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <title>Slider Demo</title>
  <style>
    .slider {
      overflow: hidden;
      position: relative;
    }

    .list-images {
      display: flex;
      width: 200%;
      transition: 0.5s;
    }

    .slider-img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    .btn:hover {
      color: aliceblue;
    }

    .btn {
      font-size: 50px;
      color: #999;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }

    .btn-left {
      left: 0;
    }

    .btn-right {
      right: 0;
    }
  </style>
</head>

<body>
  <div class="slider">
    <div class="list-images" id="slides">

      <div><img class="slider-img" src="Slide/ảnh giày.jpg" alt="Image 2" /></div>
      <div><img class="slider-img" src="Slide/Ảnh dép.jpg" alt="Image 3" /></div>

    </div>
    <div class="btns">
      <div class="btn-left btn"><i class="bx bx-chevron-left"></i></div>
      <div class="btn-right btn"><i class='bx bx-chevron-right'></i></div>
    </div>
  </div>

  <script src="./slide.js"></script>
</body>