<?php get_header(); ?>

<section class="">


<?php if (have_posts()) : ?>

      <div class="container py-5 ">
        <!-- container-->
        <h2 class="section-heading"><?php wp_title(''); ?></h2>
        <h5 class="section-sub-heading"></h5>
      </div><!-- container-->

    <div class="container py-5">
    <?php the_content(); ?>
    </div><!-- container-->
    <?php else : ?>
          <div class="post">
            <p>Sorry, no posts found.</p>
          </div>
    <?php endif; ?>
  </section>
    


<?php get_footer(); ?>
