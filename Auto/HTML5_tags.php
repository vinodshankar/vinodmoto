

<output id="result"></output>

<section>
  <h1>WWF</h1>
  <p>The World Wildlife Foundation was born in 1961...</p>
</section>

<article>
<h3>Netscape is dead</h3>
<p><a href="http://blog.netscape.com/2007/12/28/end-of-support-for-netscape-web-browsers">End of support for Netscape web browsers</a>. AOL has a long history on the internet, being one of the first companies to really get people online. Throughout its lifetime, it has been involved with a number of high profile acquisitions, perhaps the largest of which was the 1999 acquisition of the Netscape Communications Corporation. Netscape was known to many as the thought leader in web browsing, and had developed a number of complementary pieces of software that allowed for a rich suite of internet tools.</p>
</article>

<header>
    <h1>My Blog</h1>
  </header>
  <article>
    <h1>My Blog Post</h1>
    <p>Some Text Here</p>
    <aside>
      <!-- Since this aside is contained within an article, a parser
      should understand that the content of this aside is directly related
      to the article itself. -->
      <h1>Glossary</h1>
      <dl>
        <dt>Hello</dt>
        <dd>How Are You</dd>
      </dl>
    </aside>
  </article>
  <aside>
    <!-- This aside is outside of the article. Its content is related
    to the page, but not as closely related to the above article -->
    <h2>Blogroll</h2>
    <ul>
      <li><a href="#">My Friend</a></li>
      <li><a href="#">My Other Friend</a></li>
      <li><a href="#">My Best Friend</a></li>
    </ul>
  </aside>
  
 <hgroup>
 <h1>The reality dysfunction</h1>
 <h2>Space is not the only void</h2>
</hgroup>

<hgroup>
 <h1>Dr. Strangelove</h1>
 <h2>Or: How I Learned to Stop Worrying and Love the Bomb</h2>
</hgroup>

<header>
  <h1>Little Green Guys With Guns</h1>
  <nav>
   <ul>
    <li><a href="/games">Games</a>
    <li><a href="/forum">Forum</a>
    <li><a href="/download">Download</a>
   </ul>
  </nav>
  <h2>Important News</h2> <!-- this starts a second subsection -->
  <!-- this is part of the subsection entitled "Important News" -->
  <p>To play today's games you will need to update your client.</p>
  <h2>Games</h2> <!-- this starts a third subsection -->
 </header>
 <p>You have three active games:</p>
<H1>The Ramblings of a Scientist</H1>
<ARTICLE>
 <FOOTER> <!-- footer for article -->
  <P>Published <TIME PUBDATE DATETIME="2009-10-21T18:26-07:00"></TIME></P>
 </FOOTER>
</ARTICLE>
<ARTICLE>
 <H1>My Favorite Trains</H1>
 <P>I love my trains. My favorite train of all time is a K�f.</P>
 <P>It is fun to see them pull some coal cars because they look so
 dwarfed in comparison.</P>
 <FOOTER> <!-- footer for article -->
  <P>Published <TIME PUBDATE DATETIME="2009-09-15T14:54-07:00"></TIME></P>
 </FOOTER>
</ARTICLE>

<nav>
<a href="/html/">HTML</a> |
<a href="/html5/">HTML5</a> |
<a href="/css/">CSS</a> |
<a href="/css3/">CSS3</a> |
<a href="/js/">JavaScript</a>
</nav>

<p>The Pulpit Rock is a massive cliff 604 metres (1982 feet) above Lysefjorden, opposite the Kjerag plateau, in Forsand, Ryfylke, Norway. The top of the cliff is approximately 25 by 25 metres (82 by 82 feet) square and almost flat, and is a famous tourist attraction in Norway.</p>

<figure>
  <img src="img_pulpit.jpg" alt="The Pulpit Rock" width="304" height="228" />
<figcaption>figcaption for figure tag : Example</figcaption>
</figure>

