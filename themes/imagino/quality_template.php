<?php /* Template Name: Quality Template */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="quality_full container-fluid" style="background: url('<?php the_post_thumbnail_url('full'); ?>'); background-size: cover; background-position: center;">
    <div class="container">
          <div class="menus-lists">

              <div class="list-image left">
                <div class="products-image" style="background: url('<?php echo the_field('section_one_image'); ?>'); background-size: cover; background-position: center;">
                </div>
                <div class="products-texts">
                    <h4><?php echo the_field('section_one_header'); ?></h4>
                    <div><?php echo the_field('section_one_contents'); ?></div>
                </div>
              </div>


              <div class="list-image left">
                <div class="products-image" style="background: url('<?php echo the_field('section_two_image'); ?>'); background-size: cover; background-position: center;">
                </div>
                <div class="products-texts">
                    <h4><?php echo the_field('section_two_header'); ?></h4>
                    <div><?php echo the_field('section_two_contents'); ?></div>
                </div>
              </div>

                        
          </div>
    </div>
</section>


<?php endwhile; else: ?>
<?php endif; ?>


<?php get_footer(); ?>
