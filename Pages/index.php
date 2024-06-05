<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DN2ndHome-Tìm kiếm và cho thuê phòng trọ Đà Nẵng</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
 -->
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="css/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="css/vendor/aos/aos.css" rel="stylesheet">
  <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="css/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="css/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.html">DN2ndHome</a></h1>
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="index.php?page_layout=home">Trang chủ</a></li>
              <li><a class="nav-link scrollto" href="index.php?page_layout=home#about">Giới thiệu</a></li>
              <li class="dropdown"><a href="#"><span>Dach sách</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Cẩm Lệ</a></li>
                  <li><a href="#">Hải Châu</a></li>
                  <li><a href="#">Thanh Khê</a></li>
                  <li><a href="#">Liên Chiểu</a></li>
                  <li><a href="#">Ngũ Hành Sơn</a></li>
                  <li><a href="#">Hòa Vang</a></li>
                  <li><a href="#">Trường Sa</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="index.php?page_layout=postnew">Đăng tin</a></li>
              <li><a class="nav-link scrollto" href="index.php?page_layout=home#contact">Liên hệ</a></li>
              <!-- <li><a class="nav-link scrollto" href="index.php?page_layout=login">Đăng nhập</a></li> -->
              <?php if (defined("user")){ ?>
       
                <li class="dropdown"><a href=""><span>Tai khoan</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Thông tin</a></li>
                  <li><a href="index.php?page_layout=logout">Đăng xuất</a></li>
                </ul>
              </li> 
            <?php } 
              
              else { ?>
                  <li><a class="nav-link scrollto" href="index.php?page_layout=login">Đăng nhập</a></li>
                <?php } ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
  

  <?php
  if (isset($_GET['page_layout'])) {
    switch ($_GET['page_layout']) {
      case 'login':
        include_once('login.php');
        break;
      case 'home':
        include_once('home.php');
        break;
      case 'logout':
        include_once('logout.php');
        break;
      case 'postnew':
        include_once('post_new.php');
        break;
    }
  } else {
    include_once('home.php');
  }

  ?>
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>DN2ndHome</h3>
            <p><b>DN2ndHome</b> là kênh thông tin về phòng trọ, nhà trọ hàng đầu Việt Nam. Website được thành lập vào tháng 5/2021 - là 
              website mới nhất hỗ trợ riêng biệt cho người muốn đăng tin cho tuê phòng trọ cũng như người muốn tìm phòng trọ một cách nhanh nhất avf chính xác nhất</p>
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              18 Lê Thiện Trị,Hòa Hải, <br>
              Ngũ Hành Sơn, Đà Nẵng<br>
              Việt Nam <br>
              <strong>Phone:</strong> + 084364956400<br>
              <strong>Email:</strong> quanphan2k2@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Dịch vụ</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Hỗ trợ tìm kiếm</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Hỗ trợ cho thuê</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Tìm bạn ở ghép</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Tư vấn hỗ trợ </a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>DN2ndHome</strong>
      </div>
      <div class="credits">
        Designed by <a href="">Quân</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="css/vendor/aos/aos.js"></script>
  <script src="css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="css/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="css/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="css/vendor/php-email-form/validate.js"></script>
  <script src="css/vendor/purecounter/purecounter.js"></script>
  <script src="css/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="css/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
</body>