        <!-- footer -->
        
            <div class="container">
                <div class="row">
                    <div class="col-md-4 p-2">
                        <?php 
                            if (is_active_sidebar('footer-left')) {
                                dynamic_sidebar('footer-left');
                            }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php 
                            if (is_active_sidebar('footer-right')) {
                                dynamic_sidebar('footer-right');
                            }
                        ?>
                        
                    </div>
                    <div class="col-md-4">
                        
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footerMenu',
                                    'menu_id' => 'footerMenuContainer',
                                    'menu_class' => 'list-inline text-right',
                                ));
                            ?>
                    </div>
                </div>
            </div>

        
    
</body>
<?php wp_footer();?>
</html>