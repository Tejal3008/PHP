<?php
	class demo
	{
		function __construct()
		{
			echo "object is initializing their propertie"."<br/>";
		}
		function work()
		{
			echo "now work is going"."<br/>";
		}
		function __destruct()
		{
			echo "after completion the work object destroyed automatically";
		}
	}
	$obj=new demo();
	$obj->work();
	echo is_object($obj);
?>