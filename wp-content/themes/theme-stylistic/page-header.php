<header>

  <div class="row">

    <ul class="desktop-4 tablet-6 mobile-hide" id="social-icons">

      <li>
        <a href="" target="_blank">
          <i class="icon-facebook icon-2x"></i>
        </a>
      </li>

      <li>
        <a href="" target="_blank">
          <i class="icon-google-plus icon-2x"></i>
        </a>
      </li>

      <li>
        <a href="" target="_blank">
          <i class="icon-instagram icon-2x"></i>
        </a>
      </li>

    </ul>

    <div class="desktop-4 tablet-6 mobile-3" id="hello">

      <p>Your Style. Feel Smarter</p>

    </div>

    <ul class="desktop-4 tablet-6 mobile-3" id="cart" style="text-align: center;">

    <h1 style="margin-top: 10px;"><li><a href="home" style="font-size: 30px; color: white !important; font-weight: bold;">STYLISTIC</a></li></h1>

      <!-- <li>
        <a href="home">
          <i class="icon-home icon-2x"></i>
        </a>
      </li>

      <li class="seeks">
        <a class="open_popup" href="#search_popup" id="inline">
          <i class="icon-search icon-2x"></i>
        </a>
      </li>

      <li class="seeks-mobile">
        <a href="/search"><i class="icon-search icon-2x"></i></a>
      </li>

      <li class="cust">
        <a href="/account/login"><i class="icon-user icon-2x"></i></a>
      </li> -->

      <!-- <li>
        <select id="currencies" name="currencies">
          <option selected="selected" value="GBP">
            GBP
          </option>

          <option value="USD">
            USD
          </option>

          <option value="EUR">
            EUR
          </option>

          <option value="AED">
            AED
          </option>

          <option value="PKR">
            PKR
          </option>

          <option value="INR">
            INR
          </option>
        </select> 
        <script>
          $('#currencies').selecter(); 
        </script>
      </li>

      <li class="cart-overview">

        <a href="/cart">MY CART&nbsp; 
          <i class="icon-shopping-cart icon-2x"></i>
          &nbsp; 
          <span id="item_count">0</span>
        </a>

        <div id="crt">
          <p class="empty-cart">Your cart is currently empty.</p>
        </div>

      </li> -->

    </ul>

  </div>

</header>

<!-- SECTION LOGO -->
<div id="Logo_Row" class="row">

  <div id="logo" class="desktop-12 tablet-6 mobile-3">

    <a href="/">

      <img alt="" src="<?php echo get_template_directory_uri(); ?>/imgs/logo.jpg" style="border: 0;">
      
    </a>

  </div>
  
</div>


<!-- MAIN MENU -->
<div class="clear"></div>

<nav>

  <ul class="row" id="main-nav" role="navigation" style="margin-bottom: 0;">

    <li>
    <a href="home" title="">HOME</a>
    </li>

    <?php 

    $args_brands = array( 'post_type'=> 'brands', 'order'    => 'ASC' );              
    $query_brands = new WP_Query( $args_brands );

    if($query_brands->have_posts() ) { 

      while ( $query_brands->have_posts() ) { 

        $query_brands->the_post(); 

        ?>

        <li><span><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></span></li>

        <?php };

      }; wp_reset_postdata(); ?>

    </ul>

  </nav>

  <div class="clear"></div>