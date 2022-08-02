<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vite App</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body >
  <div id="animations-bg" class=" h-[699px]  bg-cover static px-5 md:px-0 " style="background-image:url(img/img03.jpg);">

    <div class="flex space-x-9 justify-center items-center pt-4 xl:px-0 px-5">
      <div>
        <a href=""> <img class="w-[60px] md:w-[80px]" src="img/img44.png" alt=""></a>
      </div>
      <button id="btn" class="text-2xl text-white md:hidden block"><i class='bx bx-menu'></i></button>
      <ul id="menu" class="md:flex text-white md:space-x-4 font-bold  md:block hidden   ">
        <li class="p-4 hover:bg-[#8cc63f] hover:rounded-lg  "><a href="index.html">Trang chủ</a></li>
        <li class="p-4 hover:bg-[#8cc63f] hover:rounded-lg "><a href="">Giới thiệu</a></li>
        <li class="p-4 hover:bg-[#8cc63f] hover:rounded-lg"><a href="">Cửa hàng</a></li>
        <li class="p-4 hover:bg-[#8cc63f] hover:rounded-lg"><a href="">Kiến thức</a></li>
        <li class="p-4 hover:bg-[#8cc63f] hover:rounded-lg"><a href="">Liên hệ</a></li>

      </ul>
      <div class="text-white ">
        <input type="search" style="background-color:rgba(0, 0, 0,0.4 ) ;" class="p-2 rounded-full w-32 md:w-60"
          placeholder="Tìm kiếm...... ">

      </div>
      <div>
        <a href="sign_up.php" class="p-4 hover:bg-[#8cc63f] hover:rounded-lg  text-white ">Đăng kí</a>
      </div>
      <div>
        <a href="login.php" class="p-4 hover:bg-[#8cc63f] hover:rounded-lg  text-white ">Đăng Nhập</a>
      </div>
    </div>

    <!-- end -->

    <div class="text-white text-center space-y-9 pt-16 ">
      <h2 class="text-2xl md:text-4xl font-bold">GIAO TẬN TAY NGƯỜI DÙNG NHANH</h2>
      <h1 class="text-4xl md:text-8xl font-bold">THỰC PHẨM ORGANIC</h1>
      <h3 class="text-2xl font-bold">Chúng tôi cung cấp các sản phẩm hữu cơ chất lượng cao</h3>
      <button
        class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 duration-300  p-4 rounded-full px-10 text-2xl md:text-4xl">MUA
        NGAY</button>
    </div>
    <!-- end -->
    <div
      class="flex justify-center  md:space-x-20  md:max-w-7xl m-auto shadow-2xl p-4 bg-white   absolute  top-[650px] md:left-[440px] left-1 px-5 md:px-0">
      <div class="text-center">
        <a href="">
          <img src="img/img04.jpg" alt="">
          <span class="hover:text-[#8cc63f]">Dâu tây</span>
        </a>

      </div>
      <div class="text-center">
        <a href="">
          <img src="img/img05.png" alt="">
          <span class="hover:text-[#8cc63f]">Thịt cá hồi</span>
        </a>

      </div>
      <div class="text-center">
        <a href="">
          <img src="img/img06.jpg" alt="">
          <span class="hover:text-[#8cc63f]">Cam</span>
        </a>

      </div>
      <div class="text-center">
        <a href="">
          <img src="img/img07.jpg" alt="">
          <span class="hover:text-[#8cc63f]">Cà rốt</span>
        </a>

      </div>
      <div class="text-center">
        <a href="">
          <img src="img/img08.jpg" alt="">
          <span class="hover:text-[#8cc63f]">Đậu</span>
        </a>

      </div>
      <div class="text-center">
        <a href="">
          <img src="img/img09.jpg" alt="">
          <span class="hover:text-[#8cc63f]">Bắp</span>
        </a>

      </div>

    </div>
  </div>

  <!-- end -->
  <div class="max-w-7xl m-auto  mt-44">
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 px-5 md:px-0">
      <div class="">
        <a href="">
          <img class="transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300"
            src="img/img13.png" alt="">
        </a>
      </div>
      <div>
        <a href="">
          <img class="transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300"
            src="img/img14.png" alt="">
        </a>
      </div>
    </div>
    <!-- end -->
    <div id="main" class="bg-white mt-8 shadow-2xl px-5 md:px-0 ">
      <h5 class="text-center text-2xl md:text-4xl font-bold">Sản Phẩm Bán Chạy</h5>
      <div class="flex justify-around pt-4">
        <div class="text-center">
          <a href="bapcai.html"><img
              class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700 w-[235px] "
              src="img/img15.jpg" alt="">

          </a>

          <div class="py-4">
            <span class="hover:text-[#8cc63f]">Bắp cải</span>
            <p class="text-[#8cc63f]">65,000đ</p>
          </div>

        </div>
        <div class="text-center">
          <a href="bap.html"> <img
              class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700 w-[235px] "
              src="img/img16.jpg" alt=""></a>

          <div class="py-4">
            <span class="hover:text-[#8cc63f]">Bắp mỹ</span>
            <p class="text-[#8cc63f]">75,000đ</p>
          </div>

        </div>
        <div class="text-center">
          <a href="chuoi.html"><img
              class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700 w-[235px] "
              src="img/img17.jpg" alt=""></a>

          <div class="py-4">
            <span class="hover:text-[#8cc63f]">Chuối Organic</span>
            <p class="text-[#8cc63f]">35,000đ</p>
          </div>

        </div>
        <div class="text-center">
          <a href="cachua.html"> <img
              class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700 w-[235px] "
              src="img/img18.jpg" alt=""></a>

          <div class="py-4">
            <span class="hover:text-[#8cc63f]">Cà chua</span>
            <p class="text-[#8cc63f]">75,000đ</p>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <div style="background-image: url(img/img23.jpg);" class="bg-cover h-[800px] mt-8 static ">
    <div class="space-y-18">
      <div class="space-y-4 text-white text-center py-4">
        <h4 class="md:text-2xl font-bold">CƠ HỘI SĂN ĐƯỢC GIÁ TỐT NHẤT TUẦN</h4>
        <h3 class="md:text-6xl text-4xl font-bold">ĐANG KHUYẾN MÃI</h3>
        <p class="font-bold">Từ trang trại của chúng tôi ngay trước cửa nhà bạn.</p>
      </div>
      <div class="space-y-8 ">
        <div class="flex justify-center space-x-3 absolute md:left-[860px] top-[1820px]  ">
          <div class="">
            <div class="bg-[#8cc63f] p-4  rounded-full text-white">
              <p class="text-4xl">0</p>
              <p>giờ</p>
            </div>
          </div>
          <div class="">
            <div class="bg-[#8cc63f] p-4 rounded-full text-white">
              <p class="text-4xl">0</p>
              <p>phút</p>
            </div>
          </div>
          <div class="">
            <div class="bg-[#8cc63f] p-4 rounded-full text-white">
              <p class="text-4xl">0</p>
              <p>giây</p>
            </div>
          </div>
        </div>
        <div class="w-[1243px] h-[481px] bg-white m-auto">
          <div class="grid grid-cols-4 gap-8 pt-16 p-4">
            <div class="">
              <a href="xoai.html"> <img
                  class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700"
                  src="img/img24.jpg" alt=""></a>

              <div class="pt-4">
                <p class="hover:text-[#8cc63f] ">Xoài cát Hòa Lộc</p>
                <del >130,000đ</del><p class="text-[#8cc63f]">90,000đ</p>
              </div>

            </div>
            <div>
              <a href="bo.html"><img
                  class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700"
                  src="img/img25.jpeg" alt=""></a>

              <div class="pt-4">
                <p class="hover:text-[#8cc63f]">Bơ sáp 034 Lâm Đồng</p>
                <del >135,000đ</del><p class="text-[#8cc63f]">90,000đ</p>
               
              </div>

            </div>
            <div>
              <a href="ca.html"><img
                  class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700"
                  src="img/img28.jpg" alt=""></a>

              <div class="pt-4">
                <p class="hover:text-[#8cc63f]">Cá Bình Định</p>
                <del >195,000đ</del><p class="text-[#8cc63f]">90,000đ</p>
              </div>

            </div>
            <div class="">
              <a href="cam.html"> <img
                  class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700"
                  src="img/img27.jpg" alt=""></a>

              <div class="pt-4">
                <p class="hover:text-[#8cc63f]">Cam xoàn hướng hữu cơ</p>
                <del >65,000đ</del><p class="text-[#8cc63f]">30,000đ</p>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end -->
  <div class="max-w-7xl m-auto mt-8">
    <h1 class="text-center text-6xl font-bold">Tin Tức</h1>
    <div class="grid grid-cols-3 gap-8 pt-8">
      <div class="h-[470px] shadow-2xl">
        <a href="tintuc1.html"><img class="h-[284px] w-full" src="img/img38.jpg" alt=""></a>
        <div class="p-4 ">
          <h6 class="text-2xl font-bold">Nấm vân có tác dụng gì?</h6>
          <a href="tintuc1.html">
            <p class="hover:text-[#8cc63f] pt-6">Cách đây 2000 năm,nấm vân chi rừng đã được biết đến và sử dụng</p>
          </a>
        </div>
      </div>
      <div class="h-[470px] shadow-2xl">
        <a href="tintuc2.html"><img class="h-[284px] w-full" src="img/img39.jpg" alt=""></a>
        <div class="p-4 ">
          <h6 class="text-2xl font-bold">Chả cốm ăn với gì thì ngon?</h6>
          <a href="tintuc2.html">
            <p class="hover:text-[#8cc63f] pt-6">Bánh giò Bánh giò là một loại bánh được làm từ bột gạo tẻ,nhân....</p>
          </a>
        </div>
      </div>
      <div class="h-[470px] shadow-2xl">
        <a href="tintuc3.html"> <img class="h-[284px] w-full" src="img/img40.jpg" alt=""></a>
        <div class="p-4 ">
          <h6 class="text-2xl font-bold">Cốm tươi làm món gì thì ngon?</h6>
          <a href="tintuc3.html">
            <p class="hover:text-[#8cc63f] pt-6">Cốm tươi làm món gì ngon Dùng cốm tươi làm món gì,cốm tươi có....</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <div class="bg-[#1b1e24] h-[292px] mt-6 space-y-8">
    <div class="text-center space-y-6 pt-4">
      <h5 class="text-4xl text-white">Đăng Kí Ngay</h5>
      <h4 class="text-6xl text-[#8cc63f]">GIẢM GIÁ 30% ĐƠN HÀNG</h4>
    </div>
    <form action="" class="flex justify-center">
      <input type="email" class="p-4 w-[400px] rounded-full" placeholder="Email của bạn.....">
      <input type="submit" value="Đăng Kí" class="p-4 w-[200px] rounded-full bg-red-500 ml-2">
    </form>
  </div>
  <!-- end -->
  <div class="h-[373px] bg-[#252932] ">
    <div class="grid grid-cols-4 gap-8  max-w-7xl m-auto pt-16">
      <div class="text-1xl text-white">
        <span><i class='bx bx-map-pin'></i>Cao Đẳng Fpt Polytechnic</span><br>
        <span> <i class='bx bxs-phone-call'></i> 0979048136</span><br>
        <span><i class='bx bxl-gmail'></i>nhogiang03tg@gmail.com <br> giangnnph21946@fpt.edu.vn</span><br>
      </div>
      <ul class="text-white space-y-4">
        <h6 class="text-2xl ">Sản Phẩm</h6>
        <li class="hover:text-[#8cc63f] "><a href="">Rau củ</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Hải sản</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Trái cây</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Đồ uống</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Thịt trứng</a></li>
      </ul>

      <ul class="text-white space-y-4">
        <h6 class="text-2xl ">Danh mục</h6>
        <li class="hover:text-[#8cc63f] "><a href="">Trang chủ</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Giới thiệu</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Cửa hàng</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Kiến thức</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Liên hệ</a></li>
      </ul>

      <ul class="text-white space-y-4">
        <h6 class="text-2xl ">Dịch vụ</h6>
        <li class="hover:text-[#8cc63f] "><a href="">Rau củ</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Hải sản</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Trái cây</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Đồ uống</a></li>
        <li class="hover:text-[#8cc63f] "><a href="">Thịt trứng</a></li>
      </ul>
    </div>

  </div>



  <script src="main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
  <script>
    VANTA.BIRDS({
      el: "#animations-bg",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      colorMode: "lerp",
      birdSize: 1.30,
      wingSpan: 26.00,
      quantity: 4.00,
      backgroundAlpha: 0.0
    })

  </script>
</body>

</html>