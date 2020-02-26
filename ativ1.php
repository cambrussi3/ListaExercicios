<html>
<body>
<form action="" method="post">
Valor 1: <input type="string" name="n1"><br>
Valor 2: <input type="string" name="n2"><br>
Valor 3: <input type="string" name="n3"><br>
Valor 4: <input type="string" name="n4"><br>
Valor 5: <input type="string" name="n5"><br>
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
$val = array($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5']);

sort($val);

echo json_encode($val);
}
?>
