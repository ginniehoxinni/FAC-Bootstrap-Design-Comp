<?php
    /*
    Template Name: Experience Template
    */
    ?>
<?php get_header();?>

<!--Section-->
<section >
<?php if (have_posts()) : ?>
      <div class="container-fluid py-5 px-0">
        <!-- container-->
        <?php
        //get parent title
         $parent_title = get_the_title($post->post_parent);
         $current_title = get_the_title();
         $current_page_id = get_the_ID();
         $get_parent_title = $post->post_parent ? $parent_title : $current_title;
         $get_subtitle = !$post->post_parent ? '': '<p>' . $current_title . '</p>';
         $get_content =  get_the_content()
        //  echo $parent_title
?>
<div class="container">
        <h2 class="section-heading"><?php echo $get_parent_title; ?></h2>
        <h5 class="section-sub-heading"><?php echo $get_subtitle ?></h5>
</div>
<!--Subtitle-->

<div class="container-fluid ">
<div class="section-subtitle container py-5">

<?php 
$args = array(

    'post_type' => 'page',
    'post_status' => 'publish',
    'category_name' =>  'experience',
	   'order' => 'ASC',
    // 'orderby' => 'title',
    'orderby' => 'menu_order',
);
// the query
$the_query = new WP_Query( $args ); ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post() ;?>
  <a class="subtitle-link <?php echo $current_page_id == get_the_ID() ? 'active' : '' ?>" href="<?php the_permalink(); ?>">

  <?php the_title(); ?></a>
<?php endwhile; ?>
</div>
</div>

<!--Subtitle-->

</div><!-- container-->
  <div class="experience container py-3">
	<?php echo $get_content ?>

    </div><!-- container-->
	<?php else : ?>
          <div >
            <p>...</p>
          </div>
	<?php endif; ?>
  </section>
  <!--section End-->

  
<?php get_footer();?>