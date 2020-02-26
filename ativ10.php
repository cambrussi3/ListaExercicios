<html>
<body>

<form action="" method="post">

Digite um número: <input type="char_from_digit" name="n1"><br>

<input type="submit" name="submit">
</form>

</body>
</html>

<?php
if(isset($_REQUEST['submit']))
{
$string = $_POST['n1'];
echo 	strrev( $string ); 
}
?>