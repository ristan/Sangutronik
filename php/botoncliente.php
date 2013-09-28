<!--
Sistema		:	Sistema Sangutroniko.
Archivo		:	botoncliente.php
Proposito	:	Menu de Botones para Clientes.
Autores		:	Cristian Reyes Rodriguez.
					Felipe Morales Palacios.
Viva Chile !
-->
<div align="center">
	<form>
		<table bgcolor="#FAFAFA" class="bordetabla" width="1024">
			<tr>
				<td width="20">
				</td>
				<td width="854" align="left">
					<?php
						session_start();	
						echo "Bienvenid@ : ".$_SESSION["txt_datocliente"];
					?>
				</td>
				<td width="150" align="center">
					<input type="submit" name="boton1" id="boton1" value="Cerrar Sesion." class="botonmenu" />
				</td>
			</tr>
		</table>
	</form>		
</div>