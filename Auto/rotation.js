function drawShape(){
  // get the canvas element using the DOM
  var canvas = document.getElementById('mycanvas');
  // Make sure we don't execute when canvas isn't supported
  if (canvas.getContext){
    // use getContext to use the canvas for drawing
    var ctx = canvas.getContext('2d');
    ctx.translate(100,100);
    for (i=1; i<7; i++){
       ctx.save();
       ctx.fillStyle = 'rgb('+(51*i)+','+(200-51*i)+',0)';
       for (j=0; j < i*6; j++){
          ctx.rotate(Math.PI*2/(i*6));
          ctx.beginPath();
          ctx.arc(0,i*12.5,5,0,Math.PI*2,true);
          ctx.fill();
       }
       ctx.restore();
     }
  }else {
    alert('You need Safari or Firefox 1.5+ to see this demo.');
  }
}
window.onload=drawShape;