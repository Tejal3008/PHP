<?php
	echo "timezone:".date_default_timezone_get();
	echo "<br/> time:".date("h:i:s")."<br/>";
	date_default_timezone_set("asia/kolkata");
	echo "timezone:".date_default_timezone_get();
	echo "<br/>time:".date("h:i:s a")."<br/>";
?>