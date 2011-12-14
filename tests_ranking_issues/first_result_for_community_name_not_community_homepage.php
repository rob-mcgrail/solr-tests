<?php
require_once(dirname(__FILE__) . '/../lib/all.php');

class FirstResultForCommunityNameNotCommunityHomepage extends UnitTestCase {
	function test_community_names_return_homepage_as_first_result() {
	  # Check that first result for each query is appropriate 
	  # homepage id
		$test_items = array(
			'english online' => 'TKI80868',
			'assessment online' => 'TKI58274',
			'assessment' => 'TKI58274',
			'education for enterprise' => 'TKI45249',
			'digistore' => 'TKI59990',
			'alternative education' => 'TKI17383',
			'digital technology guidelines' => 'TKI50586',
			'dtg' => 'TKI50586',
			'e-asttle' => 'TKI38879',
			'education for sustainability' => 'TKI50157',
			'literacy online' => 'TKI58077',
			'education outside the classroom' => 'TKI58260',
			'esol online' => 'TKI13739',
			'gifted and talented' => 'TKI17424',
			'gifted and talented online' => 'TKI17424',
			'he kohinga rauemi a-ipurangi' => 'TKI50637',
			'new zealand curriculum' => 'TKI46672',
			'tax citizenship' => 'TKI80668',
			'arts online' => 'TKI31449',
			'arts' => 'TKI31449',
			'educational leaders' => 'TKI57127',
			'home-school partnerships' => 'TKI59527',
			'home school partnerships' => 'TKI59527',
			'te tere auraki' => 'TKI28409',
			'success for boys' => 'TKI50135',
			'software for learning' => 'TKI50191',
		);
		foreach ($test_items as $key => $value) {
			$solr = new Solr();
			$this->assertEqual($value, $solr->first($key), "$value wasn't first result for query ".Helpers::search_link($key));	
		}
	}	
}
?>
