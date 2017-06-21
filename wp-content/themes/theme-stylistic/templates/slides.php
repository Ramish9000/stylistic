<section id="Section_Slides" class="homepage-section animate wow fadeIn">

  <div class="flexslider">

    <ul class="slides">

    <!-- DYNAMIC SLIDES -->
    <?php 

    $args_brands = array( 'post_type'=> 'brands', 'order'    => 'ASC' );              
    $query_brands = new WP_Query( $args_brands );

    if($query_brands->have_posts() ) { 

      while ( $query_brands->have_posts() ) { 

        $query_brands->the_post(); 

        ?>

        <li class="slider_list" style="background-image: url('<?php echo get_field('slider_image'); ?>')">

          <div class="flex-caption slide1">

            <h2 class="slide-title"><?php echo the_title(); ?></h2>

            <p class="caption"><?php echo get_field('subtitle'); ?></p>

            <div class="cta">

              <a href="<?php echo the_permalink(); ?>">SHOP <?php echo the_title(); ?></a>

            </div>

          </div>

        </li>
         
        <?php };

      }; wp_reset_postdata(); ?>

    </ul>

  </div>

  <div class="clear"></div>

</section>