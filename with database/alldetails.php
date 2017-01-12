<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>General details</title>
</head>
<?php
include ('config.php');
echo "<b>STUDENT INFORMATION</b>";
echo '</br></br>';
$query = "select * from student ORDER BY firstname";
$result = mysql_query($query);

echo "<table border='1'>
<tr>
<th>FirstName</th>
<th>LastName</th>
</tr>";

while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "</tr>";
}
echo "</table>";
echo '</br></br>';
echo "<b>COURSE AVAILABLE</b>";
echo '</br></br>';
$query1 = "select course from course ORDER BY course";
$result1 = mysql_query($query1);

echo "<table border='1'>
<tr>
<th>Course</th>
</tr>";

while($row1 = mysql_fetch_array($result1)) {
  echo "<tr>";
  echo "<td>" . $row1['course'] . "</td>";
  echo "</tr>";
}
echo "</table>";
echo '</br></br>';
echo "<b>BOOKS AVAILABLE</b> ";
echo '</br></br>';
$query2 = "select * from book ORDER BY course";
$result2 = mysql_query($query2);
echo "<table border='1'>
<tr>
<th>Course</th>
<th>Book Title</th>
<th>Book Publisher</th>
<th>Book Edition</th>
<th>Date Of printing</th>
</tr>";

while($row2 = mysql_fetch_array($result2)) {
  echo "<tr>";
  echo "<td>" . $row2['course'] . "</td>";
  echo "<td>" . $row2['booktitle'] . "</td>";
  echo "<td>" . $row2['bookpublisher'] . "</td>";
  echo "<td>" . $row2['bookedition'] . "</td>";
  echo "<td>" . $row2['date'] .$row2['month'] .$row2['year'] . "</td>";
  echo "</tr>";
}

echo "</table>";
?>
<body>
</body>
</html>