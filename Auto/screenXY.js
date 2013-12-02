function openWin()
{
myWindow=window.open('','');
myWindow.document.write("<p>This is 'myWindow'");
myWindow.document.write("<br>ScreenX: " + myWindow.screenX);
myWindow.document.write("<br>ScreenY: " + myWindow.screenY + "</p>");
}