<?php
/*
 * WebWeasel Configuration File
 */

/*
 * Global informations
 */
 
// Title of the page
$GLOBALS['title'] = 'Website Title';

// Subtitle of the page (comment if not used)
$GLOBALS['subtitle'] = 'Website Subtitle';

// Relative path to the template folder.
$GLOBALS['tpl_folder'] = 'templates';

// Relative path to logo (comment if not used)
//$GLOBALS['logo_path'] = 'path/to/logo';

// Relative path to the skin
$GLOBALS['skin'] = 'classic.css';

// Define here the different pages of your website.
// The different informations are:
// 		filename: the name of the template containing the page.
//		menu: a boolean that indicates if the page is displayed in the global menu.
//		title: the title of the page in the menu.
$GLOBALS['pages'] = array(
	'test'	=> array( 'filename' => 'test.tpl', 'menu' => true, 'title' => 'Test page' ),
);

// Name of the default page.
$GLOBALS['default_page'] = 'test';

// Google Analytics (comment if not used)
//$GLOBALS['google_analytics_account'] = "Your account ID";

/*
 * News system
 */

// Use news system.
$GLOBALS['use_news'] = true;

// URL of the RSS feed to use as a news source
$GLOBALS['rss_url'] = 'http://code.google.com/feeds/p/webweasel/updates/basic';

// Maximum number of displayed news.
$GLOBALS['max_news'] = 4;
?>
