<?php
/*
Plugin Name: Bootplate Shortcodes
Plugin URI: http://bootplate.jdmdigital.co/shortcodes/
Description: Simple Wordpress plugin to add shortcodes for Twitter Bootstrap v3.3.x (and some for Bootstrap v4).
Version: 0.5
Author: JDM Digital
Author URI: http://jdmdigital.co
License: GPLv2 or later
GitHub Plugin URI: https://github.com/jdmdigital/bootplate-shortcodes
GitHub Branch: master
*/

/*
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

//require_once( dirname( __FILE__ ) . '/inc/functions.php' );
//require_once( dirname( __FILE__ ) . '/inc/shortcodes.php' );

require_once( 'inc/bp_columns.php' );
require_once( 'inc/bp_antispam.php' );
//require_once( 'inc/bs_collapse.php' );
require_once( 'inc/bp_alerts.php' );
//require_once( 'inc/bp_well.php' );
require_once( 'inc/bp_buttons.php' );
//require_once( 'inc/bs_labels.php' );
require_once( 'inc/bp_icons.php' );
require_once( 'inc/bp_lead.php' );
//require_once( 'inc/bs_tooltip.php' );

class BootplateShortcodes{

    public $shortcodes = array(
        //'columns',
        'antispam',
        'alerts',
        'alerts',
        'buttons',
        'icons',
        'lead'
    );
	
	public function __construct() {
        add_action( 'init', array( &$this, 'init' ) );
        //register_activation_hook( __FILE__, array( &$this, 'add_options_defaults' ) );
        //add_action( 'admin_init', array( &$this, 'register_settings' ) );
        //add_action( 'admin_menu', array( &$this, 'register_settings_page' ) );
    }
	
	function init() {
        //$options = get_option( 'bp_options' );
        wp_enqueue_style( 'bp_admin_style', plugins_url( 'css/admin.css', __FILE__ ) );
        if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
            return;
        }
        if ( get_user_option( 'rich_editing' ) == 'true' ) {
            add_filter( 'mce_external_plugins', array( &$this, 'regplugins' ) );
            add_filter( 'mce_buttons_3', array( &$this, 'regbtns' ) );
        }
    }
	
	function regbtns( $buttons ) {
        //$options = get_option( 'bs_options' );
        foreach ( $this->shortcodes as &$shortcode ) {
			array_push( $buttons, 'bp_' . $shortcode );
        }
        return $buttons;
    }
	
	function regplugins( $plgs) {
        foreach ( $this->shortcodes as &$shortcode ) {
            $plgs[ 'bp_' . $shortcode ] = plugins_url( 'js/plugins/' . $shortcode . '.js', __FILE__ );
        }
        return $plgs;
    }
	
} // END class BootplateShortcodes

// Shortcodes empty <p> fix
if( !function_exists('jdm_fix_shortcodes') ) {
	function jdm_fix_shortcodes($content){   
		$array = array (
			'<p>[' => '[', 
			']</p>' => ']', 
			']<br />' => ']'
		);
		$content = strtr($content, $array);
		return $content;
	}
	add_filter('the_content', 'jdm_fix_shortcodes');
}

$bscodes = new BootplateShortcodes();

?>