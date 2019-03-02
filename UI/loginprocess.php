<?php
include('config.php');

$query= "select * from register where email='".$_POST['email']."'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
	if($row['pass']==$_POST['password'])
	{
		session_start();
		$_SESSION['emailid']=$_POST['email'];
		header("location:travels.php");
		//echo $_POST['email'];
		//echo $_POST['password'];
	}
	else
	{
		header("location:login.html");		
	}
}?>

