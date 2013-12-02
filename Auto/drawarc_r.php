
	<div style="text-align:center">

	<iframe id="adframe" style="background-color:#ffffff" height="98" width="960" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" src="/tryitbanner.asp?secid=playcanvas&amp;rnd=0.8299524"></iframe>

	</div>

	

	<div id="playitcontainer">

	

		<div style="width:450px;float:left;">

				<div class="demoHeader">Property:</div>

				<div style="font-size:14px;margin:10px;font-weight:bold;">arc:</div>				

				

				<form style="margin:15px;" action="javascript:return false;">

					<input type="hidden" id="preselectedValue" value="" />

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_1" value="100,75,50,0*Math.PI,1.5*Math.PI" checked='checked' /><label for="value_1">100,75,50,0*Math.PI,1.5*Math.PI</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_2" value="100,75,75,0*Math.PI,1.5*Math.PI" /><label for="value_2">100,75,75,0*Math.PI,1.5*Math.PI</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_3" value="100,75,100,0*Math.PI,1.5*Math.PI" /><label for="value_3">100,75,100,0*Math.PI,1.5*Math.PI</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_4" value="100,75,10,0*Math.PI,1.5*Math.PI" /><label for="value_4">100,75,10,0*Math.PI,1.5*Math.PI</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_5" value="100,75,20,0*Math.PI,1.5*Math.PI" /><label for="value_5">100,75,20,0*Math.PI,1.5*Math.PI</label></div>

								

				</form>

				<div id="footer"></div>

		</div>

		<div style="width:450px;float:left;">

			<div class="demoHeader">Canvas:</div>

	

			<div id="demoParent">



				<canvas id="myCanvas" width="430" height="280">

				your browser does not support the canvas tag </canvas>

				<script type="text/javascript">

				var canvas=document.getElementById('myCanvas');
	var ctx=canvas.getContext('2d');
	ctx.beginPath();
	ctx.arc(100,75,50,0*Math.PI,1.5*Math.PI);
	ctx.stroke();

				</script>

				

			</div>

			<div class="demoHeader">Code:</div>

			<div id="styleDIV">

			var canvas=document.getElementById('myCanvas');<br>	var ctx=canvas.getContext('2d');<br>	ctx.beginPath();<br>	ctx.arc(<span id='enlargecontextprop'>100,75,50,0*Math.PI,1.5*Math.PI)</span>;<br>	ctx.stroke();<br>

			</div>

		</div>

		<div style="clear:both;"></div>

	

		<div class="playitFooter" style="float:left;">Click the property values 

			above to see the result</div>

		<div class="playitFooter" style="text-align:right;">

			<a style="color:#617f10" href="http://www.w3schools.com">

			W3Schools.com</a> - Play it

		</div>

		<div style="clear:both;"></div>

	</div>
