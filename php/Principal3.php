<html>
<head>
</head>
<body>
<form  method="POST" action="Principal3.php">
<?php
$conexion=mysql_connect('localhost','root') or die("Problemas en la conexion");
mysql_select_db('hospital_hospital',$conexion) or die("Problemas en la selección de la base de datos");
$consulta_servicio = mysql_query("SELECT servicio FROM servicios ORDER BY servicio ASC",$conexion);  
$serviciox = @$_POST["combo1"];
echo '<select name="combo1" OnChange="submit()">';
   if (mysql_num_rows($consulta_servicio) > 0)
   {
     echo "<option value= '$rubrox'>".$serviciox.'</option>';
     while ($resultado = mysql_fetch_array($consulta_servicio))
     {
       echo '<option value ="'.$resultado['servicio'].'">'.$resultado['servicio'].'</option>';
     }
   }
echo '</select>';
$registros=@mysql_query("select * FROM ficha WHERE servicio='$serviciox' ");
?>
<?php
while($reg = mysql_fetch_array($registros))
{
 $nombrex = $reg["nombre"];
}
?>
<input type="text" name="text_nombre" id="text_nombre" size=50 value="<?php echo @$nombrex;?>"/>
</form>
</body>
</html>