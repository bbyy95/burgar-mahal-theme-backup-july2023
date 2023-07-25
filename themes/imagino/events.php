<?php /* Template Name: Event page */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="event-page container-fluid">
  <div class="container">
    <h3><?php the_title(); ?></h3>
    <div class="contents"><?php the_content(); ?></div> 
  </div>
</section>


<section class="events_page_box container-fluid" style="background: url('<?php the_post_thumbnail_url('full'); ?>');  background-size: cover; background-position: center;">
  <div class="container">
	  <?php if( get_field('show_orange_box') == 'True' ) { ?>
      <div class="events-box <?php if ( is_page( 'kochkwrre' ) ) { ?> cooking <?php } ?>">
        <div class="box-content">
          <h4><?php echo the_field('header'); ?></h4>
          <div class="date"><?php echo the_field('date'); ?></div>
          <?php if( get_field('show_button') == 'True' ) { ?>
          <a class="cta-lnk" href="<?php echo the_field('link'); ?>"><?php echo the_field('link_text'); ?></a>
          <?php } ?>
          <div class="event-contents"><?php echo the_field('contents'); ?></div>
        </div>
      </div>
	  <?php } ?>
  </div>
</section>

<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>
