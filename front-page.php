
<?php get_header();?>

<<<<<<< HEAD
=======
  <!--Tip
  <section class="container">
    <div class="tip">
      <a href="<?php the_field('link_for_tip_visiting'); ?>"><span class="font-Unbounded"><?php the_field('title_for_tip_visiting'); ?><i class="fa fa-arrow-right"></i></span></a>
    </div>
  </section>
 Tip End-->
>>>>>>> parent of 284124b (main)

  <!--hero-->
  <section class="container-fluid hero hero-bg text-center" style="background-image: url('<?php the_field('hero_image'); ?>')">
    <div class="tagline">
      <h1 class="text-white text-shadow"><?php the_field('hero_tagline'); ?></h1>
      <a class="tip-button btn btn-lg btn-outline-light mt-2" href="<?php the_field('link_for_tip_visiting'); ?>"><span class="font-Unbounded"><?php the_field('title_for_tip_visiting'); ?> <i class="fa fa-arrow-right"></i></span></a>
    </div>
  </section>
  <!--hero End-->

  <!--event info-->
  <section class="my-5">
    <div class="container">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('event-info') ) : 
endif; ?>
    </div>
  </section>
  <!--event info end-->

  <!--Up Coming Events -->
  <section class="up_coming_events my-5">
    <div class="borderTopBottom ">
      <div class="container py-3 ">
        <!-- container-->
        <h2 class="section-title">UP COMING EVENTS</h2>
      </div><!-- container-->
    </div>
    <?php if (get_field('up_coming_event_title_1')) : ?>
    <div class="container-fluid bg-pink">
      <!-- container-fluid-->
      <div class="row">
        <!--row-->
        <div class="col-md-5 p-0 "><img class="img-fluid img-left" src="<?php the_field('up_coming_event_image_1'); ?>" alt="<?php the_field('up_coming_event_title_1'); ?>"></div>
        <div class="col-md-7 d-flex">
          <div class="wrap align-self-md-center">
            <!--wrap-->
            <p class="title"><?php the_field('up_coming_event_title_1'); ?></p>
            <p class=""><?php the_field('up_coming_event_location_1'); ?></p>
            <p class=""><?php the_field('up_coming_event_datetime_1'); ?></p>
            <a href="<?php the_field('up_coming_event_buy_link_1'); ?>" class="btn btn-buy btn-outline-light">BUY TICKET</a>
          </div>
        </div>
        <!--wrap-->
      </div>
      <!--row-->
    </div>
    <!--container-fluid-->
    <?php endif;?>

    <?php if (get_field('up_coming_event_title_2')) : ?>
    <div class="container-fluid bg-green">
      <!-- container-fluid-->
      <div class="row">
        <!--row-->
        <div class="col-md-7 d-flex">
          <div class="wrap align-self-md-center">
            <!--wrap-->
            <p class="title"><?php the_field('up_coming_event_title_2'); ?></p>
            <p class=""><?php the_field('up_coming_event_location_2'); ?></p>
            <p class=""><?php the_field('up_coming_event_datetime_2'); ?></p>
            <a href="<?php the_field('up_coming_event_buy_link_2'); ?>" class="btn btn-buy btn-outline-light">BUY TICKET</a>
          </div>
          <!--wrap-->
        </div>
        <div class="col-md-5 p-0"><img class="img-fluid img-right" src="<?php the_field('up_coming_event_image_2'); ?>" alt="<?php the_field('up_coming_event_title_2'); ?>"></div>
      </div>
      <!--row-->
    </div>
    <!--container-fluid-->
    <?php endif;?>

    <?php if (get_field('up_coming_event_title_3')) : ?>
    <div class="container-fluid bg-purple">
      <!-- container-fluid-->
      <div class="row">
        <!--row-->
        <div class="col-md-5 p-0"><img class="img-fluid img-left" src="<?php the_field('up_coming_event_image_3'); ?>" alt="<?php the_field('up_coming_event_title_3'); ?>"></div>
        <div class="col-md-7 d-flex">
          <div class="wrap align-self-md-center">
            <!--wrap-->
            <p class="title"><?php the_field('up_coming_event_title_3'); ?></p>
            <p class=""><?php the_field('up_coming_event_location_3'); ?></p>
            <p class=""><?php the_field('up_coming_event_datetime_3'); ?></p>
            <a href="<?php the_field('up_coming_event_buy_link_3'); ?>" class="btn btn-buy btn-outline-light">BUY TICKET</a>
          </div>
        </div>
        <!--wrap-->
      </div>
      <!--row-->
    </div>
    <!--container-fluid-->
    <?php endif;?>

    <?php if (get_field('up_coming_event_title_4')) : ?>
    <div class="container-fluid bg-cyan">
      <!-- container-fluid-->

      <div class="row">
        <!--row-->

        <div class="col-md-7 d-flex">
          <div class="wrap align-self-md-center">
            <!--wrap-->
            <p class="title"><?php the_field('up_coming_event_title_4'); ?></p>
            <p class=""><?php the_field('up_coming_event_location_4'); ?></p>
            <p class=""><?php the_field('up_coming_event_datetime_4'); ?></p>
            <a href="<?php the_field('up_coming_event_buy_link_4'); ?>" class="btn btn-buy btn-outline-light">BUY TICKET</a>
          </div>
          <!--wrap-->
        </div>
        <div class="col-md-5 p-0"><img class="img-fluid img-right" src="<?php the_field('up_coming_event_image_4'); ?>" alt="<?php the_field('up_coming_event_title_4'); ?>"></div>

      </div>
      <!--row-->

    </div>
    <!--container-fluid-->
    <?php endif;?>

    <?php if (get_field('up_coming_event_title_5')) : ?>
    <div class="container-fluid bg-orange">
      <!-- container-fluid-->
      <div class="row">
        <!--row-->
        <div class="col-md-5 p-0"><img class="img-fluid img-left" src="<?php the_field('up_coming_event_image_5'); ?>" alt="<?php the_field('up_coming_event_title_5'); ?>"></div>
        <div class="col-md-7 d-flex">
          <div class="wrap align-self-md-center">
            <!--wrap-->
            <p class="title"><?php the_field('up_coming_event_title_5'); ?></p>
            <p class=""><?php the_field('up_coming_event_location_5'); ?></p>
            <p class=""><?php the_field('up_coming_event_datetime_5'); ?></p>
            <a href="<?php the_field('up_coming_event_buy_link_5'); ?>" class="btn btn-buy btn-outline-light">BUY TICKET</a>
          </div>
        </div>
        <!--wrap-->
      </div>
      <!--row-->
    </div>
    <!--container-fluid-->
    <?php endif;?>


  </section>
  <!--Up Coming Events End-->

  <!--Past Event Gallery-->
  <section class="past_events">
    <div class="borderTopBottom ">
      <div class="container py-3 ">
        <!-- container-->
        <h2 class="section-title">PAST EVENTS</h2>
      </div><!-- container-->
    </div>


    <div class="container py-5">
      <div class="row ">
      <?php 
$args = array(

    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' =>  'past-event',
    'order' => 'ASC',
    'orderBy' => 'ID'
    // 'posts_per_page' => 5,
);
// the query
$the_query = new WP_Query( $args ); ?> 
 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="col-md-4 col-sm-6 mb-3 ">
          <!--col-->
          <?php 
                  if ( has_post_thumbnail() ) : 
                    // check if the post has a Post Thumbnail assigned to it.
                    ?>
      <a href="<?php the_permalink(); ?>" title="<?php  the_title();?>">
      <?php the_post_thumbnail('medium   ', array('class' => 'img-fluid', 'alt'=> 'past event' ));?>
      </a>
      <?php endif; ?>
        </div>
        <!--col-->
        <?php endwhile; ?>
        <?php if (!$the_query->have_posts() ): ?>
          <div class="col "><p>Past event not found!</p></div>
        <?php endif; ?>
      </div>
    </div><!-- container-->
  </section>
  <!--Past Event Gallery End-->

  
<?php get_footer();?>