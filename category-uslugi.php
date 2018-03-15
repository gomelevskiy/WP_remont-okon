<?php get_header(); ?>

    <div class="container"><div class="row-fluid">

            <?php get_sidebar(); ?>

            <div id="main" class="col-md-9 col-xs-12">

                <div class="page-navigation">
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                </div>

                <h1>Услуги по ремонту окон</h1>

                <div class="services grid clearfix">
                    <div class="row-fluid services-block">

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

                                echo "<div class='col-md-3 col-sm-4 col-xs-12'>" .
                                    "<img width='100%' src='" . $imgcat ."' alt='". $cat->name ."'/>" .
                                    "<a href='". $category_link ."' class='service-name'>". $cat->name ."</a>" .
                                    "<div class='preview'>". $cat->description ."</div>" .
                                    "</div>";
                            }
                        } ?>
                    </div>
                </div>

                <div class="seo-text-bot">
                    <?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('test-editor', $taxonomy . '_' .$term_id); ?>
                </div>
            </div>


        </div></div>

<?php get_footer(); ?>