<?php 
// include("clases/conect.php");
$mysqli = new mysqli("172.16.50.142", "remoto", "remoto", "areacaribe");
$resultado = $mysqli->query("SELECT count(*) as count FROM tbl_online_user where ip='a'");
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
	<div id="1">
		<?php 
		$res = $resultado->fetch_assoc();
		echo $res["count"];
		?>
	</div>
</body>
</html>