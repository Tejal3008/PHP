<?php
	class A
	{
		function testA()
		{
			echo "this is test method of class A:";
		}
		function __construct()
		{
			echo "this is user defined constructor of class A"."<br/>";
		}
	}
	$obj=new A();
	$obj->testA();
?>