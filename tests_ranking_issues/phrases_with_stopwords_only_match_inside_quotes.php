<?php
require_once(dirname(__FILE__) . '/../lib/all.php');

class PhrasesWithStopwordsOnlyMatchInsideQuotes extends UnitTestCase {
	function test_phrases_in_index_return_matches() {
	  # Checks first that searching for the phrase inside quotes does match
	  # If it does, checks for matches without quotes.
		$test_items = array(
			'"animals in circuses"',
			'"This Chinese official"',
			'"This Taihape Area School"',
			'"refers to Waitangi as"',
			'"posted on any forum"',
			'"highest level of their interest and ability"',
		);
		foreach ($test_items as $value) {
			$solr = new Solr();
			if ($solr->count($value)>=1) {
				$value = trim($value, '"');
			  $solr = new Solr();
			  $this->assertNotEqual(0, $solr->count($value), Helpers::search_link($value)." has ".$solr->count()." results");
		  }
		}
	}
}
