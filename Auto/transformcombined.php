




	<div style="text-align:center">

	<iframe id="adframe" style="background-color:#ffffff" height="98" width="960" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" src="/tryitbanner.asp?secid=playcanvas&amp;rnd=0.8299524"></iframe>

	</div>

	

	<div id="playitcontainer">

	

		<div style="width:450px;float:left;">

				<div class="demoHeader">Property:</div>

				<div style="font-size:14px;margin:10px;font-weight:bold;">setTransform:</div>				

				

				<form style="margin:15px;" action="javascript:return false;">

					<input type="hidden" id="preselectedValue" value="1,0,0,1,0,0" />

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_1" value="0.1,0,0,1,0,0" /><label for="value_1">0.1,0,0,1,0,0</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_2" value="0.2,0,0,1,0,0" /><label for="value_2">0.2,0,0,1,0,0</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_3" value="0.4,0,0,1,0,0" /><label for="value_3">0.4,0,0,1,0,0</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_4" value="1,0,0,1,0,0" /><label for="value_4">1,0,0,1,0,0</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_5" value="1.2,0,0,1,0,0" /><label for="value_5">1.2,0,0,1,0,0</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_6" value="1.4,0,0,1,0,0" /><label for="value_6">1.4,0,0,1,0,0</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_7" value="2,0,0,1,0,0" /><label for="value_7">2,0,0,1,0,0</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_8" value="3,0,0,1,0,0" /><label for="value_8">3,0,0,1,0,0</label></div>

								

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
	ctx.setTransform(1,0,0,1,0,0);
	ctx.fillStyle='lightblue';
	ctx.fillRect(50,50,250,100);
	ctx.fillStyle='red';
	ctx.font='30px Arial';
	ctx.fillText('Transform', 60,80);

				</script>

				

			</div>

			<div class="demoHeader">Code:</div>

			<div id="styleDIV">

			var canvas=document.getElementById('myCanvas');<br>	var ctx=canvas.getContext('2d');<br>	ctx.setTransform(<span id='enlargecontextprop'>1,0,0,1,0,0)</span>;<br>	ctx.fillStyle='lightblue';<br>	ctx.fillRect(50,50,250,100);<br>	ctx.fillStyle='red';<br>	ctx.font='30px Arial';<br>	ctx.fillText('Transform', 60,80);<br>

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

