
<!DOCTYPE html>
<html lang="en">

<?php
  $title = "Afro Arts Gallery"
?>

<?php  include_once('./partials/head.php')  ?>

<body>

<!-- ======= Header ======= -->
<?php include_once('./partials/header.php') ?>
<!-- End Header -->

  <?php  include_once("./partials/hero.php")  ?>

  <main id="main">

  


   <!-- ======= Features Section ======= -->
   <?php include_once("./partials/features.php") ?>
    <!-- End Features Section -->

    <!-- ======= Featured Services Section ======= -->
    <?php include_once("./partials/featured-services.php")  ?>
    <!-- End Featured Services Section -->

  <!-- ======= Gallery Section ======= -->
    <?php 
    $portfolio_title = "Art Collections";
    include_once("./partials/portfolio.php") ?>
   <!-- End Portfolio Section -->


  <!-- ======= Membership Section ======= -->
    <?php include_once("./partials/recent-members.php") ?>
   <!-- End Portfolio Section -->
    



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once("./partials/footer.php") ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- <div id="preloader"></div> -->

  <?php include_once("./partials/scripts.php")  ?>

  <script>
    const myCarouselElement = document.querySelector('#myCarousel')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
      interval: 2000,
      touch: false
    })
  </script>
</body>

</html>