var canvas=document.getElementById("myCanvas");
var ctx=canvas.getContext("2d");
ctx.rect(20,20,100,80);
ctx.fillStyle="red";
ctx.shadowColor="black";
ctx.shadowBlur=30;
ctx.fill();