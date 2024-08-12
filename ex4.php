<?php
	class test
	{
		public $id=1;
		public $nm;
		function show()
		{
			echo "id=".$this->id1;
			echo "<br>name=".$this->nm;
		}
	}
	$obj1=new test();
	$obj1->id1=101;
	$obj1->nm="tejal";
	$obj1->show();
?>