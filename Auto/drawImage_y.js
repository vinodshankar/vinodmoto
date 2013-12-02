
	function playit_onload()
	{
	var preval=""
	preval=document.getElementById("preselectedValue").value
	if (preval!="")
		{
		change_position(preval)
		var x=document.getElementsByTagName("input")
		var l=x.length
		for (i=0;i<l;i++)
			{
			if (x[i].value==preval)
				{
				x[i].checked=true
				}
			}
			document.getElementById("playitcontainer").style.display="block";
			}
	}
	
	function click_position(obj)
	{
	change_position(obj.value)
	}
	
	function change_position(val)
	{
	var y="var c=document.getElementById('myCanvas');<br>	var ctx=c.getContext('2d');<br>	var img=document.createElement('image');<br>	img.src='the_scream.jpg';<br>	ctx.###CONTEXTPROP###;<br>"	
	var fnutt=""
	var para1="("
	var para2=")"
	
			var x="drawImage" + para1 + "<span id='enlargecontextprop'>" + fnutt + val + fnutt + "</span>" + para2
		
	var z=y.replace("###CONTEXTPROP###",x)
	document.getElementById("styleDIV").innerHTML=z
	var ctx=document.getElementById("myCanvas").getContext('2d');
	
	document.getElementById("myCanvas").width=430;
	
	ctx.clearRect(0,0,430,280);
	
		var x="drawImage" + para1 + fnutt + val + fnutt + para2;
	
	var z=y.replace("###CONTEXTPROP###",x)
	var x=z.replace(/<br>/gi,"")
	eval(x)
	}
	
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	
	var pageTracker = _gat._getTracker("UA-3855518-1");
	pageTracker._initData();
	pageTracker._trackPageview();
	
	(function() {
	var useSSL = 'https:' == document.location.protocol;
	var src = (useSSL ? 'https:' : 'http:') +
	'//www.googletagservices.com/tag/js/gpt.js';
	document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
	})();
	
	googletag.defineSlot('/16833175/TopRectangle', [227, 90], 'div-gpt-ad-1343810007679-5').addService(googletag.pubads());
	googletag.defineSlot('/16833175/TryitLeaderboard', [728, 90], 'div-gpt-ad-1343810007679-6').addService(googletag.pubads());
	googletag.pubads().setTargeting("content","playcanvas");
	googletag.pubads().enableSyncRendering();
	googletag.pubads().enableSingleRequest();
	googletag.enableServices();