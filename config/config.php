<?php
/**
 * Pico Configuration
 *
 *  This is the configuration file for Pico. It comes loaded with the
 *  default values, which can be found in the get_config() method of
 *  the Pico class (lib/pico.php).
 *
 * @author Gilbert Pellegrom
 * @link http://picocms.org
 * @license http://opensource.org/licenses/MIT
 * @version 0.9
 *
 * To override any of the default settings below, copy this file to
 * `config.php`, uncomment the line and make and save your changes.
 */

/*
 * BASIC
 */
$config['site_title'] = 'Ça Claque!';           // Site title
// $config['base_url'] = '';                       // Override base URL (e.g. http://example.com)
// $config['rewrite_url'] = null;               // A boolean indicating forced URL rewriting

/*
 * THEME
 */
$config['theme'] = 'cc';                        // Set the theme (defaults to "default")
// $config['twig_config'] = array(                 // Twig settings
//	'cache' => false,	                        // To enable Twig caching change this to CACHE_DIR
//	'autoescape' => false,                      // Autoescape Twig vars
//	'debug' => false                            // Enable Twig debug
// );

/*
 * CONTENT
 */
$config['date_format'] = '%F';                  // Set the PHP date format as described here: http://php.net/manual/en/function.strftime.php
$config['pages_order_by'] = 'date';             // Order pages by "alpha" or "date"
$config['pages_order'] = 'asc';                 // Order pages "asc" or "desc"
$config['excerpt_length'] = 50;                 // The pages excerpt length (in words)
$config['content_dir'] = 'content/';            // Content directory
// $config['content_ext'] = '.md';              // File extension of content files to serve

/*
 * TIMEZONE
 */
// $config['timezone'] = 'UTC';                 // Timezone may be required by your php install

/*
 * CUSTOM
 */
// $config['custom_setting'] = 'Hello';            // Can be accessed by {{ config.custom_setting }} in a theme

// Keep this line
return $config;