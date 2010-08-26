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
	require_once("config.php");
	
	echo " 	<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />" . "\n";
	echo "	<title>" . $GLOBALS['title'] . "</title>" . "\n";
	echo "	<link rel=\"stylesheet\" type=\"text/css\" href=\"" . $GLOBALS['skin'] ."\" />" . "\n";
	echo "	<link rel=\"shortcut icon\" href=\"img/favicon.ico\" />" . "\n";

	if ( isset($GLOBALS['google_analytics_account']) ) {	
		echo "	<script type=\"text/javascript\">" . "\n";
		echo "	var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");" . "\n";
		echo "	document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));" . "\n";
		echo "	</script>" . "\n";
		echo "\n";
		echo "	<script type=\"text/javascript\">" . "\n";
		echo "	var pageTracker = _gat._getTracker(\"" . $GLOBALS['google_analytics_account'] . "\");" . "\n";
		echo "	pageTracker._initData();" . "\n";
		echo "	pageTracker._trackPageview();" . "\n";
		echo "	</script>" . "\n";
	}
?>
</head>