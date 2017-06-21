<!-- 1 -->
<script type="text/javascript">
   //initiating jQuery
   jQuery(function($) {
   	if ($(window).width() >= 741) {

   		$(document).ready( function() {
         //enabling stickUp on the '.navbar-wrapper' class
         $('nav').stickUp();
     });
   	}

   });
</script>

<!-- 2 -->
<script id="cartTemplate" type="text/x-handlebars-template">

	{{#each items}}
	<div class="quick-cart-item">
		<div class="quick-cart-image">
			<a href="{{ this.url }}" title="{{ this.title }}">
				<img src="{{ this.image }}"  alt="{{ this.title }}" />
			</a>
		</div>
		<div class="quick-cart-details">
			<p>
				<a href="{{ this.url }}">{{ this.title }}</a>
			</p>
			<p>{{ this.price }}</p>          
			<p>
				<a class="remove_item" href="#" data-id="{{ this.id }}">Remove</a>
			</p>
		</div>
	</div>
	{{/each}}  
	<a class="checkout-link" href="/cart">Checkout</a>

</script>

<!-- 3 -->
<a class="scrollup" href="#">

	<i class="icon-angle-up icon-2x"></i>

</a>


<!-- 4 --><!-- Begin Recently Viewed Products -->
<script charset="utf-8" type="text/javascript">

   // Including jQuery conditionnally.
   if (typeof jQuery === 'undefined') {
   	document.write("\u003cscript src=\"\/\/ajax.googleapis.com\/ajax\/libs\/jquery\/1\/jquery.min.js\" type=\"text\/javascript\"\u003e\u003c\/script\u003e");
   	document.write('<script type="text/javascript">jQuery.noConflict();<\/script>');
   }

   // Including api.jquery.js conditionnally.
   if (typeof Shopify.resizeImage === 'undefined') {
   	document.write("\u003cscript src=\"\/\/cdn.shopify.com\/s\/assets\/themes_support\/api.jquery-e8cd60e806a5b540b6fcc57e49cddbddd442d295fd66603296eac737dd34de6b.js\" type=\"text\/javascript\"\u003e\u003c\/script\u003e");
   }

</script> 

<!-- 5 -->
<script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js" type="text/javascript"></script>

<!-- 6 -->
<script src="//cdn.shopify.com/s/files/1/0239/3483/t/89/assets/jquery.products.min.js?5918630462825352703" type="text/javascript"></script>


<!-- 7 -->
<div id="fb-root"></div>


<!-- 8 -->
<script>

	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=127142210767229";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

</script>


<!-- 9 -->
<script type="text/javascript">

	var _learnq = _learnq || [];

	_learnq.push(['account', 'cJZJE3']);

	(function () {
		var b = document.createElement('script'); b.type = 'text/javascript'; b.async = true;
		b.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'a.klaviyo.com/media/js/analytics/analytics.js';
		var a = document.getElementsByTagName('script')[0]; a.parentNode.insertBefore(b, a);
	})();

</script>


<meta content="website" property="og:type">
<meta content="Pakistani Designer Dresses | Pakistani Designer Clothing UK | Latest" property="og:title">
<meta content="" property="og:url">
<meta content="Shop for the latest Pakistani designer wear, fully stitched and ready to wear. Stockists off all major Pakistani designer brands. Casual, Pret and formals." property="og:description">
<meta content="" property="og:site_name">
<meta content="summary" name="twitter:card">
<meta content="@" name="twitter:site">
<meta content="Pakistani Designer Dresses | Pakistani Designer Clothing UK | Latest" name="twitter:title">
<meta content="Shop for the latest Pakistani designer wear, fully stitched and ready to wear. Stockists off all major Pakistani designer brands. Casual, Pret and formals." name="twitter:description">
<script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script> 
<script src="//cdn.shopify.com/s/files/1/0239/3483/t/89/assets/jquery.currencies.min.js?5918630462825352703" type="text/javascript"></script> 

<script>

	Currency.format = 'money_with_currency_format';


	var shopCurrency = 'GBP';

	/* Sometimes merchants change their shop currency, let's tell our JavaScript file */
	Currency.moneyFormats[shopCurrency].money_with_currency_format = "£{{amount}} GBP";
	Currency.moneyFormats[shopCurrency].money_format = "£{{amount}} GBP";

	/* Default currency */
	var defaultCurrency = 'GBP' || shopCurrency;

	/* Cookie currency */
	var cookieCurrency = Currency.cookie.read();

	/* Fix for customer account pages */
	jQuery('span.money span.money').each(function() {
		jQuery(this).parents('span.money').removeClass('money');
	});

	/* Saving the current price */
	jQuery('span.money').each(function() {
		jQuery(this).attr('data-currency-GBP', jQuery(this).html());
	});

  // If there's no cookie.
  if (cookieCurrency == null) {
  	if (shopCurrency !== defaultCurrency) {
  		Currency.convertAll(shopCurrency, defaultCurrency);
  	}
  	else {
  		Currency.currentCurrency = defaultCurrency;
  	}
  }
  // If the cookie value does not correspond to any value in the currency dropdown.
  else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
  	Currency.currentCurrency = shopCurrency;
  	Currency.cookie.write(shopCurrency);
  }
  else if (cookieCurrency === shopCurrency) {
  	Currency.currentCurrency = shopCurrency;
  }
  else {
  	Currency.convertAll(shopCurrency, cookieCurrency);
  }

  jQuery('[name=currencies]').val(Currency.currentCurrency).change(function() {
  	var newCurrency = jQuery(this).val();
  	Currency.convertAll(Currency.currentCurrency, newCurrency);
  	jQuery('.selected-currency').text(Currency.currentCurrency);
  });

  var original_selectCallback = window.selectCallback;
  var selectCallback = function(variant, selector) {
  	original_selectCallback(variant, selector);
  	Currency.convertAll(shopCurrency, jQuery('[name=currencies]').val());
  	jQuery('.selected-currency').text(Currency.currentCurrency);
  };

  jQuery('.selected-currency').text(Currency.currentCurrency);

</script> 

<script src="//cdn.shopify.com/s/assets/themes_support/option_selection-cb8aea44caa07f0ce05fbf382b85b1013c27755487fe91cdeabb6b02d8ef1af1.js" type="text/javascript"></script>

<script>

	var mlvedaCallUrl = "//www.mlveda.com/ShopifyApps/ShopifyMultiPricing/getPrices?shop=haniyas.myshopify.com"

	var data = [];
	var mlvedaData = {};

	$("a[href*='products']").each(function() {

		var $handleArray = $(this).attr('href').split("/");
		var $handle = $handleArray[$handleArray.length - 1].split("\?")[0];
		data.push({"url": $(this).attr('href').split("\?")[0]});

	});

	mlvedaData = {"data": data};

	function checkShopifyFormatMoney() {

		var abcd = $.ajax({
			url: mlvedaCallUrl,
			type: "POST",
			dataType: "json",
			timeout: 10000,
			data: {data: JSON.stringify(mlvedaData)},
			success: function(response) {
				if (response === "") {
					$("<style type=\"text/css\">span.money { display: inline; }<\/style>").appendTo("head");
				}
				else {
					$.each(response.data, function(index, element) {
						$("a[href*='" + element.url + "']").each(function() {
							if (element.variantId)
							{
								$(this).attr("href", element.url + "?variant=" + element.variantId);
							}
							$mlvedamoney = $(this).parent().find(".money");
							if (!($mlvedamoney.html()))
							{
								$mlvedamoney = $(this).parent().parent().find(".money");
								if (!($mlvedamoney.html()))
								{
									$mlvedamoney = $(this).parent().parent().parent().find(".money");                                
								}

							}
							if (element.price && $mlvedamoney.html())
							{
								var $firstMlvedamoney = null;
								var $secondMlvedamoney = null;
								$mlvedamoney.each(function() {
									if($firstMlvedamoney == null) {
										$firstMlvedamoney = $(this);
									}
									else if($secondMlvedamoney == null ) {
                               $secondMlvedamoney = $(this);//parseInt($(this).html().replace(/[^0-9]/g, ""),10);
                           }
                           else {                              
                               return false;//parseInt($(this).html().replace(/[^0-9]/g, ""),10)                              
                           }                           
                           
                       });



								if($secondMlvedamoney == null || !(element.compare_at_price)) {
									$firstMlvedamoney.html(Shopify.formatMoney(element.price, "£{{amount}} GBP"));
								}
								else {                        var currentPrice = parseInt($secondMlvedamoney.html().replace(/[^0-9]/g, ""),10);
								var previousPrice = parseInt($firstMlvedamoney.html().replace(/[^0-9]/g, ""),10);
								if ( currentPrice > previousPrice ) {
									$secondMlvedamoney.html(Shopify.formatMoney(element.compare_at_price, "£{{amount}} GBP"));
									$firstMlvedamoney.html(Shopify.formatMoney(element.price, "£{{amount}} GBP"));
								}
								else {
									$firstMlvedamoney.html(Shopify.formatMoney(element.compare_at_price, "£{{amount}} GBP"));
									$secondMlvedamoney.html(Shopify.formatMoney(element.price, "£{{amount}} GBP"));
								}
								$('span.money span.money').each(function() {
									$(this).parents('span.money').removeClass('money');
								});
							}
						}

					});
					});
					$("<style type=\"text/css\">span.money{ display: inline; }<\/style>").appendTo("head");
				}
			},
			error: function(xhr, textStatus, errorThrown) {
				$("<style type=\"text/css\">span.money{ display: inline; }<\/style>").appendTo("head");
			}
		});
	}

	checkShopifyFormatMoney();

</script>


<script src="//mlveda.com/ShopifyApps/ShopifyMultiPricing/mlvedaUpdates.js" type="text/javascript">
</script> 

<!--  DO NOT MODIFY THIS LINE  --> <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">

	window.cookieconsent_options = {"message":"We use cookies to ensure that we give you the best experience on our website. If you continue we\'ll assume that you understand this.","dismiss":"Accept","learnMore":"Learn more","link":"https://www.haniyas.com/pages/privacy-policy","theme":"dark-bottom"};

</script> 

<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js" type="text/javascript">
</script>