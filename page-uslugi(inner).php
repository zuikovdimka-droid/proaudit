<?php
/*
Template Name: Страница услуг (с шаблонными блоками)
*/


get_header(); ?>

		<div id="container">
			<div id="content" role="main">
			<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
			<?php if(is_front_page()){?>
				
			<?php };?>
			
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
			<?php include('images/index.php' ); ?>
			</div><!-- #content -->
		</div>
		<noindex>
		<? get_template_part( 'blocks/block_6' ); // block_6 - Документы ?>
		<? get_template_part( 'blocks/block_7' ); // block_7 - Отзыв наших клиентов ?>
		</noindex>
		<!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
