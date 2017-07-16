<?php 
/*****************************************************************************************
Theme functions file - this would include more than just these functions. 
Instead of using this as your main funcitons file, copy these functions into your theme functions file.
*****************************************************************************************/

/*****************************************************************************************
wpmu_filter_dookickeys - filters the arguments in our query to poutput the doohickey post type
*****************************************************************************************/
function wpmu_filter_dookickeys() {
	
	'post_type' => 'doohickey',
	'posts_per_page' => 4
	
}
add_filter( 'wpmu_filterable_query', 'wpmu_filter_dookickeys' );

/*****************************************************************************************
wpmu_filter_heading - filters the heading in the loop
*****************************************************************************************/
function wpmu_filter_heading() {
	
	'<h3>Latest Doohickeys</h3>'
	
}
add_filter( 'wpmu_filterable_query_loop_heading', 'wpmu_filter_heading' );