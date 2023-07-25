<?php /* Template Name: Menu Template */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="menu-page-section inner-header container-fluid">
  <div class="container">
    <h3 class="top-head">SPEISEKARTE</h3>
    <div class="row">
      <div class="col-md-6 top-box">
        <div class="box-inner" style="background: url('<?php bloginfo('template_directory')?>/asset/images/menu_bg1.jpg')">
          <h4><?php echo the_field('startseite_left_header'); ?></h4>
          <a class="cta_btn" target="_blank" href="<?php echo the_field('pdf_1'); ?>">Click To View</a>
        </div>
      </div>
      <div class="col-md-6 top-box">
        <div class="box-inner" style="background: url('<?php bloginfo('template_directory')?>/asset/images/menu_bg2.jpg')">
          <h4><?php echo the_field('startseite_left_header_copy'); ?></h4>
          <a class="cta_btn" target="_blank" href="<?php echo the_field('pdf_2'); ?>">Click To View</a>
        </div>         
      </div>
    </div>
  </div>
</section>
<?php endwhile; else: ?>
<?php endif; ?>



<section class="menu_veg_non_section container-fluid" style="background: url('<?php echo the_field('mittagstisch_section_backgrounnd'); ?>'); background-size: cover; background-position: center;">
    <div class="container">
    <h3 class="top-head">Mittagstisch</h3>
    <div class="row date">
    <div class="date-box">von&nbsp;&nbsp;<?php echo the_field('from_date'); ?>&nbsp;&nbsp; bis&nbsp;&nbsp; <?php echo the_field('to_date'); ?></div>
    </div>
    <div class="menu_veg_non_box">
        <div class="box-inner">
          <div class="top-header"><div>vegetarian</div> <div class="green"><span><i></i></span></div></div>
            <div class="inner-text">
              <?php echo the_field('vegetarian_list'); ?> 
            </div>
        </div>
        <div class="box-inner">
          <div>
            <div class="top-header"><div>non - vegetarian</div> <div class="red"><span><i></i></span></div></div>
              <div class="inner-text">
                <?php echo the_field('non_vegetarian_list'); ?> 
              </div>
        </div>
    </div>
  </div>
</section>




<section class="menu-products container-fluid" style="">
    <div class="container">
          <div class="menus-lists">
            <?php
              $args = array( 'post_type' => 'menu' );
              $loop = new WP_Query( $args );
              $i = 1;
              while ( $loop->have_posts() ) : $loop->the_post();
              $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID),'full' );
              if( $i % 2 == 1) {
            ?>  

              <div class="list-image left">
                <div class="products-image" style="background: url('<?php echo $url; ?>'); background-size: cover; background-position: center;">
                </div>
                <div class="products-texts">
                    <h4><?php the_title(); ?></h4>
                    <div><?php the_content(); ?></div>
                </div>
              </div>

              <?php } else { ?>

                <div class="list-image right">
                  <div class="products-texts">
                      <h4><?php the_title(); ?></h4>
                      <div><?php the_content(); ?></div>
                  </div>

                  <div class="products-image" style="background: url('<?php echo $url; ?>'); background-size: cover; background-position: center;">
                  </div>
                  
                </div>


              <?php }  $i = $i + 1; endwhile; ?>
              <?php wp_reset_query();?>
                        
          </div>
    </div>
</section>



<?php get_footer(); ?>
