<?php
	echo '</div>', // end of .container
    // Footer
         '<footer class="container-fluid">',
         '<div class="content clearfix">';
        
        
        
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) :
    endif;
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-mid') ) :
    endif;
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) :
    endif;

        
    echo '<div class="col-md-12 copyright">',
         '<p>',
		 '<strong>&copy;&nbsp;';
	_e('By', 'wikiwp');
	echo '&nbsp;<a href="'.esc_url( home_url() ).'">'.get_bloginfo('name').'</a></strong>',
		 '&nbsp;&nbsp;|&nbsp;&nbsp;',
		 '<a href="http://wikiwp.com" title="Wikipedia look-a-like theme for WordPress">WikiWP</a> theme, powered by&nbsp;',
		 '<a href="http://profiles.wordpress.org/guesmo/" target="_blank" title="Author Florian Steller">Florian Steller</a> &amp;&nbsp;',
		 '<a href="http://wordpress.org/" target="_blank">WordPress</a>. &nbsp; | &nbsp; <a class="footer-rss-link" href="'.get_bloginfo('rss2_url').'" title="RSS Feed">RSS</a>',
	     '</p>',
         '</div>',
         '</div>', // End of .content
		 '</footer>';
 	wp_footer();
	echo '</body></html>';
?>
