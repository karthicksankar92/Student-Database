<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>student1</title>
</head>
<?php
include ('config.php');
$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("student",$con);
$fn=$_POST['firstname'];
$ln= $_POST['lastname'];
mysql_query("insert into student (firstname,lastname)VALUES ('$fn','$ln')")or die(mysql_error());
 
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
?>
<body>
</body>
</html>