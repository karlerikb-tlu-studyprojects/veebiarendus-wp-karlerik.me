<?php
/**
 * The header for our theme.
 *
 * @package Square
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='162918668-1',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="sq-page">
	<?php 
	$square_header_bg = get_theme_mod( 'square_header_bg','sq-black' ); 
	$square_sticky_header = get_theme_mod( 'square_disable_sticky_header' ); 
	$square_sticky_header_class = ($square_sticky_header) ? ' disable-sticky' : '';
	?>
	<header id="sq-masthead" class="sq-site-header <?php echo esc_attr($square_header_bg.$square_sticky_header_class); ?>">
		<div class="sq-container sq-clearfix">
			<div id="sq-site-branding">
				<?php if ( get_header_image() ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>">
					</a>
				<?php else: ?>
					<?php if ( is_front_page() ) : ?>
						<h1 class="sq-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="sq-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
					<p class="sq-site-description"><?php bloginfo( 'description' ); ?></p>
				<?php endif; // End header image check. ?>
			</div><!-- .site-branding -->

			<div class="sq-toggle-nav">
				<span></span>
			</div>
			
			<nav id="sq-site-navigation" class="sq-main-navigation">
				<?php 
				wp_nav_menu( array( 
					'theme_location' => 'primary', 
					'container_class' => 'sq-menu sq-clearfix' ,
					'menu_class' => 'sq-clearfix',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				) ); 
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="sq-content" class="sq-site-content sq-clearfix">
