<?php
/*
 * Copyright (c) 2008 Jean-Rémy Falleri <jr.falleri@laposte.net>
 */

/*
 * This file is part of WebWeasel.

 * WebWeasel is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * WebWeasel is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with WebWeasel. If not, see <http://www.gnu.org/licenses/>.
 */

require_once('config.php');
require_once('WikiRenderer.lib.php');
require_once("AtomReader.lib.php");

/*
 * Website management
 */

function get_title() {
	return $GLOBALS['title'];
}

function is_subtitle() {
	return isset($GLOBALS['subtitle']);
}

function get_subtitle() {
	return $GLOBALS['subtitle'];
}

function is_logo_path() {
	return isset($GLOBALS['logo_path']);
}

function get_logo_path() {
	return $GLOBALS['logo_path'];
}

function get_css_path() {
	return $GLOBALS['css_path'];
}

function is_google_analytics_account() {
	return isset($GLOBALS['google_analytics_account']);
}

function get_google_analytics_account() {
	return $GLOBALS['google_analytics_account'];
}

function get_google_analytics_js() {
	return	"<script type=\"text/javascript\">\n" .
				"	var _gaq = _gaq || [];\n" .
				"	_gaq.push(['_setAccount','" . get_google_analytics_account() . "']);\n" .
				"	_gaq.push(['_trackPageview']);\n" .			
  				"	(function() {\n" .
    			"		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;\n" .
    			"		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';\n" . 
				"		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);\n" .
				"	})();\n" .
				"</script>\n";
}

/*
 * Page management
 */

function get_current_page() {
	if ( isset($_GET['page_name']) ) {
		return $_GET['page_name'];
	}
	else {
		return get_default_page();
	}
}

function get_pages() {
	return $GLOBALS['pages'];
}

function get_default_page() {
	return $GLOBALS['default_page'];
}

function get_page($page_name) {
	return $GLOBALS['pages'][$page_name];
}

function get_page_info($page_name,$info_name) {
	return $GLOBALS['pages'][$page_name][$info_name];
}

function get_tpl_folder_path() {
	return $GLOBALS['tpl_folder_path'];
}

function get_current_page_content() {
	return get_page_content(get_current_page());
}

function get_page_content($page_name) {
	$content = file_get_contents(get_tpl_folder_path() . '/' . get_page_info($page_name,'filename'));
	$wkr = new WikiRenderer();
	return $wkr->render($content);
}

/*
 * News system
 */

function is_atom_feed_url() {
	return isset($GLOBALS['atom_feed_url']);
}

function get_atom_feed_url() {
	return $GLOBALS['atom_feed_url'];
}

function get_max_news() {
	return $GLOBALS['max_news'];
}

function get_atom_feed_entries() {
	$feed = new AtomFeed();
	$feed->setUrl(get_atom_feed_url());
	return $feed->getEntries(get_max_news());
}

/*
 * WebWeasel info functions
 */

function get_webweasel_version() {
	return "1.2";
}

function get_webweasel_link() {
	return "<a href=\"http://code.google.com/p/webweasel\">WebWeasel</a>";
}
?>
