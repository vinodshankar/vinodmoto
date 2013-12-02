<p id="demo">Click the button to display this window's height and width (NOT including toolbars and scrollbars).</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction()
{
window.innerWidth = 400;
var w=window.innerWidth;
x=document.getElementById("demo");
x.innerHTML="Width: " + w ;
}
</script>