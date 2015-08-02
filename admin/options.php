<?php
/*****************************************************************/
// ADD ADMIN PAGE
/*****************************************************************/
function prefix_add_menu_page() {
	
	add_menu_page( 'My plugin', 'My plugin menu', 'manage_options', 'prefix_', 'prefix_options_template', '' );
	//add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
	
}
add_action( 'admin_menu', 'prefix_add_menu_page' );


/*****************************************************************/
// INIT THE OPTIONS PAGE TEMPLATE : used in prefix_add_menu_page()
/*****************************************************************/
function prefix_options_template() {
	
    include( PREFIX_PATH . '/admin/options_page.php');	
}


/*****************************************************************/
// REGISTERS PLUGIN OPTIONS SETTINGS
/*****************************************************************/ 
function prefix_register_settings() { 

    register_setting( 'prefix_options', 'prefix_' );
    
}
add_action('admin_init', 'prefix_register_settings');

?>