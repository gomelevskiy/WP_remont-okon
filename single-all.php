<?php get_header(); ?>

    <div class="container"><div class="row-fluid">

            <?php get_sidebar(); ?>

            <div id="main" class="col-md-9 col-xs-12">

                <div class="page-navigation">
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="width-case">
                            <h1><?php the_title();?></h1>
                            <div class="subservices grid clearfix">
                                <div class="row-fluid subservices-block"></div>
                            </div>
                            <img alt="<?php the_title();?>" src="<?php the_post_thumbnail_url(); ?>" style="float: left; margin: 5px; width: 300px;">
                            <span class="zayavka-btn md-trigger orange_button" data-modal="modal-6">Оставить заявку</span>
                            <span class="call-btn md-trigger blue_button" data-modal="modal-6" id="vizov-mastera-btn">Бесплатный вызов мастера</span>

                            <?php if (have_posts()) : while (have_posts()) : the_post();?>

                                <?php the_content(); ?>

                            <?php endwhile; endif; ?>
                            <div class="clear"></div>

                            <?php if( the_field('dop-content') ): ?>
                                <?php the_field('dop-content'); ?>
                            <?php endif; ?>

                            <div class="h2"><?php the_field('carusel-h'); ?></div>

                            <div class="reviews clearfix">
                                <div class="testimonial-slide-in_plast_okna slider-box">
                                    <a class="testimonial-item fancybox-group" href="<?php the_field('carusel-img-1'); ?>"><img alt="<?php the_title();?>" src="<?php the_field('carusel-img-1'); ?>"/></a>
                                    <a class="testimonial-item fancybox-group" href="<?php the_field('carusel-img-2'); ?>"><img alt="<?php the_title();?>" src="<?php the_field('carusel-img-2'); ?>"/></a>
                                    <a class="testimonial-item fancybox-group" href="<?php the_field('carusel-img-3'); ?>"><img alt="<?php the_title();?>" src="<?php the_field('carusel-img-3'); ?>"/></a>
                                    <a class="testimonial-item fancybox-group" href="<?php the_field('carusel-img-4'); ?>"><img alt="<?php the_title();?>" src="<?php the_field('carusel-img-4'); ?>"/></a>
                                    <a class="testimonial-item fancybox-group" href="<?php the_field('carusel-img-5'); ?>"><img alt="<?php the_title();?>" src="<?php the_field('carusel-img-5'); ?>"/></a>
                                    <a class="testimonial-item fancybox-group" href="<?php the_field('carusel-img-6'); ?>"><img alt="<?php the_title();?>" src="<?php the_field('carusel-img-6'); ?>"/></a>
                                    <a class="testimonial-item fancybox-group" href="<?php the_field('carusel-img-7'); ?>"><img alt="<?php the_title();?>" src="<?php the_field('carusel-img-7'); ?>"/></a>
                                    <a class="testimonial-item fancybox-group" href="<?php the_field('carusel-img-8'); ?>"><img alt="<?php the_title();?>" src="<?php the_field('carusel-img-8'); ?>"/></a>
                                    <a class="testimonial-item fancybox-group" href="<?php the_field('carusel-img-9'); ?>"><img alt="<?php the_title();?>" src="<?php the_field('carusel-img-9'); ?>"/></a>
                                    <a class="testimonial-item fancybox-group" href="<?php the_field('carusel-img-10'); ?>"><img alt="<?php the_title();?>" src="<?php the_field('carusel-img-10'); ?>"/></a>
                                </div>
                            </div>
                            <?php the_field('carusel-text'); ?>
                            <div class="how-we-work">
                                <div class="h2"><?php the_field('pr-article'); ?></div>
                                <div class="clearfix">
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <span><img src="<?php the_field('pr-img1'); ?>" alt="<?php the_field('pr-article'); ?>"></span>
                                        <p><?php the_field('pr-text1'); ?></p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <span><img src="<?php the_field('pr-img2'); ?>" alt="<?php the_field('pr-article'); ?>"></span>
                                        <p><?php the_field('pr-text2'); ?></p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <span><img src="<?php the_field('pr-img3'); ?>" alt="<?php the_field('pr-article'); ?>"></span>
                                        <p><?php the_field('pr-text3'); ?></p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <span><img src="<?php the_field('pr-img4'); ?>" alt="<?php the_field('pr-article'); ?>"></span>
                                        <p><?php the_field('pr-text4'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php the_field('pr-text-editor'); ?>
                        </div>
                    </div>
                </div>

            </div>


        </div></div>

<?php get_footer(); ?>