<?php
	function sum($n)
	{
		$s=0;
		for($i=1;$i<=$n;$i++)
		{
			$s=$s+$i;
		}
		echo "<br/>sum:".$s."<br/>";
	}
	echo "value 6";
	sum(6);
?>