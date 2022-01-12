<?php
	
require_once "../conexion/conexion.php";

 if (isset($_POST['Actualizar_Producto'])) {
 	

 	$nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    $id = $_POST['id'];

    $sql = "UPDATE `productos` SET `nombre` = :nombre, `descripcion` = :descripcion , `precio` = :precio WHERE `IdProducto` = :IdProducto";
    $consulta=$pdo->prepare($sql);
    $consulta->bindParam('nombre',$nombre);
	$consulta->bindParam('descripcion',$descripcion);
	$consulta->bindParam('precio',$precio);
	$consulta->bindParam('IdProducto',$id);

	   if (!$consulta->execute()){
	   		
	   		echo "No se puedo guardar el dato";
	    }
		else
		{			 	
			header("Location: ../productos.php");
		}







 }


?>