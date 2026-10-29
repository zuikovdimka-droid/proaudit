<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="http://schema.org/WPHeader">

<?php
if ("$_SERVER[REQUEST_URI]" == '/uslugi/voprosyi-i-otvetyi/'
or "$_SERVER[REQUEST_URI]" == '/delaem-otchetnost-i-provodim-ee-audit-po-mezhdunarodnyim-standartam-finansovoy-otchetnosti/'
or "$_SERVER[REQUEST_URI]" == '/uslugi/vedenie-ucheta-usn/ip-2/'
or "$_SERVER[REQUEST_URI]" == '/uslugi/voprosyi-i-otvetyi/'):
?>
<meta name="robots" content="noindex" />
<?php endif; ?>

<link rel="icon" href="/favicon.svg" type="image/x-icon" />
<link rel="shortcut icon" href="/favicon.svg" type="image/x-icon" />
<!-- Slider connection -->
<link href="/bxslider/jquery.bxslider.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="/bxslider/jquery.bxslider.min.js"></script>



<script>jQuery(document).ready(function(){
  $('.bxslider').bxSlider({
  auto: true,
  autoControls: true,
  stopAutoOnClick: true,
  slideHeight: 400,
  minSlides:1,
  maxSlides:5,
  moveSlides:1,
  slideMargin:10,
  slideWidth:150,
  controls: true,
  autoControls:true,
  autoControls:false,
  pager: false
});
});</script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "ул. Трофимова, д. 22, к. 1",
                "streetAddress": "ул. Трофимова, д. 22, к. 1"
            },
            "name": "ПроАудит",
            "telephone": "+7 (925) 517-54-09, 679-48-70, 679-46-51, +7 (499) 271-55-77"
        }
    </script>
<!-- Slider connection end -->
<!-- RedHelper -->
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async" src="https://web.redhelper.ru/service/main.js?c=proaudit"></script>
<!-- /RedHelper -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title itemprop="headline"><?php
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
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<?php if (106 == get_queried_object_id()):?>
	<!-- canonical -->
	<?php $canonical_url = wp_get_canonical_url(106);?>
	<link rel="canonical" href="<?=$canonical_url?>">
<?php endif; ?>
<?
if(strpos($_SERVER["REQUEST_URI"], "/page/")) {
  $newCanonicalUri = explode("page/", $_SERVER["REQUEST_URI"])[0];
  $newCanonicalUri = "https://t-tehnology.ru".$newCanonicalUri;?>
  <link rel="canonical" href="<?=$newCanonicalUri?>">
<?}?>

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
<?if($site_speed=="on") {die();} ?> 

<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=113220716', 'ym');

    ym(113220716, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/113220716" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head>

<body <?php body_class(); ?>>

<?if($_GET['dev']=="dev"){?>
    <!DOCTYPE html>
<h2><?=$_SERVER["REMOTE_ADDR"]?></h2>
<?}?>
<?/* <div id="wrapper" class="hfeed"> */?>
<div id="wrapper">
	<div id="header">
		<div class="toolbaar_header" id="header_flex">
			<div class="toolbar_logo" id="site_logo" role="banner">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'span' : 'div'; ?>
					<span class="logo_green">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
					<div class="logo_description" id="site-description">Бухгалтерские и юридические услуги</div>
			</div>
			<div class="toolbar_address">
			<p class="contacts_adress">г. Москва, ул. Трофимова, д. 22, к. 1</p>
			</div>
			<div class="contacts">
					<a href="tel:+79255175409">+7 (925) 517-54-09</a>
					<a href="tel:+74992715577">+7 (499) 271-55-77</a>
			</div>

			<div class="header_buttons">
				<a class="callback btn_site">Консультация специалиста</a>
			</div>
		</div>
				<?php
					// Compatibility with versions of WordPress prior to 3.4.
					if ( function_exists( 'get_custom_header' ) ) {
						// We need to figure out what the minimum width should be for our featured image.
						// This result would be the suggested width if the theme were to implement flexible widths.
						$header_image_width = get_theme_support( 'custom-header', 'width' );
					} else {
						$header_image_width = HEADER_IMAGE_WIDTH;
					}

					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= $header_image_width ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID );
					elseif ( get_header_image() ) :
						// Compatibility with versions of WordPress prior to 3.4.
						if ( function_exists( 'get_custom_header' ) ) {
							$header_image_width  = get_custom_header()->width;
							$header_image_height = get_custom_header()->height;
						} else {
							$header_image_width  = HEADER_IMAGE_WIDTH;
							$header_image_height = HEADER_IMAGE_HEIGHT;
						}
					?>

					<?php endif; ?>

			<!-- <img class="header_img" src="<?php header_image(); ?>" width="" height="" alt="" /> -->

		<div class="fortest">

			<div class="block_resp">
			<div id="pull_menu">
				<div class="menu_lines line-1"></div>
				<div class="menu_lines line-2"></div>
				<div class="menu_lines line-3"></div>
			</div>
			<div id="nav_block_search" class="resp_searh"><?php get_search_form(); ?></div>
		</div>
			<div class="navigation_block" id="nav_block" role="navigation">
			  <?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<!-- <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div> -->
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'top_menu' ) ); ?>

				<div id="nav_block_search" class="jusy_search">
					<?php get_search_form(); ?>
				</div>
			</div><!-- #nav_block --></div>

	</div><!-- #header -->

	<div id="main">
		<?php if ((is_front_page()) || ("$_SERVER[REQUEST_URI]" == '/test/')) { ?>

		<?php } else { ?>

		<?php /* <a href="/aktsii/"><img src="/img/mosproaudit_new .png" alt="" style="max-width:100%;"></a> */ ?>

		<?php } ?>