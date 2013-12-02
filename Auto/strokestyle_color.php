
	<div style="text-align:center">

	<iframe id="adframe" style="background-color:#ffffff" height="98" width="960" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" src="/tryitbanner.asp?secid=playcanvas&amp;rnd=0.8299524"></iframe>

	</div>

	

	<div id="playitcontainer">

	

		<div style="width:450px;float:left;">

				<div class="demoHeader">Property:</div>

				<div style="font-size:14px;margin:10px;font-weight:bold;">strokeStyle:</div>				

				

				<form style="margin:15px;" action="javascript:return false;">

					<input type="hidden" id="preselectedValue" value="" />

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_1" value="#000000" checked='checked' /><label for="value_1">#000000</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_2" value="#FF9900" /><label for="value_2">#FF9900</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_3" value="blue" /><label for="value_3">blue</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_4" value="red" /><label for="value_4">red</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_5" value="purple" /><label for="value_5">purple</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_6" value="rgb(255,0,0)" /><label for="value_6">rgb(255,0,0)</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_7" value="rgb(255,0,255)" /><label for="value_7">rgb(255,0,255)</label></div>

								

				</form>

				<div id="footer"><footer>

	<p>You can play more with colors with our <a href="/tags/ref_colorpicker.asp">Color Picker</a>.</p>

</footer></div>

		</div>

		<div style="width:450px;float:left;">

			<div class="demoHeader">Canvas:</div>

	

			<div id="demoParent">



				<canvas id="myCanvas" width="430" height="280">

				your browser does not support the canvas tag </canvas>

				<script type="text/javascript">

				var canvas=document.getElementById('myCanvas');
	var ctx=canvas.getContext('2d');
	ctx.strokeStyle='#000000';
	ctx.strokeRect(20,20,150,100);

				</script>

				

			</div>

			<div class="demoHeader">Code:</div>

			<div id="styleDIV">

			var canvas=document.getElementById('myCanvas');<br>	var ctx=canvas.getContext('2d');<br>	ctx.strokeStyle=<span id='enlargecontextprop'>'#000000'</span>;<br>	ctx.strokeRect(20,20,150,100);<br>

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

