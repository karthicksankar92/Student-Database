// JavaScript Document
function course()
{
	 var hr = new XMLHttpRequest();
	  var url = "course1.php";
	var course= document.getElementById("cn").value;
	var vars = "course="+course;
    hr.open("POST", url, true);
	 // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
		  
			
				document.getElementById("demo").innerHTML = return_data;
			}
		
		
		
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    //document.getElementById("").innerHTML = "processing...";
}
	
