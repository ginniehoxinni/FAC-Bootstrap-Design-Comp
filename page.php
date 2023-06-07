
<?php get_header();?>

<!--Section-->
<section class="">
<?php if (have_posts()) : ?>
      <div class="container py-5 ">
        <!-- container-->
        <h2 class="section-heading"><?php wp_title(''); ?></h2>
        <h5 class="section-sub-heading"></h5>
      </div><!-- container-->
	  
  <div class="line_up container py-5">

 
	 <?php 
$args = array(
  'post_type' => 'page',
  'post_status' => 'publish',

);
// the query
$the_query = new WP_Query( $args ); ?>

	<?php the_content(''); ?> 
    </div><!-- container-->
	<?php else : ?>
          <div class="post">
            <p>Sorry, no posts found.</p>
          </div>
	<?php endif; ?>
  </section>
  <!--section End-->

  
<?php get_footer();?>