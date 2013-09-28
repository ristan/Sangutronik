<!--
Sistema		:	Sistema Sangutroniko.
Archivo		:	opciones.php
Proposito	:	Discrimina Opciones para Clientes.
Autores		:	Cristian Reyes Rodriguez.
					Felipe Morales Palacios.
Viva Chile !
-->
<?php
	if(isset($_REQUEST["boton1"]))
	{
		header("location: opc1.php");		//Registrese
	}
	if(isset($_REQUEST["boton2"]))
	{
		header("location: opc2.php");		//Nuestros Productos
	}
	if(isset($_REQUEST["boton3"]))
	{
		header("location: opc3.php");		//Acceso Clientes
	}
	if(isset($_REQUEST["boton4"]))
	{
		header("location: opc4.php");		//Promociones del Di­a
	}
	if(isset($_REQUEST["boton5"]))
	{
		header("location: opc5.php");		//Como Comprar
	}
	if(isset($_REQUEST["boton6"]))
	{
		header("location: opc6.php");		//Acceso Operador
	}
?>