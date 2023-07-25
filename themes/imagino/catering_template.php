<?php /* Template Name: Catering page */ ?>
<?php get_header(); ?>


<section class="catering-page container-fluid">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <div class="contents"><?php the_content(); ?></div>
    <?php endwhile; else: ?>
    <?php endif; ?>
  </div>
</section>


<section class="catering-page-box container-fluid">
  <div class="container">
    <div class="catering-boxes">
    <?php
      $args = array( 'post_type' => 'caterings' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID),'full' );
    ?> 
      <div class="single-box" style="background: url('<?php the_post_thumbnail_url('full'); ?>');  background-size: cover; background-position: center;">
        <div class="box-content">
          <h4><?php the_title(); ?></h4>
          <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_query();?>
    </div>
  </div>
</section>



<?php get_footer(); ?>
