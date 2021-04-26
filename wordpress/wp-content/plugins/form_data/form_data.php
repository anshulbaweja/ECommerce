<?php
/*
Plugin Name:-Form Data
Plugin URI:- 
Description:- Fetch data from DB
Version:- 1.0
Author:- Ann Joseph
*/

register_activation_hook( __FILE__, 'form_data_activate' );
register_activation_hook( __FILE__, 'form_data_deactivate' );


function form_data_activate(){
    global $wpdb;
    //global $table_prefix;
    //$table_prefix = "wp_";
   // $table = $table_prefix.'form_data';
    
    $sql = "CREATE TABLE wordpress.wp_form_data (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    
  $wpdb->query($sql);
        
}

function form_data_deactivate(){
    
        global $wpdb;
    //global $table_prefix;
   // $table_prefix = "wp_";
   // $table = $table_prefix.'form_data';
    
    $sql = 'DROP TABLE wordpress.wp_form_data';
    
  $wpdb->query($sql);
}

add_action('admin_menu','form_data_menu');

function form_data_menu(){
    add_menu_page('Form Data','Form Data',8,__FILE__,'form_data_list');
}

add_shortcode('form_data_list_shortcode','form_data_list');
function form_data_list(){
   include('form_data_list.php');
}
?>
