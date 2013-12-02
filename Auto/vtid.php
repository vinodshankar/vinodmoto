<?php
include_once 'testcaseid.php';
$vtidarray  = array();
$vt = $_GET['user'];

for ($i=0; $i<sizeof($testSequence); $i++)
{
	
	$vtidarray = explode(',',$testcase[$testSequence[$i]][0]);

	for ($j=0; $j<sizeof($vtidarray); $j++)
	{
		
		if($vtidarray[$j]==$vt)
		{
			
			echo"<a href='index.php?id=$i'>$vt $testSequence[$i].php</a><br />";
		}
		
	}
}
?>