function openWin()
{
myWindow=window.open('','MsgWindow','width=200,height=100');
myWindow.document.write("<p>This window's name is: " + myWindow.name + "</p>");
}