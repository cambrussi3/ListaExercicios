<html>
<body>

<form action="" method="post">

Arquivo se encontra em ./file/file.txt<br>

<input type="submit" name="submit">
</form>

</body>
</html>

<?php
if(isset($_REQUEST['submit']))
{

$str=file_get_contents("./file/file.txt");

echo "Frase: $str <br>";

$lstr = strtoupper($str);

$lstr = str_replace(' ', '', $lstr);

$strArray = count_chars($lstr,1);

foreach ($strArray as $key=>$value)
 {
	echo "Letra '".chr($key)."' foi encontrada $value veze(es)<br>";
 }
}
?>
