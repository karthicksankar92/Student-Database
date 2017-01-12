<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
function restu()
{
	
	 var hr = new XMLHttpRequest();
	  var url = "removestudent1.php";
	var firstname= document.getElementById("firstname").value;
	var vars = "firstname="+firstname;
	
    hr.open("POST", url, true);
	 // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			alert("Selected student succesfully removed");
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
echo "Select Student to remove:";
echo '<select id="firstname" name="firstname" >';
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
<input type="Submit" name="Submit" value="Submit" onclick="restu()"/>
<div id="det"></div>
<body>
</body>
</html>