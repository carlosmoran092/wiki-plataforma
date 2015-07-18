<?php
    get_header();
    get_template_part('navigation');

    echo '<div class="content">',
         '<h1 class="cat-title">';
    single_cat_title();
    echo '</h1>',
         '<small class="cat-title-description">'.category_description().'</small>';
    if ( is_front_page() && is_home() ) {
        echo '<small class="cat-title-description"><p>'.get_bloginfo('description').'<p></small>';
    }
    // post excerpt
    if ( have_posts() ) : while (have_posts()) : the_post();
    echo '<div class="excerpt excerpt-portfolio clearfix ">';
    // thumbnail
    if ( has_post_thumbnail() ) :
    echo '<a class="excerpt-thumbnail-portfolio" href="';
    the_permalink();
    echo '" title="';
    the_title_attribute();
    echo '">';
    the_post_thumbnail('medium');
    echo '</a>';
    endif;
    echo '<h2 class="excerpt-title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>';
    // post info
    get_template_part('postinfo');
    echo '</div>'; // end of .excerpt
    endwhile;
    // pargination
    echo '<div class="clearfix">&nbsp;</div>',
         '<div class="posts-pargination">';
    next_posts_link('<span class="previous-posts-link">'.__('Older Entries', 'wikiwp').' &raquo;</span>'); 
    previous_posts_link('<span class="next-posts-link">&laquo; '.__('Newer Entries', 'wikiwp').'</span>'); 
    else : 
    echo '</div>'; // end of .posts-pargination
    // if no posts were found
    endif;
    echo '</div>'; // end of .content
    // footer
    get_footer();
?>