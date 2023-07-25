<?php /* Template Name: we help India */ ?>
<?php get_header(); ?>


<section class="about-page-section container-fluid">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h3 class="top-head"><?php the_title(); ?></h3>
    <div class="row">
      <div class="col-md-5 about-img">
        <img class="about-img" src="<?php the_post_thumbnail_url('full'); ?>">
      </div>
      <div class="col-md-7 about-text">
        <?php the_content(); ?>         
      </div>
    </div>
    <?php endwhile; else: ?>
    <?php endif; ?>
  </div>
</section>


<section class="indian-page-quote container-fluid">
    <div class="row">
      <div class="col-lg-5 image-section" style="background: url('<?php echo the_field('quote_image'); ?>">
      </div>
      <div class="col-lg-7" style="background: url('<?php bloginfo('template_directory')?>/asset/images/bg_quote.png')">
        <div class="about-quote">
          <?php echo the_field('quote_section'); ?>
        </div>
      </div>
    </div>
</section>



<section class="india-gallery container-fluid">
    <div class="container">
          <div class="row header-top">
            <div class="col-md-12">
              <h3>Unsere Sozialen Projekte</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknow</p>
            </div>
          </div>
          <div class="row india-gallery-box">
              <div class="col-md-4 box">
                <img src="<?php bloginfo('template_directory')?>/asset/images/projects/1.jpg">
                <h5>Cards international</h5>
              </div>
              <div class="col-md-4 box">
                  <img src="<?php bloginfo('template_directory')?>/asset/images/projects/2.jpg">
                  <h5>Jayamatha</h5>
              </div>  
              <div class="col-md-4 box">
                  <img src="<?php bloginfo('template_directory')?>/asset/images/projects/3.jpg">
                  <h5>randi</h5>
              </div>   
                      
          </div>
    </div>
</section>


<?php get_footer(); ?>
