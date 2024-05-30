<link rel="stylesheet" href="login.css">

<table>
<?php
include('conexion.php');
session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<tr><td colspan='2' align='center'><h1>Bienvenido: $usuarioingresado </h1></td></tr>";
}
else
{
	header('location: listar.php');
}
?>
<form method="POST">
<tr><td colspan='2' align="center"><input type="submit" value="Cerrar sesión" name="btncerrar" /></td></tr>
</form>

<tr><td colspan="2"><h1>Listado de usuarios</h1></td></tr>
<tr><td><label>Usuario</label></td>
	<td><label>Contraseña</label></td>
</tr>

<?php 

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: index.php');
}
	
$sql="SELECT * FROM login";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
	
?>
<tr> <td><?php echo $mostrar['usuario'] ?>
	<td><?php echo $mostrar['password'] ?>

</tr>
<?php
}



?>
</table>