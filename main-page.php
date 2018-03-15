<?php
/*
Template Name: Шаблон для главной страницы
*/
?>

<?php get_header(); ?>

    <nav class="header_nav">
        <div class="header_nav-w">
            <ul class="header_nav-row">
                <?php
                $parent_id = 11;

                # получаем дочерние рубрики
                $sub_cats = get_categories( array(
                    'child_of' => $parent_id,
                    'hide_empty' => 0
                ) );
                if( $sub_cats ){
                    foreach( $sub_cats as $cat ){

                        // Данные в объекте $cat

                        // $cat->term_id
                        // $cat->name (Рубрика 1)
                        // $cat->slug (rubrika-1)
                        // $cat->term_group (0)
                        // $cat->term_taxonomy_id (4)
                        // $cat->taxonomy (category)
                        // $cat->description ()
                        // $cat->parent (0)
                        // $cat->count (14)
                        // $cat->object_id (2743)
                        // $cat->cat_ID (4)
                        // $cat->category_count (14)
                        // $cat->category_description ()
                        // $cat->cat_name (Рубрика 1)
                        // $cat->category_nicename (rubrika-1)
                        // $cat->category_parent (0)

                        $category_link = get_category_link( $cat->term_id );
                        $imgcat = get_field("rubric-icon",get_category($cat));
                        $viewElement = get_field("check-menu",get_category($cat));

                        if( $viewElement == true ) {
                            echo "<li class='header_nav-item'>" .
                                "<a href='". $category_link ."' class='header_nav-link'>" .
                                "<div class='header_nav-hover'></div>" .
                                "<div class='header_nav-icon'><img src='" . $imgcat ."' alt='". $cat->name ."'></div>" .
                                "<div class='header_nav-text'>". $cat->name ."</div>" .
                                "</a>" .
                                "</li>";
                        }
                    }
                } ?>
            </ul>
        </div>
    </nav>

    <div class="banner-slide-header">
        <?php if( get_field('slide1_img',6) ): ?>
        <div class="testimonial-item">
            <div class="banner-head" style="background:url('<?php the_field('slide1_img',6); ?>') no-repeat center center;background-size:cover;">
                <div class="id_banner_head_time" style="display: none">10000</div>
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-md-12 col-xs-12">
                            <p style="max-width: 700px;"><?php the_field('slide1_text',6); ?></p>
                            <div class="buttons">
							    <span><span class="call-btn md-trigger" data-modal="modal-6" id="vizov-mastera-btn">Вызов мастера</span></span>
                                <a class="calc-btn" href="/kalkulyator/"><span>Расчет цены</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('slide2_img',6) ): ?>
            <div class="testimonial-item">
                <div class="banner-head" style="background:url('<?php the_field('slide2_img',6); ?>') no-repeat center center;background-size:cover;">
                    <div class="id_banner_head_time" style="display: none">10000</div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="col-md-12 col-xs-12">
                                <p style="max-width: 700px;"><?php the_field('slide2_text',6); ?></p>
                                <div class="buttons">
                                    <span><span class="call-btn md-trigger" data-modal="modal-6" id="vizov-mastera-btn">Вызов мастера</span></span>
                                    <a class="calc-btn" href="#"><span>Расчет цены</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if( get_field('slide3_img',6) ): ?>
            <div class="testimonial-item">
                <div class="banner-head" style="background:url('<?php the_field('slide3_img',6); ?>') no-repeat center center;background-size:cover;">
                    <div class="id_banner_head_time" style="display: none">10000</div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="col-md-12 col-xs-12">
                                <p style="max-width: 700px;"><?php the_field('slide3_text',6); ?></p>
                                <div class="buttons">
                                    <span><span class="call-btn md-trigger" data-modal="modal-6" id="vizov-mastera-btn">Вызов мастера</span></span>
                                    <a class="calc-btn" href="#"><span>Расчет цены</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if( get_field('slide4_img',6) ): ?>
            <div class="testimonial-item">
                <div class="banner-head" style="background:url('<?php the_field('slide4_img',6); ?>') no-repeat center center;background-size:cover;">
                    <div class="id_banner_head_time" style="display: none">10000</div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="col-md-12 col-xs-12">
                                <p style="max-width: 700px;"><?php the_field('slide4_text',6); ?></p>
                                <div class="buttons">
                                    <span><span class="call-btn md-trigger" data-modal="modal-6" id="vizov-mastera-btn">Вызов мастера</span></span>
                                    <a class="calc-btn" href="#"><span>Расчет цены</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if( get_field('slide5_img',6) ): ?>
            <div class="testimonial-item">
                <div class="banner-head" style="background:url('<?php the_field('slide5_img',6); ?>') no-repeat center center;background-size:cover;">
                    <div class="id_banner_head_time" style="display: none">10000</div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="col-md-12 col-xs-12">
                                <p style="max-width: 700px;"><?php the_field('slide5_text',6); ?></p>
                                <div class="buttons">
                                    <span><span class="call-btn md-trigger" data-modal="modal-6" id="vizov-mastera-btn">Вызов мастера</span></span>
                                    <a class="calc-btn" href="#"><span>Расчет цены</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>


    <div class="container"><div class="row-fluid">
            <?php get_sidebar(); ?>

            <div id="main" class="col-md-9 col-xs-12">
                <div class="width-case">
                    <div class="padding-box">
                        <h2>Услуги компании</h2>
                        <div class="services">
                            <ul class="services grid clearfix">

                                <?php
                                $parent_id = 11;

                                # получаем дочерние рубрики
                                $sub_cats = get_categories( array(
                                    'child_of' => $parent_id,
                                    'hide_empty' => 0
                                ) );
                                if( $sub_cats ){
                                    foreach( $sub_cats as $cat ){

                                        // Данные в объекте $cat

                                        // $cat->term_id
                                        // $cat->name (Рубрика 1)
                                        // $cat->slug (rubrika-1)
                                        // $cat->term_group (0)
                                        // $cat->term_taxonomy_id (4)
                                        // $cat->taxonomy (category)
                                        // $cat->description ()
                                        // $cat->parent (0)
                                        // $cat->count (14)
                                        // $cat->object_id (2743)
                                        // $cat->cat_ID (4)
                                        // $cat->category_count (14)
                                        // $cat->category_description ()
                                        // $cat->cat_name (Рубрика 1)
                                        // $cat->category_nicename (rubrika-1)
                                        // $cat->category_parent (0)

                                        $category_link = get_category_link( $cat->term_id );
                                        $imgcat = get_field("mini-img",get_category($cat));

                                        echo "<li class='service-item col-md-4 col-sm-6 col-xs-12'>" .
                                            "<a href='". $category_link ."'>" .
                                            "<span class='service-pic' style='background: url(" . $imgcat .") no-repeat; background-size: cover;'>" .
                                            "<span class='layer'>" .
                                            "<span class='service-name'>". $cat->name ."</span>" .
                                            "<span class='service-more'>Подробнее</span>" .
                                            "</span>" .
                                            "</span>" .
                                            "</a>" .
                                            "</li>";
                                    }
                                } ?>

                            </ul>
                        </div>

                        <?php if (have_posts()) : while (have_posts()) : the_post();?>

                            <?php the_content(); ?>

                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>


        </div></div>
    </div>

<?php get_footer(); ?>