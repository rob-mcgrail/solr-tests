<?php
require_once(dirname(__FILE__) . '/../lib/all.php');

class TopResultsSubstantiallyUnchanged extends SimilarityTestCase {
	function test_if_dec_2011_top_query_results_changed() {
		$test_items = array(
			'ncea' => array('TKI34728', 'TKI80908', 'TKI80909', 'TKI80907'),
			'exemplars' => array('TKI80874', 'TKI80013', 'TKI81146', 'TKI23001'),
			'english' => array('TKI80868', 'TKI59642', 'TKI59671', 'TKI59645'),
			'digistore' => array('TKI59990', 'TKI47833', 'TKI47838', 'TKI47836'),
			'science' => array('TKI80039', 'TKI32404', 'TKI32402', 'TKI50163'),
			'writing exemplars' => array('TKI23036', 'TKI23034', 'TKI23037', 'TKI23039'),
			'maths' => array('TKI80875', 'TKI46708', 'TKI59736', 'TKI81146'),
			'assessment' => array('TKI58274', 'TKI58275', 'TKI80028', 'TKI58280'),
			'lesson plans' => array('TKI40013', 'TKI48956', 'TKI80015', 'TKI59556'),
			'physical education' => array('TKI81098', 'TKI50203', 'TKI18650', 'TKI50164'),
			'fractions' => array('TKI81143', 'TKI44525', 'TKI38724', 'TKI80749'),
			'epic' => array('TKI26137', 'TKI217', '8bb6909ad2bd686c7946808c46161ef9', 'TKI24091'),
			'national standards' => array('TKI59734', 'TKI59736', 'TKI59735', 'TKI80714'),
			'ready to read' => array('TKI81136', 'TKI11546', 'TKI46348', 'TKI46346'),
			'technology' => array('TKI21617', 'TKI50421', 'TKI23260', 'TKI50586'),
			'biology' => array('TKI50476', 'TKI35247', 'TKI10455', 'TKI49977'),
			'wicked' => array('http://www.wicked.org.nz/', 'TKI6601', 'TKI13252', 'TKI13723'),
			'maori' => array('TKI37571', 'TKI36411', 'TKI32612', 'TKI45937'),
			'social studies' => array('TKI50485', 'TKI28818', 'TKI17420', 'TKI81137'),
			'english exemplars' => array('TKI59642', 'TKI23033', 'TKI14090', 'TKI23040'),
		);
    $this->assessSimilarity($test_items);
  }
	function test_if_arbitrary_results_changed() {
		$test_items = array(
			'level 1 ncea' => array('TKI44381', 'TKI49979', 'TKI49976', 'TKI49988'),
			'level 2 ncea' => array('TKI40021', 'TKI35140', 'TKI49982', 'TKI49977'),
			'level 3 ncea' => array('TKI35138', 'TKI49981', 'TKI49978', 'TKI49983'),
			'science online' => array('TKI80039', 'TKI17418', 'TKI37723', 'TKI50160'),
			'education' => array('TKI57127', 'TKI17383', 'TKI50157', 'TKI34548'),
			'overall teacher judgments' => array('TKI80375', 'a4959e7081e558f63bc71ec4be6bda58', 'b7463491122f57714609cc3dadedc633', 'd8ea2c7eb4d5315323994381caacdc8c'),		
			'special education' => array('TKI81008', 'TKI5', 'TKI33838', 'TKI32582'),
			'gifted students' => array('TKI17424', 'TKI80016', 'TKI22648', 'TKI36120'),
			'explanation' => array('TKI32119', 'TKI28462', 'TKI32376', 'TKI59678'),
			'inference' => array('TKI39068', 'TKI80697', 'TKI14638', 'TKI14642'),
		);
    $this->assessSimilarity($test_items);
  }
}
?>
