function drawShape(){
  // get the canvas element using the DOM
  var canvas = document.getElementById('mycanvas');
 
  // Make sure we don't execute when canvas isn't supported
  if (canvas.getContext){
     // use getContext to use the canvas for drawing
     var ctx = canvas.getContext('2d');

     var sin = Math.sin(Math.PI/6);   
     var cos = Math.cos(Math.PI/6);   
     ctx.translate(200, 200);   
     var c = 0;   
     
     for (var i=0; i <= 12; i++) {   
       c = Math.floor(255 / 12 * i);   
       ctx.fillStyle = "rgb(" + c + "," + c + "," + c + ")";   
       ctx.fillRect(0, 0, 100, 100);   
       ctx.transform(cos, sin, -sin, cos, 0, 0);   
     }   
   
     ctx.setTransform(-1, 0, 0, 1, 200, 200);   
     ctx.fillStyle = "rgba(100, 100, 255, 0.5)";   
     ctx.fillRect(50, 50, 100, 100);   
  }else {
    alert('You need Safari or Firefox 1.5+ to see this demo.');
  }
}
window.onload=drawShape;