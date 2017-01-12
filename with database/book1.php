<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>store book</title>
</head>
<?php 
include ('config.php');
$c = $_POST['course'];
$bt = $_POST['booktitle'];
$be = $_POST['bookedition'];
$bp = $_POST['bookpublisher'];
$date= $_POST['date'];
$month= $_POST['month'];
$year= $_POST['year'];
mysql_query("insert into book (course,booktitle,bookpublisher,bookedition,date,month,year)VALUES ('$c','$bt','$bp','$be','$date','$month','$year')")or die(mysql_error());
$query = "select * from book ORDER BY course";
$result = mysql_query($query);
echo "<table border='1'>
<tr>
<th>Course</th>
<th>Book Title</th>
<th>Book Publisher</th>
<th>Book Edition</th>
<th>Date Of printing</th>
</tr>";

while($row = mysql_fetch_array($result)) {
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