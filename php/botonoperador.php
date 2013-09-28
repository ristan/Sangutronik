<!--
Sistema		:	Sistema Sangutroniko.
Archivo		:	botonoperador.php
Proposito	:	Menu de Botones para Operadores.
Autores		:	Cristian Reyes Rodriguez.
					Felipe Morales Palacios.
Viva Chile !
-->
<?php
	session_start();
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
				$_SESSION[txt_nombreusuario]	= $ROW_login->NOMBRE;
				header("location: pedidocliente.php");
			}
			else
			{
   	 		header("location: opc3.php");
			}
		}
		else
		{
			echo "<script>alert('Ingrese Rut y Clave.')</script>";			
		}
	}
?>
<div align="center">
	<form>
		<table bgcolor="#FAFAFA" class="bordetabla" width="1024">
			<tr>
				<td width="20">
				</td>
				<td width="424" align="left">
					<?php
						echo "Operador : ".$_SESSION["txt_datooperador"];
					?>
				</td>
				<td width="150" align="center">
					<input type="submit" name="boton1" id="boton1" value="Pedidos." class="botonmenu" />
				</td>
				<td width="150" align="center">
					<input type="submit" name="boton2" id="boton2" value="Ventas." class="botonmenu" />
				</td>				
				<td width="150" align="center">
					<input type="submit" name="boton3" id="boton3" value="Inventario." class="botonmenu" />
				</td>				
				<td width="150" align="center">
					<input type="submit" name="boton4" id="boton4" value="Cerrar Sesion." class="botonmenu" />
				</td>				
			</tr>
		</table>
	</form>		
</div>