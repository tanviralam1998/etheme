    <?php get_header();?>

    <body <?php body_class();?>>

    <?php get_template_part('hero');?>

    <section class="content-section">
        <?php
            while (have_posts()) :
                the_post();?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h1 class="text-danger fs-3 mb-2"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong><?php the_author();?></strong></br>
                            <?php echo get_the_date();?>
                        </p>

                        <?php 
                        $tag_list = get_the_tag_list( '<ul><li>', '</li><li>', '</li></ul>' );
                            if ( $tag_list && ! is_wp_error( $tag_list ) ) {
                                echo $tag_list;
                            }
                        ?>
                        
                    </div>
                    <div class="col-md-8">
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
                                the_excerpt();
                            ?>
                        </p>
                    </div>
                </div>                
            </div>
        <?php
            endwhile;
        ?>
                    
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
