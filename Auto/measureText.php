

<canvas id="myCanvas" width="300" height="150" style="border:1px solid #d3d3d3;">
your browser does not support the canvas tag </canvas>

<script type="text/javascript">

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var txt="Hello World"
ctx.font="30px Arial";
ctx.fillText("width:" + ctx.measureText(txt).width,10,50);
ctx.fillText(txt,10,100);

</script>
