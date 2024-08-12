<?php
	class demo
	{
		var $first=1000;
		var $second=500;
		function add()
		{
			$add=$this->first+$this->second;
			echo "addition=".$add."<br/>";
		}
		function sub()
		{
			$sub=$this->first-$this->second;
			echo "subtraction".$sub;
		}
	}
	$obj=new demo();
	$obj->add();
	$obj->sub();
?>