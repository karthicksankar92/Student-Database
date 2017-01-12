<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include ('config.php');
$fn=$_POST['firstname'];
$query2 = "select course,book from enroll  WHERE firstname='$fn'";
$result2 = mysql_query($query2);
echo "COURSE DETAILS:";
echo "</br>";
echo "<table border='1'>
<tr>
<th>Course</th>
<th>Text Book</th>
</tr>";

while($row = mysql_fetch_array($result2)) {
  echo "<tr>";
  
 echo "<td>" . $row['course'] . "</td>";
echo "<td>" . $row['book'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
<body>
</body>
</html>