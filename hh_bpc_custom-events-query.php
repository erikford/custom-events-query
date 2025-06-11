<?php
/*
Plugin Name:  The Events Calendar Pro Custom Query in Elementor Pro
Plugin URI:   https://heavyheavy.com
Description:  Customize the default ECP query used in the Elementor Pro Loop Widget
Version:      1.0
Author:       Heavy Heavy
Author URI:   https://heavyheavy.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

// Check if Elementor Pro is installed and activated
if ( is_plugin_active( 'elementor-pro/elementor-pro.php' ) ) {
	
	// Check if Events Calendar Pro is installed and activated
	if ( is_plugin_active( 'the-events-calendar-pro/the-events-calendar-pro.php' )  ) {
		// Add query arguments
		function hh_bpc_custom_events_query( $query ) {
			$query -> set( 'tribe_hide_recurrence', '1' ); // only show one upcoming recurring event
		}
		add_action( 'elementor/query/upcoming_events', 'hh_bpc_custom_events_query' );
		// I believe you set the query ID to upcoming_events.
	}
	
}
?>