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

require_once("config.php");
require_once('RSSReader.lib.php');

echo "<h5>What's new?</h5>\n";

$feed = new Feed();
$feed->setUrl($GLOBALS['rss_url']);

foreach( $feed->getEntries($GLOBALS['max_news']) as $entry ) {
	echo "<h6>" . $entry->title . "</h6>\n";
	echo "<p class=\"date\">" . $entry->date . "</p>\n";
	echo "<p>" . $entry->content . "</p>\n";
}
?>
