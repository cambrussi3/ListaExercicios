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
$vlr = $_POST['n1'];
$x = 0;

do
{
	echo "$x ";
	$x++;
} while ($x <= $vlr);
}
?>