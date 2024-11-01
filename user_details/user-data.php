<?php
/*
*Plugin Name: Users Data
*Description: Simple wordpress plugin to show Users data
*Author: Roronoa
*Version: 1.0.0
*License: GPLv2 or later
*Text Domain: trail-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to my gmail vinaychitturi27@gmail.com.
Copyright 2022 Vinay, Inc.
*/

if ( ! defined( 'ABSPATH' ) ) exit;

register_activation_hook(__FILE__,'users_data_activate');

add_action('admin_menu', 'users_data_menu');
function users_data_menu(){
    add_menu_page('Users Data', 'Users Data', 8, __FILE__, 'users_data_activate');
}

function users_data_activate(){
        include('users_list.php');
}
?>    