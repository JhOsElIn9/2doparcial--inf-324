<?php
include "conexion.inc.php";
session_start();
$usuario=$_SESSION["usuario"];
$sql="select * from flujotramite ";
$sql.="where usuario='".$usuario."' and fechafin is null";
$resultado=mysqli_query($con, $sql);
?>
<table>
<tr>
	<td>Flujo</td>
	<td>proceso</td>
	<td>No.tramite</td>
	<td>fecha inicial</td>
	<td>fecha final</td>
	<td>Ir</td>
</tr>
<?php 
while ($fila=mysqli_fetch_array($resultado))
{
  echo "<tr>";
  echo "<td>".$fila["flujo"]."</td>";
  echo "<td>".$fila["proceso"]."</td>";
  echo "<td>".$fila["nro_tramite"]."</td>";
  echo "<td>".$fila["fechaini"]."</td>";
  echo "<td>".$fila["fechafin"]."</td>";
  echo "<td><a href='flujo.php?flujo=".$fila["flujo"]."&proceso=".$fila["proceso"]."'>Ir</td>";
  echo "</tr>";
}
?>
</table>