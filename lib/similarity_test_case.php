<?php
# robert.mcgrail@cwa.co.nz
#
# Includes a useful method for comparing an array of ids against search results for similarity.
# $strict = 1 means all values must find matches. 2 means half, etc.
# $drift specifies how big the match pool is. $drift = 2: if there are 3 values, find them in 6 results.
require_once(dirname(__FILE__) . '/simpletest/web_tester.php');

class SimilarityTestCase extends UnitTestCase {
	function assessSimilarity($array, $strict = 1, $drift = 2) {
    foreach ($array as $key => $value) {
      $solr = new Solr();
      $results = $solr->search($key, count($value)*$drift);
      $matches = 0;
      foreach ($results as $pid) {
        if (in_array($pid, $value)) {
          $matches++;
        }
      }
      $this->assertTrue(($matches*$strict) >= count($value), "Search for ".Helpers::search_link($key)." returned ".$matches." of it's expected results in the top ".(count($value)*$drift));
    }
  }
}
?>
