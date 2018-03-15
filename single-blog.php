<?php get_header(); ?>

    <div class="container"><div class="row-fluid">

            <?php get_sidebar(); ?>

            <div id="main" class="col-md-9 col-xs-12">

                <div class="page-navigation">
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                </div>

                <div class="width-case blog">
                    <h1><?php the_title();?></h1>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post();?>

                    <?php the_content(); ?>

                <?php endwhile; endif; ?>

            </div>


        </div></div>

<?php get_footer(); ?>