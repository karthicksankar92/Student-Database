<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Details</title>
</head>
<script>
function student()
{
	
	 var hr = new XMLHttpRequest();
	  var url = "studentdetails1.php";
	var firstname= document.getElementById("firstname").value;
	var vars = "firstname="+firstname;
	
    hr.open("POST", url, true);
	 // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
				document.getElementById("det").innerHTML = return_data;	
		}
		
		
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    //document.getElementById("").innerHTML = "processing...";
}
</script>
<?php
include ('config.php');
$query = "select firstname from student";
$result = mysql_query($query);
echo "Select Student:";
echo '<select id="firstname" name="firstname" onchange="student()">';
echo '<option value="">-select-</option>';
while ($row = mysql_fetch_assoc($result))
{
	?>
<option value="<?php echo $row['firstname']; ?>"><?php echo $row['firstname'];?> </option>
<?php    
}
echo "</select>";
echo "</br></br>";
?>
<div id="det"></div>
<body>
</body>
</html>