// JavaScript Document
function book()
{
	 var hr = new XMLHttpRequest();
	  var url = "book1.php";
	var course= document.getElementById("course").value;
	var fn = document.getElementById("bt").value;
	var  be= document.getElementById("be").value;
	var bp = document.getElementById("bp").value;
	var date = document.getElementById("date").value;
	var month = document.getElementById("month").value;
	var year = document.getElementById("year").value;
	var vars = "course="+course+"&booktitle="+fn+"&bookedition="+be+"&bookpublisher="+bp+"&month="+month+"&year="+year+"&date="+date;
    hr.open("POST", url, true);
	 // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			alert("Books Added Succesfully");
				document.getElementById("demo").innerHTML = return_data;	
		}
		
		
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    //document.getElementById("").innerHTML = "processing...";
}
