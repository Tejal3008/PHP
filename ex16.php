<?php
	function fact($n)
	{
		$f=1;
		for($i=1;$i<=$n;$i++)
		{
			$f=$f*$i;
		}
		echo "<br/>fact:".$f."<br/>";
	}
	echo "value 6";
	fact(6);

	echo "value 5";
	fact(5);
?>