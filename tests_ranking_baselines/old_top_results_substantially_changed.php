<?php
require_once(dirname(__FILE__) . '/../lib/all.php');

class TopResultsSubstantiallyUnchanged extends SimilarityTestCase {
	function test_if_dec_2011_top_query_results_changed() {
		$test_items = array(
			'ncea' => array('TKI34728', 'TKI80908', 'TKI80909', 'TKI50415'),
			'exemplars' => array('TKI80874', 'TKI23001', 'TKI23004', 'TKI23006'),
			'english' => array('TKI80868', 'TKI23033', 'TKI50479', 'TKI59642'),
			'digistore' => array('TKI59990', 'TKI47833', 'TKI47836', 'TKI47838'),
			'science' => array('TKI80039', 'TKI32404', 'TKI32402', 'TKI9653'),
			'writing exemplars' => array('TKI80874', 'TKI23036', 'TKI23034', 'TKI23037'),
			'maths' => array('TKI80875', 'TKI60187', 'TKI50149', 'TKI13250'),
			'assessment' => array('TKI58274', 'TKI58275', 'TKI58282', 'TKI17426'),
			'lesson plans' => array('TKI40013', 'TKI48956', 'TKI80015', 'TKI59556'),
			'physical education' => array('TKI50420', 'TKI81098', 'TKI17422', 'TKI50203'),
			'fractions' => array('TKI44525', 'TKI38724', 'TKI80749', 'TKI51817'),
			'epic' => array('TKI26137', 'TKI217', '8bb6909ad2bd686c7946808c46161ef9', 'TKI24091'),
			'national standards' => array('TKI59734', 'TKI59736', 'TKI59735', 'TKI80714'),
			'ready to read' => array('TKI11546', 'TKI46348', 'TKI33807', 'TKI33815'),
			'technology' => array('TKI21617', 'TKI50165', 'TKI50421', 'TKI23260'),
			'biology' => array('TKI50476', 'TKI35247', 'TKI49977', 'TKI49976'),
			'wicked' => array('http://www.wicked.org.nz/', 'TKI6601', 'TKI13723', 'TKI13252'),
			'maori' => array('TKI35292', 'TKI37571', 'TKI36411', 'TKI45937'),
			'social studies' => array('TKI28818', 'TKI50485', 'TKI17420', 'TKI28820'),
			'english exemplars' => array('TKI23033', 'TKI5676', 'TKI59642', 'TKI50479'),
		);
    $this->assessSimilarity($test_items);
  }
	function test_if_arbitrary_results_changed() {
		$test_items = array(
			'level 1 ncea' => array('TKI28732', 'TKI44381', 'TKI49979', 'TKI49976'),
			'level 2 ncea' => array('TKI40021', 'TKI35140', 'TKI49982', 'TKI49977'),
			'level 3 ncea' => array('TKI35138', 'TKI49981', 'TKI49978', 'TKI49983'),
			'science online' => array('TKI80039', 'TKI17418', 'TKI37723', 'TKI50160'),
			'education' => array('TKI34548', 'TKI17383', 'TKI57127', 'TKI50157'),
			'overall teacher judgments' => array('TKI80375', 'a4959e7081e558f63bc71ec4be6bda58', '0607bd39089ed0105a58cf555c195016', 'e5ca84092a9da371b70f54004abed00a'),		
			'special education' => array('TKI5', 'TKI33838', 'TKI32582', 'TKI36066'),
			'gifted students' => array('TKI17424', 'TKI80016', 'TKI36120', 'TKI22648'),
			'explanation' => array('TKI32119', 'TKI28462', 'TKI32376', 'TKI59678'),
			'inference' => array('TKI39068', 'TKI80697', 'TKI14638', 'TKI14642'),
		);
    $this->assessSimilarity($test_items);
  }
}
?>
