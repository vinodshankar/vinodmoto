
<canvas id="myCanvas" width="300" height="150" style="border:1px solid #d3d3d3;">
your browser does not support the canvas tag </canvas>

<script type="text/javascript">

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
ctx.rect(20,20,150,100);
if (ctx.isPointInPath(20,50))
	{
	ctx.stroke();
	};

</script> 
