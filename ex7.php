<?php
	class parents
	{
		public $name="shashi";
		protected $profile="developer";
		private $salary="5000";
		public function show()
		{
			echo "welcome:".$this->name."<br/>";
			echo "profile:".$this->profile."<br/>";
			echo "salary:".$this->salary."<br/>";
		}
	}
	class childs extends parents 
	{
		public function show1()
		{
			echo "welcome:".$this->name."<br/>";
			echo "profile:".$this->profile."<br/>";
			echo "salary:".$this->salary."<br/>";
		}
	}
	$obj=new childs;
	$obj->show();
?>