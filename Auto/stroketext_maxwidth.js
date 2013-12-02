
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

	var y="var c=document.getElementById('myCanvas');<br>	var ctx=c.getContext('2d');<br>	ctx.font='30px Arial';<br>	ctx.###CONTEXTPROP###;<br>"	

	var fnutt=""

	var para1="("

	var para2=")"

	

			var x="strokeText" + para1 + "<span id='enlargecontextprop'>" + fnutt + val + fnutt + "</span>" + para2

		

	var z=y.replace("###CONTEXTPROP###",x)

	document.getElementById("styleDIV").innerHTML=z

	var ctx=document.getElementById("myCanvas").getContext('2d');

	

	ctx.clearRect(0,0,430,280);

	

		var x="strokeText" + para1 + fnutt + val + fnutt + para2;

	

	var z=y.replace("###CONTEXTPROP###",x)

	var x=z.replace(/<br>/gi,"")

	eval(x)

	}
window.onload=playit_onload;