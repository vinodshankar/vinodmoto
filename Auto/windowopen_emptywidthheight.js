function openWin()
{
myWindow=window.open('','','width=200,height=100');
myWindow.document.write("This is 'myWindow'!");
myWindow.focus();
myWindow.opener.document.write("<p>This is the source window!</p>");
}