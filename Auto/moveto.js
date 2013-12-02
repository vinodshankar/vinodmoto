function openWin()
{
myWindow=window.open('','','width=200,height=100');
myWindow.document.write("<p>This is 'myWindow'</p>");
}

function moveWin()
{
myWindow.moveTo(0,0);
myWindow.focus();
}