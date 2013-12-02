	$(function(){
				var notify = function() {
					setTimeout(function() {
						var n = $("<div class='notify'>Finished scrolling.</div>").appendTo("body");
						setTimeout(function() { n.remove(); }, 2500);
					}, 250);
				};
				
				$("a.last").click(function(e){
					e.preventDefault();
					$("p:last").scrollintoview({ duration: 5000, complete: notify });
				});
				$("a.first").click(function(e){
					e.preventDefault();
					$("p").scrollintoview({ duration: "normal", complete: notify });
				});
			});