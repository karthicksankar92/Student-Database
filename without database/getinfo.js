
function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "store.php";
    var fn = document.getElementById("first_name").value;
    var ln = document.getElementById("last_name").value;
	var course = document.getElementById("course").value;
	//var course1 = document.getElementById("course").value;
	var booktitle = document.getElementById("booktitle").value;
	var bookpub = document.getElementById("bookpublisher").value;
	var bookedi = document.getElementById("bookedition").value;
	var dateofprint = document.getElementById("dateofprinting").value;
	
	
   var vars = "firstname="+fn+"&lastname="+ln+"&course="+course+"&booktitle="+booktitle+"&bookpub="+bookpub+"&bookedi="+bookedi+"&dateofprint="+dateofprint;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			
			switch (k)
			{
				case 1:
			document.getElementById("status").innerHTML = return_data;
	    	k=k+1;
			break;
			case 2:
			document.getElementById("status1").innerHTML = return_data;
			k=k+1;
			break;
			case 3:
			document.getElementById("status2").innerHTML = return_data;
			k=k+1;
			break;
			}
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
   // document.getElementById("status").innerHTML = "processing...";
}
