<!--
Sistema		:	Sistema Sangutroniko.
Archivo		:	operadorpedido.php
Proposito	:	Menu Pedido para Operador.
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
	include_once("botonoperador.php");
	include_once("opcionoperador.php");
	include_once("conexion.php");	
?>
<body>
	<div align="center">
		<table bgcolor="#FAFAFA" class="bordetabla">
			<tr>
				<td width="1024" height="390">
					<table class="bordetabla" align="center" width="700">		
						<table width="1000" align="center">
							<tr align="center">
								<td width="470" class="bordetabla"><h2>Pedidos Pendientes</h2></td>
								<td width="10"></td>
								<td width="200" class="bordetabla"><h2>Detalle Pedido</h2></td>
								<td width="10"></td>
								<td width="310" class="bordetabla"><h2>Estado</h2></td>
							</tr>
							<tr>
								<td class="bordetabla" height="330">
									<div align="center">
									<table border="1" width="460" >
										<tr bgcolor="lightgray">
											<th>Pedido</th>
											<th>Cliente</th>
											<th>Operador</th>
											<th>Fecha</th>
											<th>Hora</th>				
										</tr>
										<?php
											include_once("conexion.php");
											$link = conexion();
											$consulta1 =  "SELECT * FROM PEDIDO
																WHERE ID_ESTADO <> '4'";
											$resultado = mysql_query($consulta1, $link );
											while($fila = mysql_fetch_object($resultado))
											{
										?>
										<tr>
											<td><?=$fila->ID_PEDIDO;?></td>
											<td><?=$fila->RUT_CLIENTE;?></td>
											<td><?=$fila->RUT_OPERADOR;?></td>
											<td><?=$fila->FECHA;?></td>	
											<td><?=$fila->HORA;?></td>		
										</tr>
										<?php	
											}
										?>
									</table>
									</div>
								</td>
								<td></td>
								<td class="bordetabla">
									detalle pedido
								</td>
								<td></td>
								<td class="bordetabla">
									detalle
								</td>
							</tr>
						</table>

<!-- aqui termina -->
					</table>
				</td>
			</tr>
		</table>
	</div>
</body>
<?php
	include_once("pie.php")
?>
</html>