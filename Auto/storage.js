	function storageEventHandler(e){
      alert("key " + e.key);
      alert("oldValue " + e.oldValue);
      alert("newValue " + e.newValue);
      alert("url " + e.url);
 }

 window.addEventListener('storage', storageEventHandler, false);
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
	