
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
Enter Key:&nbsp;<input type="text" id="txtKey" /><br/>
Enter Value:&nbsp;<input type="text" id="txtValue" /><br/>
<input type="button" value="Set Session Storage" onclick="javascript: pSetSessionStorage(document.getElementById('txtKey').value,document.getElementById('txtValue').value)"/>&nbsp;
<input type="button" value="Get Session Storage" onclick="javascript: document.writeln(pGetSessionStorage(document.getElementById('txtKey').value))"/>
<input type="button" value="Remove Session Storage" onclick="javascript: pRemoveSessionStorage(document.getElementById('txtKey').value)"/>

<input type="button" value="Set Local Storage" onclick="javascript: pSetLocalStorage(document.getElementById('txtKey').value,document.getElementById('txtValue').value)"/>&nbsp;
<input type="button" value="Get Local Storage" onclick="javascript: document.writeln(pGetLocalStorage(document.getElementById('txtKey').value))"/>
<input type="button" value="Remove Local Storage" onclick="javascript: pRemoveLocalStorage(document.getElementById('txtKey').value)"/>
<br/>
<script type="text/javascript">
//sessionStorage.clear();
if(typeof(Storage)!=="undefined"){
document.writeln("Available sessionStorage is "+sessionStorage.length);
document.writeln("<br/> Available localStorage is "+localStorage.length);

}
</script>
<br/>
<input type="button" value="Clear All sessionStorage Object" onclick="javascript: sessionStorage.clear(); return false;" />
<br/>
<input type="button" value="Set Three sessionStorage Object" onclick="javascript: setSessionStorage(); return false;" />
<script type="text/javascript">
var setSessionStorage = function (){
sessionStorage.setItem("Name", "Bhakta");
sessionStorage.setItem("Age", "24");
sessionStorage.setItem("Height", "6ft");
document.writeln("<br/>Available sessionStorage after click is "+sessionStorage.length);
sessionStorage.length;
}
</script>
<br/>
<input type="button" value="Get Key of sessionStorage Object" onclick="javascript: getKeySessionStorage(); return false;" />
<script type="text/javascript">
var getKeySessionStorage = function (){
	for(i=0;i<sessionStorage.length;i++){
		document.writeln("<br/> Session Stotrage Key "+i+" is:"+ sessionStorage.key(i)+"<br/>");
	}
}
</script>
<br/>
<input type="button" value="Get Key of 4th sessionStorage Object" onclick="javascript: document.writeln('<br/> Session Stotrage Key '+4+' is:'+ sessionStorage.key(4)+'<br/>'); return false;" />
<br/>
<input type="button" value="Get Item Value of sessionStorage Object" onclick="javascript: getItemSessionStorage(); return false;" />
<script type="text/javascript">
var getItemSessionStorage = function (){
	for(i=0;i<sessionStorage.length;i++){
		document.writeln("<br/> Session Stotrage Value for key "+sessionStorage.key(i)+" is:"+ sessionStorage.getItem(sessionStorage.key(i))+"<br/>");
	}
}
</script>
<br/>
<input type="button" value="Get Value of unset sessionStorage Object" onclick="javascript: document.writeln('<br/> Session Stotrage value is:'+ sessionStorage.getItem('any')+'<br/>'); return false;" />
<br/>
<input type="button" value="Set Another sessionStorage Object" onclick="javascript: pSetSessionStorage('firstname','bhakta'); return false;" />
<br/>
<input type="button" value="Update firstname sessionStorage Object" onclick="javascript: pSetSessionStorage('firstname','Ranjan'); return false;" />
<br/>
<br/>
<input type="button" value="Set Key With large key for sessionStorage Object" onclick="javascript: pSetSessionStorage(Math.floor(Math.random()*100000000000000000000000000000000000000),'Large Key'); return false;" />
<br/>
<br/>
<input type="button" value="Set large value for a sessionStorage Object" onclick="javascript: pSetSessionStorage('largevalue','We submitted the report after identifying the lapses and suggested measures to make sure that they do not happen again. We found no evidence of wrong-doing or fraud or personal gain. I am deeply distressed over the humiliation heaped on people who spent their whole professional lives working for a valued national goal,  Professor Narasimha was quoted as saying by the Deccan Chronicle.Nair and three other ex-ISRO scientists were blacklisted based on two official reports on the controversial deal.An earlier committee comprising of Professor Roddam Narasimha and BK Chaturvedi had said there was no question of financial losses due to  cheap selling  of spectrum in the Antrix-Devas deal.Talking to reporters in the capital, BJP senior leader Arun Jaitley said details related to the statement made by the prime minister should be made public. It s a very important statement that the PM (prime minister) has made,  Jaitley said. Since he has made this statement...the government must make facts with regard to this public. So that the veracity of all this is known to the people of India who are in a position to define what is correct,  he said.Prime Minister Manmohan Singh, in an interview to Science magazine, has reportedly blamed American and Scandinavian NGOs for fuelling protests at the Kudankulam nuclear power plant in Tamil Nadu.The Prime Minister said some NGOs do not appreciate India s growing energy requirements.  The atomic energy programme has gone into difficulties because these NGOs, mostly I think based in the United States, don t appreciate the need for our country to increase the energy supply,  he told the  Science  magazine referring to Kudankulam where commissioning of two 1000-mw nuclear reactors has been stalled due to protests.Nuclear energy still has a role in India according to the PM. Yes, where India is concerned, yes. The thinking segment of our population certainly is supportive of nuclear energy,  he said. He was asked whether after the Fukushima disaster he still thought that nuclear energy has a role in India.'); return false;" />
<br/>
<input type="button" value="Try with Invalid Key and Invalid Value " onclick="javascript: sessionStorage.setItem('','');sessionStorage.setItem('invaliddata','');sessionStorage.setItem('','Invaliddata');"; />
<br/>
<input type="button" value="Insert 100 More Data" onclick="javascript: insertData(100);" />
<br/>
<br/>
<input type="button" value="Remove Age Key" onclick="javascript: pRemoveSessionStorage('Age'); pGetSessionStorage('Age')" />
<br/>
<br/>
<input type="button" value="Remove with Any invalid Key" onclick="javascript: pRemoveSessionStorage(randomString);" />
<br/>
<br/>
<input type="button" value="Add And Remove" onclick="javascript: pSetSessionStorage('one',randomString());pSetSessionStorage('two',randomString()); pRemoveSessionStorage('two')" />
<br/>
<p>Local Storage Functionalities</p>
<br/>
Enter Key:&nbsp;<input type="text" id="txtKey" /><br/>
Enter Value:&nbsp;<input type="text" id="txtValue" /><br/>
<input type="button" value="Set Local Storage" onclick="javascript: pSetLocalStorage(document.getElementById('txtKey').value,document.getElementById('txtValue').value)"/>&nbsp;
<input type="button" value="Get Local Storage" onclick="javascript: document.writeln(pGetLocalStorage (document.getElementById('txtKey').value))"/>

