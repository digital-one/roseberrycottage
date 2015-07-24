<?php

function admin_scripts_and_styles(){
  global $post;
  wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null );
    wp_enqueue_script( 'jquery' );
   wp_register_script( 'jquery-ui', "http://code.jquery.com/ui/1.11.4/jquery-ui.js",array(),'1.11.4', false);
    wp_enqueue_script( 'jquery-ui' );
    wp_register_script( 'multidatespicker', get_template_directory_uri().'/js/multidatepicker/jquery-ui.multidatespicker.js', array(), null, false );
 wp_enqueue_script( 'multidatespicker' );  
  wp_register_script( 'admin-scripts', get_template_directory_uri().'/js/admin-scripts.js', array(), null, false );
 wp_enqueue_script( 'admin-scripts' ); 
  wp_register_style( 'jquery-ui-css', get_stylesheet_directory_uri() . '/css/jquery-ui.css', array(), '', 'all' );
    wp_enqueue_style( 'jquery-ui-css' );
   //  wp_register_style( 'cangas', get_stylesheet_directory_uri() . '/css/cangas.datepicker.css', array(), '', 'all' );
  //  wp_enqueue_style( 'cangas' );
  $booked_dates =  get_post_meta($post->ID, 'booked_dates', true);
      wp_localize_script('admin-scripts','_booked_dates',$booked_dates);
   
} 

