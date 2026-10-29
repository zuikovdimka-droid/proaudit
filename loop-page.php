<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php // post_class(); ?>>
    <?php if ( is_front_page() ) { ?>
    <!-- -->
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php } else { ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php } ?>

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
    </div><!-- .entry-content -->
    <?php if('17' == get_the_ID()):?>
    <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало) -->
    <div id="ymaps-map-id_135771083064023693615" style="width: 100%; height: 350px;"> </div>
        <script type="text/javascript">
        function fid_135771083064023693615(ymaps) {
            var map = new ymaps.Map("ymaps-map-id_135771083064023693615", {
                center: [37.67560349999998, 55.70281442438674],
                zoom: 16,
                type: "yandex#map"
            });
            map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map",
                "yandex#satellite", "yandex#hybrid", "yandex#publicMap"
            ]));
            map.geoObjects.add(new ymaps.Placemark([37.675604, 55.702099], {
                balloonContent: 'Аудиторская фирма "ПроАудит"'
            }, {
                preset: "twirl#greenDotIcon"
            }));
        };
        </script><br />
        <script type="text/javascript"
            src="https://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&amp;coordorder=longlat&amp;load=package.full&amp;wizard=constructor&amp;onload=fid_135771083064023693615">
        </script><br />
        <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->
    <?php endif; ?>
</div><!-- #post-## -->

<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>