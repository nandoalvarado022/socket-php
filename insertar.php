<?php
$mysqli = new mysqli("172.16.50.142", "remoto", "remoto", "areacaribe");
// include("clases/conect.php");
$mensaje = $_POST['mensaje'];
// $tipo = $_POST['tipo'];



$q = "INSERT INTO tbl_online_user values ('a', 8, null)";
if (!$mysqli->query($q)) {
	echo "Fallo";
}

// $res = mysql_query($q) or die (mysql_error());

$arrayjson = array();

$arrayjson[] = array(
	'mensaje' => "exito"
);

echo json_encode($arrayjson);
?>