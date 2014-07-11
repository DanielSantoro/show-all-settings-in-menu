<?php
/*
Plugin Name: Show All Settings in Menu
Plugin URI: http://danielsantoro.com/files/show-all-settings-menu/
Description: Adds an "All Settings" menu item to the **WordPress Admin > Settings** menu.
Version: 1.0
License: GPL
Author: Danny Santoro
Author URI: http://www.danielsantoro.com

/*  Copyright 2014 Daniel Santoro  (email : 5xjvdtmf5j@danielsantoro.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Adds "All Settings" link in the Settings Tab for Admins
function add_allsettings_menu() {
    add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
}
add_action( 'admin_menu', 'add_allsettings_menu' );
