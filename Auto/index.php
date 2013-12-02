<?php
include_once 'testcaseid.php';

$index = 0;
$index = $_GET['id'];
$nextval = $index+1;
$prevval = $index-1;
$next = "index.php?id=$nextval";
$prev = "index.php?id=$prevval";

$testcase[$testSequence[$index]];
$currentScript  = array();
$currentcssScript= "";
$currentPage = $testSequence[$index].".php";

if($testcase[$testSequence[$index]][1]){
$currentScript = explode(',', $testcase[$testSequence[$index]][1]);

}

if($testcase[$testSequence[$index]][2]){
$currentcssScript = $testcase[$testSequence[$index]][2].".css";
}




include_once 'header.php';
include $currentPage;
include_once 'footer.php';

?>