<?php
/*
Plugin Name: Add Hierarchy (parent) to post
Description: PLUGIN DEPRECATED.  USE ALTERNATIVE PLUGIN:  "Remove base slug from custom-post-type URL"[https://wordpress.org/plugins/remove-base-slug-from-custom-post-type-url/ ]   (P.S.  OTHER MUST-HAVE PLUGINS FOR EVERYONE: http://bitly.com/MWPLUGINS  )
Version: 1.2
Author: TazoTodua
Author URI: http://www.protectpages.com/profile
Plugin URI: http://www.protectpages.com/
Donate link: http://paypal.me/tazotodua
*/


								//===========  links in Plugins list ==========//
								add_filter( "plugin_action_links_".plugin_basename( __FILE__ ), function ( $links ) { $links[] = '<a href="http://paypal.me/tazotodua">Donate</a>';  return $links; } );
return;

// (This plugin was EXPERIMENTAL and now is STOPPED!!!) 
// this plugin Attempted to add Hierarchy (parent) to post, but it doesnt seem to work well.



define('version__AHPTP', 1.3);
define('MY_PREG_finder__AHPTP', '([^/]*)/(.*)');
function replace_slash__AHPTP($string){ return str_replace('//','/',$string); }



	
//Activation
	register_activation_hook( __FILE__, 'install__AHPTP');	function install__AHPTP()	{	my_update_rules__AHPTP(true); 	}

//Deactivation
	register_deactivation_hook( __FILE__,'uninstall__AHPTP');	function uninstall__AHPTP()	{ 	my_update_rules__AHPTP(false); 	}	


// check if our rules are not yet included
	//add_action( 'init','my_update_rules__AHPTP', 777);
	function my_update_rules__AHPTP( $install_or_uninstall=true)	{
		if ($install_or_uninstall) {
			$rules = get_option( 'rewrite_rules' );
			if ( ! isset( $rules[MY_PREG_finder__AHPTP] ) ) { 
				update_option('rewrite_rules_BACKUPED__AHPTP',  $rules );
				//add_rewrite_rule(MY_PREG_finder__AHPTP,  'index.php?name=$matches[2]',	'top' );
				flush_rewrite_rules();
			}
		}
		else {
			update_option('rewrite_rules',  get_option('rewrite_rules_BACKUPED__AHPTP') );
			flush_rewrite_rules();
		}	
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

//Add HIERARCHICAL to POST TYPE support
	add_post_type_support('post','page-attributes');
	add_filter( 'register_post_type_args', 'change_post_regs__AHPTP',66,2);
	function change_post_regs__AHPTP($args,$p){    if($p=='post'){	$args['hierarchical']=true;	}	return $args;	}
		
		
		
		
		
		
//====================================== CHANGE permalinks ==============================//

//https://developer.wordpress.org/reference/functions/add_rewrite_tag/
add_action('init', 'myrewrules__AHPTP');
function myrewrules__AHPTP() {
	flush_rewrite_rules();
   add_rewrite_rule('^/(.*)(/|?|#|)$', 'index.php?pagename=$matches[1]', 'top');
	//add_rewrite_tag( '%postname%', '(.?.+?)', 'name=$matches[1]' );
	
	//add_rewrite_rule('^/(.*)(/|?|#|)$','index.php?name=$matches[1]','top');
	
    //add_rewrite_rule('([^/]*)','index.php?name=$matches[1]','top');
	//add_rewrite_rule('(.?.+?)','index.php?name=$matches[2]','top');
   // add_rewrite_rule('([^&]+)','index.php?name=$matches[2]','top');
    //add_rewrite_rule('([^/]*)','index.php?name=$matches[1]','top');
	//add_rewrite_rule('(.?.+?)','index.php?name=$matches[2]','top');
}

//  ===================  PRE_POST_LINK	(WHEN  %postname% tag is still available )  ========================//
	//add_filter('pre_post_link', 'mychange__AHPTP',10,2);
	
	
// ====================  POST_LINK 		(WHEN  %postname% tags not available already) ======================//
	add_filter( 'pre_post_link', 'change_permalink__AHPTP', 8, 3 );   
				//i.e:	http://example.com/post_name   OR http://example.com/%if_any_additinonal_custom_structural_tag%/post_name
	function change_permalink__AHPTP( $permalink, $post=false, $leavename=false ) { 
		if($post->post_type == 'post' ){
			// return if %postname% tag is not present in the url:
			if ( false === strpos( $permalink, '%postname%'))  { 		return $permalink;			}
			$permalink = replace_slash__AHPTP('/'. get_parent_slugs__AHPTP($post). '/'. $post->post_name );
		}
		return $permalink;
	}

	
	function get_parent_slugs__AHPTP($post){
		$final_SLUGG = '';
		if (!empty($post->post_parent)){
			$parent_post= get_post($post->post_parent);
			while(!empty($parent_post)){
				$final_SLUGG =  $parent_post->post_name .'/'.$final_SLUGG; 
				if (!empty($parent_post->post_parent) ) { $parent_post = get_post( $parent_post->post_parent); } else{ break ;} 
			}
		}
		return $final_SLUGG;
	}
	


	

?>