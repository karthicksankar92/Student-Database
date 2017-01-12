<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include ('config.php');
$c=$_POST['course'];
$query2 = "DELETE FROM book WHERE course='$c'";
$result2 = mysql_query($query2);
$query3 = "DELETE FROM enroll WHERE course='$c'";
$result3 = mysql_query($query3);
$query4 = "DELETE FROM course WHERE course='$c'";
$result4 = mysql_query($query4);
$query1 = "select * from course ORDER BY course";
$result1 = mysql_query($query1);

echo "<table border='1'>
<tr>
<th>course</th>
</tr>";

while($row = mysql_fetch_array($result1)) {
  echo "<tr>";
  echo "<td>" . $row['course'] . "</td>";
  echo "</tr>";
}

echo "</table>";
?>
<body>
</body>
</html>