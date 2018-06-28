<?php
/**
 * Description
 *
 * @package:  	 ${NAMESPACE}
 * @since:       1.0.0
 * @author:      Darryl Lardizabal
 * @link:  		 https://example.com
 * @license:     GPL-2.0+
 */

namespace LearnThePlug;

add_action( 'loop_start', __NAMESPACE__. '\demo' );

/**
 * DEMO - testing purposes.
 * 
 * @since 1.0.0
 * 
 * @return void
 */
function demo() {
	var_dump( get_the_ID() );
	echo get_the_ID();
	d( get_the_ID() );
}
