<p id="demo">Click the button to display this window's height and width (NOT including toolbars and scrollbars).</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction()
{
window.innerHeight = 400;
var h=window.innerHeight;
x=document.getElementById("demo");
x.innerHTML="Height: " + h ;
}
</script>