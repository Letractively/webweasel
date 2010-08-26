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

/*
 * Page management
 */

// Use this function to retrieve the current page.
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

function get_current_page_content() {
	return get_page_content(get_current_page());
}

function get_page_content($page_name) {
	$content = file_get_contents($GLOBALS['tpl_folder'] . '/' . get_page_info($page_name,'filename'));
	$wkr = new WikiRenderer();
	return $wkr->render($content);
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
