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
                                    <?php $category = get_the_category(); ?>
                                    <?php echo category_description( $category[0]->term_id ); ?>
                                    <div class="services grid clearfix">
                                        <div class="row-fluid services-block">

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
                                                    <img width="100%" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                    <a class="service-name" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                                    <div class="preview"><?php do_excerpt(get_the_excerpt(), 20); ?></div>
                                                </div>

                                                <?php $i++; endwhile; ?>

                                        </div>
                                    </div>
                                    <?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('test-editor', $taxonomy . '_' .$term_id); ?>

                                    <?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('dop-content', $taxonomy . '_' .$term_id); ?>
                                    <div class="how-we-work">
                                        <div class="h2"><?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-article', $taxonomy . '_' .$term_id); ?></div>
                                        <div class="clearfix">
                                            <div class="col-md-3 col-sm-6 col-xs-12"><span><img src="<?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-img1', $taxonomy . '_' .$term_id); ?>" alt="<?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-text1', $taxonomy . '_' .$term_id); ?>"></span>
                                                <p><?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-text1', $taxonomy . '_' .$term_id); ?></p>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12"><span><img src="<?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-img2', $taxonomy . '_' .$term_id); ?>" alt="<?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-text2', $taxonomy . '_' .$term_id); ?>"></span>
                                                <p><?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-text2', $taxonomy . '_' .$term_id); ?></p>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12"><span><img src="<?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-img3', $taxonomy . '_' .$term_id); ?>" alt="<?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-text3', $taxonomy . '_' .$term_id); ?>"></span>
                                                <p><?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-text3', $taxonomy . '_' .$term_id); ?></p>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12"><span><img src="<?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-img4', $taxonomy . '_' .$term_id); ?>" alt="<?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-text4', $taxonomy . '_' .$term_id); ?>"></span>
                                                <p><?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-text4', $taxonomy . '_' .$term_id); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('pr-text-editor', $taxonomy . '_' .$term_id); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div></div>

<?php get_footer(); ?>