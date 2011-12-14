<?php
# robert.mcgrail@cwa.co.nz
#
# Includes a useful method for getting array of matches accross entire page of text.
require_once(dirname(__FILE__) . '/simpletest/web_tester.php');

class ExtendedWebTestCase extends WebTestCase {
	function getMatches($pattern) {
  	ob_start();
  	$this->showText();  
   	$content = ob_get_contents();
  	ob_end_clean();
		if (preg_match($pattern, $content, $matches)) {
			return $matches;
		} else {
			return null;
		}
	}
}
?>
