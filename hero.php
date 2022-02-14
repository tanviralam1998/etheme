<!-- header section -->
<header class="head">
        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="tagline text-center text-danger"><?php bloginfo('description');?></h3>
                        <h2 class="align-self-center display-1 text-center headding">
                            <a href="<?php echo site_url();?>"><?php bloginfo('name');?></a>
                        </h2>
                    </div>
                    <div class="col-md-12">
                        <div class="navigation">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'topMenu',
                                    'menu_id' => 'topMenuContainer',
                                    'menu_class' => 'list-inline text-center',
                                ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>