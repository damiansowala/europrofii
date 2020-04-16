
    <footer class="foobar">
        <div class="container">
            <div class="row foobar__menu">

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <a class="btn btn__fb" href="<?php the_field('facebook',131); ?>">Znajdź nas na Facebook</a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <?php
                        wp_nav_menu( array(
                            'menu'          	=> 'footer-menu-1',
                            'theme_location'	=> 'footer-menu-1',
                            'depth'         	=> 2,
                            'container'			=> false,
                            'menu_class'    	=> 'items',
                            'fallback_cb'   	=> 'bs4navwalker::fallback',
                            'walker'         	=> new bs4navFoo())
                        
                        );
                    ?>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <?php
                        wp_nav_menu( array(
                            'menu'          	=> 'footer-menu-2',
                            'theme_location'	=> 'footer-menu-2',
                            'depth'         	=> 2,
                            'container'			=> false,
                            'menu_class'    	=> 'items',
                            'fallback_cb'   	=> 'bs4navwalker::fallback',
                            'walker'         	=> new bs4navFoo())
                        
                        );
                    ?>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <?php
                        wp_nav_menu( array(
                            'menu'          	=> 'footer-menu-3',
                            'theme_location'	=> 'footer-menu-3',
                            'depth'         	=> 2,
                            'container'			=> false,
                            'menu_class'    	=> 'items',
                            'fallback_cb'   	=> 'bs4navwalker::fallback',
                            'walker'         	=> new bs4navFoo())
                        
                        );
                    ?>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <?php
                        wp_nav_menu( array(
                            'menu'          	=> 'footer-menu-4',
                            'theme_location'	=> 'footer-menu-4',
                            'depth'         	=> 2,
                            'container'			=> false,
                            'menu_class'    	=> 'items',
                            'fallback_cb'   	=> 'bs4navwalker::fallback',
                            'walker'         	=> new bs4navFoo())
                        
                        );
                    ?>
                </div>

            </div>
            <div class="row foobar__copyright">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    Copyright © 2018 Euro Profi, All Rights Reserved | Realizations iseeyou. studio
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7">
                    <ul class="items items__flat">
                        <li class="item item__flat">
                            <a href="<?php the_field('polityka_prywatnosci',131); ?>" class="btn btn__link">Polityka prywatności i Cookies</a>
                        </li>
                        <li class="item item__flat">
                            <a href="<?php the_field('rodo',131); ?>" class="btn btn__link">RODO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>