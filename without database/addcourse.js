// JavaScript Document
var j=1;
function addCourse()
{
	//var i=1;
	 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "course.php";
	var cn = document.getElementById("course").value;
    var fn = document.getElementById("booktitle").value;
	var  be= document.getElementById("bookedition").value;
	var bp = document.getElementById("bookpublisher").value;
	var dp = document.getElementById("dateofprinting").value;
var vars = "&course="+cn+"&booktitle="+fn+"&bookedition="+be+"&bookpublisher="+bp+"&dateofprinting="+dp;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
		 
			
			switch (j)
			{
				case 1:
			document.getElementById("c1").innerHTML = return_data;
	    	j=j+1;
			break;
			case 2:
			document.getElementById("c2").innerHTML = return_data;
			j=j+1;
			break;
			case 3:
			document.getElementById("c3").innerHTML = return_data;
			j=j+1;
			break;
			case 4:
			document.getElementById("c4").innerHTML = return_data;
			j=j+1;
			break;
			case 5:
			document.getElementById("c5").innerHTML = return_data;
			j=j+1;
			break;
			case 6:
			document.getElementById("c6").innerHTML = return_data;
			j=j+1;
			break;
			}
			
		}
		
		
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    //document.getElementById("").innerHTML = "processing...";
}