<figure id="l4">
 <figcaption>Listing 4. The primary core interface API declaration.</figcaption>
 <pre><code>interface PrimaryCore {
 boolean verifyDataLine();
 void sendData(in sequence&lt;byte> data);
 void initSelfDestruct();
}</code></pre>
</figure>
<p>The API is designed to use UTF-8.</p>

<figure>
 <p>'Twas brillig, and the slithy toves<br>
 Did gyre and gimble in the wabe;<br>
 All mimsy were the borogoves,<br>
 And the mome raths outgrabe.</p>
 <figcaption><cite>Jabberwocky</cite> (first verse). Lewis Carroll, 1832-98</figcaption>
</figure>

<p>Do not forget to buy <mark>milk(Factory Milk)</mark> today.</p>
Downloading progress:
<progress id="progressbar" value="50" max="100"></progress>
<br/>
<meter value="2" min="0" max="10">2 out of 10</meter><br />
<meter value="0.6">60%</meter>

<canvas id="myCanvas" width="200" height="100" style="border:1px solid #c3c3c3;">
Your browser does not support the canvas element.
</canvas>

<script type="text/javascript">
var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var img=new Image();
img.onload = function(){
ctx.drawImage(img,0,0);
};
img.src="img_flwr.png";
</script>
<FOOTER> <!-- site wide footer -->
 <NAV>
  <P><A HREF="/credits.html">Credits</A> �
     <A HREF="/tos.html">Terms of Service</A> �
     <A HREF="/index.html">Blog Index</A></P>
 </NAV>
 <details>
<summary>Copyright 1999-2011.</summary>
<p> - by Bhakta Data. All Rights Reserved.</p>
<p>All content and graphics on this web site are the property of the company bhakta Data.</p>
</details>

<input list="browsers" />

<datalist id="browsers">
  <option value="Internet Explorer">
  <option value="Firefox">
  <option value="Chrome">
  <option value="Opera">
  <option value="Safari">
</datalist>

Encryption: <keygen name="security" />

<form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
<input type="range" name="a" value="50" />100
+<input type="number" name="b" value="50" />
=<output name="x" for="a b"></output>
</form>
<p>Lets Explore Different type of input type= values </p>
<form action="xyz.html">
<table>
<tr>
<td>
Add your homepage: 
</td>
<td>
<input type="url" name="homepage" />
</td>
</tr>
<tr>
<td>
Telephone: 
</td>
<td>
<input type="tel" name="usrtel" />
</td>
</tr>
<tr>
<td>
Search Google: 
</td>
<td>
<input type="search" name="googlesearch" />
</td>
</tr>
<tr>
<td>
E-mail: 
</td>
<td>
<input type="email" name="usremail" />
</td>
</tr>
<tr>
<td>
Birthday (date and time): 
</td>
<td>
<input type="datetime" name="bdaytime" />
</td>
</tr>
<tr>
<td>
Birthday: 
</td>
<td>
<input type="date" name="bday" />
</td>
</tr>
<tr>
<td>
Birthday (month and year): 
</td>
<td>
<input type="month" name="bdaymonth" />
</td>
</tr>
<tr>
<td>
Select a week: 
</td>
<td>
<input type="week" name="week_year" />
</td>
</tr>
<tr>
<td>
Select a time: 
</td>
<td>
<input type="time" name="usr_time" />
</td>
</tr>
<tr>
<td>
Birthday (date and time):
</td>
<td>
 <input type="datetime-local" name="bdaytime" />
</td>
</tr>
<tr>
<td>
Quantity (between 1 and 5): 
</td>
<td>
<input type="number" name="quantity" min="1" max="5" />
</td>
</tr>
<tr>
<td>
Range:
</td>
<td>
<input type="range" name="points" min="1" max="10" />
</td>
</tr>
<tr>
<td>
Select your favorite color: 
</td>
<td>
<input type="color" name="favcolor" />
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" />
</td>
</tr>
</table>
</form>
</FOOTER>

<script>
  // var worker = new Worker('number.js');
  // worker.onmessage = function (event) {
     //document.getElementById('result').textContent = '<progress id="progressbar" value="'+event.data+'" max="100"></progress>';
  // };
</script>
