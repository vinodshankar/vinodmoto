<?php
if(!($_COOKIE["flagcookie"])){
$value = 'This is the value for cookie nothing';
$value1 = 'This is the value for cookie with time 5 min';
$value2 = 'This is the value for cookie with time 1 hour';
$value3 = 'This is the value for cookie with 365 days';
$flag = 'This is flag cookie';
setcookie("TestCookie1", $value);
setcookie("bhakta1", $value1, time()+300);  /* expire in 5min */
setcookie("bhakta2", $value1, time()+600);  /* expire in 10min */
setcookie("TestCookie3", $value2, time()+3600);  /* expire in 1 hour */
setcookie("deletethecookie", $value3, time()+31536000);  /* expire in 365 days */
setcookie("flagcookie", $flag, time()+31536010);  /* expire in 365 days */
}



echo "<br/><br/><br/><pre>";
print_r($_COOKIE);
?>



<p><div id="result"></div></p>
<br/><br/><br/>
<span id="cookieStatus"></span>
<br/>
<form name="cookieform" action="#">
<p>
The value of the cookie should be <input name="cookievalue" />
</p>
</form>

<p><a href="javascript:saveIt('ppkcookie1')" >Create cookie 1</a><br />
<a href="javascript:readIt('ppkcookie1')" >Read cookie 1</a><br />
<a href="javascript:eraseIt('ppkcookie1')" >Erase cookie 1</a>.</p>

<p><a href="javascript:saveIt('ppkcookie2')" >Create cookie 2</a><br />
<a href="javascript:readIt('ppkcookie2')" >Read cookie 2</a><br />
<a href="javascript:eraseIt('ppkcookie2')" >Erase cookie 2</a>.</p>
<span id="cinfo"></span>
