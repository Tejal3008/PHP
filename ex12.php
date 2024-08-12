<?php
	date_default_timezone_set("asia/kolkata");
	echo "date & time:".date("d-m-y h:i:s a")."<br/>";
	echo date("d-m-y h:i:s a",mktime(15,20,30,07,21,2024))."<br/><br/>";
	echo date("d-m-y h:i:s a",gmmktime(15,20,30,07,21,2024));
?>