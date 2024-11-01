<?php
    if ( ! defined( 'ABSPATH' ) ) exit;
    
    global $wpdb;
    global $table_prefix;
    $table = $table_prefix.'users';
    $sql = "SELECT * FROM $table";

    $result = $wpdb->get_results($sql);
?>

<style type="text/css">
    .table{
        width: 60%;
    }
</style>
<table class="table" border="1px solid black">
    <tr>
        <td scope="col">ID</td>
        <td scope="col">Name</td>
        <td scope="col">Email</td>
    </tr>
    <?php foreach($result as $list){?>
        <tr>
            <td scope="row"><?php echo esc_attr($list->ID) ?></td>
            <td scope="row"><?php echo esc_attr($list->display_name) ?></td>
            <td scope="row"><?php echo esc_attr($list->user_email) ?></td>
        </tr>
    <?php }?>    
</table>