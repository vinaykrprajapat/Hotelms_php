<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Billing System </title>
<link rel="stylesheet" type="text/css" href="css/Hotel.css"/>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:820px;
	height:971px;
	z-index:1;
	left: 10px;
	top: 101px;
}
</style>

</head>

<body>

<div id="HeadLine"><ex>
<big>Hotel Seven Seas</ex></big>
</div>

<div id="MenuTop">
<a href="index.html"><img src="img/Menutop_Home.png" alt="Home">Home</a>
<a href="checkin.php"><img src="img/Menutop_CheckIn.png" alt="Check In">Check In</a>
<a href="checkout.php"><img src="img/Menutop_CheckOut.png" alt="Check out">Check out</a>
<a href="detail.php"><img src="img/Menutop_EC.png" alt="Details">Details</a>
</div>

<div id="Content"><h1>
<center>
Strebr Hotel Management System</center></h1><br>


<?PHP 
$user_name = "root";
$password = "";
$database = "HotelMS";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {


date_default_timezone_set('Asia/Kolkata'); $currdate=date('d/m/y'); 

$SQL = "SELECT * FROM userdetail where status='1'";
$result = mysql_query($SQL);

?>






<div id="apDiv1">
<form action="processcheckout.php" method="post">




<table width="798" border="2" cellspacing="0" cellpadding="0" style=" font-size:24px;">
  <tr>
    <th width="206" scope="row">Select</th>
    <td width="99">&nbsp;Room No.</td>
    <td width="227">&nbsp;Room Type</td>
    <td width="169">&nbsp;Dated</td>
    <td width="83">&nbsp;Stay</td>
  </tr>

<?php
while ($db_field = mysql_fetch_assoc($result)) {
$roomtype=$db_field['rtype'];
if($roomtype=='1')
{
	$roomt="Normal";
	}
elseif($roomtype=='2')
{
	$roomt="Delux";
	}
elseif($roomtype=='3')
{
	$roomt="Super Delux";
	}
elseif($roomtype=='4')
{
	$roomt="Luxurious";
	}
else
{
	$roomt="Other";
	}

?>


  <tr>
    <th scope="row">&nbsp;<input  type="checkbox" name="chk" value="<?php print $db_field['roomno']; ?>"/></th>
    <td>&nbsp;<?php print $db_field['roomno']; ?> </td>
    <td>&nbsp; <?php print $roomt; ?></td>
    <td>&nbsp; <?php print $db_field['currdate']; ?></td>
    <td>&nbsp; <?php $start=$db_field['currdate']; $stay=$currdate-$start; print $stay; ?>
    
    <input  type="hidden" value="<?php print $db_field['currdate']; ?>" name="currdate" />
    <input  type="hidden" value="<?php print $roomt; ?>" name="rty" />
    
    </td>
  </tr>

<?php
print("   ");
}
?>
</table>
<br/><br/>
<input type="submit" value="Check Out" />

</form>

<?php

mysql_close($db_handle);

}
else {
print "Database NOT Found " . $db_handle;
}





?>

</div>
<br><br>
<div id="footer" style="margin-top:1000px;"> <center>
This Application is developed & maintain by <a href="streber.zzl.org" style="text-decoration:none">Streber Inc.</a> Ltd.<br>
&copy; <a href="streber.zzl.org" style="text-decoration:none">Streber Inc.</a> Terms & Condition
</center>
</div>
</div>

</body>
</html>