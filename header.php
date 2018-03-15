<!DOCTYPE html><html xmlns:umi="http://www.umi-cms.ru/TR/umi">

<head>

    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />

    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />


    <link href="<?php bloginfo('template_directory'); ?>/css/lib/jquery.fancybox.css" type="text/css"  rel="stylesheet" />
    <link href="<?php bloginfo('template_directory'); ?>/css/lib/owl.carousel.min.css" type="text/css"  rel="stylesheet" />
    <link href="<?php bloginfo('template_directory'); ?>/css/old/main.css" type="text/css"  rel="stylesheet" />
    <link href="<?php bloginfo('template_directory'); ?>/css/old/custom.css" type="text/css"  rel="stylesheet" />
    <link href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css"  rel="stylesheet" />

    <title><?php bloginfo('name'); ?><?php '||' . wp_title(); ?></title>

</head>


<body>
<div id="panel"></div>
<div id="wrapper">

    <div id="container">
        <div id="page-wrapper">
            <header class="container header_wrap">
                <div class="left_flex">
                    <div>
                        <a href="/" class="logotransform mobile-logotransform"><img src="<?php the_field('logo',6); ?>" alt="Петербургская оконная компания" class="logo-img"></a>
                    </div>
                    <div>
                        <!--<a href="<?php the_field('price',6); ?>" target="_blank" class="mobile-hide"><span>Скачать прайс-лист</span></a>
                        <a href="#"><span class="mobile-hide"><b><?php the_field('ac1',6); ?></b></a>
                        <a href="#" class="mobile-novinki"><?php the_field('ac2',6); ?></a>-->
						<a href="mailto:<?php the_field('email',6); ?>" class="mailto"><span><?php the_field('email',6); ?></span></a>
                        <ul class="soc-link-top">
                            <?php if( get_field('twitter',6) ): ?>
                                <li><a href="<?php the_field('twitter',6); ?>" class="footer-soo twitter"></a></li>
                            <?php endif; ?>
                            <?php if( get_field('vk',6) ): ?>
                                <li><a href="<?php the_field('vk',6); ?>" class="footer-soo vk"></a></li>
                            <?php endif; ?>
                            <?php if( get_field('facebook',6) ): ?>
                                <li><a href="<?php the_field('facebook',6); ?>" class="footer-soo google"></a></li>
                            <?php endif; ?>
                            <?php if( get_field('twitter',6) ): ?>
                                <li><a href="<?php the_field('twitter',6); ?>" class="footer-soo facebook"></a></li>
                            <?php endif; ?>
                            <?php if( get_field('instagram',6) ): ?>
                               <li><a href="<?php the_field('instagram',6); ?>" class="footer-soo instagram"></a></li>
                            <?php endif; ?>
                            <?php if( get_field('youtube',6) ): ?>
                                <li><a href="<?php the_field('youtube',6); ?>" class="footer-soo youtube"></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
				 <div class="h_text_block mobile-hide">
                     
				</div>
                <div class="mobile-hide flex_right">
                    <div class="graffic_h">
					  <p><?php the_field('grafic',6); ?></p>
					</div>
                        <ul class="call_phone_top">
                            <?php if( get_field('tel1',6) ): ?>
                            <li><a href="tel:<?php the_field('tel1',6); ?>"><?php the_field('tel1',6); ?></a></li>
                            <?php endif; ?>
                            <?php if( get_field('tel2',6) ): ?>
                            <li><a href="tel:<?php the_field('tel2',6); ?>"><?php the_field('tel2',6); ?></a></li>
                            <?php endif; ?>
                            <?php if( get_field('tel3',6) ): ?>
                                <li><span class="soc-icons"></span><a href="tel:<?php the_field('tel3',6); ?>"><?php the_field('tel3',6); ?></a></li>
                            <?php endif; ?>
                        </ul>
                       
                    
                </div>
            </header>

            <nav id="main-menu" class="navbar navbar-default main-menu" role="navigation">
                <div class="container"><div class="row-fluid">
                        <div class="navbar-header">
                            <a class="menu_header mobile-hide" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Меню</a>
                            <button type="button" class="navbar-toggle new_position" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                            <div class="little_logo mobile-show call_phone_m_top">
                                <a href="#">
                                    <img src="images/logo_little.png" alt="Петербургская оконная компания">
                                </a>
<!--                                <a href="#">8 (495) 789-11-34</a>-->
                            </div>

                        </div>
                        <div class="collapse navbar-collapse">
                            <?php wp_nav_menu( array(
                                'theme_location' => 'main',
                                'container' => 'ul',
                                'menu_class'=> 'nav navbar-nav'
                            ) ); ?>
                            <div class="search-form mobile-hide">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>