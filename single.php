    <?php get_header();?>
    <body <?php body_class();?>>

    <?php get_template_part('hero');?>

    <section class="content-section">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                        while (have_posts()) :
                            the_post();?>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-danger fs-3 mb-2"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                                    <p class="mt-3">
                                        <strong><?php the_author();?></strong></br>
                                        <?php echo get_the_date();?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php 
                                        if ( has_post_thumbnail() ) {
                                            $thumbnil_url = get_the_post_thumbnail_url(null, 'large');
                                            //echo '<a href="'.$thumbnil_url.'" data-featherlight="image">';
                                            printf('<a href="%s" data-featherlight="image">', $thumbnil_url);
                                                the_post_thumbnail('large','class="img-fluid"');
                                            echo '<a/>';
                                        }
                                    ?>
                                    <p>
                                        <?php 
                                            the_content();

                                            next_post_link();
                                            echo '</br>';
                                            previous_post_link();
                                        ?>
                                    </p>
                                </div>
                            </div>                
                        </div>
                    <?php
                        endwhile;
                    ?>
                </div>
                <div class="col-md-4">
                    <?php 
                        if (is_active_sidebar('sidebar-01')) {
                            dynamic_sidebar('sidebar-01');
                        }
                    ?>
                </div>
            </div>
        </div>

    </section>

    <section class="pagination-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <?php
                        the_posts_pagination(array(
                            'screen_reader_text' => ''
                        ));
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer();?>
