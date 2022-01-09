<?php
  include( "Connection.php" );
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tegar Ridwansyah - Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/puzzle-fill.svg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyPortfolio - v4.7.0
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Navbar ======= -->
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="index.php">Works</a></li>
            <li><a href="https://www.linkedin.com/in/tegar-ridwansyah/" target="blank_">LinkedIn</a></li>
            <li><a href="https://www.kaggle.com/tegarridwansyah" target="blank_">Kaggle</a></li>
          </ul>
        </div>
        <div class="col-md-10 d-none d-md-block  mr-auto">
          <h3>Summary Profile</h3>
          <p>I am currently studying Mathematics at Padjadjaran University. Have programming skills using programming languages 
            ​​such as C++, Python, Java, PHP. Have experience in making Web, Desktop, and Android-based application projects. 
            In addition, I have skills in graphic design and was responsible for the design of 3 social media in 2021. 
            While studying in Mathematics, I became interested in data, how data is processed to predict an event in the future, 
            and I am currently studying the required knowledge to become a Data Scientist. Thank you.<br> <a href="mailto:tegar.ridwan7@gmail.com">tegar.ridwan7@gmail.com</a></p>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Tegar's Portfolio</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main">

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
            <h2>Hey, I'm Tegar Ridwansyah</h2>
            <p class="mb-0">Mathematics Student at Padjadjaran University &amp; Programmer</p>
          </div>
          <div class="col-md-12 col-lg-6 text-start text-lg-end" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">
              <a href="#" data-filter="*" class="active">All</a>
              <a href="#" data-filter=".apk">Applications</a>
              <a href="#" data-filter=".data-science">Data Science</a>
              <a href="#" data-filter=".design">Design</a>
            </div>
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          <?php
            $sql = "SELECT * FROM portfolio";
            $query = $dbConn->prepare($sql);
            $query->execute();
            while ($row = $query->fetch(PDO::FETCH_ASSOC) ) {
          ?>
          <div class="item <?php echo $row['tag']; ?> col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php?id=<?php echo $row['id']; ?>" class="item-wrap fancybox">
              <div class="work-info">
                <h3><?php echo $row['judul']; ?></h3>
                <span><?php echo $row['jenis'] ?></span>
              </div>
              <img class="img-fluid" src="<?php echo $row['img'] ?>">
            </a>
          </div>
          <?php
            }
          ?>
        </div>
      </div>
    </section><!-- End  Works Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Copyright Tegar Ridwansyah. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-6 social text-md-end">
          <a href="https://www.instagram.com/tegar_1802/" target="blank_"><span class="bi bi-instagram"></span></a>
          <a href="https://www.linkedin.com/in/tegar-ridwansyah/" target="blank_"><span class="bi bi-linkedin"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>