<br/>
<input type="button" value="Clear All localStorage Object" onclick="javascript: localStorage.clear(); return false;" />
<br/>
<br/>
<input type="button" value="Set Three localStorage Object" onclick="javascript: setLocalStorage(); return false;" />
<script type="text/javascript">
var setLocalStorage = function (){
localStorage.setItem("localName", "Bhakta");
localStorage.setItem("localAge", "24");
localStorage.setItem("localHeight", "6ft");
document.writeln("<br/>Available localStorage after click is "+localStorage.length);
}
</script>
<br/>
<input type="button" value="Get Key of localStorage Object" onclick="javascript: getKeyLocalStorage(); return false;" />
<script type="text/javascript">
var getKeyLocalStorage = function (){
	for(i=0;i<localStorage.length;i++){
		document.writeln("<br/> Local Storage Key "+i+" is:"+ localStorage.key(i)+"<br/>");
	}
}
</script>
<br/>
<input type="button" value="Get Key of 4th localStorage Object" onclick="javascript: document.writeln('<br/> local Stotrage Key '+4+' is:'+ localStorage.key(4)+'<br/>'); return false;" />
<br/>
<input type="button" value="Get Item Value of localStorage Object" onclick="javascript: getItemLocalStorage(); return false;" />
<script type="text/javascript">
var getItemLocalStorage = function (){
	for(i=0;i<localStorage.length;i++){
		document.writeln("<br/> Local Stotrage Value for key "+localStorage.key(i)+" is:"+ localStorage.getItem(localStorage.key(i))+"<br/>");
	}
}
</script>
<br/>
<input type="button" value="Get Value of unset localStorage Object" onclick="javascript: document.writeln('<br/> Local Stotrage value is:'+ localStorage.getItem('any')+'<br/>'); return false;" />
<br/>
<input type="button" value="Set Another localStorage Object" onclick="javascript: pSetLocalStorage('firstname','bhakta'); return false;" />
<br/>
<input type="button" value="Update firstname localStorage Object" onclick="javascript: pSetLocalStorage('firstname','Ranjan'); return false;" />
<br/>
<br/>
<input type="button" value="Set Key With large key for localStorage Object" onclick="javascript: pSetLocalStorage(Math.floor(Math.random()*100000000000000000000000000000000000000),'Large Key'); return false;" />
<br/>
<br/>
<input type="button" value="Set large value for a localStorage Object" onclick="javascript: pSetLocalStorage('largevalue','We submitted the report after identifying the lapses and suggested measures to make sure that they do not happen again. We found no evidence of wrong-doing or fraud or personal gain. I am deeply distressed over the humiliation heaped on people who spent their whole professional lives working for a valued national goal,  Professor Narasimha was quoted as saying by the Deccan Chronicle.Nair and three other ex-ISRO scientists were blacklisted based on two official reports on the controversial deal.An earlier committee comprising of Professor Roddam Narasimha and BK Chaturvedi had said there was no question of financial losses due to  cheap selling  of spectrum in the Antrix-Devas deal.Talking to reporters in the capital, BJP senior leader Arun Jaitley said details related to the statement made by the prime minister should be made public. It s a very important statement that the PM (prime minister) has made,  Jaitley said. Since he has made this statement...the government must make facts with regard to this public. So that the veracity of all this is known to the people of India who are in a position to define what is correct,  he said.Prime Minister Manmohan Singh, in an interview to Science magazine, has reportedly blamed American and Scandinavian NGOs for fuelling protests at the Kudankulam nuclear power plant in Tamil Nadu.The Prime Minister said some NGOs do not appreciate India s growing energy requirements.  The atomic energy programme has gone into difficulties because these NGOs, mostly I think based in the United States, don t appreciate the need for our country to increase the energy supply,  he told the  Science  magazine referring to Kudankulam where commissioning of two 1000-mw nuclear reactors has been stalled due to protests.Nuclear energy still has a role in India according to the PM. Yes, where India is concerned, yes. The thinking segment of our population certainly is supportive of nuclear energy,  he said. He was asked whether after the Fukushima disaster he still thought that nuclear energy has a role in India.'); return false;" />
<br/>
<input type="button" value="Try with Invalid Key and Invalid Value " onclick="javascript: localStorage.setItem('','');localStorage.setItem('invaliddata','');localStorage.setItem('','Invaliddata');"; />
<br/>
<input type="button" value="Insert 100 More Data" onclick="javascript: insertLocalData(100);" />
<br/>
<br/>
<input type="button" value="Remove Age Key" onclick="javascript: pRemoveLocalStorage('Age'); pGetSessionStorage('Age')" />
<br/>
<br/>
<input type="button" value="Remove with Any invalid Key" onclick="javascript: pRemoveLocalStorage(randomString);" />
<br/>
<br/>
<input type="button" value="Add And Remove" onclick="javascript: pSetLocalStorage('one',randomString());pSetLocalStorage('two',randomString()); pRemoveLocalStorage('two')" />
<br/>



<script type="text/javascript">
	
	var pSetLocalStorage = function(key,value){
		var key = key;
		var value = value;
		localStorage.setItem(key, value);
	}
	var pGetSessionStorage = function(key){
		var key = key;
		return sessionStorage.getItem(key);
		}
	var pRemoveSessionStorage = function(key){
		var key = key;
		sessionStorage.removeItem(key);
	}
	var pRemoveLocalStorage = function(key){
		var key = key;
		localStorage.removeItem(key);
	}
	
	var insertLocalData = function(count){
		var count = count;
		for (i=0;i<100;i++){
			pSetLocalStorage(i,randomString());
		}
	}
	var pSetSessionStorage= function(key,value){
		var key = key;
		var value = value;
		sessionStorage.setItem(key, value);
	}
	var pGetLocalStorage = function(key){
		var key = key;
		return localStorage.getItem(key);
		}

	var insertData = function(count){
		var count = count;
		for (i=0;i<count;i++){
			pSetSessionStorage(i,randomString());
		}
	}
	
	


</script>
