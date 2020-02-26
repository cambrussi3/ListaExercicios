<html>
<body>

<form action="" method="post">

Intervalo<br>
Digite início: <input type="integer" name="n1"><br>
Digite fim: <input type="integer" name="n2"><br>

<input type="submit" name="submit">
</form>

</body>
</html>

<?php
if(isset($_REQUEST['submit']))
{
$x = $_POST['n1'];
$y = $_POST['n2'];

if ($y > $x)
{
	$x++;
	while ($x < $y)
	{
		echo "$x ";
		$x++;
	}
}
else
{
	$y--;
	while ($y > $x)
	{
		echo "$y ";
		$y++;
	}
}
}
?>