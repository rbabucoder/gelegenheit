<header class="header">
    <div class="header__container container">
        <div class="header__logo">
            <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/white-logo.png" alt="White Logo"
                    class="header__logo-image">
            <?php endif; ?>
        </div>

        <button class="hamburger-menu header__button"><i aria-hidden="true" class="fas fa-bars"></i></button>
        <div class="header__nav-wrapper">
            <div class="header__mob_logo">
                <a href="#">
                    <div class="header__logo">
                        <?php if (has_custom_logo()): ?>
                            <?php the_custom_logo(); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/white-logo.png" alt="White Logo"
                                class="header__logo-image">
                        <?php endif; ?>
                    </div>

                </a>
                <button class="close-menu header__button"><i aria-hidden="true" class="fas fa-times"></i></button>
            </div>
            <!-- <nav class="header__nav" aria-label="Main Navigation">
                <ul class="header__nav-list">
                    <li class="header__nav-item"><a href="#" class="header__nav-link">Home</a></li>
                    <li class="header__nav-item"><a href="#" class="header__nav-link">About Us</a></li>
                    <li class="header__nav-item"><a href="#" class="header__nav-link">Job <i aria-hidden="true"
                                class="fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 1</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 2</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 3</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 4</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 5</a></li>
                        </ul>
                    </li>
                    <li class="header__nav-item"><a href="#" class="header__nav-link">Pages <i aria-hidden="true"
                                class="fas fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 1</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 2</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 3</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 4</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 5</a></li>
                        </ul>

                    </li>
                    <li class="header__nav-item"><a href="#" class="header__nav-link">News <i aria-hidden="true"
                                class="fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 1</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 2</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 3</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 4</a></li>
                            <li class="sub-menu__item"><a href="#" class="sub-menu__link">Menu 5</a></li>
                        </ul>
                    </li>
                </ul>
            </nav> -->
            <nav class="header__nav" aria-label="Main Navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu', // The location identifier registered with register_nav_menus()
                        'container' => false, // No additional container element will be added around the menu
                        'menu_class' => 'header__nav-list', // The CSS class that will be applied to the <ul> element
                        'fallback_cb' => false, // No fallback function will be used if the menu does not exist
                        'depth' => 2, // The depth of the menu. 2 means top-level items and one level of sub-menu items
                        'walker' => new My_Custom_Nav_Walker() // A custom walker class to customize the HTML output of the menu
                    )
                );

                ?>
            </nav>
        </div>
        <a href="<?php echo esc_url(get_theme_mod('header_action_button_url', '#')); ?>" class="header__action-button">
            <span><?php echo esc_html(get_theme_mod('header_action_button_text', __('Sign Up', 'text_domain'))); ?></span>
        </a>
        <!-- <div class="header__action">
            <a href="#" class="header__action-button"><span>Sign Up</span></a>
        </div> -->
    </div>
</header>