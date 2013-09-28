<!--
Sistema		:	Sistema Sangutroniko.
Archivo		:	index.php
Proposito	:	Pantalla Principal.
Autores		:	Cristian Reyes Rodriguez.
					Felipe Morales Palacios.
Viva Chile !
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<link href="css/estilo.css"rel="stylesheet" type="text/css" />
 	<link rel="SHORTCUT ICON" href="img/favicon.ico" />
	<title>Sistema de Gesti&oacute;n y Venta de Sandwich - Sangutroniko.</title>
	<meta name="author" content="Felipe Morales Palacios" />
	<meta name="description" content="Sistema de Gestión y Venta de Sandwich - Sangutroniko." />
</head>
<?php
	if(isset($_REQUEST["ingresar"]))
	{
		header("location: php/opc1.php");
	}
?>
<body>
	<div align="center">
	<form>
		<table class="bordetabla" width="1024" bgcolor="#F2F5A9">
			<tr>
				<td align="center" height="50">
					<h1>Sangutroniko, mas barato, mas r&aacute;pido, mas rico.</h1>				
				</td>
			</tr>
			<tr>
				<td align="center" height="400">
					<img src="img/sangu.png" width="380" height="380" alt="" />
				</td>
			</tr>
			<tr>
				<td align="center" height="100">
					<input type="submit" name="ingresar" id="ingresar" value="Ingresar." class="botonmenu" />				
				</td>
			</tr>
		</table>
	</form>		
	</div>
</body>
</html>					