

<canvas id="myCanvas" width="300" height="150" style="border:1px solid #d3d3d3;">
your browser does not support the canvas tag </canvas>

<script type="text/javascript">

var canvas=document.getElementById("myCanvas");
var ctx=canvas.getContext("2d");
ctx.rect(20,20,100,80);
ctx.fillStyle="red";
ctx.shadowColor="black";
ctx.shadowBlur=10;
ctx.shadowOffsetX=30;
ctx.fill();

</script>

