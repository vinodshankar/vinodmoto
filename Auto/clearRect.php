

<canvas id="myCanvas" width="300" height="150" style="border:1px solid #d3d3d3;">
your browser does not support the canvas tag </canvas>

<script type="text/javascript">

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
ctx.fillStyle="red";
ctx.fillRect(0,0,300,150);
ctx.fillStyle="yellow";
ctx.fillRect(40,40,150,100);
ctx.strokeRect(30,10,150,100);

ctx.clearRect(20,20,100,50);

</script>

