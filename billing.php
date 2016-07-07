<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Billing System </title>
<link rel="stylesheet" type="text/css" href="css/Hotel.css"/>
<style type="text/css">

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
Strebr Hotel Management System</center></h1><br><br>
<ex>Billing   </ex>

<p class="ex2">
 Room No. : <?php print $_POST['rno']; ?><br/>
 Type Of Room : <?php print $_POST['rtype']; ?><br>
 Stay (No. of days) : <?php print $_POST['diff']; ?><br>
 Date : <?php print $_POST['cddate']; ?><br>
 Price : <?php print $_POST['cost']; ?>
</p>

<br><br>

<div id="footer"> <center>
This Application is developed & maintain by <a href="streber.zzl.org" style="text-decoration:none">Streber Inc.</a> Ltd.<br>
&copy; <a href="streber.zzl.org" style="text-decoration:none">Streber Inc.</a> Terms & Condition
</center>
</div>
</div>

</body>
</html>