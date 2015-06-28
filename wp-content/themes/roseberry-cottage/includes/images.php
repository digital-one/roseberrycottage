<?php 
// Add theme support post thumbnails
add_theme_support('post-thumbnails');


// Add image sizes
add_image_size( 'double-square-image', 840, 420, true );
add_image_size( 'square-image', 420, 420, true );
add_image_size( 'banner-image', 1680, 1000, true );
set_post_thumbnail_size( 180, 180,false); 

?>