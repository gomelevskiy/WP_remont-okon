<div id="right-sidebar" class="col-md-3 col-xs-12 hidden-sm hidden-xs">
    <?php if (get_page_uri() != "glavnaya"): ?>
    <div class="left_menu">
        <?php wp_nav_menu( array(
            'theme_location' => 'sidebar',
            'container' => 'ul',
            'menu_class'=> 'menu_left_ul'
        ) ); ?>
    </div>
    <?php endif; ?>

    <span class="h2_caption">Отзывы</span>
    <div class="reviews clearfix">
        <div class="testimonial-bar" style="display: block;">

            <?php	query_posts('cat=7'); while (have_posts()) : the_post();?>
                    <div class="testimonial-item">
                        <div class="testimonial-text"><?php the_content(); ?></div>
                        <p class="testimonial-name"><?php the_field('name-reviews'); ?><br><span class="post"><?php the_field('profession-reviews'); ?></span></p>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>

    <div class="buttons">
        <div class="rate-btn md-trigger" data-modal="modal-1"><span>Оценить нашу работу</span></div>
        <div style="display:none;" class="rate-btn ocenka-btn"><span>Оценить нашу работу</span></div>

        <div class="smeta-btn md-trigger" data-modal="modal-2"><span>Оценка поломки по фотографии</span></div>
        <div style="display:none;" class="smeta-btn ocenkapolomki-btn"><span>Оценка поломки по фотографии</span></div>
    </div>
    <div class="sales"><div class="right-banner">
            <div>
                <?php the_field('market-sidebar',80); ?>
            </div>

        </div></div>

    <br>
    <span class="h2_caption">Наши работы фотографии</span>
    <div class="reviews clearfix">
        <div class="testimonial-slide-left-menu">
            <?php	query_posts('cat=13'); while (have_posts()) : the_post();?>
            <div class="testimonial-item">
                <div class="testimonial-text"><?php the_title(); ?></div>
                <a class="fancybox-group" href="<?php the_post_thumbnail_url(); ?>"><img width="189" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>

    <br>
    <span class="h2_caption">Наши работы видео</span>
    <div class="reviews clearfix">
        <div class="testimonial-slide-left-menu">
            <?php	query_posts('cat=14'); while (have_posts()) : the_post();?>
             <div class="testimonial-item">
                <div class="testimonial-text"><?php the_title(); ?></div>
                <a target="_blank" href="<?php the_field('work-video-link'); ?>"><img width="189" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
             </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>

    <br>
    <span class="h2_caption">Новости</span>
    <div class="reviews clearfix">
        <div class="testimonial-slide-left-menu">
            <?php	query_posts('cat=8'); while (have_posts()) : the_post();?>
                <div class="testimonial-item">
                    <div>
<!--                            <a href="#">-->
                        <div class="testimonial-text text-center-p"><?php the_excerpt(); ?></div>
<!--                            </a>-->
                    </div>
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>

    <?php the_field('market-sidebar-next',80); ?>

    <noindex><a rel="nofollow" href="#" class="orange_button" style="height: 50px; width: 90%;">Заявка на самовывоз москитных сеток</a></noindex>


</div>