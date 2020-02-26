<html>
<body>

<form action="" method="post">

Digite um valor: <input type="float" name="n1"><br>

<input type="submit" name="submit">
</form>

</body>
</html>

<?php
if(isset($_REQUEST['submit']))
{
$x = $_POST['n1'];
$vlr = $x;

do
{
	$vlr *= $x - 1;
	$x--;
} while ($x > 1);

echo $vlr;
}
?>