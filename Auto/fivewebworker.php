
<br/><br/><br/><br/><br/><br/><br/><br/>
  <p>The highest prime number discovered so far is: <output id="result"></output></p>
  <p>The highest prime number discovered so far is: <output id="result2"></output></p>
  <p>The highest prime number discovered so far is: <output id="result3"></output></p>
  <p>The highest prime number discovered so far is: <output id="result4"></output></p>
  <p>The highest prime number discovered so far is: <output id="result5"></output></p>

  <script>
   var worker = new Worker('worker.js');
   worker.onmessage = function (event) {
     document.getElementById('result').textContent = event.data;
   };

   var worker2 = new Worker('worker (2).js');
   worker2.onmessage = function (event) {
     document.getElementById('result2').textContent = event.data;
   };

 var worker3 = new Worker('worker (3).js');
   worker3.onmessage = function (event) {
     document.getElementById('result3').textContent = event.data;
   };

 var worker4 = new Worker('worker (4).js');
   worker4.onmessage = function (event) {
     document.getElementById('result4').textContent = event.data;
   };

var worker5 = new Worker('worker (5).js');
   worker5.onmessage = function (event) {
     document.getElementById('result5').textContent = event.data;
   };

  </script>
  <br/>
  <input type = "button" onclick = "worker.terminate();" value="Stop Worker One" />
  <input type = "button" onclick = "worker2.terminate();" value="Stop Worker Two" />
  <input type = "button" onclick = "worker3.terminate();" value="Stop Worker Three" />
