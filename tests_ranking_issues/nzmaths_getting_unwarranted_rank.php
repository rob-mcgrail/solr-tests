<?php
require_once(dirname(__FILE__) . '/../lib/all.php');

class NzmathsGettingUnwarrantedRank extends UnitTestCase {
	function test_generic_queries_not_full_of_nzmaths_results() {
		# Checks that first 10 results for generic queries aren't stacked
	  # with NZMaths items.
		$test_items = array(
			'assessment',
			'national standards',
			'learning',
			'tki',
			'education',
			'school',
			'science',
			'reading',
			'students',
		);
		foreach ($test_items as $value) {
			$solr = new Solr();
			$pids = $solr->search($value, 10);
			$i = 0;
			foreach ($pids as $id) {
				if (preg_match('/nzmaths/', $id)) {
					$i++;
				}
			}
			$this->assertTrue($i < 1, "Search for ".Helpers::search_link($value)." has too many free-text NZ Maths items");
		}
	}
	function test_nzmaths_where_appropriate() {
	  # Checks that first 10 results for nzmaths related keywords
	  # return good proportion of MZMaths items. Ensures fix for
	  # previous function doesn't work too well.
		$test_items = array(
			'ALiM school stories nzmaths',
			'Algebra information',
			'maths level 3 problems',
			'maths level 2 problems',
			'fractions',
			'Attribute Blocks: Exploring Shape',
			'scuba'
		);
		foreach ($test_items as $value) {
			$solr = new Solr();
			$pids = $solr->search($value, 20);
			$i = 0;
			foreach ($pids as $id) {
				if (preg_match('/nzmaths/', $id)) {
					$i++;
				}
			}
			$this->assertTrue($i > 0, "Search for ".Helpers::search_link($value)." has insufficient nzmaths items");
		}
	}
}
?>
