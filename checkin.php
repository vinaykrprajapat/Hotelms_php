<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Billing System </title>
<link rel="stylesheet" type="text/css" href="css/Hotel.css"/>
<style type="text/css">

</style>

</head>

<body>

<div id="HeadLine">
<big><ex>Hotel Seven Seas</ex></big>
</div>

<div id="MenuTop">
<a href="index.html"><img src="img/Menutop_Home.png" alt="Home">Home</a>
<a href="checkin.php"><img src="img/Menutop_CheckIn.png" alt="Check In">Check In</a>
<a href="checkout.php"><img src="img/Menutop_CheckOut.png" alt="Check out">Check out</a>
<a href="billing.php"><img src="img/Menutop_EC.png" alt="Bills">Bills</a>
</div>

<div id="Content" style="margin-left:100px;"><h1>
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


$SQL = "SELECT * FROM userdetail where status='0'";
$result = mysql_query($SQL);



?>




<form action="processcheckin1.php" name="frm1" method="post" >
<ex1><input type="submit" value="Book Room"></ex1>
<ex>Available Rooms   </ex>

<p class="ex2">

<table width="723" border="2" cellspacing="0" cellpadding="0">
  <tr>
    <th width="206" scope="row">&nbsp;<center> Select Any One </center></th>
    <td width="250" >&nbsp;<center> Room No : </center></td>
    <td width="257">&nbsp;<center> Room Type : </center></td>
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
    <th scope="row">&nbsp;<input type='checkbox' name="chk" value="<?php print $db_field['roomno']; ?>"/></th>
    <td>&nbsp;<center><?php print $db_field['roomno']; ?></center></td>
    <td>&nbsp;<center><?php print $roomt; ?></center> </td>
      </tr>



<?php
print("   ");
}




$SQL1 = "SELECT * FROM userdetail  where 'fromdate'='$currdate'";
$result = mysql_query($SQL1);

$rnos= print $db_field['roomno']; 

	$SQL1="UPDATE `userdetail` SET  `status` = '1' where 'roomno'='$rnos'";
    $result = mysql_query($SQL1);

	


?>

</table>


</p>

</form>
<?php

mysql_close($db_handle);

}
else {
print "Database NOT Found " . $db_handle;
}





?>


<br><br>
<div id="footer" style="margin-top:1000px;"> <center>
This Application is developed & maintain by <a href="streber.zzl.org" style="text-decoration:none">Streber Inc.</a> Ltd.<br>
&copy; <a href="streber.zzl.org" style="text-decoration:none">Streber Inc.</a> Terms & Condition
</center>
</div>
</div>

</body>
</html>