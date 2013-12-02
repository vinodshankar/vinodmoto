function openWin()
{
myWindow=window.open('','');
myWindow.document.write("<p>This is 'myWindow'");
myWindow.document.write("<br>ScreenLeft: " + myWindow.screenLeft);
myWindow.document.write("<br>ScreenTop: " + myWindow.screenTop + "</p>");
}