
<br /><br /><br />
<input type="text" id="clock" />
<script language=javascript>
var int=self.setInterval(function(){clock()},3000);
function clock()
  {
  var d=new Date();
  var t=d.toLocaleTimeString();
  document.getElementById("clock").value=t;
  }
</script>

<button onclick="int=window.clearInterval(int)">Stop</button><br />
<button onclick="device.suspend();">Suspend</button>
	

