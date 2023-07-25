<?php /* Template Name: Contact page */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="inner-header">
  <div class="container-fluid">
    <div class="container">
            <h3><?php the_title(); ?></h3>          
    </div>
  </div>
</section>
<?php endwhile; else: ?>
<?php endif; ?>

<section class="google-map">
  <div class="container-fluid">
    <div class="container">
           <?php echo the_field('google_map'); ?>      
    </div>
  </div>
</section>

<section class="contact-page padding80">
  <div class="container-fluid">
    <div class="container">
      <h3 class="header-top">Kontaktieren Sie Uns</h3>
      <div class="row">
          <div class="col-sm-8 col-md-8 col-xs-12 contact-form">
            <div class="row">
              <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Page Form"]') ; ?>
            </div>
          </div>

          <div class="col-sm-4 col-md-4 col-xs-12">
          <div class="address">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
            <?php endif; ?>
          </div>
          </div>
          
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
