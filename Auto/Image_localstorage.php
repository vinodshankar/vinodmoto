

        <div class="container">

            <header class="header" role="banner">
                <h1>HTML5 demo with localStorage and saving images and files in it</h1>
            </header>

            <div class="main">
                <article class="main-content" role="main">

                 

                    <h2>An elephant, with localStorage</h2>

                    <figure>
                        <img id="elephant" src="about:blank" alt="A close up of an elephant">
                        <noscript>
                            <p><i>You need to have JavaScript enabled to save images in localStorage.</i></p>
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

           <input type="button" value="Get Item Value of localStorage Object" onclick="javascript: getItemLocalStorage(); return false;" />
			<script type="text/javascript">
			var getItemLocalStorage = function (){
				for(i=0;i<localStorage.length;i++){
					document.writeln("<br/> Local Stotrage Value for key "+localStorage.key(i)+" is:"+ localStorage.getItem(localStorage.key(i))+"<br/>");
				}
			}
			</script>
			<br/><br/>
			<input type="button" value="Clear All localStorage Object" onclick="javascript: localStorage.clear(); return false;" />
			<br/>
			<script type="text/javascript">
			//sessionStorage.clear();
			if(typeof(Storage)!=="undefined"){

			document.writeln("<br/> Available localStorage is "+localStorage.length);

			}
			</script>

        </div>

        <script src="Image_localstoragejs/base.js"></script>
		

