

	

	<div style="text-align:center">

	<iframe id="adframe" style="background-color:#ffffff" height="98" width="960" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" src="/tryitbanner.asp?secid=playcanvas&amp;rnd=0.8299524"></iframe>

	</div>

	

	<div id="playitcontainer">

	

		<div style="width:450px;float:left;">

				<div class="demoHeader">Property:</div>

				<div style="font-size:14px;margin:10px;font-weight:bold;">miterLimit:</div>				

				

				<form style="margin:15px;" action="javascript:return false;">

					<input type="hidden" id="preselectedValue" value="" />

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_1" value="10" checked='checked' /><label for="value_1">10</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_2" value="2" /><label for="value_2">2</label></div>

								

				</form>

				<div id="footer"><footer><p>The miter is the distance between the inner- and outer corner.</p>

	<p>When the miter exceeds the miterLimit, the corner will be displayed as lineJoin type "bevel".</p></footer></div>

		</div>

		<div style="width:450px;float:left;">

			<div class="demoHeader">Canvas:</div>

	

			<div id="demoParent">



				<canvas id="myCanvas" width="430" height="280">

				your browser does not support the canvas tag </canvas>

				<script type="text/javascript">

				var canvas=document.getElementById('myCanvas');
	var ctx=canvas.getContext('2d');
	ctx.lineWidth=10;	
	ctx.lineJoin='miter';		
	ctx.miterLimit=10;			
	ctx.moveTo(20,20);
	ctx.lineTo(50,30);
	ctx.lineTo(20,40);
	ctx.stroke();

				</script>

				

			</div>

			<div class="demoHeader">Code:</div>

			<div id="styleDIV">

			var canvas=document.getElementById('myCanvas');<br>	var ctx=canvas.getContext('2d');<br>	ctx.lineWidth=10;	<br>	ctx.lineJoin='miter';		<br>	ctx.miterLimit=<span id='enlargecontextprop'>10</span>;			<br>	ctx.moveTo(20,20);<br>	ctx.lineTo(50,30);<br>	ctx.lineTo(20,40);<br>	ctx.stroke();<br>

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
