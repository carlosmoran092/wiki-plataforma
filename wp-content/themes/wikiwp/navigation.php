<?php 
    echo '<nav class="primary-menu primary-menu-side">',
         '<div class="nav-container">';
    // Main menu with fallback    
    wp_nav_menu(array(
        'theme_location' => 'main-menu', 
        'items_wrap' => '<ul class="main-menu">%3$s</ul>',
        'fallback_cb' => 'main_menu_fallback',
    ));
    // Main menu fallback
    function main_menu_fallback() {
        echo '<ul class="default-nav">';
        wp_list_pages();
        echo '</ul>';
        echo '<ul class="default-nav">';
        wp_list_categories();
        echo '</ul>';
    }
    // Meta menu
    wp_nav_menu(array(
        'theme_location' => 'meta-menu', 
        'items_wrap' => '<ul class="meta-menu">%3$s</ul>',
        'fallback_cb' => '',
    ));
    
    echo '</div>', // End of .nav-container
         '<div class="nav-menu-button">Navigation</div>',
         '</nav>',
    // Dynamic sidebar Navigation
         '<ul class="nav-dynamic-sidebar">';
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('navigation') ) : endif;
	echo '</ul>';
?>