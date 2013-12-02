
function saveIt(name) {
	var x = document.forms['cookieform'].cookievalue.value;
	displayResult (x);
	if (!x)
		displayResult ('Please fill in a value in the input box.');
	else {
		createCookie(name,x,7);
		displayResult ('Cookie created');
	}
}

function readIt(name) {
	displayResult ('The value of the cookie is ' + readCookie(name));
}

function eraseIt(name) {
	eraseCookie(name);
	displayResult ('Cookie erased');
}

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}

function get_cookies_array() {

    var cookies = { };

    if (document.cookie && document.cookie != '') {
        var split = document.cookie.split(';');
        for (var i = 0; i < split.length; i++) {
            var name_value = split[i].split("=");
            name_value[0] = name_value[0].replace(/^ /, '');
            cookies[decodeURIComponent(name_value[0])] = decodeURIComponent(name_value[1]);
        }
    }

    return cookies;
   
}




function getCookieStatus()
{
	var cookieStatus = document.getElementById("cookieStatus");

    if(navigator.cookieEnabled)
    {
		cookieStatus.innerHTML = "Cookies are enabled.";
    }
    else
    {
    cookieStatus.innerHTML = "Cookies have been disabled.";
    }

}


window.onload=getCookieStatus;

var cookies = get_cookies_array();
var cspan = document.getElementById("cinfo");
cspan.innerHTML = "";
for(var name in cookies) {
	preText = cspan.innerHTML;
	cspan.innerHTML=preText+"<br/>"+name + " : " + cookies[name] + "<br />";
}
var displayResult = function (x){
document.getElementById('result').innerHTML = x;
}

