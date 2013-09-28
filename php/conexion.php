<!--
Sistema		:	Sistema Sangutroniko.
Archivo		:	conexion.php
Proposito	:	Realiza la conexion al server y a la database.
Autores		:	Cristian Reyes Rodriguez.
					Felipe Morales Palacios.
Viva Chile !
-->
<?php
	function conexion()
	{ 
		$servidor	=	'localhost';
		$usuario 	=	'felipe_morales';
		$clave		=	'kanitobandolero';
		$base			=	'sangutroniko';
		if($link = mysql_connect($servidor, $usuario, $clave))
		{
			if(mysql_select_db($base, $link))
			{
				return $link;
			}
			else
			{
				die("Error !, no se puede seleccionar la Base de Datos.");
			}
		}
		else 
		{
			die("Error !, no se puede conectar a MySql");
		}
	}
?>