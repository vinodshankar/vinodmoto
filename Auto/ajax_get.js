<!--
// create the XMLHttpRequest object, according browser
function get_XmlHttp() {
  // create the variable that will contain the instance of the XMLHttpRequest object (initially with null value)
  var xmlHttp = null;

  if(window.XMLHttpRequest) {		// for Forefox, IE7+, Opera, Safari, ...
    xmlHttp = new XMLHttpRequest();
alert('am window.XMLHttpRequest')
  }
  else if(window.ActiveXObject) {	// for Internet Explorer 5 or 6
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
alert('window.ActiveXObject')

  }
alert(xmlHttp);

  return xmlHttp;
}

// sends data to a php file, via GET, and displays the received answer
function ajaxrequest(serverPage, tagID) {
  var request =  get_XmlHttp();		// call the function for the XMLHttpRequest instance

  // create the URL with data that will be sent to the server (a pair index=value)
  var  url = serverPage+'?test='+document.getElementById('txt1').innerHTML;

  request.open("GET", url, true);			// define the request
  request.send(null);		// sends data

  // Check request status
  // If the response is received completely, will be transferred to the HTML tag with tagID
  request.onreadystatechange = function() {
    if (request.readyState == 4) {
      document.getElementById(tagID).innerHTML = request.responseText;
    }
  }
}
-->