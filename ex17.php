<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>example</title>
</head>
<body>
<form action="ex17.php" method="POST">
	<table>
		<tr>
			<th>enter any no.:</th>
			<td><input type="text" name="no1"/></td>
		</tr>
		<tr>
			<th>enter any no.:</th>
			<td><input type="text" name="no2"/></td>
		</tr>
		<tr>
			<th><input type="submit" name="SUBMIT" value="SUM"/></th>
			<th><input type="submit" name="MUL" value="mul"/></th>
			<th><input type="reset" value="RESET"/></th>
		</tr>
	</table>
</form>
</body>
</html>
<?php
	if($_POST['SUBMIT'])
	{
		function sum($x,$y)
		{
			echo "sum=".$x+$y;
		}
		sum($_POST['no1'],$_POST['no2']);
	}
	if($_POST['mul'])
	{
		function mul($x,$y)
		{
			echo "mul=".$x*$y;
		}
		mul($_POST['no1'],$_POST['no2']);
	}
?>