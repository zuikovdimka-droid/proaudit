<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>

</div></div>
  
<div class="mainpage_wrap">
	<? get_template_part( 'blocks/block_1' ); // block_1 - Услуги аудита и бухгалтерского учета ?>

	<? get_template_part( 'blocks/block_2' ); // block_2 - Что мы предлагаем: ?>
	<?if($site_speed=="on") {die();} ?> 
	<? get_template_part( 'blocks/block_3' ); // block_3 - Текст ?>
	<? get_template_part( 'blocks/block_4' ); // block_4 - Почему выбирают нас ?>
	<? get_template_part( 'blocks/block_5' ); // block_5 - Наши специалисты ?>
	<? get_template_part( 'blocks/block_6' ); // block_6 - Документы ?>
	<? get_template_part( 'blocks/block_7' ); // block_7 - Отзыв наших клиентов ?>
</div>

<div id="wrapper"><div id="main">


<?php get_footer(); ?>