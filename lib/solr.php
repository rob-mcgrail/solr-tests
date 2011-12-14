<?php
# Mini Solr client for test suites
#
# Note: Solr objects cache $count, $first, and $pids,
# to refresh the data you need to run $solr->search(query,limit)
#
# Requires php5-curl package, ie:
# sudo apt-get install curl libcurl3 libcurl3-dev php5-curl
#
# robert.mcgrail@cwa.co.nz
# jason.darwin@cwa.co.nz

# todo:
# 	allow setting different query params in contructor

define ("SERVER", 'search.tki.org.nz');

class Solr {
	private	$count;
	private $first;
	private $pids;

	function __construct() {
	}
	function __execute($q, $limit) {
		$query = "http://".SERVER.":8983/solr/select?" . http_build_query( array('qt'=>'tki','q'=>$q,'rows'=>$limit) );
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $query);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if ( ! $output = curl_exec($ch) ) {
			trigger_error('CURL error:', curl_exec($ch));
		}
		curl_close($ch);

		$xml = new SimpleXMLElement($output);
		return $xml;
	}
	function search($q, $limit=100) {
		$xml = $this->__execute($q, $limit);
		$this->pids = array();
		foreach ($xml->xpath("//doc/str[@name='id']") as $node) {
			array_push($this->pids, (string) $node);
		}
		$this->first = reset($this->pids);
		$this->count = $xml->xpath('//result/@numFound');
		$this->count = $this->count[0]['numFound'];
		return $this->pids;
	}
	function count($q='', $limit=1) {
		if (!isset($this->count))  {
			$this->search($q, $limit);
			return (string) $this->count;
		}
		else
			return (string) $this->count;
	}
	function first($q='', $limit=1) {
		if (!isset($this->first))  {
			$this->search($q, $limit);
			return (string) $this->first;
		}
		else
			return (string) $this->first;
	}
}
?>
