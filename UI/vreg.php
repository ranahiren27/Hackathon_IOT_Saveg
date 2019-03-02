<?php
$conn=mysql_connect("localhost","root","");
	if($conn)
	{
		//echo "Connection Successfully";
	}
	else
	{
		die(mysql_error());
	}
	mysql_select_db("register");
?>
<html>

<head>
<title>Visitor Registration </title>
</head>

<body bgcolor="#2B788A">

<center>
<table>
<form method="POST" action="vlog.php">
<tr><td><center><h1>VISITOR REGISTER</h1></center></td></tr>
<tr>
<td>Username</td>
<td>
<input type="text" name="uname">
</td>
</tr>
<br/>

<tr>
<td>Email</td>
<td>
<input type="text" name="email">
</td></tr>
<br/>

<tr>
<td>Password</td>
<td>
<input type="password" name="password_1">
</td></tr>
<br/>
</table>
<br/>
<center>
<input type="submit" name="submit" value="register"> 
</form></center>
</center>

</form>
</table>




