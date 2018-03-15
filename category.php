<?php get_header(); ?>

    <div class="container"><div class="row-fluid">

            <?php get_sidebar(); ?>

            <div id="main" class="col-md-9 col-xs-12">

                <div class="page-navigation">
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="width-case">
                                    <h1><?php single_cat_title(); ?></h1>
                                    <div class="services grid clearfix">
                                        <div class="row-fluid services-block">

                                            <?php $category = get_the_category(); ?>

                                            <?php $i = 0; $id = $category[0]->term_id;
                                            $arg_posts =  array(
                                                'orderby'      => 'modified',
                                                'order'        => 'ASC',
                                                'cat' => $id,
                                                'showposts'=>$n
                                            );
                                            $recent = new WP_Query($arg_posts);
                                            while($recent->have_posts()) : $recent->the_post(); ?>

                                            <div class="col-md-3 col-sm-4 col-xs-12" style="height: 324px;">
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                <a class="service-name" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                                <div class="preview"><?php do_excerpt(get_the_excerpt(), 20); ?></div>
                                            </div>

                                            <?php $i++; endwhile; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div></div>

<?php get_footer(); ?>