<?php
/*
Plugin Name:-Category List
Plugin URI:- 
Description:- Fetch data from DB
Version:- 1.0
Author:- Ann Joseph
*/

register_activation_hook( __FILE__, 'category_data_activate' );
register_activation_hook( __FILE__, 'category_data_deactivate' );


function category_data_activate(){
    global $wpdb;
    global $table_prefix;
    //$table_prefix = "wp_";
     $table = $table_prefix.'wp_category';
    
    $sql = "CREATE TABLE $table (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    
  $wpdb->query($sql);
        
}

function category_data_deactivate(){
    
    global $wpdb;
    global $table_prefix;
   // $table_prefix = "wp_";
   $table = $table_prefix.'wp_category';
    
    $sql = "DROP TABLE $table;";
    
  $wpdb->query($sql);
}

add_action('admin_menu','category_data_menu');

function category_data_menu(){
    add_menu_page('Category Data','Category Data',8,__FILE__,'category_list');
}

add_shortcode('category_list_data_list_shortcode','category_list');
function category_list(){
   include('category_list.php');
}
?>
