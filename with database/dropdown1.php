<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enroll</title>
</head>
<?php
include ('config.php');
$c=$_POST['course'];
$fn=$_POST['firstname'];

$query2 = "select booktitle from book  WHERE course='$c'";
$result2 = mysql_query($query2);
while ($row = mysql_fetch_assoc($result2)){
?>
    <option value="<?php echo  $row['booktitle']; ?>"> <?php echo $row['booktitle'];?> </option> 
<?php    
}
?>

<body>
</body>
</html>