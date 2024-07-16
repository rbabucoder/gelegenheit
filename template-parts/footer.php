<footer class="footer">
    <div class="footer__container">
        <div class="footer__top">
            <!-- footer logo -->
            <div class="footer__logo">
                <?php
                $footer_logo = get_theme_mod('footer_logo');
                if ($footer_logo) {
                    echo '<img src="' . esc_url($footer_logo) . '" alt="' . esc_attr__('Footer Logo', 'text_domain') . '" class="footer__logo-image">';
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/images/white-logo.png" alt="' . esc_attr__('White Logo', 'text_domain') . '" class="footer__logo-image">';
                }
                ?>

            </div>
            <div class="footer__description">
                <p><?php echo esc_html(get_theme_mod('footer_description', __('Getting an accurate diagnosis can be one of the most impactful experiences that you can have.', 'text_domain'))); ?>
                </p>
            </div>
            <div class="footer__social">
                <ul class="footer__social-list">
                    <?php if (get_theme_mod('facebook_url')): ?>
                        <li class="footer__social-item"><a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>"
                                class="footer__social-link"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('instagram_url')): ?>
                        <li class="footer__social-item"><a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>"
                                class="footer__social-link"><i class="fa-brands fa-instagram"></i></a></li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('youtube_url')): ?>
                        <li class="footer__social-item"><a href="<?php echo esc_url(get_theme_mod('youtube_url')); ?>"
                                class="footer__social-link"><i class="fa-brands fa-youtube"></i></a></li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('linkedin_url')): ?>
                        <li class="footer__social-item"><a href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>"
                                class="footer__social-link"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <?php endif; ?>
                </ul>

                <!-- <ul class="footer__social-list">
                    <li class="footer__social-item"><a href="" class="footer__social-link"><i
                                class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="footer__social-item"><a href="" class="footer__social-link"><i
                                class="fa-brands fa-instagram"></i></a></li>
                    <li class="footer__social-item"><a href="" class="footer__social-link"><i
                                class="fa-brands fa-youtube"></i></a></li>
                    <li class="footer__social-item"><a href="" class="footer__social-link"><i
                                class="fa-brands fa-linkedin-in"></i></a></li>
                </ul> -->
            </div>
        </div>

        <div class="footer__links">
            <!-- <h3 class="footer__links-title">Quick Links</h3> -->
            <h3 class="footer__links-title"><?php echo get_theme_mod('footer_menu_heading_1', 'Quick Links') ?></h3>

            <?php
            // Add this code to your theme's footer.php file or the appropriate template file
            
            $footer_menu_1 = get_theme_mod('footer_menu_1', '');

            if ($footer_menu_1) {
                $menu_items = wp_get_nav_menu_items($footer_menu_1);

                if ($menu_items) {
                    echo '<ul class="footer__pages-list">';
                    foreach ($menu_items as $item) {
                        echo '<li class="footer__pages-item">';
                        echo '<a href="' . esc_url($item->url) . '" class="footer__pages-link">' . esc_html($item->title) . '</a>';
                        echo '</li>';
                    }
                    echo '</ul>';
                }
            }

            ?>
            <!-- <ul class="footer__links-list">
                <li class="footer__links-item"><a href="" class="footer__links-link">Home</a></li>
                <li class="footer__links-item"><a href="" class="footer__links-link">About Us</a></li>
                <li class="footer__links-item"><a href="" class="footer__links-link">Services</a></li>
                <li class="footer__links-item"><a href="" class="footer__links-link">Contact</a></li>
            </ul> -->
        </div>
        <div class="footer__pages">
            <!-- <h3 class="footer__pages-title">Other Pages</h3> -->
            <h3 class="footer__pages-title"><?php echo get_theme_mod('footer_menu_heading_2', 'Other pages') ?></h3>
            <?php
            // Add this code to your theme's footer.php file or the appropriate template file
            
            $footer_menu_2 = get_theme_mod('footer_menu_2', '');

            if ($footer_menu_2) {
                $menu_items = wp_get_nav_menu_items($footer_menu_2);

                if ($menu_items) {
                    echo '<ul class="footer__pages-list">';
                    foreach ($menu_items as $item) {
                        echo '<li class="footer__pages-item">';
                        echo '<a href="' . esc_url($item->url) . '" class="footer__pages-link">' . esc_html($item->title) . '</a>';
                        echo '</li>';
                    }
                    echo '</ul>';
                }
            }

            ?>
            <!-- <ul class="footer__pages-list">
                <li class="footer__pages-item"><a href="" class="footer__pages-link">Job Pages</a></li>
                <li class="footer__pages-item"><a href="" class="footer__pages-link">Charity Program</a></li>
                <li class="footer__pages-item"><a href="" class="footer__pages-link">Privacy Policy</a></li>
                <li class="footer__pages-item"><a href="" class="footer__pages-link">Terms of Use</a></li>
            </ul> -->
        </div>
        <div class="footer__contact">
            <h3 class="footer__contact-title"><?php echo get_theme_mod('footer_menu_heading_2', 'Contact Info') ?></h3>
            <ul class="footer__contact-list">
                <li class="footer__contact-item">
                    <span class="footer__contact-icon"><i class="fa-solid fa-location-dot"></i></span>
                    <span class="footer__contact-text"><?php echo get_theme_mod('address', 'Jl. Raya Mas Ubud No. 86, Gianyar, Bali, Indonesia – 80225s') ?></span>
                    <!-- <span class="footer__contact-text">Jl. Raya Mas Ubud No. 86, Gianyar, Bali, Indonesia – 80225</span> -->
                </li>   
                <li class="footer__contact-item">
                    <span class="footer__contact-icon"><i class="fa-solid fa-phone"></i></span>
                    <span class="footer__contact-text"><a href="tel:+62 361 234 4567" class="footer__contact-link">+62
                            361 234 4567</a></span>
                </li>
                <li class="footer__contact-item">
                    <span class="footer__contact-icon"><i class="fa-regular fa-envelope"></i></span>
                    <span class="footer__contact-text"><a href="mailto:contact@domain.com"
                            class="footer__contact-link">contact@domain.com</a></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- footer copyright -->
    <div class="footer__bottom">
        <div class="footer__credits">
            <p class="footer__credits-text">HR Consultant Template Kit by Jegtheme</p>
        </div>
        <div class="footer__copyright">
            <p class="footer__copyright-text">Copyright © 2021. All rights reserved.</p>
        </div>
    </div>
</footer>