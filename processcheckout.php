<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel</title>
</head>

<body>
<?php 
$rno=$_POST['chk'];
$cdate=$_POST['currdate'];
$rty=$_POST['rty'];
?>


<?php
$user_name = "root";
$password = "";
$database = "HotelMS";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {
print "Database Found " . $db_handle;

$SQL1="UPDATE `userdetail` SET `status` = '0' WHERE `userdetail`.`roomno` ='$rno'  AND `userdetail`.`currdate` = '$cdate'  LIMIT 1 ";
$result = mysql_query($SQL1);
?>
<h1>
<?php print("Your data is submitted sucessfully");

?>
</h1>
<?php
mysql_close($db_handle);

}
else {
print "Database NOT Found " . $db_handle;
}

date_default_timezone_set('Asia/Kolkata');
 $fdate=date('d/m/y'); 
 
 $diff=$fdate-$cdate;
 
 if($rty=='Normal')
 {
	 $cost=$diff*2000;
	 }
  elseif($rty=='Delux')
 {
	 $cost=$diff*3000;
	 }
  elseif($rty=='Super Delux')
 {
	 $cost=$diff*5000;
	 }
	 elseif($rty=='Luxurious')
 {
	 $cost=$diff*5000;
	 } 	
 	
	  
?>
For Billing Details Click Below <br/>
<form action="billing.php" method="post" name="frmbill">
<input name="rno" type="hidden"  value="<?php print $rno; ?>"/>
<input name="rtype" type="hidden"  value="<?php print $rty ?>"/>
<input name="cddate" type="hidden"  value="<?php print $cdate ?>"/>
<input name="diff" type="hidden"  value="<?php print $diff ?>"/>
<input name="cost" type="hidden"  value="<?php print $cost ?>"/>
<input type="submit" value="Continue" />
</form>

</body>
</html>