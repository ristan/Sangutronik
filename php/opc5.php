<!--
Sistema		:	Sistema Sangutroniko.
Archivo		:	opc5.php
Proposito	:	Opcion Como Comprar.
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
	<form>
		<table bgcolor="#FAFAFA" class="bordetabla">
			<tr>
				<td width="1024" height="390">
					<table class="bordetabla" align="center" width="700">
						<tr>
							<td width="100">
							</td>
							<td width="924" height="390" align="left" valign="top">
								<h2>								
								Para poder comprar siga las siguientes instrucciones.<br/>
								</h2>
								1.- Reg&iacute;strese el la Portada.<br/>
								2.- Luego haga clic en el bot&oacute;n Acceso Clientes.<br/>
								3.- Ingrese con su Rut y Contraseña.<br/>
								4.- Seleccione su Sandwich y sus agregados.<br/>
								5.- Haga clic en bot&oacute;n Comprar.<br/>
								6.- Confirmado el pago, lo llamaremos al tel&eacute;fono que indico.<br/>
								7.- Confirmaremos su direcci&oacute;n de env&iacute;o.<br/>
								8.- Y su pedido ir&aacute; en camino.
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
	</div>
</body>
<?php
	include_once("pie.php")
?>
</html>