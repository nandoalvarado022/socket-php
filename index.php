<?php 
// include("clases/conect.php");
$mysqli = new mysqli("172.16.50.142", "remoto", "remoto", "areacaribe");
$resultado = $mysqli->query("SELECT ip FROM tbl_online_user ORDER BY ip ASC");
// $res1 = mysql_query("SELECT * FROM mensajes WHERE tipo = '1' ");
// $res2 = mysql_query("SELECT * FROM mensajes WHERE tipo = '2' ");
// $res3 = mysql_query("SELECT * FROM mensajes WHERE tipo = '3' ");
// $res4 = mysql_query("SELECT * FROM mensajes WHERE tipo = '4' ");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/fancywebsocket.js"></script>
</head>

<body>
<div style="width:300px; height:200px; border:solid 1px #999999;float:left;">Martin<br />
	<div id="1">
		<?php 
		// echo "<pre>"; print_r($resultado); echo "</pre>";
		for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
			$resultado->data_seek($num_fila);
			$fila = $resultado->fetch_assoc();
			echo " id = " . $fila['ip'] . "\n";
		}
		?>
	</div>
</div>
</body>
</html>