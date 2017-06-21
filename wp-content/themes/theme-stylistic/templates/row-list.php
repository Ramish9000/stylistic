<!-- DYNAMIC ROWS -->
<?php

$post_types = get_post_types();

$i = 1;

foreach ( get_post_types( '', 'names' ) as $post_type ) { 

  if($i >= 11) {

    ?>

    <!-- ROW 1 -->
    <section class="homepage-section animate wow fadeIn no-fouc col-xs-12">

      <div class="row">

        <div class="section-title lines desktop-12 tablet-6 mobile-3">

          <h2><?php echo $post_type; ?></h2>

        </div>

        <!-- Carousel -->
        <div class="collection-carousel desktop-12 tablet-6 mobile-3">

          <!-- DYANMIC CLOTHES PULL -->
          <?php $args_child_clothes = array( 'post_type'=> "$post_type", 'order'    => 'DESC' );   

          $query_child_clothes = new WP_Query( $args_child_clothes );

          if($query_child_clothes->have_posts() ) { 

            while ( $query_child_clothes->have_posts() ) { 

              $query_child_clothes->the_post(); 

              ?>

              <!-- Img 1 -->
              <div class="lazyOwl" data-alpha="Urban Vintage" data-price="6500" id="">

                <div class="product-index-inner"></div>

                <div class="prod-image">

                  <a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>">

                    
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="home_clothing_img">

                  </a>

                  <a class="fancybox.ajax product-modal" href="<?php echo the_permalink(); ?>">QUICK VIEW</a>

                </div>

                <div class="product-info">

                  <div class="product-info-inner">

                    <a href="<?php echo the_permalink(); ?>">

                      <h3><?php echo the_title(); ?></h3>

                    </a>

                    <div class="price">

                      <div class="prod-price">

                        <span class="money">£<?php echo get_field('price'); ?> GBP</span>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <?php };

            }; wp_reset_postdata(); ?>

          </div>

        </div>

      </section>

      <?php };

      $i++;

    }

    ?>