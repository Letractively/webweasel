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
?>
<head>
<?php
	require_once("functions.php");
	
	echo " 	<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />" . "\n";
	echo "	<title>" . get_title() . "</title>" . "\n";
	echo "	<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_css_path() ."\" />" . "\n";

	if ( is_atom_feed_url() ) {
		echo "	<link rel=\"alternate\" type=\"application/atom+xml\" href=\"" . get_atom_feed_url() . "\" id=\"auto-discovery\"\>" . "\n";	
	}

	if ( is_google_analytics_account() ) {
		echo get_google_analytics_js();
	}
?>
</head>

