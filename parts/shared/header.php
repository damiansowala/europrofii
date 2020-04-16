<nav class="navbar">
        <div class="container">
            <div class="navbar__body">
			<div class="navbar__brand">
                    <a href="<?php echo site_url(); ?>" role="button" class="btn"><img class="navbar__logo" src="<?php echo get_parent_theme_file_uri( 'images/logoeuro.png' ); ?>" alt="księgowość w niemczech"></a>
                </div>
                <div class="navbar__info">
                    <ul class="items items__flat">
                        <li class="item item__flat"><a role="link" class="btn btn__mail" href="mailto:<?php the_field('e-mail', 131); ?>" class="btn"><?php the_field('e-mail', 131); ?></a></li>
                        <li class="item item__flat"><a role="link" class="btn btn__phone" href="tel:<?php the_field('telefon', 131); ?>" class="btn"><?php the_field('telefon', 131); ?></a></li>
                        <?php if(get_field('biura',131)): ?>
                        <li class="item item__flat">
                            <button role="button" name="btn-toggle" class="btn btn__place">Nasze biura</button>
                            <ul class="items items__place">
                                <?php while(has_sub_field('biura',131)): ?>

                                    <li class="item"><?php the_sub_field('ulica',131); ?><br><?php the_sub_field('kod',131); ?> <?php the_sub_field('miasto',131); ?></li>

                                <?php endwhile; ?>
                            </ul>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <button role="button" name="btn-toggle" class="btn btn__toggle"></button>
            </div>
            <div class="row navbar__collpase">
                <button class="btn btn__close"></button>

                <div class="navbar__menu">
								<?php
					wp_nav_menu( array(
						'menu'          	=> 'menu',
						'theme_location'	=> 'menu',
						'depth'         	=> 2,
						'container'			=> false,
						'menu_class'    	=> 'items',
						'fallback_cb'   	=> 'bs4navwalker::fallback',
						'walker'         	=> new bs4navwalker())
					
					);
					wp_nav_menu( array(
						'menu'          	=> 'offer-menu',
						'theme_location'	=> 'offer-menu',
						'depth'         	=> 2,
						'container'			=> false,
						'menu_class'    	=> 'items',
						'fallback_cb'   	=> 'bs4navwalker::fallback',
						'walker'         	=> new bs4navwalker())
					
					);
				?>
                </div>
            </div>
        </div>
    </nav>