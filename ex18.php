<?php
class baseclass
{
	function add()
	{
		$x=100;
		$y=50;
		$add=$x+$y;
		echo "additon=".$add."<br/>";
	}
}
class child extends baseclass 
{
	function sub()
	{
		$x=100;
		$y=50;
		$sub=$x-$y;
		echo "subtraction=".$sub."<br/>";
	}
}
class nestedchild extends child 
{
	function mult()
	{
		$x=100;
		$y=50;
		$mult=$x*$y;
		echo "multiplication=".$mult."<br/>";
	}
}
class show extends nestedchild
{
	function __construct()
	{
		parent::add();
		parent::sub();
		parent::mult();
	}
}
$obj=new show();
?>