<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$RoomNo=$_POST['rno'];
$Name=$_POST['name']; 
$LastName=$_POST['lname']; 
$Address=$_POST['addr'];
$PhoneNo=$_POST['contactno'];
 $Roomtype=$_POST['rtype'];
$IdentityType =$_POST['id'];
$IdentityNo =$_POST['ino'];
$Fromdate =$_POST['fromdate'];
$Todate =$_POST['todate'];
$Currdate =$_POST['currdate'];

$user_name = "root";
$password = "";
$database = "HotelMS";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

$status='1';

if ($db_found) {
print "Database Found " . $db_handle;

$SQL1="UPDATE `userdetail` SET `roomno` = '$RoomNo', `name` = '$Name', `lname` = '$LastName', `contactno` = '$PhoneNo',`rtype` = '$Roomtype', `itype` = '$IdentityType' , `ino` = '$IdentityNo', `add` = '$Address', `currdate` = '$Currdate', `fromdate` = '$Fromdate', `todate` = '$Todate', `status` = '$status' , `book` = ''  WHERE `userdetail`.`roomno` =$RoomNo";

$result = mysql_query($SQL1);

$SQL1="INSERT INTO `hotelms`.`history` (`roomno`, `name`, `lname`, `contactno`, `rtype`, `itype`, `ino`, `add`, `currdate`, `fromdate`, `todate`) VALUES ('$RoomNo', '$Name', '$LastName', '$PhoneNo', '$Roomtype', '$IdentityType', '$IdentityNo', '$Address', '$Currdate', '', '')";

$result = mysql_query($SQL1);
?>






<h1>
<?php print("Your data is submitted sucessfully");
$URL="index.html";
header ("Location: $URL");

?>

</h1>
<?php
mysql_close($db_handle);

}
else {
print "Database NOT Found " . $db_handle;
}



?>

</body>
</html>