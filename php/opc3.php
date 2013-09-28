<!--
Sistema		:	Sistema Sangutroniko.
Archivo		:	opc3.php
Proposito	:	Opcion Acceso Clientes.
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
	session_start();
	include_once("cabecera.php");
	include_once("botones.php");
	include_once("opciones.php");
	include_once("conexion.php");	
	if(isset($_REQUEST["ingreso"]))	
	{
		$link			=	conexion();
		$txt_rut		=	($_REQUEST["txt_rut"]);
		$txt_dv		=	($_REQUEST["txt_dv"]);
		$txt_clave	=	($_REQUEST["txt_clave"]);
		if(($txt_rut <> "") && ($txt_clave <> ""))
		{	
			$SQL_login		= "SELECT * FROM CLIENTE
   	                 		WHERE	RUT_CLIENTE	= '$txt_rut' AND
											CLAVE			= '$txt_clave'";
			$RES_login = mysql_query($SQL_login, $link);
			if($ROW_login = mysql_fetch_object($RES_login))
			{
				$_SESSION[txt_datocliente]	= $ROW_login->NOMBRE.". - Correo registrado : ".$ROW_login->CORREO;
				$_SESSION[txt_rutcliente] = $ROW_login->RUT_CLIENTE;
				header("location: pedidocliente.php");
			}
			else
			{
   	 		echo "<script>alert('El Rut o la Clave son Incorrectos, verifique e intente nuevamente.')</script>";
			}
		}
		else
		{
			echo "<script>alert('Ingrese Rut y Clave.')</script>";			
		}
	}	
?>
<body>
	<div align="center">
		<table bgcolor="#FAFAFA" class="bordetabla">
			<tr>
				<td width="1024" height="390">
					<div align="center">
						<h1>
							Ingrese su Rut, sin puntos, su d&iacute;gito verificador y su clave.
						</h1>
						<form>
							<table width="250" class="bordetabla">
								<tr>
									<td width="50" align="right">Rut</td>
									<td>
										<input type="text" name="txt_rut" id="txt_rut" value="" maxlength="08" size="7" />
										<input type="text" name="txt_dv" id="txt_dv" value="" maxlength="01" size="1" />									
									</td>
								</tr>
								<tr>
									<td align="right">Clave</td>
									<td>
										<input type="password" name="txt_clave" id="txt_clave" value="" maxlength="15" size="15" />
									</td>
								</tr>
								<tr>
									<td colspan="2" align="center">
										<input type="submit" name="ingreso" id="ingreso" value="Ingresar." class="botonmenu" />
									</td>
								</tr>
							</table>
						</form>
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