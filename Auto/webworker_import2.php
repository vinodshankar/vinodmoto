
<br/><br/><br/><br/><br/><br/><br/><br/>
  <p>The highest prime number discovered so far is: <output id="result"></output></p>
  <p>The highest prime number discovered so far is: <output id="result1"></output></p>
 
  <script>
   var worker = new Worker('worker.js');
   worker.onmessage = function (event) {
     document.getElementById('result').textContent = event.data;
   };

   var worker2 = new Worker('worker (2).js');
   worker2.onmessage = function (event) {
     document.getElementById('result2').textContent = event.data;
   };

  </script>
  <br/>
  <input type = "button" onclick = "worker.terminate();" value="Stop Worker One" />
  <input type = "button" onclick = "worker2.terminate();" value="Stop Worker Two" />

