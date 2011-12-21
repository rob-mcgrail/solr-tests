<?php
require_once(dirname(__FILE__) . '/../lib/all.php');

class TopResultsSubstantiallyUnchanged extends SimilarityTestCase {
		var $test_items = array(
			'healthy eating' => array('TKI50201', 'TKI50556', 'TKI15495', 'TKI50434', 'TKI47972'),
			'tectonic plates' => array('TKI58046', 'http://www.tki.org.nz/r/science/science_is/activities/isact_plate_tectonics_e.php', 'http://www.tki.org.nz/r/science/science_is/activities/isact_plate_tectonics_02_e.php', 'TKI13692'),
			'maori customs' => array('TKI32890', 'TKI45402', 'TKI18691'),
			'publisher template' => array('TKI29833', '2ec7668b320d11e9c59147bc90395941', 'TKI32630'),
			'national standards maths year 8' => array('TKI59840', '31fd153f89403f87209dcc5276da04ee'),		
			'mathematics year 8 national standards' => array('TKI59734', 'TKI59736', 'TKI59734', 'TKI59736', '4d42dd0f0c9efb51e011ed39861878ca'),
			'seasons' => array('TKI14835', 'TKI32887'),
			'employment contracts' => array('TKI15422', 'TKI21996', 'TKI22040', 'TKI34576'),
			'putaiao manu' => array('TKI37823', 'TKI38934', 'TKI37823', 'TKI59718'),
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
