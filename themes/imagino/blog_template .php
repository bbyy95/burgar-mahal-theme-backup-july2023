<?php /* Template Name: Blog Listing */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="products-header">
  <div class="container-fluid padding30">
    <div class="container">
            <h3 class="text-center"><strong><?php the_title(); ?></strong></h3>          
    </div>
  </div>
</section>
<?php endwhile; else: ?>
<?php endif; ?> 


<section class="home-blog py5">
  <div class="container-fluid">
    <div class="container">
      <div class="row">

<div class="col-md-3">
<div class="leftsidebar">
<h2>Skin Forum</h2>
<ul>

<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );

foreach( $categories as $category ) { ?>
    <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name ?></a></li>
    <?php } ?>    
</ul>
</div>
</div>


<div class="col-md-9">
<div class="row">
        <?php
                $lastposts = get_posts( );
                $i=1;
                foreach ( $lastposts as $post ) :
                       setup_postdata( $post );
                       $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID),'full' );
                      {
                ?>

        <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="blog-box <?php the_ID(); ?>">
                  <div class="inner-content">
                    <div class="blog-img">
                      <img src="<?php echo $url ?>">
                    </div>
                    <div class="meta text-uppercase">
                      <p>By <?php the_author() ?> on <?php the_time('F S, Y') ?></p>
                            <?php 
                               $categories = get_the_terms( $post->ID, 'category' );
                               foreach( $categories as $category ) { ?>
                               <?php echo  $category->name; ?>,
                            <?php } ?>
                    </div>
                    <div class="contents">
                      <?php $string = substr(get_the_excerpt(),0,120); echo $string ?>...
                    </div>
                    <a class="button text-uppercase" href="<?php the_permalink(); ?>">Read More</a>
          </div>
          </div>
          </div>
           <?php } 
                    $i++;
                    endforeach; 
                    wp_reset_postdata();
                ?>  
    </div></div>
  </div>
  </div>
  </div>
</section>

<?php get_footer(); ?>
