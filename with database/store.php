<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>store</title>
</head>
<?php


$fn= $_POST['firstname'];
$ln= $_POST['lastname'];
$c= $_POST['course'];
$bt= $_POST['booktitle'];
$bp= $_POST['bookpub'];
$be= $_POST['bookedi'];
$dp= $_POST['dateofprint'];
$array=array("$fn" ,"$ln","$c","$bt","$bp","$be","$dp");
$detail=array("Firstname","Lastname","Course","Book Title","Book Publisher","Book Edition","Date of printing");

$arrlength=count($array);
echo "<table border='1'>";
for($x=0;$x<$arrlength;$x++)
{
  echo "<tr>";
  echo "<td>". $detail[$x] . "</td>";
  echo "<td>" . $array[$x] . "</td>";
  echo "</tr>";
   }
echo "</table>";

?>
<body>
</body>
</html>