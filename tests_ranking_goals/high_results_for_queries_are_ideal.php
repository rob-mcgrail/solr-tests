<?php
require_once(dirname(__FILE__) . '/../lib/all.php');

class TopResultsSubstantiallyUnchanged extends SimilarityTestCase {
		var $test_items = array(
			'ncea' => array('TKI34728'),
			'exemplars' => array('TKI80874', 'TKI80013', 'TKI23004', 'TKI23006'),
			'english' => array('TKI80868', 'TKI23033', 'TKI81146'),
			'digistore' => array('TKI59990'),
			'science' => array('TKI80039', 'TKI46710', 'TKI50163'),
			'writing exemplars' => array('TKI23033', 'TKI80013'),
			'maths' => array('TKI80875', 'TKI81142', 'TKI46708', 'TKI59736', 'TKI81146', 'TKI18365'),
			'assessment' => array('TKI58274', 'TKI58281', 'TKI58275', 'TKI58283', 'TKI80028', 'TKI80375'),
			'lesson plans' => array('TKI59675', 'TKI80876', 'TKI80024', 'TKI81142'),
			'physical education' => array('TKI50420', 'TKI81134', 'TKI46694', 'TKI81098'),
			'fractions' => array('TKI81143'),
			'epic' => array('TKI26137'),
			'national standards' => array('TKI59734', 'TKI59736', 'TKI59735', 'TKI80013', 'TKI60122', 'TKI60118', 'TKI80038'),
			'ready to read' => array('TKI81136'),
			'technology' => array('TKI21617', 'TKI46712', 'TKI50165'),
			'biology' => array('TKI50476', 'TKI81145'),
			'wicked' => array('TKI6601'),
			'maori' => array('TKI81133', 'TKI57989', 'TKI81135', 'TKI80874'),
			'social studies' => array('TKI81137', 'TKI81138', 'TKI17418', 'TKI46711', 'TKI28818'),
			'english exemplars' => array('TKI59642', 'TKI23033', 'TKI50479'),
			'ikan' => array('TKI81139'),
			'geography' => array('TKI50412', 'TKI59650'),
			'matariki' => array('TKI30955', 'TKI81141', 'TKI36063'),
			'asttle' => array('TKI81139', 'TKI39709', 'TKI50590', 'TKI81144'),
			'e-asttle' => array('TKI38879', 'TKI39709', 'TKI50590', 'TKI81144'),
			'school journals' => array('TKI80022'),
		);
	 
	function test_if_top_query_picks_present() {
    $this->assessSimilarity($this->test_items);
  }
  
	function test_if_top_query_picks_present_strictly() {
    $this->assessSimilarity($this->test_items, 1, 1);
  }
  
	function test_if_top_query_picks_present_losely() {
    $this->assessSimilarity($this->test_items, 2, 3);
  }
}
?>
