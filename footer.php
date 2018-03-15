
<div class="container mobile-hide">
    <div class="row-fluid">
        <div class="mobile-map col-md-12 col-xs-12">
            <div class="h2"><a href="/kontakty/"><?php the_field('article_on_map',6); ?></a></div>
        </div>
    </div>
</div>
<div class="container_map mobile-hide">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7a0bdc5bac8a3e50c1565ff6bc315f0e88396fd2e17361e48e241a7c29999c31&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
</div>
<footer><div class="container">
        <div class="row-fluid">
            <div class="col-md-2 col-xs-12 mobile-hide">
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer-menu',
                    'container' => 'ul',
                    'menu_class'=> ''
                ) ); ?>
            </div>

            <div class="col-md-6 col-xs-12 footer-contact-list mobile-hide">
                <div class="footer-contact-list">
                    <?php the_field('footer-text',6); ?>
                    <div class="phone"><span><a href="tel:<?php the_field('tel2',6); ?>"><?php the_field('tel2',6); ?></a><br></span></div>
                    <div class="phone"><span><a href="tel:<?php the_field('tel3',6); ?>"><?php the_field('tel3',6); ?></a><br></span></div></span>
                    <div><span><?php the_field('copuright',6); ?></span></div>
                    <div>
                        <?php if( get_field('twitter',6) ): ?>
                            <a href="<?php the_field('twitter',6); ?>" class="footer-soo twitter"></a>
                        <?php endif; ?>
                        <?php if( get_field('vk',6) ): ?>
                            <a href="<?php the_field('vk',6); ?>" class="footer-soo vk"></a>
                        <?php endif; ?>
                        <?php if( get_field('facebook',6) ): ?>
                            <a href="<?php the_field('facebook',6); ?>" class="footer-soo google"></a>
                        <?php endif; ?>
                        <?php if( get_field('twitter',6) ): ?>
                            <a href="<?php the_field('twitter',6); ?>" class="footer-soo facebook"></a>
                        <?php endif; ?>
                        <?php if( get_field('instagram',6) ): ?>
                            <a href="<?php the_field('instagram',6); ?>" class="footer-soo instagram"></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 forma">
                <p class="form-name">Заказ обратного звонка</p>
                <div>
                    <div class="frm">
                        <?php the_field('feedback-footer',198); ?>
                        <style>
                            .wpcf7-response-output.wpcf7-validation-errors,.wpcf7-response-output {
                                display: none;
                            }
                            .screen-reader-response {
                                margin-bottom: 8px;
                            }
                            .wpcf7-not-valid-tip {
                                margin-top: 8px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--Modals-->
<div class="md-modal md-effect-1" id="modal-1">
    <div class="md-content">
        <span class="md-close"></span><p class="form-name">Оцените нашу работу</p>
        <?php the_field('feedback-ocenite-raboty',198); ?>
    </div>
</div>

<div class="md-modal md-effect-1" id="modal-2">
    <div class="md-content">
        <span class="md-close"></span>
        <?php the_field('feedback-kachestvo-foto',198); ?>
    </div>
</div>

<div class="md-modal md-effect-1" id="modal-6">
    <div class="md-content">
        <span class="md-close"></span>
        <?php the_field('feedback-top',198); ?>
    </div>
</div>

</div>
</div>
</body>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.fancybox.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.easing-1.3.pack.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.validate.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.slider-box').slick({
            accessibility:false,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        //arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        //arrows: false,
                        centerMode: true,
                        centerPadding: '20px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 580,
                    settings: {
                        // arrows: false,
                        centerMode: true,
                        centerPadding: '20px',
                        slidesToShow: 1
                    }
                }
            ]
        });
        $('.photogallery-slider').slick({
            accessibility:false,
            slidesToShow: 3,
            slidesToScroll: 1
        });
        $('.photos-slider').slick({
            accessibility:false,
            slidesToShow: 3,
            slidesToScroll: 1
        });
        $('.sertificates').slick({
            accessibility:false,
            dots: true,
            arrows:false,
            slidesToShow: 4,
            slidesToScroll: 4
        });
        $('.testimonial-bar').slick({
            dots: true,
            accessibility:false,
            arrows:false,
            autoplay:true,
            autoplaySpeed:10000,
            speed: 300,
            touchMove:false,
            adaptiveHeight: true,
            fade: true,
            cssEase: 'linear'
        });
        $('.testimonial-slide').slick({
            dots: true,
            accessibility:false,
            autoplay:true,
            autoplaySpeed:10000,
            speed: 300,
            touchMove:false,
            adaptiveHeight: true,
            fade: true,
            cssEase: 'linear'
        });
        $('.testimonial-slide-left-menu').slick({
            dots: true,
            accessibility:false,
            autoplay:true,
            autoplaySpeed:3000,
            speed: 300,
            touchMove:false,
            adaptiveHeight: true,
            fade: true,
            cssEase: 'linear'
        });
        $('.slider-work').slick({
            accessibility:false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            autoplay:true,
            autoplaySpeed:10000,
            speed: 0,
            touchMove:false,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            accessibility:false,
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-work',
            arrows: false,
            dots: false,
            centerMode: true,
            touchMove:false,
            focusOnSelect: true
        });
        if ($('.id_banner_head_time').length > 0) {
            $('.banner-slide-header').slick({
                dots: true,
                accessibility:false,
                autoplay:true,
                speed: 300,
                touchMove:false,
                adaptiveHeight: true,
                fade: true,
                cssEase: 'linear'
            });
        }
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $('.top_button').hide();
        $(window).scroll(function(){
            if($(this).scrollTop() > 0 ){
                if($('.top_button').is(':hidden')){
                    $('.top_button').css({opacity: 1}).fadeIn('slow');
                }
            }else{
                $('.top_button').stop(true, false).fadeOut('fast');
            }

        });
        $('.top_button').click(function(){
            $('html, body').stop().animate({scrollTop: 0}, 1000);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('a.sertfb').fancybox();
        $('a.fancybox-group').fancybox();
        $('.gallery-item a').fancybox();
    });
</script>

</html>