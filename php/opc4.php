<!--
Sistema		:	Sistema Sangutroniko.
Archivo		:	opc4.php
Proposito	:	Opcion Promociones del Dia.
Autores		:	Cristian Reyes Rodriguez.
					Felipe Morales Palacios.
Viva Chile !
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<link href="../css/estilo.css"rel="stylesheet" type="text/css" />
 	<link rel="SHORTCUT ICON" href="../img/favicon.ico" />
	<title>Sistema de Gesti&oacute;n y Venta de Sandwich - Sangutroniko.</title>
	<meta name="author" content="Felipe Morales Palacios" />
	<meta name="description" content="Sistema de Gestión y Venta de Sandwich - Sangutroniko." />
</head>
<?php
	include_once("cabecera.php");
	include_once("botones.php");
	include_once("opciones.php");
?>	
<body>
	<div align="center">
		<table bgcolor="#FAFAFA" class="bordetabla">
			<tr>
				<td width="1024" height="390">
					<div align="center">
						<h1>
							Oferta del D&iacute;a.
						</h1>
						<table width="800">
							<tr align="center">
								<td>
									<a href="../img/foto1.jpg" title="Ave Solitaria.">
							  			<img src="../img/foto1.jpg" width="350" height="350" alt="" />
									</a>																		
								</td>
								<td>
									<a href="../img/foto7.jpg" title="Completo Chileno.">
						    			<img src="../img/foto7.jpg" width="350" height="350" alt="" />
									</a>																										
								</td>
							</tr>
							<tr align="center">
								<td><h5>Ave Solitaria.<br />Compre 2 Page 1.</h5></td>
								<td><h5>Completo Chileno<br />Compre 2 Page 1.</h5></td>
							</tr>
						</table>				
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>
<?php
	include_once("pie.php")
?>
</html>