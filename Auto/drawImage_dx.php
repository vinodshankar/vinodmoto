
	<div style="text-align:center">

	<iframe id="adframe" style="background-color:#ffffff" height="98" width="960" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" src="/tryitbanner.asp?secid=playcanvas&amp;rnd=0.8299524"></iframe>

	</div>

	

	<div id="playitcontainer">

	

		<div style="width:450px;float:left;">

				<div class="demoHeader">Property:</div>

				<div style="font-size:14px;margin:10px;font-weight:bold;">drawImage:</div>				

				

				<form style="margin:15px;" action="javascript:return false;">

					<input type="hidden" id="preselectedValue" value="img,90,130,50,60,10,10,50,60" />

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_1" value="img,90,130,50,60,0,10,50,60" /><label for="value_1">img,90,130,50,60,0,10,50,60</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_2" value="img,90,130,50,60,10,10,50,60" /><label for="value_2">img,90,130,50,60,10,10,50,60</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_3" value="img,90,130,50,60,20,10,50,60" /><label for="value_3">img,90,130,50,60,20,10,50,60</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_4" value="img,90,130,50,60,30,10,50,60" /><label for="value_4">img,90,130,50,60,30,10,50,60</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_5" value="img,90,130,50,60,40,10,50,60" /><label for="value_5">img,90,130,50,60,40,10,50,60</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_6" value="img,90,130,50,60,50,10,50,60" /><label for="value_6">img,90,130,50,60,50,10,50,60</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_7" value="img,90,130,50,60,100,10,50,60" /><label for="value_7">img,90,130,50,60,100,10,50,60</label></div>

					

					<div><input autocomplete="off" type="radio" name="radio_position" onclick="click_position(this)" id="value_8" value="img,90,130,50,60,200,10,50,60" /><label for="value_8">img,90,130,50,60,200,10,50,60</label></div>

								

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
	var img=document.createElement('image');
	img.src='the_scream.jpg';
	ctx.drawImage(img,90,130,50,60,10,10,50,60);

				</script>

				

			</div>

			<div class="demoHeader">Code:</div>

			<div id="styleDIV">

			var canvas=document.getElementById('myCanvas');<br>	var ctx=canvas.getContext('2d');<br>	var img=document.createElement('image');<br>	img.src='the_scream.jpg';<br>	ctx.drawImage(<span id='enlargecontextprop'>img,90,130,50,60,10,10,50,60)</span>;<br>

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
