<?php
	class demo
	{
		var $first=10;
		var $second=5;
		function add()
		{
			$add=$this->first+$this->second;
			echo "addition".$add."<br/>";
		}
		function sub()
		{
			$sub=$this->first-$this->second;
			echo "subtraction=".$sub."<br/>";
		}
		function summary()
		{
			$this->add();
			$this->sub();
			$res=$this->first*$this->second;
			echo "multiplication=".$res;
		}
	}
	$obj=new demo();
	$obj->summary();
	$obj2=new demo();
	$obj2->add();
?>