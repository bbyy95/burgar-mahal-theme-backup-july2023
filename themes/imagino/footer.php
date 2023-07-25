</div>
<?php include("footer_widget.php"); ?>

<section class="footer" id="footer">
  <div class="container-fluid">
    <div class="container text-center">
      <p class="copy"><span>Copyright © </span>Burger-Mahal <?php echo date("Y"); ?>. All Right Reserved <br> <a class="foot-name" href="https://imaginosolutions.com/">Designed and Developed by Imagino</a></p>
    </div>
  </div>
</section>


<?php wp_footer() ?>

<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="<?php bloginfo('template_directory')?>/asset/js/bootstrap.min.js?ver=1.0.0"></script>
  <script src="<?php bloginfo('template_directory')?>/asset/js/slick/slick.min.js"></script>
  <script type="text/javascript">
$('.gallery').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        prevArrow: "<i class='fa fa-chevron-right'></i>",
         nextArrow: "<i class='fa fa-chevron-left'></i>",
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
});

$('.testimonial').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4500,
        arrows: true,
        dots: false,
        prevArrow: "<i class='fa fa-chevron-right'></i>",
         nextArrow: "<i class='fa fa-chevron-left'></i>",
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
});

</script>
</body>
</html>