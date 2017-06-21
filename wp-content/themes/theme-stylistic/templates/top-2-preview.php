<section class="homepage-section animate wow fadeIn no-fouc">

  <div class="row">

    <!-- DYNAMIC PROMOS -->
    <?php

    $related = get_posts( array( 

      'post_type' => 'brands',
      'category_name' => 'promo', 
      'numberposts' => 2

      ) );

    if( $related ) foreach( $related as $post ) {

      setup_postdata($post); ?>

      <div class="homepage-promo col-md-6 col-xs-12 NP">

        <div class="promo-inner">

          <a href="<?php echo the_permalink(); ?>">

            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="Promo_Img" >
            
            <div class="caption">

              <h3><?php echo the_title(); ?></h3>

              <p><?php echo get_field('subtitle_promo'); ?></p>

            </div>

          </a>

        </div>

      </div>

    </tr>

    <?php } wp_reset_postdata(); ?>

  </div>
  
</section>