<html>
<body>
<form action="" method="post">
VALOR DA GASOLINA: <input type="float" name="n1"><br>
VALOR DO ALCOOL: <input type="float" name="n2"><br>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
if(isset($_REQUEST['submit']))
{
$gas = $_POST['n1'];
$alc = $_POST['n2'];

$gas = $gas * 0.7;

if ($gas > $alc) 
{
	echo "abasteça com alcool";
}
else
{
	echo "abasteça com gasolina";	
}
}
?>