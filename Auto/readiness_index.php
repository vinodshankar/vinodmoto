<?php
include_once 'testcaseid.php';

$index = 0;
$index = $_GET['id'];
$nextval = $index+1;
$prevval = $index-1;
$next = "readiness_index.php?id=$nextval";
$prev = "readiness_index.php?id=$prevval";

$testcaseReadiness[$testReadinessSequence[$index]];
$currentScript  = array();
$currentcssScript= "";
$currentPage = $testReadinessSequence[$index].".php";

if($testcaseReadiness[$testReadinessSequence[$index]][1]){
$currentScript = explode(',', $testcaseReadiness[$testReadinessSequence[$index]][1]);

}

if($testcaseReadiness[$testReadinessSequence[$index]][2]){
$currentcssScript = $testcaseReadiness[$testReadinessSequence[$index]][2].".css";
}




include_once 'readiness_header.php';
include $currentPage;
include_once 'footer.php';

?>