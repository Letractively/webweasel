<?php
/*
 * Copyright (c) 2010 Jean-Rémy Falleri <jr.falleri@laposte.net>
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
?>

<body>

<div class="container">

<div class="header">

<?php
require('config.php');

echo "<div class=\"description\">\n";
echo "<h1>"  . $GLOBALS['title'] . "</h1>\n";
if ( isset($GLOBALS['subtitle']) ) {
	echo $GLOBALS['subtitle'] . "\n";
}
echo "</div>\n";

if ( isset($GLOBALS['logo_path']) ) {
	echo "<img src=\"" . $GLOBALS['logo_path'] . "\" alt=\"Logo\"/>\n";
}
?>

<div class="navbar">
<ul class="navbar">
<?php
	require_once('functions.php');
	
	foreach( get_pages() as $page_name => $page_infos ) {
		if ( get_page_info($page_name,'menu') == true ) {
			echo build_menu($page_name);
		}
	}
	
	function build_menu($page_name) {	
		if ( $page_name == get_current_page() ) {
			return "<li><a href=\"index.php?page_name=" . $page_name . "\" class=\"navactive\">" . get_page_info($page_name,'title') . "</a></li>\n";
		}
		else {
			return "<li><a href=\"index.php?page_name=" . $page_name . "\" class=\"nav\">" . get_page_info($page_name,'title') . "</a></li>\n";
		}
	}
?>
</ul>
</div>

</div>

<?
require_once('functions.php');

if ( $GLOBALS['use_news'] ) {
	echo "<div class=\"news\">" . "\n";

	echo "<h5>What's new?</h5>\n";

	foreach( get_atom_feed_entries() as $entry ) {
		echo "<h6>" . $entry->title . "</h6>\n";
		echo "<p class=\"date\">" . $entry->date . "</p>\n";
		echo "<p>" . $entry->content . "</p>\n";
	}

	echo "</div>" . "\n";
}
?>

<div class="content">
<?php
require_once('functions.php');

echo get_current_page_content();
?>
</div>

<div class="footer">
<?php
require_once("functions.php");

echo "	<p class=\"bottom\">Powered by " . get_webweasel_link() . " (version " . get_webweasel_version() . ") &copy; 2008 Jean-Rémy Falleri</p>" . "\n";
?>
</div>

</div>

</body>
