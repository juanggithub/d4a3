<?php
$enlace =  mysql_connect('mysql', 'root', 'TM1q2w3e.');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>
~

