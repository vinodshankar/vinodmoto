function check()
{
if (window.top!=window.self) 
  {
  document.write("<p>This window is not the topmost window! Am I in a frame?</p>")
  }
else
  { 
  document.write("<p>This window is the topmost window!</p>")
  } 
}