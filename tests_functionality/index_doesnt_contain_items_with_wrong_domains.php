<?php
require_once(dirname(__FILE__) . '/../lib/all.php');

class IndexDoesntContainItemsWithWrongDomains extends UnitTestCase {
	function test_legacy_paths_not_indexed_with_nonlegacy_domains(){
	  # Searches for legacy urls on non-legacy domains, like:
	  # gifted.tki.org.nz/m/search/
		$test_domains = array(
			'gifted.tki.org.nz',
			'www.wicked.org.nz',
			'assessment.tki.org.nz',
			'nzcurriculum.tki.org.nz',
			'secondary.tki.org.nz',
			'englishonline.tki.org.nz',
			'artsonline.tki.org.nz',
		);
		$test_paths = array(
			'/e/community/ncea/',
			'/e/community/maorieducation/',
			'/e/community/pasifika/',
			'/m/search/',
			'/e/search/',
			'/r/literacy_numeracy/professional/teachers_notes/ready_to_read/',
		);
		foreach ($test_domains as $domain) {
		  foreach ($test_paths as $path) {
			  $solr = new Solr();		
        $query = $domain.$path;
			  $this->assertEqual(0, $solr->count($query), Helpers::search_link($query)." should return no results");
	    }
		}
	}
}
?>
