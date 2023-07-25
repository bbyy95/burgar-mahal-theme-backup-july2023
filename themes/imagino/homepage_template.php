<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>
<?php global $pageid; ?>



<section class="container-fluid top-banner" style="background: url('<?php echo the_field('banner_background'); ?>'); background-size: cover; background-posiction: ceter;">
  <div class="container">
    <div class="row">
      <div class="icon col-12 header-texts">
        <?php echo the_field('homepage_banner'); ?>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid top-banner-image-box">
  <div class="container">
    <div class="row header-banner-image">
      <div class="header-image-box">
          <div class="box"><img src="<?php echo the_field('image_one_'); ?>"></div>
          <h4><?php echo the_field('image_one_header'); ?></h4>            
      </div>
      <div class="header-image-box">
          <div class="box"><img src="<?php echo the_field('image_two'); ?>"></div>  
          <h4><?php echo the_field('image_two_header'); ?></h4>            
      </div>
    </div>
    <div class="row header-banner-cta"><a href="<?php echo the_field('cta_link'); ?>" class="button_cta">Speisekarte</a></div>
  </div>
</section>


<section class="about-section container-fluid">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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

<section class="home-gallery container-fluid">
    <div class="container">
          <div class="row gallery">
			<?php
				  $args = array( 'post_type' => 'instagram' );
				  $loop = new WP_Query( $args );
				  while ( $loop->have_posts() ) : $loop->the_post();
				  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID),'full' );
				?> 
              <div class="col-md-3">
                <img src="<?php echo $url; ?>">
              </div>
			  <?php endwhile; ?>
    		<?php wp_reset_query();?>
          </div>
          <div class="row gallery-btn">
            <a href="https://www.instagram.com/burgermahalmosbach/" class="btn button_cta">Begleiten Sie uns auf Instagram</a> 
          </div>
    </div>
</section>

<section class="burger-section container-fluid">
        <div class="container">
          <div class="row">
              <div class="col-md-6">
                <div class="detail">
                  <?php echo the_field('burger_section'); ?>
                </div>             
              </div>
              <div class="col-md-6 text-center">
                    <img src="http://burger-mahal.de/wp-content/uploads/2022/03/Indian-meals.png">
<!-- <img src="<?php bloginfo('template_directory')?>/asset/images/burger.png">-->
              </div>
            
          </div>
        </div>
    </section>

<?php get_footer(); ?>