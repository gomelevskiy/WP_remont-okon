<?php get_header(); ?>

    <div class="container">
        <div class="row-fluid">

            <?php get_sidebar(); ?>

            <div id="main" class="col-md-9 col-xs-12">

                <div class="page-navigation">
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                </div>

                <h1><?php echo get_cat_name(4);?></h1>

                <?php $i = 0; $id = 4;
                $arg_posts =  array(
                    'orderby'      => 'modified',
                    'order'        => 'ASC',
                    'cat' => $id,
                    'showposts'=>$n
                );
                $recent = new WP_Query($arg_posts);
                while($recent->have_posts()) : $recent->the_post(); ?>
                    <div class="row-fluid"><div class="col-md-12 col-sm-12 col-xs-12 news-box">
                            <p class="news-name"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                            <p class="news-publish">Опубликовано: <span class=""><?php the_time(get_option('date_format')); ?></span></p>
                            <div class="news-anons"><?php the_excerpt(); ?></div>
                            <a class="news-readmore" href="<?php the_permalink() ?>">Читать дальше</a>
                        </div>
                    </div>
                <?php $i++; endwhile; ?>
            </div>

        </div>
    </div>

<?php get_footer(); ?>