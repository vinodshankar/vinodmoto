<p>Image to use:</p>
<img src="img_lamp.jpg" id="lamp" width="32" height="32">
<p>Canvas:</p>

<button onclick="draw('repeat')">Repeat</button> 
<button onclick="draw('repeat-x')">Repeat-x</button> 
<button onclick="draw('repeat-y')">Repeat-y</button> 
<button onclick="draw('no-repeat')">No-repeat</button>     

<canvas id="myCanvas" width="300" height="150" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<script>
function draw(direction)
{
var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
ctx.clearRect(0,0,c.width,c.height); 
var img=document.getElementById("lamp")
var pat=ctx.createPattern(img,direction);
ctx.rect(0,0,150,100);
ctx.fillStyle=pat;
ctx.fill();
}
</script>