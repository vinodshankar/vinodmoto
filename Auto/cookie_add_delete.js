
<!--

function saveIt(name) {
	var x = document.forms['cookieform'].cookievalue.value;
	alert(x);
	if (!x)
		alert('Please fill in a value in the input box.');
	else {
		createCookie(name,x,7);
		alert('Cookie created');
	}
}

function readIt(name) {
	alert('The value of the cookie is ' + readCookie(name));
}

function eraseIt(name) {
	eraseCookie(name);
	alert('Cookie erased');
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
// -->
