<?php
/**
* Plugin Name: WPMU DEV Filterable Query Plugin
* Plugin URI: https://github.com/rachelmccollin/wpmudev-filterable-query
* Description: Plugin to create a filterable instance of the WP_Query class. To add to your theme, use the wpmu_filterable_query action hook. To filter, hook your function to the wpmu_filterable_query filter hook.
* Version: 1.0
* Author: Rachel McCollin
* Author URI: http://rachelmccollin.co.uk
*
*/

/********************************************************************
wpmu_filterable_query function - runs a query that can be filtered
********************************************************************/
function wpmu_filterable_query () {

	$args = array(
		apply_filters( 'wpmu_filterable_query', 
			'posts_per_page' => 5
		)
	);
	$query = new WP_query ( $args );
	if ( $query->have_posts() ) {
	
		echo '<section class="">';
		echo apply_filters( 'wpmu_filterable_query_loop_heading', '<h3>Heading</h3>' );
		echo '<ul>';
		
		while ( $query->have_posts() ) : $query->the_post();
		
		//contents of loop
		echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
		
		endwhile;
		
		wp_reset_postdata()();
		
		echo '</ul>';
		echo '</section>';
	  
	}

}
