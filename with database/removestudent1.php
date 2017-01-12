<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include ('config.php');
$fn=$_POST['firstname'];
$query2 = "DELETE FROM student WHERE firstname='$fn'";
$result2 = mysql_query($query2);
$query3 = "DELETE FROM enroll WHERE firstname='$fn'";
$result3 = mysql_query($query3);
$query1 = "select * from student ORDER BY firstname";
$result1 = mysql_query($query1);

echo "<table border='1'>
<tr>
<th>FirstName</th>
<th>LastName</th>
</tr>";

while($row = mysql_fetch_array($result1)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "</tr>";
}

echo "</table>";
?>

<body>
</body>
</html>