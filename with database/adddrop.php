<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add/drop class</title>
</head>
<script>
function add()
{
	var firstname=document.getElementById("firstname").value;
	var course=document.getElementById("course1").value;
	var book=document.getElementById("book").value;
	var hr=new XMLHttpRequest();
	url="add.php";
	var data="fn="+firstname+"&course="+course+"&book="+book;
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
    hr.send(data); // Actually execute the request
    //document.getElementById("").innerHTML = "processing...";
}
	
</script>
<script src="dropdown.js"></script>

<?php
include ('config.php');
$query = "select firstname from student";
$result = mysql_query($query);
echo "Select Student:";
echo '<select id="firstname" name="firstname">';
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
<?php
$query1="select course from course";
$result1=mysql_query($query1);
echo "Select course:";
echo '<select id="course1" name="course1" onchange="drop()">';
echo '<option value="">-select-</option>';

while ($row = mysql_fetch_assoc($result1))
{
	?>
<option value="<?php echo $row['course']; ?>"><?php echo $row['course'];?> </option>
<?php    
}
echo "</select>";
echo "</br></br>";
?>
<?php
echo "Select book for the course";
echo '<select id="book" name="book"></select>';
echo "</br></br>";
?>

<input type="submit" name="submit" value="submit" onclick="add()">

<div id="demo"> </div>


<body>
</body>
</html>