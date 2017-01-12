<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include ('config.php');
$bk=$_POST['book'];
$query2 = "DELETE FROM book WHERE booktitle='$bk'";
$result2 = mysql_query($query2);
$query3 = "DELETE FROM enroll WHERE booktitle='$bk'";
$result3 = mysql_query($query3);
$query1 = "select * from book ORDER BY course";
$result1 = mysql_query($query1);

echo "<table border='1'>
<tr>
<th>Course</th>
<th>Book Title</th>
<th>Book Publisher</th>
<th>Book Edition</th>
<th>Date Of printing</th>
</tr>";

while($row = mysql_fetch_array($result1)) {
  echo "<tr>";
  echo "<td>" . $row['course'] . "</td>";
  echo "<td>" . $row['booktitle'] . "</td>";
  echo "<td>" . $row['bookpublisher'] . "</td>";
  echo "<td>" . $row['bookedition'] . "</td>";
  echo "<td>" . $row['date'] .$row['month'] .$row['year'] . "</td>";
  echo "</tr>";
}

echo "</table>";
?>
<body>
</body>
</html>