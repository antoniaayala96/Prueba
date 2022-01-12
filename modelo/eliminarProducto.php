<?php

require_once "../conexion/conexion.php";

 $id = $_GET['id'];


$consultaD=$pdo->prepare("DELETE FROM productos WHERE  IdProducto=:IdProducto");
$consultaD->bindParam(":IdProducto" ,$id );

if ($consultaD->execute()) {
	
	
	header("Location: ../productos.php");
	
}
else
{
	echo "Error";

}

?>