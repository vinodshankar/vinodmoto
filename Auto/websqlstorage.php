
 <br/><br/><br/><br/><br/>
 Please make sure your browser supports HTML5. <br /> <br />
 <ul id="results"></ul>
 <div id="logs"></div>
Record: <input type="text" id="items" />  <br /> <br />
<button onClick="createRecord()">Create Record</button> 
<button onClick="createTable()">Create Table</button> 
<button onClick="dropTable()">Drop Table</button> <br /> <br />
No Of Rows: <input type="text" id="nor" />  <br /> <br />
<button onClick="createRandomRecord()">Insert Random Data</button> <br /> <br />
<button onClick="readRecord()">Get All Random Data</button> <br /> <br />
<a href="/html5/websql.html">Websql.html</a>


<script>
vinod = openDatabase("testdb13", "1.0", 'test db', 6*1024*1024);
var log = document.getElementById("logs");

// Read records stored
function readRecord() {
	document.getElementById("results").innerHTML = '';
 	vinod.transaction(function(tx) {
     tx.executeSql("SELECT * FROM TEST_TABLE", [], function(tx, result) {
       for (var i = 0, item = null; i < result.rows.length; i++) {
        item = result.rows.item(i);
         document.getElementById("results").innerHTML += 
             '<li><span contenteditable="true" onkeyup="updateRecord('+item['id']+', this)">'+
             item['text'] + '</span> <a href="#" onclick="deleteRecord('+item['id']+')">[Delete]</a></li>';
       }
     });
  });
 }
 
 // Update record on the fly
 function updateRecord(id, textEl) {
vinod.transaction(function(tx) {
    tx.executeSql("UPDATE TEST_TABLE SET text = ? WHERE id = ?", [textEl.innerHTML, id], null, onError);
  });
 }

 // Delete selected record 
 function deleteRecord(id) {
vinod.transaction(function(tx) {
     tx.executeSql("DELETE FROM TEST_TABLE WHERE id=?", [id],
         function(tx, result) { readRecord() }, 
         onError);
   });
 }
 
 // Add record with random values
 function createRecord() {
   var num = Math.round(Math.random() * 10000); // Random data
vinod.transaction(function(tx) {
     tx.executeSql("INSERT INTO TEST_TABLE (id, text) VALUES (?, ?)", [num, document.getElementById('items').value],
         function(tx, result) {
           log.innerHTML = '';
          readRecord();
         }, 
         onError);
   });
 }
 
 // Create table 
function createTable() {
vinod.transaction(function(tx) {
    tx.executeSql("CREATE TABLE TEST_TABLE (id REAL UNIQUE, text TEXT)", [],
        function(tx) { log.innerHTML = '<p>TEST_TABLE created!</p>'; },
        onError);
  });
}

// Delete table from database
 function dropTable() {
vinod.transaction(function(tx) {
     tx.executeSql("DROP TABLE TEST_TABLE", [],
         function(tx) { readRecord(); log.innerHTML = '<p>TEST_TABLE dropped!</p>'; }, 
         onError);
   });
 }
 
 // Log errors
function onError(tx, error) {
   log.innerHTML += '<p>' + error.message + '</p>';
 }
 
// Generate Random Data
function randomString() {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 8;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	return randomstring;
}

function createRandomRecord() {
vinod.transaction(function(tx) {
   var i;
   var count = document.getElementById('nor').value;
   for(i = 0; i< count; i++)
     tx.executeSql("INSERT INTO TEST_TABLE (id, text) VALUES (?, ?)", [i, randomString()],
         function(tx, result) {
           log.innerHTML = 'inserted Rows '+ i;
         }, 
         onError);
   });
 }
 
 var createObject = function (){
	alert("hello");
	// Arguments: Database Name, Version, Display Name, Estimated Size (bytes)
	vinod = openDatabase("testdb5", "1.0", "test", 11 * 1024 * 1024);
	alert("Object Created" + vinod);
 
 };
 
/* (function(){
 alert("hello");
 vinod = openDatabase("testdb", "1.0", "test", 2 * 1024 * 1024);
 alert("Object Created" + vinod);
 })();*/
 </script>
