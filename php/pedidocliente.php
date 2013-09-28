<!--
Sistema		:	Sistema Sangutroniko.
Archivo		:	menucliente.php
Proposito	:	Pantalla Principal del Menu Cliente.
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
	include_once("botoncliente.php");
	include_once("opciones.php");
	$link				= conexion();
	$txt_sandwich	= "";
	$txt_valor		= 0;
	$txt_rut			= $_SESSION["txt_rutcliente"];
	
	if(isset($_REQUEST["boton1"]))							//Salir
	{
		session_unset();
		session_destroy();
		header("location: ../index.php");
	}

	if(isset($_REQUEST["calcular"]))							//calcular
	{
		$txt_sandwich	= ($_REQUEST["txt_sandwich"]);
		$txt_valor		= ($_REQUEST["txt_valor"]);	
		if($txt_sandwich == "")
		{
			echo "<script>alert('Por favor seleccione un Sandwich.')</script>";
		}
		else
		{
			$SQL_sandwich	= "SELECT * FROM PRODUCTO WHERE NOMBRE = '$txt_sandwich'";
			$RES_sandwich	= mysql_query($SQL_sandwich, $link);
			if ($ROW_sandwich = mysql_fetch_array($RES_sandwich))
			{
				//$txt_valor = $ROW_sandwich->VALOR;
				$txt_valor = "1200";	
				//echo "<script>alert('Encontro.')</script>";
			}
			else
			{
				echo "<script>alert('El producto seleccionado no existe, por favor seleccione otro.')</script>";			
			}	
		}		
		
	}
	
	if(isset($_REQUEST["comprar"]))							//comprar
	{
		$txt_sandwich	= ($_REQUEST["txt_sandwich"]);
		$txt_valor		= ($_REQUEST["txt_valor"]);

		if($txt_valor == 0)
		{
			echo "<script>alert('Por favor realice el proceso de calculo antes de comprar.')</script>";
		}
		else
		{
			$fecha	= time();
			$fecha2	= date("Y/m/d",$fecha);
			$hora		= time();
			$hora2	= date("h:i:s",$hora);		
			$SQL_ingpedido	=	"INSERT INTO PEDIDO SET	
									RUT_CLIENTE		=	'$txt_rut',
									RUT_OPERADOR	=	'11111111',
									FECHA				=	'$fecha2',
									HORA				=	'$hora2',
									ID_ESTADO		=	'1'";
			if ($RES_ingpedido = mysql_query($SQL_ingpedido,$link))
			{
				echo "<script>alert('El Pedido se ha generado correctamente.')</script>";
			}
			else
			{
				echo "<script>alert('El Pedido NO se genero, por favor intente nuevamente.')</script>";			
			}
		}		
	}
		
?>
<body>
	<div align="center">
	<form>
		<table width="1024" class="bordetabla" bgcolor="#FAFAFA">
			<tr>
				<td colspan="3" height="10"></td>
			</tr>
			<tr align="center">
				<td width="250" height="100" class="bordetabla" valign="top">
					<h1>
						Sandwich<br />
					</h1>
					<select name="txt_sandwich">
						<option value="">- Seleccione Sandwich -</option>
							<?php
								$SQL_sandwich	=	"SELECT *
														FROM PRODUCTO
														WHERE TIPO = 'S'
														ORDER BY NOMBRE";
								$RES_sandwich	=	mysql_query($SQL_sandwich, $link);
								while ($ROW_sandwich	=	mysql_fetch_object($RES_sandwich))
								{
							?>
									<option><?=$ROW_sandwich->NOMBRE;?></option>
							<?php
								}
							?>
					</select>				
				</td>
				<td rowspan="2" width="474" class="bordetabla">foto</td>
				<td class="bordetabla" valign="top">
					<h1>
						Valor a Pagar<br />
					</h1>
					$<input type="text" name="txt_valor" id="txt_valor" value="<?=$txt_valor;?>" maxlength="11" size="12" />
				</td>
			</tr>
			<tr align="center">
				<td height="140" class="bordetabla" valign="top">
					<h1>
						Agregados<br />
					</h1>
					<div align="left"><h4>
						<input type="checkbox" name="txt_a01" id="txt_a01" /><label for="txt_a01">COCA-COLA 1/2 LITRO $ 500.</label><br />
						<input type="checkbox" name="txt_a02" id="txt_a02" /><label for="txt_a02">FANTA 1/2 LITRO $ 500.</label><br />
						<input type="checkbox" name="txt_a03" id="txt_a03" /><label for="txt_a03">SPRITE 1/2 LITRO $ 500.</label><br />
						<input type="checkbox" name="txt_a04" id="txt_a04" /><label for="txt_a04">PAPA FRITA GRANDE $ 800.</label><br />
						<input type="checkbox" name="txt_a05" id="txt_a05" /><label for="txt_a05">PAPA FRITA MEDIANA $ 500.</label><br />
						<input type="checkbox" name="txt_a06" id="txt_a06" /><label for="txt_a06">PAPA FRITA CHICA $ 300.</label><br />
						<input type="checkbox" name="txt_a07" id="txt_a07" /><label for="txt_a07">AJI EXTRA $ 200.</label><br />
						<input type="checkbox" name="txt_a08" id="txt_a08" /><label for="txt_a08">KETCHUP EXTRA $ 200.</label><br />
						<input type="checkbox" name="txt_a09" id="txt_a09" /><label for="txt_a09">MOSTAZA EXTRA $ 200.</label><br />
						<input type="checkbox" name="txt_a10" id="txt_a10" /><label for="txt_a10">PALTA EXTRA $ 200.</label><br />
						<input type="checkbox" name="txt_a11" id="txt_a11" /><label for="txt_a11">SALSA AJO EXTRA $ 200.</label><br />
						<input type="checkbox" name="txt_a12" id="txt_a11" /><label for="txt_a12">SALSA VERDE EXTRA $ 200.</label><br />
						<input type="checkbox" name="txt_a13" id="txt_a13" /><label for="txt_a13">TOMATE EXTRA $ 200.</label><br /></h4>
					</div>
				</td>
				<td class="bordetabla">
					<input type="submit" name="calcular" id="calcular" value="Calcular." class="botoncompra" /><br /><br />
					<input type="submit" name="comprar" id="comprar" value="Comprar." class="botoncompra" />
				</td>
			</tr>
			<tr>
				<td colspan="3" height="10"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
<?php
	include_once("pie.php")
?>
</html>