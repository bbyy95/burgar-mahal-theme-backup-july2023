<?php get_header(); ?>


<div class="container-fluid padding100 single service-single">
<div class="container">
<div class="row">
<div class="col-md-12">

<?php query_posts('post_type=our_services&order=DESC'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID),'full' );
?>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 service-post-single">
                        <div class="<?php the_ID(); ?> blog1-main">
                        <div class="inner-content">
                        <div class="blog-img" style="background-image: url('<?php echo $url ?>'); height: 300px; width: 100%; background-size: cover;background-position: center;">
                        </div>
                        <h2 class="padding-bottom10"><strong><?php the_title(); ?></strong></h2>
                        <div class="comments">
                        	<p class="content-excerpt"><?php $string = substr(get_the_excerpt(),0,120); echo $string ?></p>
                        	<span class="violet"><a href="<?php the_permalink(); ?>">Read More</a></span>
                        </div>
                        </div>
                    </div>
                </div> 
<?php endwhile; ?>
<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php	endif; ?>
<?php wp_reset_query();?>

</div>
</div>
</div>
</div>


<?php get_footer(); ?>