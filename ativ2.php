<html>
<body>
<form action="" method="post">
NOTA 1: <input type="number" name="n1"><br>
NOTA 2: <input type="number" name="n2"><br>
NOTA 3: <input type="number" name="n3"><br>
NOTA 4: <input type="number" name="n4"><br>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
if(isset($_REQUEST['submit']))
{
$soma = $_POST['n1'] + $_POST['n2'] + $_POST['n3'] + $_POST['n4'];
$media = $soma / 4;

echo $media;
}
?>