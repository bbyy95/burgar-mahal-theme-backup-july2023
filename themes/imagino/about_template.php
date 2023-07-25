<?php /* Template Name: About page */ ?>
<?php get_header(); ?>


<section class="about-page-section container-fluid">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
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


<section class="about-page-quote container-fluid">
  <div class="container">

    <div class="row">
      <div class="about-quote">
        <?php echo the_field('quote_section'); ?>
      </div>
    </div>

  </div>
</section>

<section class="testimonials container-fluid" style="background: url('<?php bloginfo('template_directory')?>/asset/images/header_bg.jpg'); background-size: cover; background-position: center;">
    <div class="container">
      <div class="header-top">
          <h3>Testimonials</h3>            
      </div>
          <div class="testimonial">
            <?php
              $args = array( 'post_type' => 'testimonials' );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
              $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID),'full' );
            ?>  

              <div class="col-lg-6 testimonial-box">
                <div class="quote">
                  <?php the_content(); ?>
                </div>
                <div class="quote-head">
                  <?php the_title(); ?>
                </div>
              </div>

              <?php endwhile; ?>
              <?php wp_reset_query();?>
                        
          </div>
    </div>
</section>

<?php get_footer(); ?>
