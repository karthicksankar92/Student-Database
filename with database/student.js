
// JavaScript Document
function student()
{
	 var hr = new XMLHttpRequest();
	  var url = "student1.php";
	
	var fn = document.getElementById("fn").value;
	var  ln= document.getElementById("ln").value;
	var vars = "&firstname="+fn+"&lastname="+ln;
    hr.open("POST", url, true);
	 // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			alert("Student Added Succesfully");
				document.getElementById("demo").innerHTML = return_data;	
		}
		
		
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    //document.getElementById("").innerHTML = "processing...";
}