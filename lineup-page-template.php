<?php
    /*
    Template Name: Line Up Template
    */
    ?>
<?php get_header();?>

<!--Section-->
<section class="">
<?php if (have_posts()) : ?>
      <div class="container py-5 ">
        <!-- container-->
        <h2 class="section-heading"><?php wp_title(''); ?></h2>
        <h5 class="section-sub-heading"><p>Artist who performed  at FAC</p></h5>
      </div><!-- container-->
	  
  <div class="line_up container py-5">
	<?php the_content(''); ?> 
     <div class="row"><!--row-->
	 <?php 
$args = array(

    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' =>  'line-up',
	  'order' => 'ASC',
    // 'orderby' => 'title',
    'orderby' => 'ID',
);
// the query
$the_query = new WP_Query( $args ); ?>
 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
 <?php 
                  if ( has_post_thumbnail() ) : 
                    // check if the post has a Post Thumbnail assigned to it.
                    ?>
 <div class="col-md-4 col-sm-6">
            <div class="wrap">
   
				
      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('medium   ', array('class' => 'img-fluid', 'alt'=>""));?>
     

            <h6 class="title"><?php the_title(); ?></h6>
			
        </a>
            </div>
        </div><!--col-->
		<?php endif; ?>
<?php endwhile; ?>

        </div><!--row end-->

    </div><!-- container-->
	<?php else : ?>
          <div class="post">
            <p>Sorry, no posts found.</p>
          </div>
	<?php endif; ?>
  </section>
  <!--section End-->

  
<?php get_footer();?>