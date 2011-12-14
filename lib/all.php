<?php
# Includes the usual includes, saves constant repition
require_once(dirname(__FILE__) . '/simpletest/autorun.php');
require_once(dirname(__FILE__) . '/pretty_passes_reporter.php');
require_once(dirname(__FILE__) . '/extended_web_test_case.php');
require_once(dirname(__FILE__) . '/solr.php');
require_once(dirname(__FILE__) . '/helpers.php');
require_once(dirname(__FILE__) . '/similarity_test_case.php');
SimpleTest::prefer(new PrettyPassesReporter());
?>
