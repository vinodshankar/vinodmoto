      window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");

        // set line width for all lines
        context.lineWidth = 25;

        // miter line join (left)
        context.beginPath();
        context.moveTo(99, 150);
        context.lineTo(149, 50);
        context.lineTo(199, 150);
        context.lineJoin = "miter";
        context.stroke();

       
      };
