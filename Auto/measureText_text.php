
	<div style="text-align:center">

	<iframe id="adframe" style="background-color:#ffffff" height="98" width="960" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" src="/tryitbanner.asp?secid=playcanvas&amp;rnd=0.8299524"></iframe>

	</div>

	

	<div id="playitcontainer">

	

		<div style="width:450px;float:left;">

				<div class="demoHeader">Property:</div>

				<div style="font-size:14px;margin:10px;font-weight:bold;">measureText:</div>				

				

				<form style="margin:15px;" action="javascript:return false;">

					<input type="hidden" id="preselectedValue" value="" />

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_1" value="'Hello World'" checked='checked' /><label for="value_1">'Hello World'</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_2" value="'How are you?'" /><label for="value_2">'How are you?'</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_3" value="'It is a great day!'" /><label for="value_3">'It is a great day!'</label></div>

								

				</form>

				<div id="footer"><footer>This example returns the width of the text you select.</footer></div>

		</div>

		<div style="width:450px;float:left;">

			<div class="demoHeader">Canvas:</div>

	

			<div id="demoParent">



				<canvas id="myCanvas" width="430" height="280">

				your browser does not support the canvas tag </canvas>

				<script type="text/javascript">

				var c=document.getElementById('myCanvas');
	var ctx=c.getContext('2d');
	ctx.font='30px Arial';
	var m=ctx.measureText('Hello World');
	ctx.fillText(m.width,10,30);

				</script>

				

			</div>

			<div class="demoHeader">Code:</div>

			<div id="styleDIV">

			var c=document.getElementById('myCanvas');<br>	var ctx=c.getContext('2d');<br>	ctx.font='30px Arial';<br>	var m=ctx.measureText(<span id='enlargecontextprop'>'Hello World')</span>;<br>	ctx.fillText(m.width,10,30);<br>

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

