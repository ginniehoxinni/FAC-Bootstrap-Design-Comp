
<?php get_header();?>

<!--Section-->
<section class="">
<?php if (have_posts()) : ?>
      <div class="container py-5 ">
        <!-- container-->
        <h2 class="section-heading"><?php wp_title(''); ?> - page</h2>
        <h5 class="section-sub-heading"></h5>
      </div><!-- container-->
	  
  <div class="line_up container py-5">
	<?php the_content(''); ?> 
 
	 <?php 
$args = array(

    'post_type' => 'post',

);
// the query
$the_query = new WP_Query( $args ); ?>
 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
 <div class="row"><!--row-->
 <?php 
 if ( has_post_thumbnail() ) : 
                    // check if the post has a Post Thumbnail assigned to it.
                    ?>
 <div class="col-md-4 col-sm-6">
		
      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid', 'alt'=>""));?>
  
           
        </a>

        </div><!--col-->
		<div class="col-md-8 col-sm-6">
		<h6 ><?php the_title(); ?></h6>
		<p><?php the_excerpt(); ?></p>
 </div>
		<?php endif; ?>
	</div><!--row end-->
<?php endwhile; ?>



    </div><!-- container-->
	<?php else : ?>
          <div class="post">
            <p>Sorry, no posts found.</p>
          </div>
	<?php endif; ?>
  </section>
  <!--section End-->

  
<?php get_footer();?>