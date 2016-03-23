<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<div id="header" role="banner">
    <div id="headerContainer">
			
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/Identity-Management-Institute.png" width="314" height="101" alt="" border="0" /></a>

			<div id="action-btns">
            	<ul><li><a href="/imi/member-only/">Member Login</a></li><li class="join"><a href="/imi/membership/">Join IMI</a></li></ul>
                <div id="tagline">Training, Certification &amp; Compliance</div>
            </div>
            

			<nav id="access" role="navigation">				
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
        </div>
        
        <?php if ( is_page('13')  ) { ?>
        
        <div class="homeFeatured">
        <?php if (function_exists('get_thethe_image_slider')) {
			print get_thethe_image_slider('home');
		}
		?>
	<table cellpadding="0" cellspacing="0" width="960"><tr>
	  <td colspan="2" width="320"><h3>Certified Identity Risk Manager&#153;</h3></td>
	  <td colspan="2" width="320"><h3>Certified Red Flag Specialist&#153;</h3></td>
	  <td colspan="2" width="320"><h3>Certified Identity Protection Advisor&#153;</h3></td></tr>
	  <tr>
	    <td width="60"><a href="http://identitymanagementinstitute.org/cirm/"><img src="http://identitymanagementinstitute.org/wp-content/uploads/2013/03/CIRM-sm.png" width="58" height="58" border="0"></a></td>
	    <td width="260">Professionals who manage certain identity risks as part of their job<br>
	      functions may qualify.</td>
	    <td width="60"><a href="http://identitymanagementinstitute.org/crfs/"><img src="http://identitymanagementinstitute.org/wp-content/uploads/2013/03/CRFS-sm.png" width="58" height="58" border="0"></a></td>
	    <td width="260">The leading identity theft <br>
	      prevention &amp; compliance training<br>	      &amp; certification program.</td>
	    <td width="60"><a href="http://identitymanagementinstitute.org/cipa/"><img src="http://identitymanagementinstitute.org/wp-content/uploads/2013/03/CIPA-sm.png" width="58" height="58" border="0"></a></td>
	    <td width="260">Available to all consumer facing professionals tasked with <br>
	      protecting consumer identities. </td>
      </tr>
	  <tr>
	    <td colspan="2"><strong><a href="http://identitymanagementinstitute.org/cirm/">Read More &raquo;</a></strong></td>
	    <td colspan="2"><strong><a href="http://identitymanagementinstitute.org/crfs/">Read More &raquo;</a></strong></td>
        <td colspan="2"><strong><a href="http://identitymanagementinstitute.org/cipa/">Read More &raquo;</a></strong></td>
      </tr>
	</table>
</div>
        
        <?php } else { ?>
        
        <?php } ?> 
        
	</div><!-- #branding -->


	<div id="main">
