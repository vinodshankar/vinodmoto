
<br/><br/><br/><br/><br/><br/><br/><br/>
  <p>The highest prime number discovered so far is: <output id="result"></output></p>

  <script>
   var worker = new Worker('worker.js');
   worker.onmessage = function (event) {
     document.getElementById('result').textContent = event.data;
   };




  </script>
  <br/>
  <input type = "button" onclick = "worker.terminate();" value="Stop Worker One" />

