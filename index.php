<?php
$d = "/home/vol7_7/unaux.com/unaux_25915225/demlon.unaux.com/htdocs/";
if(isset($_POST["c"])){
echo $d.$_POST["a"];
if (!mkdir($d.$_POST["a"], 0777, true)) {die('Failed to create folders...');}
}
if(isset($_POST["d"])){
echo $d.$_POST["b"];
if (!rmdir($d.$_POST["b"])) {die('Failed to remove folders...');}
}
?>
<html>
<body>
<form method="post"><input name="a"><input type="submit" name="c"></from>
<form method="post"><input name="b"><input type="submit" name="d"></from>
</body>
</html>
