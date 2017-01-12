<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>course validation</title>
</head>
<?php

include ('config.php');
$c=$_POST['course'];
$query1 = "select course from course WHERE course='$c'";
$result1 = mysql_query($query1);
$row = mysql_fetch_array($result1);
	if($row['course']==$c)
	{
		echo "<b>COURSE ALREADY REGISTERED</b>";
		echo "<br>Enter new course";
		?>
		<meta http-equiv="refresh" content="1">
        <?php
		//return true;
		
	}
else
{
	echo "<b>COURSE ADDED SUCCESSFULLY</b>";
mysql_query("insert into course (course)VALUES ('$c')")or die(mysql_error());
 
$query = "select course from course ORDER BY course";
$result = mysql_query($query);

echo "<table border='1'>
<tr>
<th>Course</th>
</tr>";

while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['course'] . "</td>";
  echo "</tr>";
}

echo "</table>";
}
?>

<body>
</body>
</html>