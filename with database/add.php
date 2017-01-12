<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include ('config.php');
$firstname=$_POST['fn'];
$course=$_POST['course'];
$book=$_POST['book'];
mysql_query("insert into enroll (firstname,course,book)VALUES ('$firstname','$course','$book')")or die(mysql_error());
?>
<table>
<tr>
<td>Student name:</td>
<td><?php echo $firstname; ?> </td>
</tr>
</table> 

<?php
$query = "select course from enroll WHERE firstname='$firstname'";
$result = mysql_query($query);
echo "Course selected:";
echo '<select id="course" name="course">';
//echo '<option value="">-select-</option>';
while ($row = mysql_fetch_assoc($result)){
?>
    <option value="<?php echo $row['course']; ?>"> <?php echo $row['course'];?> </option>
<?php    
}
echo "</select> </br>";
?>
<?php
$query1 = "select book from enroll WHERE firstname='$firstname'";
$result1 = mysql_query($query1);
echo "Books allocated for the particular student:";
echo '<select id="book" name="book">';
//echo '<option value="">-select-</option>';
while ($row = mysql_fetch_assoc($result1)){
?>
    <option value="<?php echo $row['book']; ?>"> <?php echo $row['book'];?> </option>
<?php    
}
echo "</select>";
?>


<body>
</body>
</html>