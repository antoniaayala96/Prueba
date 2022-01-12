<!DOCTYPE html>
<!--
Template Name: Kiraric
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Pokémon</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 <?php

  require_once 'conexion/conexion.php';

     $Idproducto = "";
      $nombre = "";
      $descripcion = "";
      $precio = "";
     

  if (isset($_GET['id'])) {

      
     $sql = "SELECT IdProducto, nombre, descripcion, precio  FROM productos WHERE IdProducto = ?";
     $stmt=$pdo->prepare($sql);
     $stmt->execute(array($_GET['id']));

     while ($item=$stmt->fetch()){   
      
      $Idproducto = $item['IdProducto'];
      $nombre = $item['nombre'];
      $descripcion = $item['descripcion'];
      $precio = $item['precio'];                                       
}





  }

?>




</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1" style="background: #0A1B2A; height: 90px;">
<header id="header" class="hoc clear" > 
 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left"  style="color: white;" >
      <h1><a href="index.html" class="fa fa-gamepad"> Conifex</a></h1>
    </div>
    <nav id="mainav" class="fl_right" style="color: white;">
      <ul class="clear">
        <li class=""><a href="index.php">Inicio</a></li>
        <li><a class="" href="galeria.php">Galeria</a>
        
        </li>
        <li><a class="" href="productos.php">Productos</a></li>
        <li><a class="" href="categoria.php">Categorias</a></li>
        <li><a class="" href="clientes.php">Clientes</a></li>
        <li><a class="" href="contactos.php">Contacto</a></li>
          
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>

<body style="background: -webkit-linear-gradient(left, #086A87, #00c6ff);
">


<!-- Insertar Registros-->
  <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>Categoria</b></h2></div>
                    
                </div>
            </div>
 
      <div class="row">
        <?php if (isset($_GET['id'])) {
          
          echo "<form  action='modelo/ActualizarProducto.php' method='POST' accept-charset='utf-8'>";    
        }else
        {
          echo "<form  action='modelo/guardarProducto.php' method='POST' accept-charset='utf-8'>";

        } 
        ?>
        
        <div class="col-md-6">
          <label>Nombre:</label>
          <input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required  value="<?php echo $nombre ?>" >
        </div>
        
        <div class="col-md-6">
          <label>Descripcion:</label>
          <textarea  name="descripcion" id="descripcion" class='form-control' maxlength="255" required><?php echo $descripcion ?></textarea>
        </div>
       
        
        
        <div class="col-md-12 pull-right">
        <hr>
        <?php if (isset($_GET['id'])) {
          
         echo "<input type='submit' name='Actualizar_Producto' value='Actualizar Producto' class='btn btn-success'>";
         echo "<input type='text' name='id' value=$Idproducto >";   
        }else
        {
          echo "<input type='submit' name='Guardar_Producto' value='Agregar Categoria' class='btn btn-success'>";  
        } 
        ?>
    
          
        </div>
        </form>
      </div>
        </div>
    </div>     


<!-- Fin Insertar Registros-->
      
      <div class="container">

   
                       <table  id="tableUser" class="table table-hover table-sm table-bordered table-fixed" >
                           <thead class="table-dark">
                               <tr>  
                                    <th scope="col">ID</th>
                                   <th scope="col">Nombre </th>
                                    <th scope="col">Descripcion</th>
                                    <th colspan="2">Opciones</th>
                                   </tr>
                               </tr>
                           </thead>
                                    
                           <tbody>

                            <tr>
                                <td>1</td>
                                <td>Peluches</td>
                                <td>Se cuenta con variedad de peluches </td>
                                <td><center><a href='Modelo/eliminarProducto.php' class='btn btn-danger'>Eliminar</a></center></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Camisas</td>
                                <td>Camisas de pockemon de diferentes tallas. </td>
                                <td><center><a href='Modelo/eliminarProducto.php' class='btn btn-danger'>Eliminar</a></center></td>
                            </tr>
                    
                            <tr>
                                <td>3</td>
                                <td>Cuadernos</td>
                                <td>Disfruta de tus clases con cuadenos de pickachu </td>
                                <td><center><a href='Modelo/eliminarProducto.php' class='btn btn-danger'>Eliminar</a></center></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Libros</td>
                                <td>Se cuenta con libros con maravillosas aventuras del mundo de los pockemon. </td>
                                <td><center><a href='Modelo/eliminarProducto.php' class='btn btn-danger'>Eliminar</a></center></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Mochilas</td>
                                <td>Variedad de diseños a diferentes precios. </td>
                                <td><center><a href='Modelo/eliminarProducto.php' class='btn btn-danger'>Eliminar</a></center></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Accesorios</td>
                                <td>Gorras, pulseras, llaveros. </td>
                                <td><center><a href='Modelo/eliminarProducto.php' class='btn btn-danger'>Eliminar</a></center></td>
                            </tr>

                    

    

                           </tbody>        
                          </table>
                          </div>




</body>
</html>


