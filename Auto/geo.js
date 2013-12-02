
	var watchId;
	function requestLocationData(argsNumber)
	{
		if(!navigator.geolocation)
		{
			alert('Browser doesnt support Geolocation');
		}
		else
		{
			if(argsNumber=="1")
			navigator.geolocation.getCurrentPosition(success);
			else if(argsNumber=="2")
			navigator.geolocation.getCurrentPosition(success,error);
			else if(argsNumber=="3")
			{
			var HighAccuracyIndex=HighAccuracyList.selectedIndex;
            var HighAccuracyListValue=HighAccuracyList.options[HighAccuracyIndex].value;
            var maxAgeValue=MaxAgeText.value;
			var timeOutValue=TimeOutText.value;
			var positionParams="{";
			if(HighAccuracyListValue!="NULL")
			{
			 positionParams+="enableHighAccuracy:"+HighAccuracyListValue; 
			}
			if(maxAgeValue!="")
			{
			if(HighAccuracyListValue!="NULL")
			positionParams+=", maximumAge:"+maxAgeValue;
			else
			positionParams+="maximumAge:"+maxAgeValue;
			}
			if(timeOutValue!="")
			{
			if(HighAccuracyListValue=="NULL" && maxAgeValue=="")
			positionParams+="timeout:"+timeOutValue;
			else
			positionParams+=", timeout:"+timeOutValue;
			}
			positionParams+="}";
			DebugMsg.innerHTML=positionParams;
			navigator.geolocation.getCurrentPosition(success,error,positionParams);
			
			}
		}
	}
	
	function requestWatchPosition(argsNumber)
	{	
		if(!navigator.geolocation)
		{
			alert('Browser doesnt support Geolocation');
		}
		else
		{
			if(argsNumber=="1")
			watchId = navigator.geolocation.watchPosition(success);
			else if(argsNumber=="2")
			watchId = navigator.geolocation.watchPosition(success,error);
			else if(argsNumber=="3")
			{
			var HighAccuracyIndex=HighAccuracyList.selectedIndex;
            var HighAccuracyListValue=HighAccuracyList.options[HighAccuracyIndex].value;
            var maxAgeValue=MaxAgeText.value;
			var timeOutValue=TimeOutText.value;
			var positionParams="{";
			if(HighAccuracyListValue!="NULL")
			{
			 positionParams+="enableHighAccuracy:"+HighAccuracyListValue; 
			}
			if(maxAgeValue!="")
			{
			if(HighAccuracyListValue!="NULL")
			positionParams+=", maximumAge:"+maxAgeValue;
			else
			positionParams+="maximumAge:"+maxAgeValue;
			}
			if(timeOutValue!="")
			{
			if(HighAccuracyListValue=="NULL" && maxAgeValue=="")
			positionParams+="timeout:"+timeOutValue;
			else
			positionParams+=", timeout:"+timeOutValue;
			}
			positionParams+="}";
			DebugMsg.innerHTML=positionParams;
			watchId = navigator.geolocation.watchPosition(success,error,positionParams);
			
			}
		}
	}
	
	function clearWatch()
	{
		if(!navigator.geolocation)
		{
			alert('Browser doesnt support Geolocation');
		}
		else
		{
			navigator.geolocation.clearWatch(watchId);
		}
	}
	
	function success(position)
	{
//	var d = new Date(position.timestamp);
//    var hours = d.getHours(),
//    minutes = d.getMinutes(),
//    seconds = d.getSeconds(),
//    month = d.getMonth() + 1,
//    day = d.getDate(),
//    year = d.getFullYear() % 100;
//    day= d.getDay();

//   

//var formattedDate = pad(hours) + ":"
//                  + pad(minutes) + ":"
//                  + pad(seconds) + " "
//                  + pad(month) + "-"
//                  + pad(day) + "-"
//                  + pad(year);
//                  

       document.getElementById('GpsData').innerHTML =  'latitude: ' + position.coords.latitude +
													    '<br> longitude: ' + position.coords.longitude + 
														'<br> altitude: ' + position.coords.altitude + 
														'<br> accuracy: ' + position.coords.accuracy +
														'<br> altitudeAccuracy: ' + position.coords.altitudeAccuracy +
														'<br> heading: ' + position.coords.heading +
														'<br> speed: ' + position.coords.speed +
														'<br> timestamp: ' + new Date(position.timestamp);
														//'<br> timestamp: ' + formattedDate;
	
	  flash('GpsData');

	}
	
	function pad(d)
   {
    return (d < 10 ? "0" : "") + d;
   }
	
	function error(error)
	{
		switch(error.code) 
			{
				case error.TIMEOUT:
					GpsError.innerHTML="TIMEOUT";
					doFallback();
					navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
					break;
				case error.POSITION_UNAVAILABLE:
					GpsError.innerHTML="Position unavailable";
					break;
				case error.PERMISSION_DENIED:
					GpsError.innerHTML="Permission denied";
					break;
				case error.UNKNOWN_ERROR:
					GpsError.innerHTML="Unknown Error";
					break;
			}
	}
	
	function doFallback() 
	{
       DebugMsg.innerHTML="No cached position available at all.Fallback to a default position";
    }
	
	function flash(id)
    {
      var element = document.getElementById(id);
      if (element == null)
          return;
 
      element.setAttribute('style', 'background:#00FF00');          
      window.setTimeout('clearFlash(\'' + id + '\');', 250);
   }
   
   function clearFlash(id)
  {
      var element = document.getElementById(id);
      if (element == null)
          return;
          
      element.removeAttribute('style');
  }
  
  function doTime()
{
    timeSpan.innerHTML="";
	var now = new Date();
	timeSpan.innerHTML = now;
	//setTimeout('doTime();', 30000)
}

function doMap()
{
navigator.geolocation.getCurrentPosition(scrollMap);
}

function scrollMap(p) 
{
	var map='http://maps.googleapis.com/maps/api/staticmap?zoom=9&size=400x200&sensor=true&center='+p.coords.latitude+','+p.coords.longitude;
	document.getElementById("geoMap").src=map;
	document.getElementById("geolocationData").innerHTML='Latitude: ' + p.coords.latitude + '<br>' + 'Longitude: ' + p.coords.longitude + '<br>' + 'Accuracy: ' + p.coords.accuracy + '<br>';
}