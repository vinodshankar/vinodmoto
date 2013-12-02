

        <div class="container">

            <header class="header" role="banner">
                <h1>HTML5 demo with sessionStorage and saving images and files in it</h1>
            </header>

            <div class="main">
                <article class="main-content" role="main">

                 

                    <h2>An elephant, with sessionStorage</h2>

                    <figure>
                        <img id="elephant" src="about:blank" alt="A close up of an elephant">
                        <noscript>
                            <p><i>You need to have JavaScript enabled to save images in sessionStorage.</i></p>
                            <img src="elephant.png" alt="">
                        </noscript>    
                        <figcaption>A mighty big elephant, and mighty close too!</figcaption>
                    </figure>

                    
                    <h2>Rhino with XMLHttpRequest and reading file data</h2>
                    <figure>
                        <img id="rhino" src="about:blank" alt="A close up of a rhino">
                        <figcaption>Rhinos are big!</figcaption>
                    </figure>

                </article>
            </div>

           <input type="button" value="Get Item Value of sessionStorage Object" onclick="javascript: getItemsessionStorage(); return false;" />
			<script type="text/javascript">
			var getItemsessionStorage = function (){
				for(i=0;i<sessionStorage.length;i++){
					document.writeln("<br/> Local Stotrage Value for key "+sessionStorage.key(i)+" is:"+ sessionStorage.getItem(sessionStorage.key(i))+"<br/>");
				}
			}
			</script>
			<br/><br/>
			<input type="button" value="Clear All sessionStorage Object" onclick="javascript: sessionStorage.clear(); return false;" />
			<br/>
			<script type="text/javascript">
			//sessionStorage.clear();
			if(typeof(Storage)!=="undefined"){

			document.writeln("<br/> Available sessionStorage is "+sessionStorage.length);

			}
			</script>

        </div>

        <script src="Image_sessionstoragejs/base.js"></script>
		
