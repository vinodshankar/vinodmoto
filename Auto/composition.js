
var compositeTypes = [
  'source-over','source-in','source-out','source-atop',
  'destination-over','destination-in','destination-out',
  'destination-atop','lighter','darker','copy','xor'
];

function drawShape(){
  for (i=0;i<compositeTypes.length;i++){
    var label = document.createTextNode(compositeTypes[i]);
    document.getElementById('lab'+i).appendChild(label);
    var ctx = document.getElementById('tut'+i).getContext('2d');

    // draw rectangle
    ctx.fillStyle = "#FF3366";
    ctx.fillRect(15,15,70,70);

    // set composite property
    ctx.globalCompositeOperation = compositeTypes[i];

    // draw circle
    ctx.fillStyle = "#0066FF";
    ctx.beginPath();
    ctx.arc(75,75,35,0,Math.PI*2,true);
    ctx.fill();
  }
}
window.onload=drawShape;