
<p>Draw a part of this image on the canvas:</p>

<img id="scream" src="the_scream.jpg" alt="The Scream" width="220" height="277" />

<canvas id="myCanvas" width="300" height="150" style="border:1px solid #d3d3d3;">
your browser does not support the canvas tag </canvas>


<script type="text/javascript">
document.getElementById("scream").onload=function(){
  var c=document.getElementById("myCanvas");
  var ctx=c.getContext("2d");
  var img=document.getElementById("scream");
  ctx.drawImage(img,90,130,50,60,10,10,50,60);
};
</script>

