<?php

require_once(dirname(__FILE__) . '/simpletest/reporter.php');
    
class PrettyPassesReporter extends HtmlReporter {
	function paintCaseStart($message) {
    parent::paintCaseStart($message);
    $message = preg_replace('/(?!^)[[:upper:]][[:lower:]]/', ' $0', preg_replace('/(?!^)[[:upper:]]+/', ' $0', $message));
		print "<h2>$message</h2>\n<hr>";
	}
  function paintMethodStart($message) {
    parent::paintMethodStart($message);
    $message = str_replace('_', ' ', $message);
		print "<h3>$message</h3>";
  }
	function paintArbitraryMessage($message) {
		print "<h3>$message</h3>";
	}
  function paintPass($message) {
  	parent::paintPass($message);
   	print "<table><tr><td class=\"first\"><span class=\"pass\">Pass:</span></td><td><span class=\"pass\">";
  	$breadcrumb = $this->getTestList();
  	array_shift($breadcrumb);
  	print implode(" -> ", $breadcrumb);
		$message = str_replace('replace55', "pass", $message);		
  	print ": $message</td></tr></table>\n";
  }
	function paintFail($message) {
		parent::scoreFail($message);
		print "<table><tr><td class=\"first\"><span class=\"fail\">Fail:</span></td><td><span class=\"fail\">";
		$breadcrumb = $this->getTestList();
		array_shift($breadcrumb);
		print implode(" -> ", $breadcrumb);
		$message = str_replace('[', "</span><span class=\"fail\">[", $message);
		$message = str_replace(']', "]</span>", $message);
		$message = str_replace('replace55', "subtle", $message);		
    print ": </span><span class=\"subtle\">$message</td></tr></table>\n";
	}
	protected function getCss() {
      return parent::getCss() . '
			.pass {color:green;}
			.subtle {color:#7B0000;}
			h1 {display:none;}
			h2,h3,h4{font-family:Verdana,Sans-serif;}
			table {margin-bottom:0.5em;width:100%;}
			tr {vertical-align:top;}
			td.first {width:3em;}
		';
  }
}
?>
