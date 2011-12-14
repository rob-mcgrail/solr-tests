<?php
require_once(dirname(__FILE__) . '/../lib/all.php');

class CanSearchForRecordsById extends UnitTestCase {
	function test_search_by_id_returns_correct_record() {
		# Check that searching for an ID returns associated record
		$test_items = array(
			'TKI80868',
			'TKI80039',
			'TKI80875',
		);
		foreach ($test_items as $value) {
			$solr = new Solr();		
			$this->assertEqual($value, $solr->first($value), Helpers::search_link($value)." should return ".$value." as first result");
		}
	}
	function test_search_by_id_returns_single_record() {
		# Check that searching for an ID only gives you one result
		$test_items = array(
			'TKI80868',
			'TKI80039',
			'TKI80875',
		);
		foreach ($test_items as $value) {
			$solr = new Solr();		
			$this->assertEqual(1, $solr->count($value), Helpers::search_link($value)." should return only 1 result");
		}
	}
}
?>
