<?php
	interface A
	{
		function f1();
	}
	interface B 
	{
		function f2();
	}
	class C implements A,B
	{
		function f1()
		{
			echo "hi";
		}
		function f2()
		{
			echo "hello";
		}
	}
	$ob=new C();
	$ob->f1();
	$ob->f2();
?>