<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include ('config.php');
$c=$_POST['course'];
$query2 = "select firstname from enroll  WHERE course='$c'";
$result2 = mysql_query($query2);
echo "STUDENTS ENROLLED FOR THE PARTICULAR COURSE:";
echo "</br>";
echo "<table border='1'>
<tr>
<th>FirstName</th>
</tr>";

while($row = mysql_fetch_array($result2)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>