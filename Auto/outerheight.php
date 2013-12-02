

<p id="demo">Click the button to display this window's height and width (including toolbars and scrollbars).</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction()
{
var w=window.outerWidth;
var h=window.outerHeight;
x=document.getElementById("demo");
x.innerHTML="Width: " + w + " Heigth: " + h;
}
</script>


