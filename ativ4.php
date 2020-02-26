<html>
<body>
<form action="" method="post">
ALTURA: <input type="number" name="n1"> cm <br>
<label for="sexo">SEXO:</label>
<select id="sexo" name="n2">
  <option value="M">Masculino</option>
  <option value="F">Feminino</option>
</select>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
if(isset($_REQUEST['submit']))
{
$alt = $_POST['n1'] / 100;
$sexo = $_POST['n2'];

if ($sexo == 'M')
{
	$peso = (72.8 * $alt) - 58;
}
else
{
	$peso = (62.1 * $alt) - 44;
}

echo "Peso ideal: $peso";
}
?>