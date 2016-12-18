function showData(){
   var xmlhttpmale,xmlhttpfemale;
   var str = document.getElementById("dropdown").value;
   if (str.length == "") {
		document.getElementById("male").innerHTML = "";
		document.getElementById("female").innerHTML="";
        return;
    } 
	
        if (window.XMLHttpRequest) {
            xmlhttpmale = new XMLHttpRequest();
			xmlhttpfemale = new XMLHttpRequest();
        } else {
            xmlhttpmale = new ActiveXObject("Microsoft.XMLHTTP");
			xmlhttpfemale = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttpmale.onreadystatechange = function() {
            if (xmlhttpmale.readyState == 4 && xmlhttpmale.status == 200) {
				document.getElementById("male").innerHTML = xmlhttpmale.responseText;
            }
        }
        xmlhttpmale.open("GET","babynames.php?q="+str+"&g=m",true);
        xmlhttpmale.send();
		
		xmlhttpfemale.onreadystatechange = function() {
            if (xmlhttpfemale.readyState == 4 && xmlhttpfemale.status == 200) {
				document.getElementById("female").innerHTML = xmlhttpfemale.responseText;
            }
        }
        xmlhttpfemale.open("GET","babynames.php?q="+str+"&g=f",true);
        xmlhttpfemale.send();
    		
}	
