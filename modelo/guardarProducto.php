<?php
require_once "../conexion/conexion.php";





//Guardar solicitud
if(isset($_POST['Guardar_Producto']))
{	
	
	//variables de campos soli transporte

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];


     //consulta para insertar solicitud de transporte
    $consulta=$pdo->prepare("INSERT INTO `productos` ( `nombre`, `descripcion`, `precio`) VALUES ( :nombre, :descripcion, :precio)");

    	$consulta->bindParam('nombre',$nombre);
		$consulta->bindParam('descripcion',$descripcion);
		$consulta->bindParam('precio',$precio);

	   if (!$consulta->execute()){
	   		
	   		echo "No se puedo guardar el dato";
	    }
		else
		{			 	
			header("Location: ../productos.php");
		}






}
else
{
	echo "dATOS NO RECIBIDO";
}






?>