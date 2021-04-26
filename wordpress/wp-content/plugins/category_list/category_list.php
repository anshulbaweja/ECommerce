<?php
global $wpdb;
global $table_prefix;
$table_prefix = "wp_";
$table = $table_prefix.'form_data';
    
$sql = 'SELECT * FROM  wp_woocommerce_shipping_zones';
$result = $wpdb->get_results($sql);

?>
<table>
    <tr>
    <th style="text-align:centre;" colspan="2">Our Delivery Locations</th>
  </tr>
    <?php
    foreach($result as $list){
     ?>
    <tr>
        <td><?php echo $list->zone_id?></td>
        <td><?php echo $list->zone_name?></td>
        
    </tr>
     <?php   
    }
    ?>
</table>

<style>
    table {

	border: 5px solid #a1f1a1;
    }
    tr {

    }
</style>