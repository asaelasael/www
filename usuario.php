 <?php
  
     $servidor="localhost";
      $usuario="asael";
       $clave="12345";
        $baseDeDatos="Usuarios";
  $enlace=mysql_connect ($servidor,$usuario,$clave,$baseDeDatos)
    
      
      ?>
      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    
     <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" required>

        <label for="sexo">Sexo:</label>
        <input type="sexo" id="sexo" name="sexo" required>
         <label for="fecha">fecha:</label>
        <input type="fecha" id="fecha" name="fecha" required>
         <label for="codigo">código:</label>
        <input type="codigo" id="codigo" name="codigo" required>

        <input type="submit" value="Registro">
           <input type="reset">
    
    
    
    
    
    
</body>



 <?php
  
     $nombre $_POST['nombre'];
       $correo  $_POST['correo'];
 $sexo $_POST['sexo'];
 $fecha $_POST['fecha'];
 $codigo $_POST['codigo'];
       
  $insertarDatos= "INSERT INTO datos VALUES('$nombre',' $correo',' $sexo', '$fecha ','$codigo','')"
    
      
      ?>
</html>
 

  
    