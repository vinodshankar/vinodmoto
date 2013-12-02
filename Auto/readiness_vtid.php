<?php
include_once 'testcaseid.php';
$vtidarray  = array();
$vt = $_GET['user'];

for ($i=0; $i<sizeof($testReadinessSequence); $i++)
{
	
	$vtidarray = explode(',',$testcaseReadiness[$testReadinessSequence[$i]][0]);

	for ($j=0; $j<sizeof($vtidarray); $j++)
	{
		
		if($vtidarray[$j]==$vt)
		{
			
			echo"<a href='readiness_index.php?id=$i'>$vt $testReadinessSequence[$i].php</a><br />";
		}
		
	}
}
?>