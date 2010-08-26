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

require_once("parser.php");

class FeedEntry {

	public $date = '';

	public $title = '';

	public $content = '';

	public function setDate($date) {
		$this->date = substr($date,0,10);
	}		

	public function setTitle($title) {
		$this->title = $title;
	}

	public function setContent($content) {
		$this->content = $content;
	}

}

class Feed {

	public $url = '';

	public function setUrl($url) {
		$this->url = $url;
	}

	public function getEntries($max) {
		//Get the XML document loaded into a variable
		$xml = file_get_contents($this->url);
		//Parse XML
		$parser = new XMLParser($xml);
		$parser->Parse();

		$entries = array();

		foreach( $parser->document->entry as $entry ) {
			$myentry = new FeedEntry();
			$myentry->setDate( $entry->published[0]->tagData );
			$myentry->setTitle( $entry->title[0]->tagData );
			$myentry->setContent( $entry->content[0]->tagData );

			array_push($entries,$myentry);

			if ( count($entries) == $max ) {
				return $entries;
			}
		}

		return $entries;
	}
}
?>
