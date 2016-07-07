

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Billing System </title>
<script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
<link rel="stylesheet" type="text/css" href="css/Hotel.css"/>
<style type="text/css">
#cont {

	position:absolute;
	width:90%;
	height:70%;
	z-index:1;
	left: 10%;
	top: 20%;
}
#content {
    width:900px;
    vertical-align:top;
    text-align:center;
	margin:0 auto 0 auto;
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

<div id="Content"><br>
<h1><center>
Strebr Hotel Management System</center></h1>
</div>

<div id="cont"><br>
<ex>Book Rooms No. 
<?php
$rno= $_POST['chk'];
echo $rno;
?>
</ex>




<form action="processcheckin2.php" method="post" name="frm2">
<p class="ex2">
         
         <input  name="rno"  type="hidden" value="<?php echo $rno; ?> ">
         
		First Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name" >
		&nbsp;&nbsp;&nbsp;&nbsp;
		<span>Last Name : &nbsp;&nbsp; <input type="text" name="lname"></span><br><br/>
		
		Contact Number : &nbsp;&nbsp; <input type="text" name="contactno">
		<span> Type Of Room : 
        <select name="rtype" style="height:25px; width:200px; font:'Times New Roman', Times, serif; font-size:16px;" >
        <option value="1">Normal</option>
        <option value="2">Delux</option>
        <option value="3">Super Delux</option>
        <option value="4">Luxurious</option>
        <option value="5">Other</option>
        </select>

        
        </span><br><br/>

		Identity Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="id" style="height:25px; width:200px; font:'Times New Roman', Times, serif; font-size:16px;" >
        <option>Passport</option>
        <option>PAN</option>
        <option>Driving Licence</option>
        <option>Voter Id</option>
        <option>Other</option>
        </select>
        &nbsp;&nbsp;&nbsp;
		<span> Identity No : <input type="text" name="ino"></span><br><br/>
		

		Date From :	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="Text" id="demo1" maxlength="25" size="25" name="fromdate">
		<a href="javascript:NewCal('demo1','ddmmmyyyy',true,24)">
		<img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
	
		&nbsp;&nbsp;
		<span>	Date To : &nbsp;&nbsp;&nbsp;&nbsp; <input type="Text" id="demo1" maxlength="25" size="25" name="todate">
		<a href="javascript:NewCal('demo1','ddmmmyyyy',true,24)">
		<img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></span>
		<br><br/>
		
		Address : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<textarea name="addr"></textarea>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Today Date : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input  type="text" name="currdate" value="<?php date_default_timezone_set('Asia/Kolkata'); $currdate=date('d/m/y'); echo $currdate;?>"  />
        <br>
<br><br></p>

<input type="submit" value="Submit">
</form>
<br><br>

<div id="footer"> <center>
This Application is developed & maintain by <a href="streber.zzl.org" style="text-decoration:none">Streber Inc.</a> Ltd.<br>
&copy; <a href="streber.zzl.org" style="text-decoration:none">Streber Inc.</a> Terms & Condition
</center>
</div>
</div>

</body>
</html>