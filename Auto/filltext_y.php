
	<div style="text-align:center">

	<iframe id="adframe" style="background-color:#ffffff" height="98" width="960" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" src="/tryitbanner.asp?secid=playcanvas&amp;rnd=0.8299524"></iframe>

	</div>

	

	<div id="playitcontainer">

	

		<div style="width:450px;float:left;">

				<div class="demoHeader">Property:</div>

				<div style="font-size:14px;margin:10px;font-weight:bold;">fillText:</div>				

				

				<form style="margin:15px;" action="javascript:return false;">

					<input type="hidden" id="preselectedValue" value="" />

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_1" value="'Hello World',20,50" checked='checked' /><label for="value_1">'Hello World',20,50</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_2" value="'Hello World',20,60" /><label for="value_2">'Hello World',20,60</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_3" value="'Hello World',20,70" /><label for="value_3">'Hello World',20,70</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_4" value="'Hello World',20,100" /><label for="value_4">'Hello World',20,100</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_5" value="'Hello World',20,200" /><label for="value_5">'Hello World',20,200</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_6" value="'Hello World',20,150" /><label for="value_6">'Hello World',20,150</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_7" value="'Hello World',20,10" /><label for="value_7">'Hello World',20,10</label></div>

								

				</form>

				<div id="footer"></div>

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
	ctx.fillText('Hello World',20,50);

				</script>

				

			</div>

			<div class="demoHeader">Code:</div>

			<div id="styleDIV">

			var c=document.getElementById('myCanvas');<br>	var ctx=c.getContext('2d');<br>	ctx.font='30px Arial';<br>	ctx.fillText(<span id='enlargecontextprop'>'Hello World',20,50)</span>;<br>

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
