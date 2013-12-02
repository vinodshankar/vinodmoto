<?php

?>
<html>
	<head>
	<?php

	if(sizeof($currentScript)>=0){
		for($i = 0; $i < sizeof($currentScript);$i++)

		{
			echo "<script type='text/javascript' src='$currentScript[$i].js'></script>";
		}
		}
	?>
		
		<link rel="stylesheet" type="text/css" href="<?= $currentcssScript?>">
	</head>
<body><br /><br /><br /><br />
<div>
<table>
<tr>
<td><a href="<?= $prev ?>">Prev</td>
<td><a href="<?= $next ?>">Next</td>
</tr>
</table>
</div>
<form name="input" action="vtid.php" method="get">
VTID: <input type="text" name="user" id="vtid">
<input type="submit" value="Submit">
</form>

<a href="readiness_index.php?id=0">Readiness Testing</a>