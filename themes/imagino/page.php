<?php get_header(); ?>

<section class="impressum-page container-fluid">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <div class="row">
      <div class="col-md-12">
        <img class="about-img" src="<?php the_post_thumbnail_url('full'); ?>">
      </div>

      <div class="col-md-12 about-text">
        <?php the_content(); ?>         
      </div>
    </div>
    <?php endwhile; else: ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
