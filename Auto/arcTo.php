

<canvas id="myCanvas" width="300" height="150" style="border:1px solid #d3d3d3;">
your browser does not support the canvas tag </canvas>

<script type="text/javascript">

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
ctx.beginPath();     
ctx.moveTo(20,20);
ctx.lineTo(100,20);
ctx.arcTo(150,20,150,70,50);
ctx.lineTo(150,120);
ctx.stroke();

</script> 
