<?php


function my_function() {

 if ( is_category() && $query->is_main_query() ) {
 
 $query->set( 'orderby', 'title');
 $query->set( 'order', 'ASC' );
 return $query;
 
 }
 
}
add_action( 'pre_get_posts', 'my_function');


?>