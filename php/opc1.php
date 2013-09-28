<!--
Sistema		:	Sistema Sangutroniko.
Archivo		:	opc1.php
Proposito	:	Pantalla Registro de Clientes.
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
	include_once("conexion.php");
	include_once("cabecera.php");
	include_once("botones.php");
	include_once("opciones.php");
	if(isset($_REQUEST["registro"]))
	{
		$link					=	conexion();
		$txt_rut				=	($_REQUEST["txt_rut"]);
		$txt_dv				=	strtoupper(($_REQUEST["txt_dv"]));
		$txt_nombre			=	strtoupper(($_REQUEST["txt_nombre"]));
		$txt_correo			=	strtolower(($_REQUEST["txt_correo"]));		
		$txt_direccion		=	strtoupper(($_REQUEST["txt_direccion"]));
		$txt_telefono		=	strtoupper(($_REQUEST["txt_telefono"]));
		$txt_clave			=	($_REQUEST["txt_clave"]);
		$rutin				=	strrev($txt_rut);			
		$cant					=	strlen($rutin);		
		$c						=	0;
		$r						=	"";
		$mail_correcto		=	0;
		$flag_ok				=	0;
		if($txt_rut == "")										//Por Rut Vacio
		{
			$flag_ok = 1;
		}
		else															//Calculo de Rut
		{		
			while($c<$cant)
			{
				$r[$c]	=	substr($rutin,$c,1);
				$c++;
			}
			$ca	=	count($r);
			$m		=	2;
			$c2	=	0;
			$suma	=	0;
			while($c2<$ca)
			{
				$suma	=	$suma+($r[$c2]*$m);
				if($m	==	7)
				{
					$m	=	2;
				}
				else
				{
					$m++;
				}
				$c2++;
			}
			$resto	=	$suma%11;
			$digito	=	11-$resto;
			if($digito	==	10)
			{
				$digito	=	"K";
			}
			else
			{
				if($digito	==	11)
				{
					$digito	=	"0";
				}
			}
			if($txt_dv	<>	$digito)
			{
				$flag_ok = 1;										//Rut Incorrecto
			}
		}
		if($txt_correo == "")									//Valida Correo
		{
			$flag_ok = 1;
		}
		else
		{
			if ((strlen($txt_correo) >= 6) && (substr_count($txt_correo,"@") == 1) && (substr($txt_correo,0,1) != "@") && (substr($txt_correo,strlen($txt_correo)-1,1) != "@"))
			{
				if ((!strstr($txt_correo,"'")) && (!strstr($txt_correo,"\"")) && (!strstr($txt_correo,"\\")) && (!strstr($txt_correo,"\$")) && (!strstr($txt_correo," ")))
				{
					if (substr_count($txt_correo,".")>= 1)
					{
						$term_dom = substr(strrchr ($txt_correo, '.'),1);
						if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) )
						{
							$antes_dom = substr($txt_correo,0,strlen($txt_correo) - strlen($term_dom) - 1);
							$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
							if ($caracter_ult != "@" && $caracter_ult != ".")
							{
								$mail_correcto = 1;
							}
						}
					}
				}
			}
			if ($mail_correcto <> 1)
			{
				$flag_ok = 1;										//Correo Incorrecto
			}
		}
		if(															//Valida Vacios
			($txt_nombre		== "") || 
			($txt_direccion	== "") ||
			($txt_telefono		== "") || 
			($txt_clave			== "")    				
			) 
		{
			$flag_ok = 1;											//Hay uno vacio
		}
		if($flag_ok == 1)											//Valida por incorrecto
		{
			echo "<script>alert('Existen datos incorrectos o faltante, verifique e intente de nuevo.')</script>";
		}
		else
		{																//Inicio Grabacion
			$SQL_ingclie	=	"INSERT INTO CLIENTE SET	
									RUT_CLIENTE			=	'$txt_rut',
									NOMBRE				=	'$txt_nombre',
									CORREO				=	'$txt_correo',
									DIRECCION			=	'$txt_direccion',
									FONO					=	'$txt_telefono',
									CLAVE					=	'$txt_clave'";
			if ($RES_ingclie = mysql_query($SQL_ingclie,$link))
			{
				echo "<script>alert('Datos ingresados correctamente.')</script>";
			}
			else
			{
				echo "<script>alert('El Rut ingresado ya existe, por favor verifique e intente de nuevo.')</script>";			
			}		
		}																//Fin Grabacion
	} 																	//termino del request
?>
<body>
	<div align="center">
	<form>
		<table bgcolor="#FAFAFA" class="bordetabla">
			<tr>
				<td width="1024" height="390">
					<table class="bordetabla" align="center" width="700">
						<tr>
							<td colspan="2" align="center">
								<h2>
									Reg&iacute;strese y acceda a todos los beneficios de nuestros Clientes.
								</h2>
							</td>
						</tr>
						<tr>
							<td width="100">
								Rut
							</td>
							<td>
								<input type="text" name="txt_rut" id="txt_rut" value="" maxlength="08" size="7" />
								<input type="text" name="txt_dv" id="txt_dv" value="" maxlength="01" size="1" />	
							</td>
						</tr>
						<tr>
							<td>
								Nombre
							</td>
							<td>
								<input type="text" name="txt_nombre" id="txt_nombre" value="" maxlength="150" size="45" />
							</td>
						</tr>
						<tr>
							<td>
								Correo
							</td>
							<td>
								<input type="text" name="txt_correo" id="txt_correo" value="" maxlength="150" size="45" />
							</td>
						</tr>
						<tr>
							<td>
								Direcci&oacute;n
							</td>
							<td>
								<input type="text" name="txt_direccion" id="txt_direccion" value="" maxlength="150" size="45" />
							</td>
						</tr>
						<tr>
							<td>
								Tel&eacute;fono
							</td>
							<td>
								<input type="text" name="txt_telefono" id="txt_telefono" value="" maxlength="150" size="45" />
							</td>
						</tr>
						<tr>
							<td>
								Clave
							</td>
							<td>
								<input type="password" name="txt_clave" id="txt_clave" value="" maxlength="15" size="45" />
							</td>
						</tr>						
						<tr>
							<td colspan="4" align="center">
								<input type="submit" name="registro" id="registro" value="Registrarse." class="botonmenu" />
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