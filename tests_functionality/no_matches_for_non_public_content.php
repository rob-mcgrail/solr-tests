<?php
require_once(dirname(__FILE__) . '/../lib/all.php');

class NoMatchesForNonPublicContent extends UnitTestCase {
	function test_inhouse_names_return_no_matches() {
	  # Checks that the names of staff aren't returning items
		$test_items = array(
			'nicki alori',
			'jacinta allen',
			'rob mcgrail',
			'avigail lim',
			'raghu dontikurthi',
		);
		foreach ($test_items as $value) {
			$solr = new Solr();
			$this->assertEqual(0, $solr->count($value), "Search for ".Helpers::search_link($value)." returns ".$solr->count()." results, when none should be returned");
		}
	}
	function test_inhouse_emails_return_no_matches() {
	  # Checks that the names of staff aren't returning items
		$test_items = array(
			'nicki.alori@cwa.co.nz',
			'jacinta.allen@cwa.co.nz',
			'robert.mcgrail@cwa.co.nz',
			'avigail.lim@cwa.co.nz',
			'raja.thanga@cwa.co.nz',
		);
		foreach ($test_items as $value) {
			$solr = new Solr();
			$this->assertEqual(0, $solr->count($value), "Search for ".Helpers::search_link($value)." returns ".$solr->count()." results, when none should be returned");
		}
	}
  function test_staging_urls_return_no_matches() {
    # Test paths for common staging urls
		$test_items = array(
			'staging.internal',
			'dev.internal',
			'preprod',
		);
		foreach ($test_items as $value) {
			$solr = new Solr();		
			$this->assertEqual(0, $solr->count($value), "Search for ".Helpers::search_link($value)." returns ".$solr->count()." results, when none should be returned");
		}
	}
}
?>
