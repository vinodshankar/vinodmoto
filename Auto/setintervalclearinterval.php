
<input type="text" id="clock">
<script language=javascript>
var int=self.setInterval(function(){clock()},1000);
function clock()
  {
  var d=new Date();
  var t=d.toLocaleTimeString();
  document.getElementById("clock").value=t;
  }
</script>
</form>
<button onclick="int=window.clearInterval(int)">Stop</button>

</body>
