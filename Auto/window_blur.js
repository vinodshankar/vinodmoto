function open_win()
{
myWindow=window.open('','','width=200,height=100');
myWindow.document.write("<p>The new window.</p>");
myWindow.blur();
}