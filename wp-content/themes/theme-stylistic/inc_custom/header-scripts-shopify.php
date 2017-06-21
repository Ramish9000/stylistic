<!-- 1 -->
<script type="text/javascript">

	var Shopify = Shopify || {};
     Shopify.shop = ""; // haniyas.myshopify.com
     Shopify.theme = {}; // "name":"Testament","id":75255617,"theme_store_id":623,"role":"main"
     Shopify.theme.handle = "null";
     Shopify.theme.style = {"id":null,"handle":null};

 </script>

 <!-- 2 -->
 <script type="text/javascript">

 	(function() {

 		function asyncLoad() {

 			var urls = [

 			"\/\/d2leqgr9fez74i.cloudfront.net\/common\/js\/webinterpret-loader.js?shop=haniyas.myshopify.com",

 			"https:\/\/lace.shoelace.com\/load\/v1\/64c26a698eaf380105f6b5fbe411e99d5c13fddd\/1473828359533427\/1c6d159b336ff2fb941fb17102789518f21e6b902d1cf8a1a820579e1351d211daaf7138b292fe716627e1467b850f4c6a814dd0c93f34bad4e6a476dd031fcf?shop=haniyas.myshopify.com",

 			"https:\/\/haniyas.firepush.io\/sdk\/shopify\/170223015630mvrerawtf4h3y828qjc9\/shopify.min.js?v=118\u0026shop=haniyas.myshopify.com"

 			];

 			for (var i = 0; i < urls.length; i++) {
 				var s = document.createElement('script');
 				s.type = 'text/javascript';
 				s.async = true;
 				s.src = urls[i];
 				var x = document.getElementsByTagName('script')[0];
 				x.parentNode.insertBefore(s, x);
 			}

 		};

 		if(window.attachEvent) {

 			window.attachEvent('onload', asyncLoad);

 		} else {

 			window.addEventListener('load', asyncLoad, false);

 		}

 	})();

 </script>

 <!-- 3 -->
 <script id="__st">

 	var __st={"a":2393483,"offset":3600,"reqid":"229f7736-d199-48d9-8c7a-df136bebc037","pageurl":"www.haniyas.com\/","u":"4bb722115a73","p":"home"};

 </script>

 <!-- 4 -->
 <script async="async" src="https://cdn.shopify.com/s/javascripts/shopify_stats.js?v=6" type="text/javascript"></script>

 <!-- 5 -->
 <script defer="defer" src="//cdn.shopify.com/s/assets/themes_support/ga_urchin_forms-668547562549a84f5dfa01ef82607987f85ecbe1c8301faf25059becfa208199.js"></script>


 <!-- 6 -->
 <script type="text/javascript">

 	window.ShopifyAnalytics = window.ShopifyAnalytics || {};
 	window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
 	window.ShopifyAnalytics.meta.currency = 'GBP';
 	var meta = {"page":{"pageType":"home"}};
 	for (var attr in meta) {
 		window.ShopifyAnalytics.meta[attr] = meta[attr];
 	}

 </script>

 <!-- 7 -->
 <script type="text/javascript">window.ShopifyAnalytics.merchantGoogleAnalytics = function() {};</script>

 <!-- 8 -->
 <script class="analytics" type="text/javascript">

 	(window.gaDevIds=window.gaDevIds||[]).push('BwiEti');
 	(function () {
 		var customDocumentWrite = function(content) {
 			var jquery = null;

 			if (window.jQuery) {
 				jquery = window.jQuery;
 			} else if (window.Checkout && window.Checkout.$) {
 				jquery = window.Checkout.$;
 			}

 			if (jquery) {
 				jquery('body').append(content);
 			}
 		};

 		var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
 		if (trekkie.integrations) {
 			return;
 		}
 		trekkie.methods = [
 		'identify',
 		'page',
 		'ready',
 		'track',
 		'trackForm',
 		'trackLink'
 		];
 		trekkie.factory = function(method) {
 			return function() {
 				var args = Array.prototype.slice.call(arguments);
 				args.unshift(method);
 				trekkie.push(args);
 				return trekkie;
 			};
 		};
 		for (var i = 0; i < trekkie.methods.length; i++) {
 			var key = trekkie.methods[i];
 			trekkie[key] = trekkie.factory(key);
 		}
 		trekkie.load = function(config) {
 			trekkie.config = config;
 			var script = document.createElement('script');
 			script.type = 'text/javascript';
 			script.onerror = function(e) {
 				(new Image()).src = '//v.shopify.com/internal_errors/track?error=trekkie_load';
 			};
 			script.async = true;
 			script.src = 'https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.03.29.1';
 			var first = document.getElementsByTagName('script')[0];
 			first.parentNode.insertBefore(script, first);
 		};
 		trekkie.load(
 			{"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":2393483,"isMerchantRequest":null,"themeId":75255617,"themeCityHash":15647598290229415229}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":0.1},"Google Analytics":{"trackingId":"UA-41951182-1","domain":"auto","siteSpeedSampleRate":"10","enhancedEcommerce":true,"doubleClick":true,"includeSearch":true},"Facebook Pixel":{"pixelIds":["1473828359533427"],"agent":"plshopify1.2"},"Session Attribution":{}}
 			);

 		var loaded = false;
 		trekkie.ready(function() {
 			if (loaded) return;
 			loaded = true;

 			window.ShopifyAnalytics.lib = window.trekkie;

 			ga('require', 'linker');
 			function addListener(element, type, callback) {
 				if (element.addEventListener) {
 					element.addEventListener(type, callback);
 				}
 				else if (element.attachEvent) {
 					element.attachEvent('on' + type, callback);
 				}
 			}
 			function decorate(event) {
 				event = event || window.event;
 				var target = event.target || event.srcElement;
 				if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
 					ga(function (tracker) {
 						var linkerParam = tracker.get('linkerParam');
 						document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
 					});
 				}
 			}
 			addListener(window, 'load', function(){
 				for (var i=0; i < document.forms.length; i++) {
 					var action = document.forms[i].getAttribute('action');
 					if(action && action.indexOf('/cart') >= 0) {
 						addListener(document.forms[i], 'submit', decorate);
 					}
 				}
 				for (var i=0; i < document.links.length; i++) {
 					var href = document.links[i].getAttribute('href');
 					if(href && href.indexOf('/checkout') >= 0) {
 						addListener(document.links[i], 'click', decorate);
 					}
 				}
 			});


 			var originalDocumentWrite = document.write;
 			document.write = customDocumentWrite;
 			try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
 			document.write = originalDocumentWrite;


 			window.ShopifyAnalytics.lib.page(
 				null,
 				{"pageType":"home"}
 				);


 		});


 		var eventsListenerScript = document.createElement('script');
 		eventsListenerScript.async = true;
 		eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-9410288c486c406bc38edb97003bb123d375112c2b7e037d65afabae7c905e02.js";
 		document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

 	})();
 </script>

 <!-- 9 -->
 <link href="//cdn.shopify.com/s/assets/storefront/additional-checkout-buttons-808913e66bb8ca34c54570ae143ad72de7405d257db279c632b910e1babef726.css" media="all" rel="stylesheet">

 <!-- 10 -->
 <!-- <script type="text/javascript">
 	if($(window).width() > 500){
     // Fancybox Join our mailing list popup
     $(document).ready(function(){

     	var check_cookie = $.cookie('mailing_list_delay_popup');
     	if(check_cookie == null){
     		$.cookie('mailing_list_delay_popup', 'expires_seven_days', { expires: 7 });
         //fire your fancybox here
         setTimeout(function(){
         	$.fancybox({
         		href: "#subscribe_popup"
         	});
         }, 3000);
     }
 }); 
 };

</script> -->

<!-- 11 -->
<script type="text/javascript">
  $(window).load(function() {  
    $('.prod-image').matchHeight();

  });
</script>

<!-- 12 -->
<!-- <script>

<?php if(is_page('home')) { ?>
  $("<style type=\"text/css\">span.money{ display: none; }<\/style>").appendTo("head"); 
<?php } ?>
  
</script> -->

<!-- 13 -->
<!-- BeginApplePayHeader -->
<script>

  Shopify.slick_logged_in = false;Shopify.slick_tax_exempt = false;Shopify.slick_email = undefined;
  
</script>

<!-- 14 -->
 <script>

  $(function() {
    $( '#dl-menu' ).dlmenu({
      animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
    });
  });
  
</script>