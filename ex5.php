<form>
	enter first number<input type="text"name="f"/><br/>
	enter second number<input type="text"name="s"/><br/>
	<input type="submit"value="show result"/>
</form>
<?php
	class demo
	{
		function add($a,$b)
		{
			$sum=$a+$b;
			echo "sum=".$sum."<br/>";
		}
		function sub($x,$y)
		{
			$sub=$x-$y;
			echo "subtraction=".$sub;
		}
	}
	$obj=new demo();
	$obj->add($_GET['f'],$_GET['s']);
	$obj->sub($_GET['f'],$_GET['s']);
?>