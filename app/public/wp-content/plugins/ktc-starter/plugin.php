<?php
/**
 * Starter WP Plugin;
 *
 * @package     PluginPackage
 * @author      Darryl Lardizabal
 * @copyright   2018 PorterCo
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Starter WP Plugin
 * Plugin URI:  https://example.com/plugin-name
 * Description: Know the Code Starter Sandbox plugin. Use this plugin for all of the Know the Code demo labs and DocX.
 * Version:     1.0.0
 * Author:      Darryl Lardizabal
 * Author URI:  https://example.com
 * Text Domain: plugin-name
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace LearnThePlug;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

require_once( __DIR__ . '/assets/vendor/autoload.php' );

$whoops = new Run();
$error_page = new PrettyPageHandler();
$error_page->setEditor( 'sublime' );
$whoops->pushHandler( $error_page );
$whoops->register();

func_num_args();

add_action( 'loop_start', __NAMESPACE__ . '\demo' );
function demo() {
	d( get_the_ID() );
}