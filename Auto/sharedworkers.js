
      var worker;
			
      function start() {
        worker = new SharedWorker('pi_shared.js');
        worker.port.addEventListener("message", function(e) {  
          var data = e.data;
          var result = document.getElementById("result");
          if (data.FinalPiValue) {
            result.innerHTML += data.FinalPiValue + ' (final)';
          } else if (data.value) {
    	      console.log('Page 1 received message: '+data.value);  
          }
        }, false);  
        worker.port.start();  
        // post a message to the shared web worker  
        console.log("Calling the worker from page 1");
        worker.port.postMessage({cmd: 'connect', id: "Page 1"});
        //set the iframe page
        document.getElementById("inner").src = 'SharedWorkersTestPage2.html';
      }