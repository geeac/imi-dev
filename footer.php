<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<div id="footerContainer">
                <div id="footerLinks">
                	Copyright &copy; <?php echo date('Y'); ?>. Identity Management Institute&reg;. All rights reserved.<br>
<a href="/imi/">Home</a>  |  <a href="/imi/certification/">Certification</a>  |  <a href="/imi/membership/">Membership</a>  |  <a href="/imi/compliance/">Compliance</a>  |  <a href="/imi/training/">Training</a>  |  <a href="/imi/about/">About</a>  |  <a href="/imi/contact/">Contact</a> | <a href="/imi/sitemap/">Sitemap</a>
                </div>
                <div id="twitter">
                	<table cellpadding="0" cellspacing="0"><tr><td style="padding-right:5px;">CONNECT WITH US:</td><td><a href="https://twitter.com/identitymate" target="_blank"><img src="http://identitymanagementinstitute.org/wp-content/uploads/2013/03/Twitter.png" height="32" width="32" border="0"></a></td><td>&nbsp;&nbsp;&nbsp;</td><td><a href="https://plus.google.com/+IdentitymanagementinstituteOrg/posts" target="_blank"><img src="http://www.mtwpsandbox.com/wp-content/uploads/2016/03/google-plus-icon.jpg" height="32" width="32" border="0"></a></td><td>&nbsp;&nbsp;&nbsp;</td><td><a href="https://www.linkedin.com/company/identity-management-institute/" target="_blank"><img src="http://www.mtwpsandbox.com/wp-content/uploads/2016/03/linkedin-icon-35x35.png" height="33" width="33" border="0"></a></td><td>&nbsp;&nbsp;&nbsp;</td><td><a href="https://www.youtube.com/channel/UCX48EX0mz6djza__9OaL0Pw" target="_blank"><img src="http://www.mtwpsandbox.com/wp-content/uploads/2016/03/youtube-icon.png" height="33" width="33" border="0"></a></td></tr></table>
                </div>
                </div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>