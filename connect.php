<?php
	ob_start();
	
	$userip=$_SERVER['REMOTE_ADDR'];

	$dbconnnect=@mysql_connect('localhost','root','');
	if(!$dbconnnect)
	{
		die("Not connected");
	}
	
	$dbselect=@mysql_select_db('codeshastra',$dbconnnect);
	if(!$dbselect)
	{
		die("Database cannot be accessed!");
	}
?>