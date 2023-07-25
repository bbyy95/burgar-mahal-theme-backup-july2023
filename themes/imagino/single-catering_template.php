<?php get_header(); ?>

<div class="single-post-container padding60">
	<div class="container">
		<div class="row wow fadeInRight">
			<div class="col-md-12 mb-xs-24 blog-content-post">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						
						<?php $thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
						$news_date=get_the_date('M d  Y'); ?>
						<div class="image-section">
							<img src="<?php echo $thumb_url[0];?>" alt="<?php echo $title;?>">
						</div>
						<h3 class="titles padding-top20"><?php the_title(); ?></h3>
						<ul class="post-meta padding-top20">
							<li>	
								<span><i class="fa fa-user" aria-hidden="true"></i> By <?php
								the_author_meta( 'display_name'); ?>&nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $news_date;?></span>
							</li>
						</ul>
						<div class="entry padding20">
							<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
						</div>
					</div>
					
				<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>	

			
		</div><!--/post-content-->
	</div>
</div>
</div>

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