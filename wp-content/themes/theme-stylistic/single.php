<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme-Stylistic
 */

get_header(); ?>

<body class="gridlock SINGLE">

	<div class="page-wrap" style="min-height: unset;">

		<!-- TOP MENU -->
		<?php require_once('page-header.php') ?>

		<!-- *************************** -->
		<!-- 		SINGLE BRAND 		 -->
		<!-- *************************** -->

		<?php

		$args_related_brand = array(

			'post_type' => get_the_title()

			);              

		$query_related_brand_items = new WP_Query( $args_related_brand );

		if($query_related_brand_items->have_posts() ) { 

			?>

			<div class="row">

				<div class="desktop-12 tablet-6 mobile-3" id="breadcrumb">

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

					<div id="product-loop">

						<!-- SINGLE BRAND (Below code displays all child clothes of that brand) -->
						<?php while ( $query_related_brand_items->have_posts() ) {

							$query_related_brand_items->the_post(); 

							?>

							<div class="product-index desktop-4 tablet-half mobile-half" data-alpha="<?php echo the_title(); ?>" data-price="6500" id="">

								<div class="product-index-inner"></div>

								<div class="prod-image single-prod-image">

									<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>">

										<?php echo the_post_thumbnail(); ?>

									</a> 

									<a class="fancybox.ajax product-modal" href="<?php echo the_permalink(); ?>">QUICK VIEW</a>

								</div> <!-- END prod-image -->

								<div class="product-info">

									<div class="product-info-inner">

										<a href="">

											<h3><?php echo the_title(); ?></h3>

										</a>

										<div class="price">

											<div class="prod-price">

												<span class="money">£<?php echo the_field('price'); ?> GBP</span>

											</div>

										</div> <!-- END price -->

									</div> <!-- END product-info-inner -->

								</div> <!-- END product-info -->

							</div> <!-- END product-index -->

							<?php }

						} ?>

					</div> <!-- END Product Loop -->

				</div>

			</div> 
			

			<!-- *************************** -->
			<!-- 				SINGLE CLOTHING      -->
			<!-- *************************** -->

			<?php 

			if(!($query_related_brand_items->have_posts() )) { 

			if (have_posts()) { 

				while (have_posts()) { 

					the_post(); ?>

					<div class="row">

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

									<!-- GALLERY -->
									<?php $images = get_field('gallery');

									if( $images ): ?>

									<?php foreach( $images as $image ): ?>

										<li>

											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

										</li>

									<?php endforeach; ?>

								<?php endif; ?>

							</ul>

						</div>
						<!-- For Desktop -->
						<div class="desktop-7 tablet-3 mobile-3" id="product-photos">

							<div class="bigimage desktop-10 tablet-5">

								<?php $big_images = get_field('gallery');

								$BI_i = 1;

								if( $big_images ){ 

									foreach( $big_images as $big_image ){ 

										if ($BI_i === 1) { ?>

										<!-- BIG IMAGE-->
										<!-- <img data-image-id="" data-zoom-image="" src="<?php echo $big_image['url']; ?>" > -->
										<img alt='' data-image-id="" data-zoom-image="<?php echo $big_image['url']; ?>" id="9654330049" src="<?php echo $big_image['url']; ?>" title="Chinese Whispers">

										<?php $BI_i++; } }; ?>

										<?php }; ?>

									</div>

									<div class="desktop-2 tablet-1" id="9654330049-gallery">

										<div class="thumbnail-slider">

											<!-- SLIDE COLUMN -->
											<?php $slides = get_field('gallery');

											if( $slides ){ 

												foreach( $slides as $slide ){ ?>

												<div class="slide">

													<a data-image="<?php echo $slide['url']; ?>" data-zoom-image="<?php echo $slide['url']; ?>" href="#">

														<img alt="Chinese Whispers" class="thumbnail" src="<?php echo $slide['url']; ?>">

													</a>

												</div>

												<?php }; ?>

												<?php }; ?>

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

									<h1 itemprop="name"><?php echo the_title(); ?></h1>

									<div itemprop="offers" itemscope itemtype="">

										<p id="product-price">

											<span class="product-price" itemprop="price">

												<span class="money">£<?php echo get_field('price'); ?></span>

											</span>

										</p>

										<meta content="GBP" itemprop="priceCurrency">

										<link href="" itemprop="availability">

										<form action="" method="post">

											<div class="swatch clearfix" data-option-index="0">

												<h5>Size</h5>

												<!-- SIZE -->
												<?php $small = get_field('size_small'); 

												if($small){ ?>

												<div class="swatch-element x-small available" data-value="Small">

													<input checked id="swatch-0-small" name="option-0" type="radio" value="Small"> 

													<label for="swatch-0-small">

														Small

													</label>

												</div>

												<?php } ?>

												<!-- MEDIUM -->
												<?php $medium = get_field('size_medium'); 

												if($medium){ ?>

												<div class="swatch-element x-medium available" data-value="medium">

													<input checked id="swatch-0-medium" name="option-0" type="radio" value="medium"> 

													<label for="swatch-0-medium">

														Medium

													</label>

												</div>

												<?php } ?>

												<!-- LARGE -->
												<?php $large = get_field('size_large'); 

												if($large){ ?>

												<div class="swatch-element x-large available" data-value="large">

													<input checked id="swatch-0-large" name="option-0" type="radio" value="large"> 

													<label for="swatch-0-large">

														Large

													</label>

												</div>

												<?php } ?>

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

			}; 

			?>

		</div>

		<?php get_footer(); ?>

	</body>
	</html>