function scripts_and_styles() {
  global $post;
   //only effect front-end of your website
	if (!is_admin() && $_SERVER['SCRIPT_NAME'] != '/wp-login.php') {
	
		
		// respond
		//wp_register_script( 'respondjs', get_stylesheet_directory_uri() . '/library/js/libs/min/respond.min.js', array('jquery'), null, false );
		//wp_enqueue_script( 'respondjs' );
		
		//jquery
	  wp_deregister_script( 'jquery' );
	  wp_register_script( 'jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null );
	  wp_enqueue_script( 'jquery' );
   wp_register_script( 'jquery-ui', "http://code.jquery.com/ui/1.11.4/jquery-ui.js",array(),'1.11.4', false);
    //wp_register_script( 'jquery-ui', get_stylesheet_directory_uri() . '/js/jquery-ui.min.js', array(), '1.11.4', false );
    wp_enqueue_script( 'jquery-ui' );



		// modernizr (without media query polyfill)

/*
		wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js', array(), '2.5.3', false );
		wp_enqueue_script( 'modernizr' );

    */

		//slick slider
	  	wp_register_script(  'slick', get_stylesheet_directory_uri() . '/js/slick/slick.min.js', array(), '1.4.1', false  );
	  	wp_enqueue_script( 'slick' );
        wp_register_style( 'slick-css', get_stylesheet_directory_uri() . '/js/slick/slick.css', array(), '', 'all' );
    wp_enqueue_style( 'slick-css' );
		

    //foundation js
  wp_register_script( 'foundation', get_template_directory_uri().'/bower_components/foundation/js/foundation.min.js', array(), null, false );
wp_enqueue_script( 'foundation' );  
  wp_register_script( 'foundation-offcanvas', get_template_directory_uri().'/bower_components/foundation/js/foundation/foundation.offcanvas.js',array(), null,false);
wp_enqueue_script( 'foundation-offcanvas' );  
  wp_register_script( 'modernizr', get_template_directory_uri().'/bower_components/foundation/js/vendor/modernizr.js', array(), null, false );
    wp_enqueue_script( 'modernizr' );
  wp_register_script( 'fastclick', get_template_directory_uri().'/bower_components/foundation/js/vendor/fastclick.js', array(), null, false );
    wp_enqueue_script( 'fastclick' );

		//twitter fetcher
		//wp_register_script( 'twitter_fetcher', get_stylesheet_directory_uri() . '/js/twitter-fetcher.js', array(), null, false );
  		//wp_enqueue_script( 'twitter_fetcher' );


        wp_register_script( 'parallaxjs', get_stylesheet_directory_uri() . '/js/parallax.js', array(), null, false );
      wp_enqueue_script( 'parallaxjs' );


        wp_register_script( 'imgpreload', get_stylesheet_directory_uri() . '/js/jquery.imgpreload.min.js', array(), null, false );
      wp_enqueue_script( 'imgpreload' );



  		//easing
  		wp_register_script( 'easing', get_stylesheet_directory_uri() . '/js/jquery.easing.min.js', array(), null, false );
  		wp_enqueue_script( 'easing' );


  		//scroll to
		wp_register_script( 'scrollto', get_stylesheet_directory_uri() . '/js/jquery.scrollTo.min.js', array(), null, false );
  		wp_enqueue_script( 'scrollto' );

  		wp_register_script( 'gforms_validation', get_stylesheet_directory_uri() . '/js/jquery.gforms.validation.js', array(), null, false );
  		wp_enqueue_script( 'gforms_validation' );

  		//jquery cookie

  		wp_register_script( 'jquery_cookie', get_stylesheet_directory_uri() . '/js/jquery.cookie.js', array(), null, false );
  		wp_enqueue_script( 'jquery_cookie' );

    wp_register_style( 'jquery-ui-css', get_stylesheet_directory_uri() . '/css/jquery-ui.css', array(), '', 'all' );
    wp_enqueue_style( 'jquery-ui-css' );

		// register main stylesheet
		wp_register_style( 'stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );
		wp_enqueue_style( 'stylesheet' );
		
    

		 //google maps api
	  wp_register_script( 'google_maps_api', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maps.google.com/maps/api/js?sensor=true", false, null );
	  wp_enqueue_script( 'google_maps_api' );

	  wp_register_script(  'gmap', get_stylesheet_directory_uri() . '/js/jquery.gmap.js', array(), null, false  );
	 wp_enqueue_script( 'gmap' );

	 wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), null, false  );
		wp_enqueue_script( 'scripts' );	
		
		//register styles for our theme
		//wp_register_style( 'respgrid', get_template_directory_uri() . '/css/foundation-grid.css', array(), 'all' );
		//wp_enqueue_style( 'respgrid' );
		
		//register selectbox
		//wp_register_script( 'selectbox', get_stylesheet_directory_uri() . '/js/jquery.selectBox.js', array(), null, false);
		//wp_enqueue_script( 'selectbox' );	

		
		//register all scripts
		
		

		//wp_localize_script( 'allscripts', 'Map', array('lat' => 51.5196628,'lng' =>-0.0875072,'marker'=> get_template_directory_uri().'/images/marker.png'));
    wp_localize_script('scripts','home_url',get_template_directory_uri());
		wp_localize_script( 'scripts', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

    $booked_dates =  get_post_meta($post->ID, 'booked_dates', true);
      wp_localize_script('scripts','_booked_dates',$booked_dates);
   

    //get map locations
      $args = array(
        'post_type'=>'cpt-location',
        'post_status' => 'publish',
        'numberposts' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
        );
      if($locations = get_posts($args)):
        $geocodes = array();
      foreach($locations as $location):
      //  markers: [{'latitude': 0,'longitude': 0,'name': 'London','content': 'Argentum<br />2 Queen Caroline Street<br />Hammersmith<br />London<br />W6 9DX'}],
        $loc = get_field('location',$location->ID);
        $lng = $loc['lng'];
        $lat = $loc['lat'];
        $name = $location->post_title;
        $geocodes[] = array('lat'=>$lat,'lng'=>$lng,'name'=>$name);
        endforeach;
        $marker = get_template_directory_uri().'/images/marker.png';
        $roseberry_marker = get_template_directory_uri().'/images/roseberry-marker.png';
        wp_localize_script( 'scripts', 'Map', array('geocodes'=>$geocodes,'marker'=>$marker, 'roseberry_marker'=>$roseberry_marker));
        endif;
	}
}

// enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'scripts_and_styles', 999);
add_action('admin_enqueue_scripts', 'admin_scripts_and_styles');
add_action('admin_init', 'admin_init');
 // save custom metafields
            add_action( 'save_post', 'save_custom_data' );
            add_action( 'post_updated', 'save_custom_data');

// enqueue google fonts
function google_fonts() {
  wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic');
  wp_enqueue_style( 'googleFonts');
}
function font_awesome(){
	 wp_register_style('fontAwesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	 wp_enqueue_style( 'fontAwesome');
}

add_action('wp_print_styles', 'google_fonts');
add_action('wp_print_styles', 'font_awesome');



//Hide Admin Bar
show_admin_bar( false );

add_action( 'init', 'add_excerpts_to_pages' );
function add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

function admin_init(){
// allow to customise menus
global $post;
$post_id=0;
if(!empty($_GET['post'])) $post_id = $_GET['post'];
 // $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if ($post_id == 7 or $post_id == 10):
  add_meta_box('room_menu', 'Availability', 'set_room_menus', 'page', 'normal', 'low');
//add_meta_box('availability_menu', 'Availability', 'my_meta_setup_1', 'page', 'normal', 'high');
endif;
}

function save_custom_data($post_id){
  global $post;
  if(!empty($_POST['booked_dates'])):
if (wp_verify_nonce($_POST['room_meta_noncename'],__FILE__)): 
                    if(isset($_POST['booked_dates']) ):

                        $data = esc_html( trim($_POST['booked_dates']));
                       // die('post_id='.$post_id);
                        update_post_meta($post_id, 'booked_dates', $data);
                    endif;
                  endif;
                  endif;
}

function set_room_menus() {
  global $post;

  $booked_dates = get_post_meta( $post->ID, 'booked_dates', true );
   echo '<div id="menu_wrapper"><div id="menu_admin">';
   echo '<div id="availability"></div>';
   echo '<input type="hidden" name="booked_dates" id="booked_dates" value="22222'.$booked_dates.'" />';
   echo '<input type="hidden" name="room_meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
  echo '</div></div>';
}

//add svg support to media uploader
function cc_mime_types( $mimes ){

     $mimes['svg'] = 'image/svg+xml';
     return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


//fix svg display in admin
function fix_svg() {
   echo '<style type="text/css">
         .attachment-post-thumbnail, .acf-image-image {
              width: 100% !important;
              height: auto !important;
         }
         .acf-image-image{
              width: 120px !important;
             
         }
         </style>';
}
add_action('admin_head', 'fix_svg');

/** Register Navigation Menus
 **/

function register_menus() {
	  register_nav_menus(
	    array( 	'main-menu'	   => __( 'Main Menu' )
	   	)
	  );
	}
	
add_action( 'init', 'register_menus' );



function comment_template($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; 
   ?>

<article <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
<aside><div class="avatar"><?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?></div></aside>
<main>
<header class="dotted-links"><small><?php printf( __('<cite>%1$s</cite>, on %2$s at %3$s'), get_comment_author_link(), get_comment_date(), get_comment_time()); ?></small></header>
<div class="comment-body dotted-links">
		<?php comment_text(); ?>
</div>
<footer>
<menu><ul>
<li class="reply" data-role="reply-link">
<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</li>
<li class="share"><span>Share:</span><ul><li class="twitter"><a href="#">Twitter</a></li><li class="facebook"><a href="">Facebook</a></li></ul></li>
</ul></menu>
 <?php edit_comment_link(__('(Edit)'),'  ','') ?>
</footer>
</main>
</article>
<?php 
        }


function get_archives_link_mod ( $link_html ) {

$month='';
if(!empty($_SESSION)):
  $month = $_SESSION['month'];
endif;
if(!empty($_REQUEST)):
  $month = $_REQUEST['month'];
endif;

if(!empty($month)):
//  http://gradportal.localhost/2015/06/
  preg_match ("/value='(.+?)'/", $link_html, $url);
  $temp = explode('/',$month);
  $post_month = $temp[4];
  $post_year = $temp[3];
  $link = explode('/',$url[1]);
  $link_month = $link[4];
  $link_year = $link[3];
  if($link_month == $post_month and $link_year == $post_year):
     $link_html = str_replace("<option", "<option selected='selected'", $link_html);
    endif;
    
endif;
return $link_html;
}


class subMenu extends Walker_Nav_Menu {
      function end_el(&$output, $item, $depth=0, $args=array()) {
    	
	$args = array(
    		'post_type' => 'page',
    'child_of' => $item->object_id,
     'post_parent' => $item->object_id,
     'orderby' => 'menu_order',
     'order' => 'ASC'
     );
    	//if($pages  = get_posts($args)):
    	//	echo 'child='.count($pages).'<hr />';
    //	endif;
  	$query = new WP_Query( $args );
	$total = $query->found_posts;
	$half = ceil($total/2);
	$count=0;
	if ( $query->have_posts() ):
		
		$output.='<div class="sub-menu"><ul>';
        while ( $query->have_posts() ) : $query->the_post();
        $output.='<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
           $count++;
           if($count==$half):
           	$output.='</ul><ul>';
           endif;
        endwhile;
    $output.='</ul>';
endif; 
 // $output .= "<div>kdkdkddkdkl</div></li>\n"; 
  //endif;
   //   $output .= apply_filters( 'walker_nav_menu_start_el', $output, $item, $depth, $args );

 wp_reset_postdata();    
  }
}



function style_heading($heading){
	$words = explode(' ',$heading);
	$total = count($words);
	$last = end($words);
	unset($words[$total-1]);
	$output = "";
	foreach($words as $word):
		$output.=$word.' ';
		endforeach;
		$output.='<strong>'.$last.'</strong>';
	return $output;
}


// only search for posts

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');


//options page
add_action("admin_menu", "setup_theme_options_page");

function setup_theme_options_page(){
	add_menu_page('Theme Options', 'Theme Options', 'manage_options',  'theme_options', 'theme_options');	
}

if (isset($_POST["update_theme_options"])) {
    save_theme_options();
}

function save_theme_options(){
    $address_line_1 = esc_attr($_POST["address_line_1"]);
    $address_line_2 = esc_attr($_POST["address_line_2"]);
    $address_line_3 = esc_attr($_POST["address_line_3"]);
    $telephone = esc_attr($_POST["telephone"]);
    $fax = esc_attr($_POST["fax"]);
    $email = esc_attr($_POST["email"]);
    $twitter = esc_attr($_POST["twitter"]);
    $footer_disclaimer = esc_attr($_POST["footer_disclaimer"]);
    $location_url= esc_attr($_POST["location_url"]);
  
    update_option("address_line_1", $address_line_1);
    update_option("address_line_2", $address_line_2);
    update_option("address_line_3", $address_line_3);
    update_option("telephone", $telephone);
    update_option("fax", $fax);
    update_option("email", $email);
    update_option("twitter", $twitter);
    update_option("footer_disclaimer", $footer_disclaimer);
    update_option("location_url", $location_url);
}

function theme_options(){
    $address_line_1 = get_option("address_line_1");
    $address_line_2 = get_option("address_line_2");
    $address_line_3 = get_option("address_line_3");
    $telephone = get_option("telephone");
    $fax = get_option("fax");
    $email = get_option("email");
    $twitter = get_option("twitter");
    $footer_disclaimer = get_option("footer_disclaimer");
    $location_url = get_option("location_url");

    ?>
        <div class="wrap">
        <?php screen_icon('themes'); ?> <h2>Contact Details</h2>
 
        <form method="POST" action="">
            <table class="form-table">
                
                  <tr valign="top">
                    <th scope="row">
                        <label for="address_line_1">
                            Address:
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="address_line_1" class="widefat" size="100" value="<?php echo $address_line_1;?>"  />
                    </td>
                </tr>
                 <tr valign="top">
                    <th scope="row">
                        <label for="address_line_2">
                           &nbsp;
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="address_line_2" class="widefat" size="100" value="<?php echo $address_line_2;?>"  />
                    </td>
                </tr>
                 <tr valign="top">
                    <th scope="row">
                        <label for="address_line_3">
                          &nbsp;
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="address_line_3" class="widefat" size="100" value="<?php echo $address_line_3;?>"  />
                    </td>
                </tr>
                
                 <tr valign="top">
                    <th scope="row">
                        <label for="telephone">
                            Telephone:
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="telephone" class="widefat" size="100" value="<?php echo $telephone;?>"  />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="fax">
                            Fax:
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="fax" class="widefat" size="100" value="<?php echo $fax;?>"  />
                    </td>
                </tr>
                 <tr valign="top">
                    <th scope="row">
                        <label for="email">
                            Email Address:
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="email" class="widefat" size="100"  value="<?php echo $email;?>"  />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="twitter">
                            Twitter:
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="twitter" class="widefat" size="100"  value="<?php echo $twitter;?>"  />
                    </td>
                </tr>
                  <tr valign="top">
                    <th scope="row">
                        <label for="charity_no">
                            Footer Disclaimer:
                        </label> 
                    </th>
                    <td>
                    	<textarea name="footer_disclaimer"  class="widefat" cols="20" rows="5"><?php echo stripslashes($footer_disclaimer) ?></textarea>
                    </td>
                </tr>
                 <tr valign="top">
                    <th scope="row">
                        <label for="location_url">
                            Google Maps URL:
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="location_url" size="100" class="widefat" value="<?php echo $location_url;?>"  />
                    </td>
                </tr>
                <tr><td>
    <input type="submit" value="Save Options" class="button-primary"/></td></tr>
            </table>
            <input type="hidden" name="update_theme_options" value="Y" />
        </form>
    </div>
<?php
}

