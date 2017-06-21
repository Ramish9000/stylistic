<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme-Stylistic
 */

get_header(); ?>


<body class="gridlock">

	<!-- MENU -->
	<?php require_once('templates/menu.php') ?>

	<div class="page-wrap">

		<!-- TOP MENU -->
		<?php require_once('page-header.php') ?>

		<!-- *************************** -->
		<!-- 				SINGLE BRAND      	 -->
		<!-- *************************** -->

		<?php

		$args_related_brand = array(

			'post_type' => get_the_title()

			);              

		$query_related_brand_items = new WP_Query( $args_related_brand );
		if($query_related_brand_items->have_posts() ) { ?>

		<div class="row" id="content">

			<div class="desktop-12 mobile-3 tablet-6" id="breadcrumb">

				<a class="homepage-link" href="home" title="Home">Home</a>

				<span class="separator">/</span>

				<span class="page-title"><?php echo the_title(); ?> | Pakistani Dresses | Latest Fashion</span>

			</div>

			<div class="clear"></div>

			<div class="desktop-12 tablet-6 mobile-3" id="collection-description">

				<h1><?php the_title(); ?></h1>

				<div class="rte"></div>

			</div>

			<div class="clear"></div>

			<div class="desktop-12 tablet-6 mobile-3">

				<div class="desktop-12 tablet-6 mobile-3" id="full-width-filter" style="visibility: hidden;">

					<ul id="sortme">

						<li class="filter">

							<p>Sort by</p>

							<select class="styled-select" id="sort-by">

								<option value="manual">
									Featured
								</option>

								<option value="price-ascending">
									Price, low to high
								</option>

								<option value="price-descending">
									Price, high to low
								</option>

								<option value="title-ascending">
									Alphabetically, A-Z
								</option>

								<option value="title-descending">
									Alphabetically, Z-A
								</option>

								<option value="created-ascending">
									Date, old to new
								</option>

								<option value="created-descending">
									Date, new to old
								</option>

								<option value="best-selling">
									Best Selling
								</option>

							</select>

						</li>

					</ul>

				</div>

				<div id="product-loop">

					<!-- SINGLE BRAND (Below code displays all child clothes of that brand) -->
					<?php while ( $query_related_brand_items->have_posts() ) {

						$query_related_brand_items->the_post(); 

						?>

						<div class="product-index col-md-4 col-sm-6 col-xs-6" data-alpha="<?php echo the_title(); ?>" data-price="6500" id="">

							<div class="product-index-inner"></div>

							<div class="prod-image single-prod-image">

								<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>">

									<?php echo the_post_thumbnail(); ?>

								</a> 

								<a class="fancybox.ajax product-modal" href="">QUICK VIEW</a>

							</div>

							<div class="product-info">

								<div class="product-info-inner">

									<a href="">

										<h3><?php echo the_title(); ?></h3>

									</a>

									<div class="price">

										<div class="prod-price">

											<span class="money">£<?php echo the_field('price'); ?> GBP</span>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div> 

			<?php }

		} ?>

		<!-- *************************** -->
		<!-- 				SINGLE CLOTHING      -->
		<!-- *************************** -->

		<?php 

		if (have_posts()) { 

			while (have_posts()) { 

				the_post(); ?>

				<div class="row" id="content">

					<div class="desktop-12 mobile-3 tablet-6" id="breadcrumb">

						<a class="homepage-link" href="home" title="Home">Home</a>

						<span class="separator">/</span>

						<span class="page-title">Pakistani Dresses | Latest Fashion | <?php echo the_title(); ?></span>

					</div>

					<div class="clear"></div>

					<div class="desktop-12 tablet-6 mobile-3" id="collection-description">

						<h1><?php the_title(); ?></h1>

						<div class="rte"></div>

					</div>

					<div class="mlvedaform">

							<!-- For Mobile -->
							<div class="desktop-12 tablet-6 mobile-3" id="mobile-product">

								<ul class="bxslider">

									<li><img alt="" data-image-id="" src="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_2_1024x1024.jpg?v=1496781038">
									</li>


									<li><img alt="Chinese Whispers" data-image-id="22472423425" src="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_2_1024x1024.jpg?v=1496781038">
									</li>


									<li><img alt="Chinese Whispers" data-image-id="22472420673" src="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_1_1024x1024.jpg?v=1496781038">
									</li>


									<li><img alt="Chinese Whispers" data-image-id="22472424321" src="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_3_1024x1024.jpg?v=1496781038">
									</li>


									<li><img alt="Chinese Whispers" data-image-id="22472425025" src="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_4_1024x1024.jpg?v=1496781038">
									</li>
								</ul>

							</div>
							<!-- For Desktop -->
							<div class="desktop-7 tablet-3 mobile-3" id="product-photos">

								<div class="bigimage desktop-10 tablet-5">

									<img alt='' data-image-id="" data-zoom-image="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_2.jpg?v=1496781038" id="9654330049" src="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_2_1024x1024.jpg?v=1496781038" title="Chinese Whispers">

								</div>

								<div class="desktop-2 tablet-1" id="9654330049-gallery">

									<div class="thumbnail-slider">

										<div class="slide">
											<a data-image="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_2_1024x1024.jpg?v=1496781038" data-image-id="22472423425" data-zoom-image="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_2.jpg?v=1496781038" href="#"><img alt="Chinese Whispers" class="thumbnail" data-image-id="22472423425" src="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_2_compact.jpg?v=1496781038"></a>
										</div>


										<div class="slide">
											<a data-image="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_1_1024x1024.jpg?v=1496781038" data-image-id="22472420673" data-zoom-image="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_1.jpg?v=1496781038" href="#"><img alt="Chinese Whispers" class="thumbnail" data-image-id="22472420673" src="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_1_compact.jpg?v=1496781038"></a>
										</div>


										<div class="slide">
											<a data-image="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_3_1024x1024.jpg?v=1496781038" data-image-id="22472424321" data-zoom-image="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_3.jpg?v=1496781038" href="#"><img alt="Chinese Whispers" class="thumbnail" data-image-id="22472424321" src="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_3_compact.jpg?v=1496781038"></a>
										</div>


										<div class="slide">
											<a data-image="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_4_1024x1024.jpg?v=1496781038" data-image-id="22472425025" data-zoom-image="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_4.jpg?v=1496781038" href="#"><img alt="Chinese Whispers" class="thumbnail" data-image-id="22472425025" src="//cdn.shopify.com/s/files/1/0239/3483/products/Chinese_Whispers_4_compact.jpg?v=1496781038"></a>
										</div>

									</div>

								</div>

							</div>

							<script type="text/javascript">

								$(document).ready(function () {

									$('.bxslider').bxSlider({
										pagerCustom: '#bx-pager'
									});

									$('.thumbnail-slider').bxSlider({
										mode: 'vertical',
										minSlides: 3,
										slideMargin: 10,
										infiniteLoop: false,
										pager: false,
										prevText: "",
										nextText: "",
										hideControlOnEnd: true
									});    

								 //initiate the plugin and pass the id of the div containing gallery images
								 $("#9654330049").elevateZoom({
								 	gallery:'9654330049-gallery',
								 	cursor: 'pointer', 
								 	galleryActiveClass: 'active', 
								 	borderColour: '#eee', 
								 	borderSize: '1' 
								 }); 

								 //pass the images to Fancybox
								 $("#9654330049").bind("click", function(e) {  
								 	var ez =   $('#9654330049').data('elevateZoom');    
								 	$.fancybox(ez.getGalleryList());
								 	return false;
								 });   

								}); 

							</script>

							<div class="desktop-5 tablet-3 mobile-3" id="product-right">

								<div id="product-description">

									<h1 itemprop="name">Chinese Whispers</h1>

									<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

										<p id="product-price">

											<span class="product-price" itemprop="price">

												<span class="money">£65.00 GBP</span>

											</span>

										</p>

										<meta content="GBP" itemprop="priceCurrency">

										<link href="http://schema.org/InStock" itemprop="availability">

										<form action="" method="post">

											<div class="select">

												<label>Size</label> 

												<select name='id'>

													<option data-sku="" selected="selected" value="">

														X-Small - £65.00 GBP

													</option>

												</select>

											</div>

											<div class="swatch clearfix" data-option-index="0">

												<h5>Size</h5>

												<div class="swatch-element x-small available" data-value="X-Small">

													<input checked id="swatch-0-x-small" name="option-0" type="radio" value="X-Small"> 

													<label for="swatch-0-x-small">

														X-Small 

														<img class="crossed-out" src="//cdn.shopify.com/s/files/1/0239/3483/t/89/assets/soldout.png?14449426372603660737">

													</label>

												</div>

												<div class="swatch-element small available" data-value="Small">

													<input id="swatch-0-small" name="option-0" type="radio" value="Small"> 

													<label for="swatch-0-small">

														Small 

														<img class="crossed-out" src="//cdn.shopify.com/s/files/1/0239/3483/t/89/assets/soldout.png?14449426372603660737">

													</label>

												</div>

												<div class="swatch-element medium available" data-value="Medium">

													<input id="swatch-0-medium" name="option-0" type="radio" value="Medium"> 

													<label for="swatch-0-medium">

														Medium 

														<img class="crossed-out" src="//cdn.shopify.com/s/files/1/0239/3483/t/89/assets/soldout.png?14449426372603660737">

													</label>

												</div>

												<div class="swatch-element large available" data-value="Large">

													<input id="swatch-0-large" name="option-0" type="radio" value="Large"> 

													<label for="swatch-0-large">

														Large 

														<img class="crossed-out" src="//cdn.shopify.com/s/files/1/0239/3483/t/89/assets/soldout.png?14449426372603660737">

													</label>

												</div>

												<div class="swatch-element x-large available" data-value="X-Large">

													<input id="swatch-0-x-large" name="option-0" type="radio" value="X-Large">

													<label for="swatch-0-x-large">

														X-Large 

														<img class="crossed-out" src="//cdn.shopify.com/s/files/1/0239/3483/t/89/assets/soldout.png?14449426372603660737">

													</label>

												</div>

											</div>

											<div class="product-add">

												<h5>Quantity</h5>

												<a class="down">

													<i class="icon-minus"></i>

												</a> 

												<input class="quantity" min="1" name="quantity" type="text" value="1"> <a class="up">

												<i class="icon-plus">

												</i>

											</a> 

											<input class="add" name="button" type="submit" value="Add to Cart">

										</div>

									</form>

								</div>

							</div>

						</div>

				</div>

			</div>

			<?php };

			}; 

			?>

		</div>

		<?php get_footer(); ?>

	</body>
	</html>
