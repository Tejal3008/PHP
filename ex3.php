<?php
$date=date_create("2013-03-15");
echo date_format($date,"d/m/y")."<br><hr>";
var_dump(checkdate(12,31,-400));
echo"<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
echo "<hr>";
$date1=date_create("1994-06-23");
$date2=date_create("2004-07-24");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
echo "<pre>";
?>
